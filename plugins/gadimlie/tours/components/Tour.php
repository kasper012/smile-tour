<?php namespace Gadimlie\Tours\Components;

use Cms\Classes\ComponentBase;
use Gadimlie\Tours\Models\Tour as ModelsTour;

class Tour extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Tour Component',
            'description' => 'Tours of Clean City'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $tours = ModelsTour::all();
        $this->page['tours'] = $tours;
    }
}
