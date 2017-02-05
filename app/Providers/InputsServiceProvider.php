<?php namespace App\Providers;

use Form;
use Illuminate\Support\ServiceProvider;

class InputsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Form::component('bsText', 'inputs.text', ['name', 'label', 'value' => null, 'attributes' => []]);
        Form::component('bsTextarea', 'inputs.textarea', ['name', 'label', 'value' => null, 'attributes' => []]);
        Form::component('bsToggle', 'inputs.toggle', ['name', 'label', 'value' => null, 'checked' => null]);
    }
}
