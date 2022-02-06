<?php


namespace App\classes;


class PasswordGenerator
{
    protected $lenght;
    protected $data= [];
    protected $password;
    protected $i;
    public function __construct($lenght=null)
    {
        $this->lenght = $lenght['password_length'];
        $this->data = ['#','@','1','A','a','6','G','9','*','5','3','/'];
    }
    public function newPassword(){

        $this->password='';
        for($this->i=0; $this->i < $this->lenght; $this->i++)
        {

             $this->password .= $this->data[rand(0,10)];
        }
       return $this->password;
    }

}