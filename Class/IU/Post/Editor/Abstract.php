<?php
/**
 * Абстрактный обработчик поднятия докторов
 *
 * @author paulwildboar
 */
abstract class IU_Post_Editor_Abstract
{
    /**
     * Данные
     *
     * @var Data_Transport
     */
    protected $source;

    /**
     * Результат
     * @var array
     */
    protected $data;

    /**
     * Результат
     * @var array
     */
    protected $error;
    /**
     * Удовлетворяет ли условиям
     *
     * @return boolean
     */
    abstract public function isSatisfiedBy();

    /**
     * Получить данные
     *
     * @return Data_Transport
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Задать данные
     *
     * @param $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Получить имя
     *
     * @return string
     */
    public function getName()
    {
        return substr(get_class($this), strlen('IU_Post_Editor_'));
    }

    /**
     * Получить сервис по имени
     *
     * @param $serviceName
     * @return mixed
     */
    public function getService($serviceName)
    {
        return IcEngine::serviceLocator()->getService($serviceName);
    }

    /**
     * Работа с данными
     */
    public abstract function make();
    
    
    /**
     * Getter for "data"
     *
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Getter for "result"
     *
     * @return array
     */
    public function getError()
    {
        return $this->error;
    }
}