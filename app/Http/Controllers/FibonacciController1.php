<?php

namespace App\Http\Controllers;

use App\FibonacciSeries;

class FibonacciController1 extends Controller
{
    public function show($count)
	{
		$fibonacciSeries = new FibonacciSeries([], $count);

		return view('fibonacci1', [
			'fibonacciSeries' => implode(', ', $fibonacciSeries->getSeries())
		]);
	}
}
