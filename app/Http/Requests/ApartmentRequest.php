<?php

namespace App\Http\Requests;

use App\Enums\ApartmentStatus;
use BenSampo\Enum\Rules\Enum;
use Illuminate\Foundation\Http\FormRequest;

class ApartmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>['required','min:10','max:50'],
            'address'=>['required'],
            'price'=>['numeric'],
            'description'=>[''],
            'detail'=>[''],
            'thumbnail'=>[''],
            'status'=>['numeric','min:1','max:3'],
        ];
    }
//    public function messages()
//    {
//        return [
//            'name.required' => 'Tên không được để chống',
//            'name.min:10' => 'Tên tối thiểu phải từ 10 ký tự',
//            'name.max:50' => 'Tên tối đa là 50 ký tự',
//            'address.required' => 'Địa chỉ không được để chống',
//            'price.numeric' => 'Giá phải thuộc kiểu số',
//            'status.numeric' => 'Trạng thái phải thuộc kiểu số',
//            'status.'
//        ];
//    }
}
