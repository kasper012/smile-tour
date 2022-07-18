<?php namespace Gadimlie\Company\Components;

use Cms\Classes\ComponentBase;
use Gadimlie\Company\Models\Company as Settings;
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
        $company->name = $settings->name;
        
        $company->about = $settings->about;
        $company->about_image = $settings->about_image;
        $company->daytrip_about = $settings->daytrip_about;

        $company->severalday_about = $settings->severalday_about;
        $company->reviews_about = $settings->reviews_about;
        $company->footer_newsletter_text = $settings->footer_newsletter_text;

        $company->advantages = $settings->advantages;
        $company->numbers = $settings->numbers;
        $company->phone = $settings->phone;
        $company->email = $settings->email;
        $company->address = $settings->address;
        $company->gmaps = $settings->gmaps;
        $company->socials = $settings->socials;


        $this->page['company'] = $company;
    }
}
