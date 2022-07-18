<?php namespace Vadim\Testimonials\Components;

use Cms\Classes\ComponentBase;
use Vadim\Testimonials\Models\Testimonial as TestimonialModel;
use October\Rain\Support\Facades\Flash;
use Input;
use Validator;


/**
 * Testimonials Component
 */
class Testimonials extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'TestimonialsForm Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'thanksMessage' => [
                'title'       => 'Thanks Message',
                'description' => 'Thanks message for new subscribers',
                'type' => 'string',
                'default'     => 'Thanks for your opinion!'
            ],
        ];
    }

    public function onSave(){
        $validation = Validator::make(
            $form = Input::all(), [
                'name' => 'required',
                'testimonial' => 'required',
            ], 
        );
        if ($validation->fails()){
            Flash::error($validation->errors()->first());
        }
        else{
            $data = ['name' => post('name'), 'surname' => post('surname'), 'testimonial' => post('testimonial')];
            TestimonialModel::create($data);
            Flash::success($this->property('thanksMessage'));
            return \Redirect::refresh();
        }
           
    }


}
