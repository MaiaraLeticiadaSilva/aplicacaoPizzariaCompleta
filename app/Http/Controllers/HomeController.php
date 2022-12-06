<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $sabores = DB::table('sabor')->get();
        $bordas = DB::table('borda')->get();
        $massas = DB::table('massa')->get();
        $data = [
            'sabores' => $sabores,
            'bordas' => $bordas,
            'massas' => $massas,
            'logado' => false
        ];
        return view('index', $data);
    }
}
