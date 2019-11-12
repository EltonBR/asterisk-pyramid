<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsteriskPyramidController extends Controller
{
    public function index()
    {
    	return view('asterisk', ['pyramid' => NULL]);
    }

    public function showPyramid(Request $request)
    {
    	$request->validate(['asteriskAmount' => "required|numeric|min:1"]);
    	$pyramid = $this->generatePyramid($request->input('asteriskAmount'));
    	return view('asterisk', ['pyramid' => $pyramid]);
    }

    private function generatePyramid(int $asteriskAmount)
    {

		$getSpaces = function ($numSpaces)
		{
			$spacesReturn = "";
			for ($increment = 0; $increment < $numSpaces; $increment++) {
				$spacesReturn .="&nbsp"; 
			}

			return $spacesReturn;
		};

		$getAsterix = function ($numAsterix, $numSpaces) use ($getSpaces)
		{
			$asteriskReturn = "";
			for ($increment = 0; $increment < $numAsterix; $increment++)
			{
				$asteriskReturn .= "*&nbsp;"; 
			}

			return $asteriskReturn . $getSpaces($numSpaces);
		};

		if ($asteriskAmount < 4) {
			$extraSpace = 7;
		} else {
			$extraSpace = 2;
		}

		$numSpaces = $asteriskAmount*$extraSpace;
		$numAsterix = 1;

		$pyramidHtml = "";

		for ($line = 0; $line < $asteriskAmount; $line++)
		{
			$pyramidHtml .= $getSpaces($numSpaces) . $getAsterix($numAsterix, $numSpaces) . "<br />";
			$numSpaces--;
			$numAsterix++;
		}

		return $pyramidHtml;

	}
}
