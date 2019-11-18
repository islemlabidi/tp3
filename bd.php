<?php

class dbconnection{
    public $cnx=null;
    private $dbhost= 'localhost';
    private $dbname= 'dsi21_g2_2019';
    private $dbuser='root';
    private $pwd='';
    public function connect()
    {
       
        try{
            $this->cnx=new PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname,$this->dbuser,$this->pwd);
        }catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
            }
            return $this->cnx;
    }


}
    ?>