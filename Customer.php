<?php

class Customer{

    private string $name;
    private string $firstname;
    private DateTime $dob;
    private string $city;
    private array $account;


    //__construct

    public function __construct(string $name, string $firstname, $dob, string $city){

        $this->name = $name;
        $this->firstname = $firstname;
        $this->dob = new DateTime($dob);
        $this->city = $city;

        $this->account = []; 
    }

    //Methods

    public function addAccount(BankAccount $account){
        $this->account[] = $account;
    }


    //getters and setters

    //Get Infos
	public function getInfo(){
        return $this->name . " <br> "
        . $this->firstname ." <br> "
        . $this->dob->format('Y-m-d') ." <br> "
        . $this->city ." <br> ";
    }
	
	//Name
	public function getName(): string {
		return $this->name;
	}
	
	public function setName(string $name): self {
		$this->name = $name;
		return $this;
	}
	
	//Firstname
	public function getFirstname(): string {
		return $this->firstname;
	}
	
	public function setFirstname(string $firstname): self {
		$this->firstname = $firstname;
		return $this;
	}
	
	//Date of birth
	public function getDob(): DateTime {
		return $this->dob;
	}

	public function setDob(DateTime $dob): self {
		$this->dob = $dob;
		return $this;
	}
	
	//City
	public function getCity(): string {
		return $this->city;
	}
	
	public function setCity(string $city): self {
		$this->city = $city;
		return $this;
	}
	
	//Account
	public function getAccount(): array {
		return $this->account;
	}
	
	public function setAccount(array $account): self {
		$this->account = $account;
		return $this;
	}
}



?>