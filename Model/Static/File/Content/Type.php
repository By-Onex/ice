<?php

/**
 * Тип контента статического файла
 *
 * @author pedro
 * @Orm\Entity
 */
class Static_File_Content_Type extends Model
{
    /**
     * @Orm\Field\Int(Size=11, Not_Null, Auto_Increment)
     * @Orm\Index\Primary
     */
    public $id;

    /**
     * @Orm\Field\Varchar(Size=64, Not_Null)
     */
    public $name;
}