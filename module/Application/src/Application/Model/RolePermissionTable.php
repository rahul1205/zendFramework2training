<?php
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;

/**
 * class contains various methods to store or fetch data from database named zf2.
 *
 * @name MenuTable
 */
class RolePermissionTable
{

    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        try {
            $this->tableGateway = $tableGateway;
        } catch (\Exception $e) {
            echo $e->getTraceAsString();
        }
    }

    /**
     *
     * @name fetchAll
     *      
     *       used to fetch data from database named zf2 and from menu table in this database
     *      
     * @param
     *            none
     *            
     *            
     * @return array of object containing all data of that table
     */
    public function fetchAll()
    {
        try {
             $resultSet = $this->tableGateway->select();
             return $resultSet;
        } catch (\Exception $e) {
            echo $e->getTraceAsString();
         }
       
    }

    /**
     *
     * @name saveMenu
     *      
     *       used to store data into database named zf2 into menu table.
     *      
     * @param
     *            object of Menu class which exist in /Application/Model/Menu
     *            
     *            
     * @return void
     */
    public function saveRolePermission(RolePermission $role)
    {
        try {
            $data = array(
                
                'role' => $role->role,
                'resource' => $role->resource
            );
            
            $this->tableGateway->insert($data);
        } catch (\Exception $e) {
            echo $e->getTraceAsString();
        }
    }
}


