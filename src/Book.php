<?php namespace Acme;

class Book implements Bookinterface{
    public function open(){
        var_dump("open the book");
    }

    public function turnPage()
    {
        var_dump("turn page the book");
    }
}