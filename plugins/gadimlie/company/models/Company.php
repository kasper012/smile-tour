<?php namespace Gadimlie\Company\Models;

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
      'about',
      'structure_person',
      'appeal_board',
      'documents',
      'certificates',
      'slogan',
      'address',
    ];    

    public $settingsCode = 'gadimlie_company_settings';

    public $settingsFields = 'fields.yaml';

}