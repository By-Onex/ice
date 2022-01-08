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
class IU_Post extends Model
{
    /**
     * @Orm\Field\Int(Not_Null, Auto_Increment)
     * @Orm\Index\Primary("id")
     */
    public $id;

    /**
     * @Orm\Field\Int(Not_Null)
     * @Orm\Index\Key("IU_User__id_idx")
     */
    public $IU_User__id;

    /**
     * @Orm\Field\Varchar(Size=33, Not_Null)
     */
    public $title;

    /**
     * @Orm\Field\Varchar(Size=225, Not_Null)
     */
    public $body;


}