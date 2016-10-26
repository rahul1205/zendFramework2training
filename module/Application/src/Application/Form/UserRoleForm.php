<?php
namespace Application\Form;

use Zend\Form\Form;
/**
 * class is used to make form with various fields named username,password,submit
 *
 * @name MenuForm
 */
class UserRoleForm extends Form
{

    /**
     *
     * @name constructor
     *      
     *       used to create form elements
     *      
     * @param
     *            variable whichh contains name of form
     *            
     *            
     * @return void
     */
    public function __construct($name = null)
    {
        try {
            // we want to ignore the name passed
            parent::__construct($name);
            
           
            
            $this->add(array(
                'name' => 'submit',
                'type' => 'Submit',
                'attributes' => array(
                    'value' => 'submit'
                )
            ));
            
            $this->add(array(
                'name' => 'role_id',
                'type' => 'select',
                'options' => array(
                    'label' => 'role'
                )
            ));
            
            
            $this->add(array(
                'name' => 'user_id',
                'type' => 'select',
                'options' => array(
                    'label' => 'user'
                )
            ));
        } catch (\Exception $e) {
            echo $e->getTraceAsString();
        }
    }
}



