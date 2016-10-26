<?php
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;

/**
 * class contains various methods to store or fetch data from database named zf2.
 *
 * @name MenuTable
 */
class UserTable
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
    
    public function getUser($id)
    {
        $rowSet = $this->tableGateway->select(array('user_id'=>$id));
        $row = $rowSet->current();
        return $row;
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

}



