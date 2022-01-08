<?php

/**
 * Статический файл
 *
 * @author pedro
 * @Orm\Entity
 * @Service("staticFile")
 */
class Static_File extends Model
{
    /**
     * @Orm\Field\Int(Size=11, Not_Null, Auto_Increment)
     * @Orm\Index\Primary
     */
    public $id;

    /**
     * Url статического файла
     *
     * @Orm\Field\Varchar(Size=64, Not_Null)
     */
    public $url;

    /**
     * Тип контента статического файла
     *
     * @Orm\Field\Int(Size=11, Not_Null)
     */
    public $Static_File_Content_Type__id;

    /**
     * Город
     *
     * @Orm\Field\Int(Size=11, Not_Null)
     */
    public $City__id;

    /**
     * Описание
     *
     * @Orm\Field\Varchar(Size=32, Not_Null)
     */
    public $description;

    /**
     * Контент
     *
     * @Orm\Field\Text(Not_Null)
     */
    public $text;

}