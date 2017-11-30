<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class FibonacciController extends BaseController
{   public function getNumbers($numbers) {
    return view('fibonacci')->with(['numbers'=>$numbers]);
}

}
