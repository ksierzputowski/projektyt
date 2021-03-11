<?php

//to skopiowalem z wczesniejszego projektu, zostawiam ten projekt na part 3, okolo 3 min.
class Database extends PDO {

    // this function is called everytime this class is instantiated		
    public function __construct() {
        parent::__construct(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME,
                DB_USER, DB_PASS);
    }

}
//zaczynac od 4 filmiku 