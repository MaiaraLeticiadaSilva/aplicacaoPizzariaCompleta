<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{
    public function create(Request $request)
    {
        $borda = DB::table('borda')->whereId($request->borda)->get()[0]->preco;
        $sabor = DB::table('sabor')->whereId($request->sabor)->get()[0]->preco;
        $massa = DB::table('massa')->whereId($request->massa)->get()[0]->preco;
        $preco = $borda + $sabor + $massa;

        $pedido = new Pedido();
        $pedido->estado_id  = $request->estado;
        $pedido->borda_id  = $request->borda;
        $pedido->massa_id  = $request->massa;
        $pedido->sabor_id  = $request->sabor;
        $pedido->preco  = $preco;
        $pedido->save();


        $sabores = DB::table('sabor')->get();
        $bordas = DB::table('borda')->get();
        $massas = DB::table('massa')->get();
        $data = [
            'sabores' => $sabores,
            'bordas' => $bordas,
            'massas' => $massas,
            'pedido' => 'pedido realizado com sucesso'
        ];
        return redirect('/')->with($data);
    }
    public function destroy($id)
    {
        DB::table('pedidos')->whereId($id)->delete();

        $sabores = DB::table('sabor')->get();
        $bordas = DB::table('borda')->get();
        $massas = DB::table('massa')->get();
        $pedidos = DB::table('pedidos')->get();
        $data = [
            'sabores' => $sabores,
            'bordas' => $bordas,
            'massas' => $massas,
            'pedidos' => $pedidos,
            'logado' => true,
            'username' => 'Admin'
        ];
        return view('index')->with($data);
    }

    public function update(Request $request){
        DB::table('pedidos')
            ->select(DB::raw('update pedidos set estado_id = '.$request->estado.'where id = '.$request->id));

            
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
    }

    public function editar($id){
        $data = [
            'pedido' => DB::table('pedidos')->get()->where('id',$id)[0]
        ];
        return view('editar',$data);
    }
}
