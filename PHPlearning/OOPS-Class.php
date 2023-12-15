<?php

class BankAccount
{
    public $accountNumber;
    public $balance;
    public $name;
    public function deposit($amount,$balance,$name)
    {
      
        if ($amount > 0) {
            $this->balance += $amount;
            print($this->balance);
            print($balance);
            print($this->name);
            print($name);
        }
    }
    }
$account = new BankAccount();
$account->accountNumber = 1;
$account->balance = 100;
$account->name = "sai";
$account->deposit(500,1000,"Mr-sai");