<?php namespace Gadimliestudio\States\Components;

use Cms\Classes\ComponentBase;
use Gadimliestudio\States\Models\State as ModelsState;

class State extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'State Component',
            'description' => 'States'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $states = ModelsState::all();
        $this->page['states'] = $states;
    }
}
