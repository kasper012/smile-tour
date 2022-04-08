<?php namespace Gadimliestudio\Forms\Components;

use Cms\Classes\ComponentBase;
use Validator;
use October\Rain\Exception\ValidationException;
use Input;
use Illuminate\Support\Facades\Mail;


class Subscriptionform extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Subscriptionform Component',
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
            'fullname.required' => trans('gadimliestudio.forms::lang.fullname.required'),
            'subject.required' => trans('gadimliestudio.forms::lang.subject.required'),
            'email.required' => trans('gadimliestudio.forms::lang.email.required'),
            'email.email' => trans('gadimliestudio.forms::lang.email.email'),
            'phone.required' => trans('gadimliestudio.forms::lang.phone.required'),
            'msg.required' => trans('gadimliestudio.forms::lang.msg.required'),
        ];

        $flash_message = [
            'status' => 200,
            'msg' => null
        ];


        $validation = Validator::make(
            $form = Input::all(), [
                'email' => 'required|email',
            ], $customMessages
        );

        if ($validation->fails()) {
            return $flash_message = [
                'status' => 406,
                'msg'  => $validation->errors()->first()
            ];
        } else {
            $params = Input::all();
            Mail::send('Newsletter', $params, function($message) {
                $message->to(env('MAIL_TO', 'info@edusupport.az'), '');
                $message->subject('Xəbərlərə yeni abunəçi');
            });
        }

        return $flash_message = [
            'status' => 200,
            'msg'  => 'Təşəkkür edirik!'
        ];
    }
}
