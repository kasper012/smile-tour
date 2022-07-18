<?php namespace Gadimlie\Forms\Components;

use Cms\Classes\ComponentBase;
use Validator;
use October\Rain\Exception\ValidationException;
use Input;
use Illuminate\Support\Facades\Mail;

class TourContactForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'TourContactForm Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }


    public function onSend()
    {

        $customMessages = [
            'fullname.required' => trans('gadimlie.forms::lang.fullname.required'),
            'subject.required' => trans('gadimlie.forms::lang.subject.required'),
            'email.required' => trans('gadimlie.forms::lang.email.required'),
            'email.email' => trans('gadimlie.forms::lang.email.email'),
            'phone.required' => trans('gadimlie.forms::lang.phone.required'),
            'msg.required' => trans('gadimlie.forms::lang.msg.required'),
        ];

        $flash_message = [
            'status' => 200,
            'msg' => null
        ];        

        $validation = Validator::make(
            $form = Input::all(), [
           
            ], $customMessages
        );

        if ($validation->fails()) {
            return $flash_message = [
                'status' => 406,
                'msg'  => $validation->errors()->first()
            ];
        } else {
            $params = Input::all();

            Mail::send('ContactForm', $params, function($message) {
                $message->to(env('MAIL_TO', 'info@smile-tour.az'), 'Smile Tour');
                $message->subject('New request to tour ');
            });
        }

        return $flash_message = [
            'status' => 200,
            'msg'  => trans('gadimlie.forms::lang.msg.sent')
        ];
    }
}
