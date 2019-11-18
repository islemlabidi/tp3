<?php

require 'bd.php';
class students{
    private $cnx;
    public function __construct()
    {
        $db=new dbconnection;
        $this->cnx=$db->connect();
    } 

    public function readallStudent()
   {
    try{
        $req= 'SELECT * FROM students';
        $result=$this->cnx->prepare($req);
        $result->execute();
        return $result;
    }catch (PDOException $e) {
       echo  $e->getMessage();
        }
    }
        public function addStudent($info){
            
                $rreq="INSERT INTO students(firstname,lastname,email,phone) VALUES (:firstname,:lastname,:email,:phone)";
               
                $rslt=$this->cnx->prepare($rreq);
                $rslt->bindParam(":lastname",$info['lastname']);
                $rslt->bindParam(":firstname",$info['firstname']);
                $rslt->bindParam(":email",$info['email']);
                $rslt->bindParam(":phone",$info['phone']);
                $rslt->execute();
                

        }

        public function update($info){
            $sql = "UPDATE students SET lastname=:lastname, firstname=:firstname, email=:email, phone=:phone where id=:id";
          $rslt =$this->cnx->prepare($sql);
                $rslt->bindParam(":id",$info['id']);
                $rslt->bindParam(":lastname",$info['lastname']);
                $rslt->bindParam(":firstname",$info['firstname']);
                $rslt->bindParam(":email",$info['email']);
                $rslt->bindParam(":phone",$info['phone']);
                   $rslt->execute();
               
                 }
        

            
        public function deleteStudents($id){
            $sql = 'DELETE from students WHERE id = :id';
            $rslt = $this->cnx->prepare($sql);
            $rslt->bindParam(":id",$id);
            $rslt->execute();

            }

        public function showStudent($id){
            $rep = $this->cnx->prepare('SELECT * FROM students where id= :id'); 
            $rep->bindParam(":id",$id);
            $rep->execute();
            $result = $rep->fetch();
            return $result;
        }

        }

?>