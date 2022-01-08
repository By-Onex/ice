<?php
/**
 * Пул обработчиков для поднятия докторов
 *
 * @Service('postEditorPool')
 *
 * @author paulwildboar
 */
class IU_Post_Editor_Pool
{
    /**
     * Получить новый процессор
     *
     * @return IU_Post_Editor
     */
    public function get()
    {
        return $this->getService('postEditor')->newInstance();
    }

    /**
     * Получить сервис по имени
     *
     * @param string $serviceName
     *
     * @return mixed
     */
    public function getService($serviceName)
    {
        return IcEngine::serviceLocator()->getService($serviceName);
    }
}