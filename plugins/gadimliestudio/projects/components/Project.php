<?php namespace Gadimliestudio\Projects\Components;

use Cms\Classes\ComponentBase;
use Gadimliestudio\Projects\Models\Project as ModelsProject;

class Project extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Project Component',
            'description' => 'Projects'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $projects = ModelsProject::all();
        $this->page['projects'] = $projects;
    }
}
