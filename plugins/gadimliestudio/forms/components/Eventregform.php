<?php namespace Gadimliestudio\Forms\Components;

use Cms\Classes\ComponentBase;
use Validator;
use October\Rain\Exception\ValidationException;
use Input;
use Illuminate\Support\Facades\Mail;
use October\Rain\Network\Http;
use GuzzleHttp\Client;


class Eventregform extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Eventregform Component',
            'description' => 'Form for registration to event'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onSend()
    {
        /*
        $customMessages = [
            'fullname.required' => trans('gadimliestudio.forms::lang.fullname.required'),
            'subject.required' => trans('gadimliestudio.forms::lang.subject.required'),
            'email.required' => trans('gadimliestudio.forms::lang.email.required'),
            'email.email' => trans('gadimliestudio.forms::lang.email.email'),
            'phone.required' => trans('gadimliestudio.forms::lang.phone.required'),
            'msg.required' => trans('gadimliestudio.forms::lang.msg.required'),
        ];
        */

        $flash_message = [
            'status' => 200,
            'msg' => null
        ];


        $validation = Validator::make(
            $form = Input::all(), [
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'email' => 'required|email',
                'mobile' => 'required',
                'source' => 'required',
                'traffic' => 'required',
            ]);

        if ($validation->fails()) {
            return $flash_message = [
                'status' => 406,
                'msg'  => $validation->errors()->first()
            ];
        } else {
            
            $params = Input::all();
            
            if($params['source_cource_name'])  {
                $params['source'] = $params['source'] . ': ' . $params['source_cource_name'];
            }
            
        
            $client = new Client();
            $response = $client->request('POST', 'http://crm.edusupport.az/api/customers/add', 
                    ['form_params' => $params]
                );

        }

        return $flash_message = [
            'status' => 200,
            'msg'  => 'Спасибо за регистрацию!'
        ];
    }
}
