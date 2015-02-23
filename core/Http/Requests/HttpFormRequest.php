<?php namespace Delorean\Core\Http\Requests;

use Illuminate\Foundation\Http\Request;

abstract class HttpFormRequest extends Request{

    abstract public function authorize();

    abstract public function rules();
}
