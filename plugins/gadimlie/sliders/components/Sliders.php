<?php namespace Gadimlie\Sliders\Components;

use Cms\Classes\ComponentBase;
use Gadimlie\Sliders\Models\Sliders as Settings;
use October\Rain\Database\Model;

class Sliders extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Əsas səhifə üçün slayderlər',
            'description' => '',
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $settings = Settings::instance();
        $sliders = new Model();
        $sliders->slider = $settings->slider;
        $sliders->breadcrumb_bg = $settings->breadcrumb_bg;
        $sliders->footer_bg = $settings->footer_bg;
        $sliders->color = $settings->color;
 
         $this->page['sliders'] = $sliders;
    }
}
