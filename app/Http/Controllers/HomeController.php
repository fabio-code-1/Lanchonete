<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produto;

class HomeController extends Controller
{
    public function index(Request $request, $id = null)
    {

        if (!$id) {
            $id = 1; // ou outro valor padrão, se desejado
        }

        $event = Produto::findOrFail($id);
        $produto = Produto::where('id', '>=', 2)->get();

        $quantity = 1;
        if ($request->isMethod('post')) {
            $id = $request->input('id');
            $event = Produto::findOrFail($id);
            if ($request->has('increment')) {
                $quantity = $request->input('quantity') + 1;
            } elseif ($request->has('decrement')) {
                $quantity = $request->input('quantity') - 1;
            }
        }

        $preco = $event->preco * $quantity;

        $mensagem = "*Bom dia!*\n\nAqui está meu pedido!\nProduto: X-burguer\nPreço: {$preco} R$\nForma de pagamento: dinheiro";
        $numero = "11981664628"; // Adicione o número de telefone destinatário aqui
        $link = "https://api.whatsapp.com/send?phone=" . $numero . "&text=" . urlencode($mensagem);

        return view('home', [
            'produtos' => $produto,
            'link' => $link,
            'event' => $event,
            'quantity' => $quantity,
            'preco' => $preco
        ]);
    }
}
