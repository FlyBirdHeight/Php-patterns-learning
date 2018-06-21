<?php namespace Acme;
use Acme\eReadInterface;

class Kindle implements eReadInterface{
    public function turnOn(){
        var_dump("turn the Kindle On");
    }

    public function pressNextButton(){
        var_dump("press next button on the Kindle");
    }
}