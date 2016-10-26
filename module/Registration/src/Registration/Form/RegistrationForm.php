<?php
namespace Registration\Form;
use Zend\Form\Form;

class RegistrationForm extends Form
{

    public function __construct($name = null)
    {
        parent::__construct('registration');
         

        $this->add(array(
            'name' => 'username',
            'type' => 'Text',
            'options' => array(
                'label' => 'User Name'
            )
        ));

        $this->add(array(
            'name' => 'password',
            'type' => 'Password',
            'options' => array(
                'label' => 'Password'
            )
        ));
        $this->add(array(
            'name' => 'email',
            'type' => 'Email',
            'options' => array(
                'label' => 'Email Address'
            )
        ));


        $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Submit',
                'id' => 'submitbutton'
            )
        ));
    }
}