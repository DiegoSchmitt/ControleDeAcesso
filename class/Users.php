<?php

class Users {
    private $pdo;
    public function __construct(){
         $this->pdo = new pdo("mysql:dbname=projeto_registro_entrada_saida;host=localhost", "root", "");
    }
    public function getAll(){
        $sql = "SELECT *  FROM users";
        $sql = $this->pdo->query($sql);
        if($sql -> rowCount() > 0){
            return $sql->fetchAll();
        }
        else{
            return array();
        }
    }

    
    public function getEmail($email){
        $sql = "SELECT * FROM users WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->execute();
        if($sql->rowCount() > 0){
            return $sql->fetch();
        } else{
            return false;
        }
    }

    public function getId($id){
        $sql = "SELECT * FROM users WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();
        if($sql->rowCount() > 0){
            return $sql->fetch();
        } else{
            return false;
        }
    }


    public function existEmail($email){
        $sql = "SELECT * FROM users WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->execute();
        if($sql->rowCount() > 0){
            return true;
        } else{
            return false;
        }

    }
     public function addUser($name, $email, $id_access, $photo, $password, $level){
        if($this->existEmail($email)==false){

             $sql = "INSERT INTO users (name, id_access, email, photo, password, level) VALUES (:name, :id_access, :email, :photo, :password, :level)";
             $sql = $this->pdo->prepare($sql);
             $sql->bindValue(":name", $name);
             $sql->bindValue(":email", $email);
             $sql->bindValue(":id_access", $id_access);
             $sql->bindValue(":photo", $photo);
             $sql->bindValue(":password", $password);
             $sql->bindValue(":level", $level);
             $sql->execute();
             return true;
        }
        else{
             return false;
         }
     }

     public function editUser($id, $name, $email, $id_access, $photo, $level){
            $sql = "UPDATE users SET name = :name, email = :email, id_access = :id_access, photo = :photo, level = :level  WHERE id = :id";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(":id", $id);   
            $sql->bindValue(":name", $name);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":id_access", $id_access);
            $sql->bindValue(":photo", $photo);
            $sql->bindValue(":level", $level);
            $sql->execute();
     }

     public function delUser($id){
        $sql = "DELETE FROM users WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

     public function filterByNameUser($name){
        $sql = "SELECT * FROM users WHERE name like'%$name%' AND level = 0";
        $sql = $this->pdo->query($sql);
        if($sql->rowCount() > 0){
            return $sql->fetchAll();
            return true;
        } else{
            return false;
        }
     }
     public function filterByIdAccessUser($id_access){
        $sql = "SELECT * FROM users WHERE id_access = $id_access AND level = 0";
        $sql = $this->pdo->query($sql);
        if($sql->rowCount() > 0){
            return $sql->fetch();
            return true;
        } else{
            return false;
        }
     }
     public function filterByEmailUser($email){
        $sql = "SELECT * FROM users WHERE email like'%$email%' AND level = 0";
        $sql = $this->pdo->query($sql);
        if($sql->rowCount() > 0){
            return $sql->fetchAll();
            return true;
        } else{
            return false;
        }
     }


     public function filterByNameAdmin($name){
        $sql = "SELECT * FROM users WHERE name like'%$name%' AND level != 0";
        $sql = $this->pdo->query($sql);
        if($sql->rowCount() > 0){
            return $sql->fetchAll();
            return true;
        } else{
            return false;
        }
     }

     public function filterByIdAccessAdmin($id_access){
        $sql = "SELECT * FROM users WHERE id_access = $id_access AND level != 0";
        $sql = $this->pdo->query($sql);
        if($sql->rowCount() > 0){
            return $sql->fetch();
            return true;
        } else{
            return false;
        }
     }
     public function filterByEmailAdmin($email){
        $sql = "SELECT * FROM users WHERE email like'%$email%' AND level != 0";
        $sql = $this->pdo->query($sql);
        if($sql->rowCount() > 0){
            return $sql->fetchAll();
            return true;
        } else{
            return false;
        }
     }
    
    public function filterByNameAndIdAccess($name, $id){
        $sql = "SELECT * FROM users WHERE name like'%$name%' And  id_access = '$id'";
        $sql = $this->pdo->query($sql);
        if($sql->rowCount() > 0){
            return $sql->fetchAll();
            return true;
        } else{
            return false;
        }
    }

    public function filterByIdAccess($id_access){
        $sql = "SELECT * FROM users WHERE id_access = $id_access";
        $sql = $this->pdo->query($sql);
        if($sql->rowCount() > 0){
            return $sql->fetch();
            return true;
        } else{
            return false;
        }
    }

    public function filterByName($name){
        $sql = "SELECT * FROM users WHERE name like'%$name%'";
        $sql = $this->pdo->query($sql);
        if($sql->rowCount() > 0){
            return $sql->fetchAll();
        } else{
            return false;
        }
    }
    
    public function filterByIdUser($id){
        $sql = "SELECT * FROM users WHERE id = $id";
        $sql = $this->pdo->query($sql);
        if($sql->rowCount() > 0){
            return $sql->fetch();
            return true;
        } else{
            return false;
        }
    }
}