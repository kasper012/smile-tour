<?php namespace Gadimliestudio\Company\Models;

use Model;
/** *
*Company Model
 */
class Company extends Model
{
    public $implement = [
      'System.Behaviors.SettingsModel',
      'RainLab.Translate.Behaviors.TranslatableModel'
    ];


    public $translatable = [
      'info',     
      'counters',
      'name',
      'address',
      'work_hours',
      'contact_block',
      'title_text_after_services',
      'text_after_services',
      'button_text_after_services',
    ];    

    public $settingsCode = 'gadimliestudio_company_settings';

    public $settingsFields = 'fields.yaml';

    protected $jsonable = [
      'social_media',
      'info',
      'counters',
      'contact_block'

  ];

}