<?php

class Database {
    const HOST = 'localhost';
    const USER = 'root';
    const PASSWORD = '';
    const DB_NAME = 'news';

    public function connect() {
        $connect = mysqli_connect(self::HOST, self::USER, self::PASSWORD, self::DB_NAME);
        mysqli_set_charset($connect, "utf8");

        if(mysqli_connect_error()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            //you need to exit the script, if there is an error
            exit();
        }
        return $connect;
    }
}