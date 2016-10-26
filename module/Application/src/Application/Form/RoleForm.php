<?php
namespace Application\Form;

use Zend\Form\Form;
/**
 * class is used to make form with various fields named username,password,submit
 *
 * @name MenuForm
 */
class RoleForm extends Form
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
                'name' => 'role',
                'type' => 'Text',
                'options' => array(
                    'label' => 'role'
                )
            ));
            $this->add(array(
                'name' => 'submit',
                'type' => 'Submit',
                'attributes' => array(
                    'value' => 'submit'
                )
            ));
            
            
        } catch (\Exception $e) {
            echo $e->getTraceAsString();
        }
    }
}



