<?php
namespace Application\Model;

// Add these import statements
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

/**
 * class contains various methods to validate fields of forms
 * and store data of form into temporary array
 *
 * @name Menu
 */
class RolePermission implements InputFilterAwareInterface
{

    public $role;

    public $resource;

   

    protected $inputFilter;

    /**
     *
     * @name exchangeArray
     *      
     *       used to store the data of form into variables for further use
     *      
     * @param
     *            array
     *            
     *            
     * @return void
     */
    public function exchangeArray($data)
    {
        try {
          
            $this->role = (isset($data['role'])) ? $data['role'] : null;
            $this->resource = (isset($data['resource'])) ? $data['resource'] : null;
        } catch (\Exception $e) {
            echo $e->getTraceAsString();
        }
    }
    
    // Add content to these methods:
    public function setInputFilter(InputFilterInterface $inputFilter)
    {
        throw new \Exception("Not used");
    }

    /**
     *
     * @name getInputFilter
     *      
     *       used to validate the form on various filters on varoious fields.
     *      
     * @param
     *            none
     *            
     *            
     * @return variable named inputfilter which contains true or false
     */
    public function getInputFilter()
    {
        try {
            if (! $this->inputFilter) {
                $inputFilter = new InputFilter();
                $this->inputFilter = $inputFilter;
            }
            
            return $this->inputFilter;
        } catch (\Exception $e) {
            echo $e->getTraceAsString();
        }
    }
}



