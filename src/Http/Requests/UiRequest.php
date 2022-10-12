<?php

namespace ZenCoreSpA\UI\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UiRequest extends FormRequest
{
    public function authorize()
    {
        return Auth::guest();
    }

    public function rules()
    {
        return [];
    }
}
