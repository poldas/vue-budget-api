<?php

namespace Api\Requests;

use Dingo\Api\Http\FormRequest;

class WydatkiRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
//	    	'zaco' => 'required',
//	    	'kwota' => 'required|numeric',
//			'confirmed' => 'numeric',
    	];
	}
}