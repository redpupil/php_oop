<?php


class Database{

    public $driver;
    public $link;

    public function setDriver($mydriver){
            $this->driver = $mydriver;
    }

    public function connect(){

        $host = "localhost";
        $db = "mydb";
        $user = "root";
        $pass = "password";

        if ($this->driver == "mysql"){
            $mngmysql = new ManageMysql();
            $mngmysql->setHost($host);
            $mngmysql->setDB($db);
            $mngmysql->setUser($user);
            $mngmysql->setPass($pass);
            $this->link = $mngmysql->connect();
        } elseif ($this->driver = "sqlite"){

            $mngmsqlite = new ManageSqlite();
            $mngmsqlite->setHost($host);
            $mngmsqlite->setDB($db);
            $mngmsqlite->setUser($user);
            $mngmsqlite->setPass($pass);
            $this->link = $mngmsqlite->connect();

        }
    }
}

?>