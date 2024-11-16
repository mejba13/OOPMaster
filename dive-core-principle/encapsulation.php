<?php

class BankAccount {
    private $balance;

    public function __construct($balance) {
        $this->balance = $balance;
    }

   public function deposit($amount) {
        if($amount > 0){
            $this->balance +=$amount;
        }
   }

   public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
   }

    public function getBalance() {
        return $this->balance;
    }
}


$bankAccount = new BankAccount(5000);
$bankAccount->deposit(500);
echo $bankAccount->getBalance(). "<br>";
$bankAccount->withdraw(300);
echo $bankAccount->getBalance(). "<br>";
