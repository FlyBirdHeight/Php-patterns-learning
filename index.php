<?php

require "vendor/autoload.php";

use Acme\BookInterface;

class Person{

    public function read(BookInterface $book){
        $book->open(); 

        $book->turnPage();
    }
}


$person = new Person();
$person->read();