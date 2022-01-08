<?php

class IU_Post_Error extends Error
{
    protected $formInput;

    public function __construct($message, $formInput = null)
    {
        $this->message = $message;
        $this->formInput = $formInput;
    }

    public function getFormInput()
    {
        return $this->formInput;
    }
}