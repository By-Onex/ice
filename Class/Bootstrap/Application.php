<?php

/**
 * Загрузчик
 *
 * @author morph
 */
class Bootstrap_Application extends Bootstrap_Abstract
{
    /**
     * @inheritdoc
     */
    protected static $strategies = [
        'Ajax',
        'Admin',
        'Not_Found', //todo Спецификация онного не всегда true.
    ];

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
        if (isset($_GET['TRACER'])) {
            Tracer::$enabled = true;
        }
        if (Tracer::$enabled) {
            $startTime = microtime(true);
        }
        if (Tracer::$enabled) {
            $subStartTime = microtime(true);
        }
        if (Tracer::$enabled) {
            $subStartTime = microtime(true);
        }
        App::moduleManager()->init();
        if (Tracer::$enabled) {
            $subEndTime = microtime(true);
            Tracer::setBootstrapModuleManagerInitTime(
                $subEndTime - $subStartTime
            );
        }
        if (Tracer::$enabled) {
            $subStartTime = microtime(true);
        }
        $this->initDds();
        if (Tracer::$enabled) {
            $subEndTime = microtime(true);
            Tracer::setBootstapInitDbTime($subEndTime - $subStartTime);
        }
        if (Tracer::$enabled) {
            $subStartTime = microtime(true);
        }
        $this->initAttributeManager();
        if (Tracer::$enabled) {
            $subEndTime = microtime(true);
            Tracer::setBootstapInitAttributeManagerTime(
                $subEndTime - $subStartTime
            );
        }
        if (Tracer::$enabled) {
            $subStartTime = microtime(true);
        }
        $this->initModelScheme($this->name());
        if (Tracer::$enabled) {
            $subEndTime = microtime(true);
            Tracer::setBootstapInitModelSchemeTime($subEndTime - $subStartTime);
        }
        if (Tracer::$enabled) {
            $subStartTime = microtime(true);
        }
        $this->initModelManager();
        if (Tracer::$enabled) {
            $subEndTime = microtime(true);
            Tracer::setBootstapInitModelManagerTime(
                $subEndTime - $subStartTime
            );
        }
        if (Tracer::$enabled) {
            $subStartTime = microtime(true);
        }
        /*$this->initUser();
        if (Tracer::$enabled) {
            $subEndTime = microtime(true);
            Tracer::setBootstapInitUserTime($subEndTime - $subStartTime);
        }*/
        $this->initFirePhp();
        if (Tracer::$enabled) {
            $endTime = microtime(true);
            Tracer::setBootstrapTime($endTime - $startTime);
        }
        $this->initEventManager();
    }

    /**
     * Инициализация менеджера событий
     */
    public function initEventManager()
    {
        $config = App::configManager()->get('Event_Manager');
        foreach ($config as $signalName => $slots) {
            if (!is_array($slots)) {
                $slots = (array) $slots;
            }
            $signal = new Event_Signal([], $signalName);
            foreach ($slots as $slotName) {
                $slot = App::eventManager()->getSlot($slotName);
                App::eventManager()->register($signal, $slot);
            }
        }
    }

    /**
     * Подключение FirePHP
     */
    public function initFirePhp()
    {
        if (!function_exists('fb')) {
            App::loader()->requireOnce('FirePHPCore/fb.php', 'includes');
        }
    }
}
