<?php

/**
 * Фронт
 *
 */
class Controller_Main_Strategy_Main extends Controller_Front_Strategy_Abstract
{
    /**
     * @inheritdoc
     */
    protected $template = 'index';

    /**
     * @inheritdoc
     */
    public function action()
    {
        IcEngine::getTask()->setTemplate($this->template);
    }

}