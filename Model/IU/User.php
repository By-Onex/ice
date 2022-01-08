<?php

/**
 * 
 *
 * @category Models
 * @package  Ice\Model\IU
 * @author   By-Onex <ivan.marchenko.199@gmail.com>
 * @license  http://i-complex.ru license
 * @link     http://i-complex.ru
 */
class IU_User extends Model
{
    /**
     * @Orm\Field\Int(Not_Null)
     * @Orm\Index\Primary
     */
    public $id;

    /**
     * @Orm\Field\Varchar(Size=100, Not_Null)
     */
    public $name;


}