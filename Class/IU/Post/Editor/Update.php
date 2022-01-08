<?php


class IU_Post_Editor_Update extends IU_Post_Editor_Abstract
{
    public function isSatisfiedBy()
    {
        return isset($this->source['action']) && $this->source['action'] === $this->getName();
    }

    public function make()
    {
        try
        {
            if (empty($this->source['id'])) {
                throw new IU_Post_Error('Id поста не должен быть пустым');
            }
            
            $modelManager = $this->getService('modelManager');
            $post = $modelManager->byKey('IU_Post', $this->source['id']);
            
            if (!isset($post)) {
                throw new IU_Post_Error('Такого поста не существует');
            }
            if(empty($this->source['title'])){
                throw new IU_Post_Error('Заголовок поста не должен быть пустым', 'title');
            }
            if(empty($this->source['body'])){
                throw new IU_Post_Error('Контент поста не должен быть пустым', 'body');
            }
            if(empty($this->source['user'])){
                throw new IU_Post_Error('Пользлватель не выбран', 'user');
            }
            $user = $this->getService('modelManager')->byKey('IU_User', $this->source['user']);
            if(!isset($user)){
                throw new IU_Post_Error('Такого пользователя не существует', 'user');
            }

            $post->update([
                "title" => $this->source["title"],
                "body" => $this->source["body"],
                "IU_User__id" => $this->source["user"]
            ]);
            
            $this->data = $post->getFields();
            $this->data['action'] = $this->getName();
        }
        catch(IU_Post_Error $e)
        {
            $this->error = ['message' => $e->getMessage(), 'formInput' => $e->getFormInput()];
        }
    }    
}