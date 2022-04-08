<?php namespace Gadimliestudio\Services\Components;

use Cms\Classes\ComponentBase;
use Gadimliestudio\Services\Models\Service as ModelsService;

class Service extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Service Component',
            'description' => 'Services'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $services = ModelsService::all();
        $this->page['services'] = $services;
    }
}
