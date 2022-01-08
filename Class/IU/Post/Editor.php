<?php

/**
 * Обработчик для работы с постами
 * 
 * @Service('postEditor', disableConstruct=true)
 */
class IU_Post_Editor
{
    /**
     * Стратегии
     * @var array
     */
    protected $strategies = ["Create", "Update", "Delete"];

    /**
     * Данные
     *
     * @var Data_Transport
     */
    protected $source;

    /**
     * @var IU_Post_Editor_Manager
     * @Generator
     * @Inject
     */
    protected $postEditorManager;

    /**
     * @var array
     */
    protected $result;

    public function make()
    {
        foreach ($this->strategies as $strategyName) {
            $strategy = $this->postEditorManager->get($strategyName);
            $strategy->setSource($this->source);
            if (!$strategy->isSatisfiedBy()) {
                continue;
            }
            $strategy->make();
            $this->result = ['data' => $strategy->getData(), 'error' => $strategy->getError()];
            return;
        }
        $this->result['error']['message'] = 'Неверные данные';
    }

    public function setSource($source)
    {
        $this->source = $source;
    }
    
    /**
     * Getter for "postEditorManager"
     *
     * @return IU_Post_Editor_Manager
     */
    public function getPostEditorManager()
    {
        return $this->postEditorManager;
    }
        
    /**
     * Setter for "postEditorManager"
     *
     * @param IU_Post_Editor_Manager postEditorManager
     */
    public function setPostEditorManager($postEditorManager)
    {
        $this->postEditorManager = $postEditorManager;
    }
    
    /**
     * Getter for "result"
     *
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }
}