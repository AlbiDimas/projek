<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemesanController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index()
    {
        return view('admin/pemesan/index');
    }
}
