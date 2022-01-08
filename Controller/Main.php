<?php

/**
 * Базовый контроллер
 * Created at: 2021-12-31 04:24:55
 *
 * @category Controllers
 * @package test.local
 * @author nikola
 *
 * @copyright i-complex.ru
 * @license http://i-complex.ru
 */
class Controller_Main extends Controller_Abstract
{
   /**
    * Index
    * @Route("/")
    * @Static("js", group="noPack", file={"/Controller/Main/index.js"})
    */
    public function index ()
    {
        $collectionManager = $this->getService('collectionManager');
        $userCollection = $collectionManager->create('IU_User');
        $this->output->send(["title" => "Главная", 'userCollection' => $userCollection->raw()]);
    }
}