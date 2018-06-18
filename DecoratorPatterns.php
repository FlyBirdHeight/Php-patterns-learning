<?php

interface Basic{
    public function getCost();

    public function getDescription();
}

class BasicShop implements Basic{
    public function getCost(){
        return 10;
    }

    public function getDescription(){
        return "Basic shop";
    }
}

class OilShop implements Basic{
    protected $basic;
    public function __construct(Basic $basic){
        $this->basic = $basic;
    }
    public function getCost(){
        return $this->basic->getCost() + 15;
    }

    public function getDescription(){
        return $this->basic->getDescription() . ",and OilShop shop";
    }
}

echo (new OilShop(new BasicShop()))->getDescription();
