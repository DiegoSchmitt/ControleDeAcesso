<?php

class Records {
    private $pdo;
    public function __construct(){
         $this->pdo = new pdo("mysql:dbname=projeto_registro_entrada_saida;host=localhost", "root", "");
    }

    public function getAllIdUser($id_user){
        $sql = "SELECT * FROM records WHERE id_user = :id_user";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id_user", $id_user);
        $sql->execute();
        if($sql -> rowCount() > 0){
            return $sql->fetchAll();
        }
        else{
            return array();
        }
    }

    public function lastAcess($id_user){
        $sql = "SELECT id, entry_date, entry_hour, exit_date, exit_hour FROM records 
                WHERE id_user =:id_user 
                ORDER BY id DESC LIMIT 1" ;
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id_user", $id_user);
        $sql->execute();
        if($sql->rowCount() > 0){
            return $sql->fetch();
        } else{
            return false;
        }    
    }


    public function addEntry($id_user, $entry_date, $entry_hour){
        $sql = "INSERT INTO records (id_user, entry_date, entry_hour)
                VALUES (:id_user, :entry_date, :entry_hour)";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id_user", $id_user);
        $sql->bindValue(":entry_date", $entry_date);
        $sql->bindValue(":entry_hour", $entry_hour);
        $sql->execute();
        return true;
    }


    public function addExit($id, $exit_date, $exit_hour){
        $sql = "UPDATE records SET exit_date = :exit_date, exit_hour = :exit_hour
                WHERE :id = id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->bindValue(":exit_date", $exit_date);
        $sql->bindValue(":exit_hour", $exit_hour);
        $sql->execute();
        return true;
    }


    public function verifyAccess($id_user){
        $sql = "SELECT * FROM records WHERE id_user = :id_user";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id_user", $id_user);
        $sql->execute();
        if($sql->rowCount() > 0){
            return $sql->fetchAll();
        } else{
            return false;
        }
    }

    public function filterRecordsByDate($date){
        $sql = "SELECT * FROM records WHERE entry_date = :date";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":date", $date);
        $sql->execute();
        if($sql->rowCount() > 0){
            return $sql->fetchAll();
            return true;
        } else{
            return false;
        }
    }

    public function filterRecordsById($id_user){
        $sql = "SELECT * FROM records WHERE id_user = :id_user";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id_user", $id_user);
        $sql->execute();
        if($sql->rowCount() > 0){
            return $sql->fetchAll();
            return true;
        } else{
            return false;
        }
    }

    public function filterRecordsByIdAndDate($id_user, $date){
        $sql = "SELECT * FROM records WHERE id_user = :id_user AND entry_date = :date";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id_user", $id_user);
        $sql->bindValue(":date", $date);
        $sql->execute();
        if($sql->rowCount() > 0){
            return $sql->fetchAll();
            return true;
        } else{
            return false;
        }
    }




        
}
