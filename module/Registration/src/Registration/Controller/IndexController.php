<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/Registration for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Registration\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Registration\Model\Registration;
use Registration\Form\RegistrationForm;

class IndexController extends AbstractActionController
{
    protected $userTable;
    
    public function indexAction()
    {
        $form = new RegistrationForm();
        $request = $this->getRequest();
         
        try {
            if ($request->isPost()) {
                $register = new Registration();
                $form->setInputFilter($register->getInputFilter());
                $form->setData($request->getPost());
        
                
                if ($form->isValid()) {
                     
                    $register->exchangeArray($form->getData());
                    $pass=md5($register->password);
                    $this->getRegistrationTable()->saveRegistration($register,$pass);
                    
                        return $this->redirect()->toRoute('login'); 
                    }
                }
            
        }
        catch (\Exception $e) {}
        return array(
            'form' => $form
        );
        
        
        
    }
    public function getRegistrationTable()
    {
        try {
            if (! $this->userTable) {
                $sm = $this->getServiceLocator();
                $this->userTable = $sm->get('Registration\Model\RegistrationTable');
            }
            return $this->userTable;
        } catch (\Exception $e) {}
    }

   
}
