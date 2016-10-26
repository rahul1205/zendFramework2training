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
class Menu implements InputFilterAwareInterface
{

    public $menu;

    public $router;

    public $parent_id;

    public $id;

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
            $this->id = (isset($data['id'])) ? $data['id'] : null;
            
            $this->menu = (isset($data['menu'])) ? $data['menu'] : null;
            $this->router = (isset($data['router'])) ? $data['router'] : null;
            $this->parent_id = (isset($data['parent_id'])) ? $data['parent_id'] : null;
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
                
                $inputFilter->add(array(
                    'name' => 'menu',
                    'required' => true,
                    'filters' => array(
                        array(
                            'name' => 'StripTags'
                        ),
                        array(
                            'name' => 'StringTrim'
                        )
                    ),
                    'validators' => array(
                        array(
                            'name' => 'StringLength',
                            'options' => array(
                                'encoding' => 'UTF-8',
                                'min' => 1,
                                'max' => 100
                            )
                        )
                    )
                ));
                
                $inputFilter->add(array(
                    'name' => 'router',
                    'required' => true,
                    'filters' => array(
                        array(
                            'name' => 'StripTags'
                        ),
                        array(
                            'name' => 'StringTrim'
                        )
                    ),
                    'validators' => array(
                        array(
                            'name' => 'StringLength',
                            'options' => array(
                                'encoding' => 'UTF-8',
                                'min' => 1,
                                'max' => 100
                            )
                        )
                    )
                ));
                
                $this->inputFilter = $inputFilter;
            }
            
            return $this->inputFilter;
        } catch (\Exception $e) {
            echo $e->getTraceAsString();
        }
    }
}


