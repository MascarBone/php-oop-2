<?php 

class Product {
    protected $name;
    protected $price;
    protected $description;


    public function __construct($_name, $_price, $_description)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->description = $_description;
    }
}

class TV extends Product {
    protected $inches;

    public function __construct($_inches, $_name, $_price, $_description)
    {
        $this->inches = $_inches;
        parent::__construct($_name, $_price, $_description);
    }
}


class User {
    protected $name;
    protected $email;
    protected $payments;

    public function __construct($_name, $_email)
    {
        $this->name = $_name;
        $this->email = $_email;
    }

    public function setPayments($obj) {
        if($obj != null)
        {           
            $this->payments[] = $obj;
        }
    }
}

class UserPremium extends User {
    protected $sale;

    public function __construct($_name, $_email, $_payments = null)
    {
        parent::__construct($_name, $_email, $_payments);
        $this->sale = 20;
    }
}

class CreditCard {
    protected $number;
    protected $security;
    protected $expiration;

    public function __construct($_number, $_security, $_expiration)
    {
        $this->number = $_number;
        $this->security = $_security;
        $this->expiration = $_expiration;
    }
}

class Cart {
    protected $id;
    protected $listProducts;
    
}

?>
