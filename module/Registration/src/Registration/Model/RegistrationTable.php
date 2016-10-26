<?php
namespace Registration\Model;

use Zend\Db\TableGateway\TableGateway;
use Registration\Model\Registration;


class RegistrationTable
{

    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function saveRegistration(Registration $register,$pass)
    
    {
        
        
        $data = array(
            'username' => $register->username,
            'password' => $pass,
            'email' => $register->email,
          
        );
            $this->tableGateway->insert($data);
       
        
    }

   

}
