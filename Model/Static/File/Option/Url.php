<?php
/**
 * Опшн получения модели статического файла по урлу
 *
 * @author pedro
 *
 */
class Static_File_Option_Url extends Model_Option
{
    /**
     * @inheritdoc
     */
    public function before()
    {
        $this->query
            ->where('url LIKE "%' . $this->params['code'] . '%"');
    }
}
