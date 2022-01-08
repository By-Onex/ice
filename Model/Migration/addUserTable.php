<?php

/**
 * Описание миграции
 *
 * Created at: 2021-12-31 06:29:08
 *
 * @category    Models
 * @subcategory Migrations
 * @package     Ice\Model\Migration\auto
 * @author      By-Onex <ivan.marchenko.199@gmail.com>
 * @license     http://i-complex.ru license
 * @link        http://i-complex.ru
 */
class Migration_addUserTable extends Migration_Abstract
{
    /**
     * @inheritDoc
     */
    public $model;

    /**
     * @inheritdoc
     */
    public function down()
    {
        return true;
    }

    /**
     * @inheritdoc
     */
    public function restore($data) {}

    /**
     * @inheritdoc
     */
    public function store() {}

    /**
     * @inheritdoc
     */
    public function up()
    {
        
    }
}