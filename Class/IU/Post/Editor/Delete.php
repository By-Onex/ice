<?php

class IU_Post_Editor_Delete extends IU_Post_Editor_Abstract
{
    public function isSatisfiedBy()
    {
        return isset($this->source['action']) && $this->source['action'] === $this->getName();
    }

    public function make()
    {
        try {
            if (empty($this->source['id'])) {
                throw new IU_Post_Error('Id поста не должен быть пустым');
            }
            $modelManager = $this->getService('modelManager');
            $post = $modelManager->byKey('IU_Post', $this->source['id']);
            if (!isset($post)) {
                throw new IU_Post_Error('Такого поста не существует');
            }
            $post->delete();
            $this->data = [
                'id' => $this->source['id'],
                'action' => $this->getName()
            ];
        } catch (IU_Post_Error $e) {
            $this->error = ['message' => $e->getMessage()];
            if (!empty($e->getFormInput())) {
                $this->error['formInput'] = $e->getFormInput();
            }
        }
    }
}
