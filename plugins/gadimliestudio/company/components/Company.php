<?php namespace Gadimliestudio\Company\Components;

use Cms\Classes\ComponentBase;
use Gadimliestudio\Company\Models\Company as Settings;
use October\Rain\Database\Model;

class Company extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Компания',
            'description' => 'Использовaние данных компании',
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $settings = Settings::instance();
        $company = new Model();
        
        $company->counters = $settings->counters;
        $company->info = $settings->info;
        $company->name = $settings->name;
        $company->email = $settings->email;
        $company->address = $settings->address;

        $company->phone = $settings->phone;
        $company->google_map = $settings->google_map;

        $company->social_media = $settings->social_media;
        $company->work_hours = $settings->work_hours;
        $company->contact_block = $settings->contact_block;

        $company->title_text_after_services = $settings->title_text_after_services;
        $company->text_after_services = $settings->text_after_services;
        $company->button_text_after_services = $settings->button_text_after_services;



        $this->page['company'] = $company;
    }
}
