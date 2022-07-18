<?php namespace Gadimlie\Company\Components;

use Cms\Classes\ComponentBase;
use Gadimlie\Company\Models\Mediateka as Models;
use October\Rain\Database\Model;

class Mediateka extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Mediateka Component',
            'description' => ''
        ];
    }

    public function defineProperties()
    {
        return [
            'Mediateka'  => [
                'title'        => 'Mediateka',
                'description'  => 'Description'
            ]
        ];
    }

    public function onRun() {
        $this->page['mediateka'] = Models::all();
    }
}
