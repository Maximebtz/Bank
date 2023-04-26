<?php
class BankAccount{
    
    private string $name_account;
    private float $balance = 0;
    private string $currency;
    private Customer $customer;


    //__construct
    public function __construct(string $name_account, float $balance, string $currency, Customer $customer){

        $this->name_account = $name_account;
        $this->balance = $balance;
        $this->currency = $currency;

        $this->customer = $customer;
        $this->customer->addAccount($this);
    }


    //Methods

    public function creditAccount(float $credit){
        $this->balance += $credit;
        return "The account <strong>'" . $this->name_account . "'</strong> has been <strong>credited</strong> with <strong>" . $credit . $this->currency . ".</strong><br>";
    }

    public function debitAccount(float $debit){
        if ($this->balance >= $debit){
            $this->balance -= $debit;
            return "The account <strong>'" . $this->name_account . "'</strong>" . " has been <strong>debited</strong> with <strong>" . $debit . $this->currency . ".</strong><br>";
        } else {
            return "Insufficient balance to carry out this operation.<br>";
        }
    }

    public function makeTransfer(BankAccount $destination_account, float $amount){
        if ($this->balance >= $amount){
            $this->debitAccount($amount);
            $destination_account->creditAccount($amount);
            $source_account_name = $this->getAccountName();
            $destination_account_name = $destination_account->getAccountName();
            return "You've made a transfer from the account <strong>'" . $source_account_name . "'</strong> to the account <strong>'" . $destination_account_name . "'</strong> : " . $this->debitAccount($amount) ."<br>";
        } else {
            return "Insufficient balance to carry out this operation.<br>";
        }
    }

    //Getters and Setters


    public function getAccountName(){
       return $this->name_account;
    }

    public function setAccountName($name_account){
        $this->name_account = $name_account;
    }


    public function getBalance(){
       return "You have <strong>" . $this->balance . $this->currency . "</strong> on your <strong>'" . $this->name_account . "'.</strong><br>"; 
    }

    public function setBalance($balance){
        $this->balance = $balance;
    }


    public function getCurrency(){
       return $this->currency;
    }

    public function setCurrency($currency){
        $this->currency = $currency;
    }


    public function getCustomer(){
       return $this->customer;
    }

    public function setCustomer($customer){
        $this->customer = $customer;
    }

}  
?>