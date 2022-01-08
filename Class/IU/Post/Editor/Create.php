<?php

class IU_Post_Editor_Create extends IU_Post_Editor_Abstract
{
    public function isSatisfiedBy()
    {
        return isset($this->source['action']) && $this->source['action'] === $this->getName();
    }

    public function make()
    {
        try
        {
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
            $newPost = new IU_Post([
                "title" => $this->source["title"],
                "body" => $this->source["body"],
                "IU_User__id" => $user->id,
                "id" => 0,
            ]);
            
            $newPost->save();
            $this->data =  $newPost->getFields();
            $this->data['action'] = $this->getName();
        }
        catch(IU_Post_Error $e)
        {
            $this->error = ['message' => $e->getMessage(), 'formInput' => $e->getFormInput()];
        }
    }
}