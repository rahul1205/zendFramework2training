<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Form\MenuForm;
use Application\Model\Menu;
use Application\Form\RoleForm;
use Application\Model\Role;
use Application\Form\RolePermissionForm;
use Application\Model\RolePermission;
use Application\Form\UserRoleForm;
use Application\Model\UserRole;
use Zend\View\Model\JsonModel;

class IndexController extends AbstractActionController
{

    protected $menuTable;

    protected $roleTable;

    protected $rolePermissionTable;

    protected $userRoleTable;

    protected $userTable;

    /*
     * public function onDispatch(MvcEvent $e)
     * {
     * try {
     * parent::onDispatch($e);
     * $sessionObj = new Container('APP_SESSION');
     * if (isset($sessionObj->user)) {
     * $controllerObj = $e->getTarget();
     * $controllerObj->getEvent()
     * ->getViewModel()
     * ->setVariables(array(
     * 'username' => $sessionObj->user
     * ));
     * }
     * } catch (\Exception $e) {
     * echo $e->getTraceAsString();
     * }
     * }
     */
    public function indexAction()
    {
        return new ViewModel();
    }

    public function addmenuAction()
    {
        $form = new MenuForm('menu');
        $result = $this->getMenuTable()->fetchAll();
        $array1[0] = "enter parent";
        foreach ($result as $res) {
            $array1[$res->id] = $res->menu;
        }
        $form->get('parent_id')->setAttribute('options', $array1);
        $request = $this->getRequest();
        
        if ($request->isPost()) {
            
            $menu = new Menu();
            $form->setInputFilter($menu->getInputFilter());
            $form->setData($request->getPost());
            if ($form->isValid()) {
                
                $menu->exchangeArray($form->getData());
                
                $this->getMenuTable()->saveMenu($menu);
                
                return new JsonModel(array(
                    'success' => 'successfully inserted'
                ));
                // return $this->redirect()->toRoute('list');
            }
        }
        
        return array(
            'form' => $form
        );
    }

    public function addroleAction()
    {
        $form = new RoleForm('role');
        
        $request = $this->getRequest();
        
        if ($request->isPost()) {
            
            $role = new Role();
            $form->setInputFilter($role->getInputFilter());
            $form->setData($request->getPost());
            if ($form->isValid()) {
                
                $role->exchangeArray($form->getData());
                
                $this->getRoleTable()->saveMenu($role);
                return new JsonModel(array(
                    'success' => 'successfully inserted'
                ));
                
                // return $this->redirect()->toRoute('listrole');
            }
        }
        return array(
            'form' => $form
        );
    }

  

    public function rolepermissionAction()
    {
        $form = new RolePermissionForm('rolepermission');
        $result = $this->getMenuTable()->fetchAll();
        $array1[0] = "enter menu";
        foreach ($result as $res) {
            $array1[$res->id] = $res->menu;
        }
        $form->get('resource')->setAttribute('options', $array1);
        $result1 = $this->getRoleTable()->fetchAll();
        $array2[0] = "enter role";
        foreach ($result1 as $res) {
            $array2[$res->id] = $res->role;
        }
        $form->get('role')->setAttribute('options', $array2);
        
        $request = $this->getRequest();
        
        if ($request->isPost()) {
            
            $role = new RolePermission();
            $form->setInputFilter($role->getInputFilter());
            $form->setData($request->getPost());
            if ($form->isValid()) {
                
                $role->exchangeArray($form->getData());
                
                $this->getRolePermissionTable()->saveRolePermission($role);
                return new JsonModel(array(
                    'success' => 'successfully inserted'
                ));
                
                // return $this->redirect()->toRoute('list');
            }
        }
        return array(
            'form' => $form
        );
    }

    public function userroleAction()
    {
        $form = new UserRoleForm('userrole');
        $result = $this->getUserTable()->fetchAll();
        $array1[0] = "enter user";
        foreach ($result as $res) {
            $array1[$res->user_id] = $res->username;
        }
        $form->get('user_id')->setAttribute('options', $array1);
        $result1 = $this->getRoleTable()->fetchAll();
        $array2[0] = "enter role";
        foreach ($result1 as $res) {
            $array2[$res->id] = $res->role;
        }
        $form->get('role_id')->setAttribute('options', $array2);
        
        $request = $this->getRequest();
        
        if ($request->isPost()) {
            
            $role = new UserRole();
            $form->setInputFilter($role->getInputFilter());
            $form->setData($request->getPost());
            if ($form->isValid()) {
                
                $role->exchangeArray($form->getData());
                
                $this->getUserRoleTable()->saveUserRole($role);
                return new JsonModel(array(
                    'success' => 'successfully inserted'
                ));
                
                // return $this->redirect()->toRoute('list');
            }
        }
        return array(
            'form' => $form
        );
    }

    public function listAction()
    {
        $result = $this->getRolePermissionTable()->fetchAll();
        $result1=$this->getUserRoleTable()->fetchAll();
        $array1 = array();
        $array2 = array();
        $array3 = array();
        foreach ($result as $val) {
            $role = $this->getRoleTable()->getRole($val->role);
            $resource = $this->getMenuTable()->getMenu($val->resource);
            $array1['role'] = $role->role;
            $array1['resource'] = $resource->menu;
            $array2[]=$array1;
        }
        
        foreach ($result1 as $val) {
            $role = $this->getRoleTable()->getRole($val->role_id);
            $user = $this->getUserTable()->getUser($val->user_id);
            $array4['role'] = $role->role;
            $array4['user'] = $user->username;
            $array3[]=$array4;
        }
        
        return (array('result'=>$array2,'res'=>$array3));
    }

    /**
     *
     * @name getDBTable
     *      
     *       used to get the gateway object of menutable class
     *      
     * @param
     *            none
     *            
     *            
     * @return object of table gateway of menutable model
     */
    public function getMenuTable()
    {
        if (! $this->menuTable) {
            $sm = $this->getServiceLocator();
            $this->menuTable = $sm->get('Application\Model\MenuTable');
        }
        return $this->menuTable;
    }

    public function getRoleTable()
    {
        if (! $this->roleTable) {
            $sm = $this->getServiceLocator();
            $this->roleTable = $sm->get('Application\Model\RoleTable');
        }
        return $this->roleTable;
    }

    public function getRolePermissionTable()
    {
        if (! $this->rolePermissionTable) {
            $sm = $this->getServiceLocator();
            $this->rolePermissionTable = $sm->get('Application\Model\RolePermissionTable');
        }
        return $this->rolePermissionTable;
    }

    public function getUserTable()
    {
        if (! $this->userTable) {
            $sm = $this->getServiceLocator();
            $this->userTable = $sm->get('Application\Model\UserTable');
        }
        return $this->userTable;
    }

    public function getUserRoleTable()
    {
        if (! $this->userRoleTable) {
            $sm = $this->getServiceLocator();
            $this->userRoleTable = $sm->get('Application\Model\UserRoleTable');
        }
        return $this->userRoleTable;
    }
}
