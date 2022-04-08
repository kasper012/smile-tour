<?php namespace Gadimliestudio\Students\Components;

use Cms\Classes\ComponentBase;
use Gadimliestudio\Students\Models\Student as ModelsStudent;

class Student extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Student Component',
            'description' => 'Students'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $students = ModelsStudent::all();
        $this->page['students'] = $students;
    }
}
