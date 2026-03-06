<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class namaController extends Controller
{
    public function about()
    {
        $data = [
            'nama' => 'Muhammad Rafi Ramadhan Kartika',
            'nim' => '20230140138',
            'program_studi' => 'Pemrograman Web Framework',
            'hobi' => 'ngoding, main game',
        ];

        return view('about', $data);
    }
}
