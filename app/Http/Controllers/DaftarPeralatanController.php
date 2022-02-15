<?php

namespace App\Http\Controllers;

use App\Models\DaftarPeralatan;
use Illuminate\Http\Request;

class DaftarPeralatanController extends Controller
{
    public function show()
    {
        $data = DaftarPeralatan::get();

        return view('home', [$data]);
    }
}
