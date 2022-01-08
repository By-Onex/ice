<?php

/**
 * Адаптер для Mobile_Detect. Позволяет узнать информацию об устройстве
 * (основан на User-Agent и на специфичных HTTP-заголовках)
 * @Service("device")
 */
class Device
{
    /** @var Mobile_Detect */
    private $mobileDetect;

    /** @var  bool */
    private $isMobile;

    /** @var  bool */
    private $isTablet;

    /** @var  string */
    private $deviceType;

    /**
     * Инициализация библиотеки
     */
    public function __construct()
    {
        $this->mobileDetect = new Mobile_Detect();
        $this->isMobile = $this->mobileDetect->isMobile()
            || $this->mobileDetect->isTablet();
        $this->deviceType = $this->isMobile ? 'mobile' : 'desktop';
    }

    /**
     * Является ли устройство мобильным
     */
    public function isMobile()
    {
        return $this->isMobile;
    }

    /**
     * Андроид ли
     *
     * @return boolean
     */
    public function isAndroid()
    {
        $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
        return stripos($userAgent, 'android') !== false;
    }

    /**
     * планшет ли
     *
     * @return boolean
     */
    public function isTablet()
    {
        return $this->isTablet;
    }

    /**
     * какой дивайс
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }
}