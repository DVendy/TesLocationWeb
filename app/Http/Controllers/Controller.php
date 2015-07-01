<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Validator;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;
}
