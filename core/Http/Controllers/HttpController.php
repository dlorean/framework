<?php namespace Delorean\Core\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class HttpController extends BaseController {
    use DispatchesCommands, ValidatesRequests;
}
