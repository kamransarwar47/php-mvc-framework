<?php

namespace App\Core\Form;

class TextareaField extends BaseField
{
    function renderField(): string
    {
        return sprintf('<textarea name="%s" class="form-control %s" rows="5">%s</textarea>',
            $this->attribute,
            $this->model->hasError($this->attribute) ? 'is-invalid' : '',
            $this->model->{$this->attribute},
        );
    }
}