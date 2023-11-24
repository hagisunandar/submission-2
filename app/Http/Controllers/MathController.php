<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function perkalian()
    {
        $data['nama'] = 'MyCalculator';

        return view ('page_math', $data);
    }
}
