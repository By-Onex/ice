<?php

class Bootstrap_ApplicationCli extends Bootstrap_Abstract
{
/**
     * @inheritdoc
     */
    public function __construct()
    {
        parent::__construct(__FILE__);
    }

    /**
     * @inheritdoc
     */
    public function bootstrapRun()
    {
        require_once IcEngine::path() . 'Loader/LoaderAbstract.php';
        require_once IcEngine::path() . 'Loader/LoaderStandart.php';
        require_once IcEngine::path() . 'Loader/LoaderAutoloadAbstract.php';
        require_once IcEngine::path() . 'Loader/LoaderAutoloadStandart.php';
        $loader = new IcEngine\Loader\LoaderStandart();
        $loader->setPath('IcEngine', IcEngine::path());
        $autoloader = new IcEngine\Loader\LoaderAutoloadStandart();
        $autoloader->setLoader($loader);
        $autoloader->register();
        $locator = IcEngine::serviceLocator();
        $locator->getService('moduleManager')->init();
        $this->initDds();
        $this->initAttributeManager();
        //$this->initModelScheme('32top');
        $this->initModelManager();
    }
}
