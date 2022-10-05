<?php
class ATM 
{
    public $money;

    public function __construct(){
        $this->money = [];
    }
        

    public function insertMoney(int $value, int $amount){
        $validValues = [100, 200, 500, 1000, 2000, 5000];
        if (!in_array($atm,$validValues)) {
        return FALSE;
            } 

            $this ->money[$value] = $this->money[$value] + $amount;
    }
     
    
    

    public function summary(){
        foreach ($this->$money as $value => $amount){
            echo "Máme $amount x $value Kč";
        }
    }
    

}