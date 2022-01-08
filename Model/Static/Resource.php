<?php

/**
 * @desc Упаковщики статичных ресурсов
 * Created at: 2012-06-09 03:07:03
 * @author morph
 * @property integer $id
 * @property string $name
 * @property integer $sort
 * @property integer $active
 * @package Vipgeo
 * @category Models
 * @copyright i-complex.ru
 */
class Static_Resource extends Model_Defined
{
	/**
	 * @inheritdoc
	 */
	public static $rows = array(
        array(
            'id'		=> 6,
            'name'	=> 'Static_Js_Time_Rebuild',
            'sort'		=> 1,
            'active'	=> 1
        )
	);
}