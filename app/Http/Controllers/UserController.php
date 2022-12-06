<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\returnSelf;

class UserController extends Controller
{


    public function create(Request $request)
    {
        $cliente = new Admin;
        $cliente->Nome  = $request->Nome;
        $cliente->CPF  = $request->CPF;
        $cliente->Email  = $request->Email;
        $cliente->Celular  = $request->Celular;
        $cliente->save();
        return view('index', ['logado' => true, 'username' => $request->Nome]);
    }

    public function login(Request $request)
    {
        $admin = new Admin;
        $admin = $admin->get()->where('Email', $request->Email)[0];

        if ($request->Email == $admin->Email && Hash::check($request->CPF, $admin->CPF)) {
            Auth::user($admin->id);
            $sabores = DB::table('sabor')->get();
            $bordas = DB::table('borda')->get();
            $massas = DB::table('massa')->get();
            $pedidos = DB::table('pedidos')->get();
            $estados = DB::table('estados')->get();
            $data = [
                'sabores' => $sabores,
                'bordas' => $bordas,
                'massas' => $massas,
                'pedidos' => $pedidos,
                'estados' => $estados,
                'logado' => true,
                'username' => 'Admin'
            ];
            return view('index', $data);
        } else {
            $sabores = DB::table('sabor')->get();
            $bordas = DB::table('borda')->get();
            $massas = DB::table('massa')->get();
            $data = [
                'sabores' => $sabores,
                'bordas' => $bordas,
                'massas' => $massas,
                'logado' => false,
                'username' => ''
            ];
        }
    }
}
