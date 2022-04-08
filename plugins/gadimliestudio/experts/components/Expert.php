<?php namespace Gadimliestudio\Experts\Components;

use Cms\Classes\ComponentBase;
use Gadimliestudio\Experts\Models\Expert as ModelsExpert;

class Expert extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Expert Component',
            'description' => 'Experts'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $experts = ModelsExpert::all();
        $this->page['experts'] = $experts;
    }
}
