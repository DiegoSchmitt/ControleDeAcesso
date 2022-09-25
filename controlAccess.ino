#include <SPI.h>
#include <MFRC522.h>
#include <Ethernet.h>


#define PINO_RST 8
#define PINO_SDA 9
#define PINO_ACESSO_OK 3
#define PINO_ACESSO_NEGADO 4

MFRC522 rfid(PINO_SDA, PINO_RST);

byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };


IPAddress ip(192, 168, 1, 177);
EthernetServer server(80);

void setup() 
{
  pinMode(PINO_ACESSO_OK, OUTPUT);
  pinMode(PINO_ACESSO_NEGADO, OUTPUT);
  
  SPI.begin();      // Inicia  SPI bus
  rfid.PCD_Init();

  Ethernet.begin(mac, ip);
  server.begin();
}

void loop() 
{ 
   //Procura nova tag
  if (!rfid.PICC_IsNewCardPresent()) 
  {
    return;
  }
  
  // Seleciona uma tag
  if (!rfid.PICC_ReadCardSerial()) 
  {
    return;
  }
  
  String conteudo= "";

  for (byte i = 0; i < rfid.uid.size; i++) 
  {
     conteudo.concat(String(rfid.uid.uidByte[i] < HEX ? " 0" : " ")); 
     conteudo.concat(String(rfid.uid.uidByte[i], HEX));
     delay(300);
  }
  
  EthernetClient client = server.available();
  if (client) {
    conteudo.toUpperCase();
    String id = conteudo;
    id.remove(3,1);
    id.remove(5,1);
    id.remove(7,1);
    boolean currentLineIsBlank = true;
    while (client.connected()) {
      if (client.available()) {
        char c = client.read();
                if (c == '\n' && currentLineIsBlank) {
                  
                    // envia o cabeçalho de uma resposta http padrão
                    client.println("HTTP/1.1 200 OK");
                    client.println("Content-Type: text/html");
                    client.println("Connection: close");
                    client.println();
                    
                    // ENVIA A PÁGINA WEB
                    client.println("<!DOCTYPE html>");
                    client.println("<html>");
                    client.println("<head>");
                    client.println("<title>Testando</title>");
                    client.println("</head>");
                    client.println("<body>");
                    client.println("<form>");
                    client.println("<input value="+id+">");
                    client.println("<input type=\"submit\" value=\"Enviar\">");
                    client.println("</form >");
                    client.println("</body>");
                    client.println("</html>");
                    break;
                }

                if (c == '\n') {
                    // ultimo caractere da linha do texto recebido
                    // iniciando nova linha com o novo caractere lido
                    currentLineIsBlank = true;
                } 
                else if (c != '\r') {
                    // um caractere de texto foi recebido do cliente
                    currentLineIsBlank = false;
                }
      }
    }
  }
        delay(1);      // da um tempo para o WEB Browser receber o texto
        client.stop(); // termina a conexão

  if (conteudo.substring(1) == "40 06 6d 46") //UID 1 - Chaveiro
  {
    digitalWrite(PINO_ACESSO_OK, HIGH);
    delay(5000);
    digitalWrite(PINO_ACESSO_OK, LOW);   
  }
  else
  {
    digitalWrite(PINO_ACESSO_NEGADO, HIGH);
    delay(5000);
    digitalWrite(PINO_ACESSO_NEGADO, LOW);   
  }

  
}
