<?php

/**
 * 
 *
 * Created at: 2021-12-31 04:57:57
 *
 * @category Controllers
 * @package test.local
 * @author By-Onex <ivan.marchenko.199@gmail.com>
 *
 * @copyright i-complex.ru
 * @license http://i-complex.ru
 */
class Controller_Page extends Controller_Abstract
{
    /**
     * Главная страница
     * @Route("/pages")
     */
    public function index()
    {
        $collectionManager = $this->getService('collectionManager');
        $postCollection = $collectionManager->create('IU_Post');
        $userCollection = $collectionManager->create('IU_User');
        $this->output->send([
            'title' => "Главная",
            'postCollection' => $postCollection->raw(),
            'userCollection' => $userCollection->raw()
        ]);
    }

    /**
     * 123
     * @Route("/pages/{$userId}")
     */
    public function roll($userId)
    {
        $collectionManager = $this->getService('collectionManager');
        $postCollection = $collectionManager->create('IU_Post');
        $postCollection->addOptions([
            'name' => '::IU_User',
            'User' => $userId
        ]);

        $modelManager = $this->getService('modelManager');
        $user = $modelManager->byKey('IU_User', $userId);

        $this->output->send([
            'title' => "Главная",
            'user' => $user,
            'postCollection' => $postCollection->raw()
        ]);
    }
    /**
     * test ajax
     * @Template(null)
     * @Ajax
     */
    public function testAjax()
    {
        $this->output->send('data', ['msg' => 'test']);
    }
    /**
     * Проверка формы
     * @Template(null)
     * @Ajax
     */
    public function submit()
    {
        $data = $this->input->receiveAll();
        $postEditor = $this->getService('postEditorPool')->get();
        $postEditor->setSource($data);
        $postEditor->setPostEditorManager(new IU_Post_Editor_Manager);
        $postEditor->make();
        $this->output->send($postEditor->getResult());
    }
}
