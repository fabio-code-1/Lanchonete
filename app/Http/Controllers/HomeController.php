<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use App\Models\Lanche;


class HomeController extends Controller
{
    public function index(Request $request, $id = null)
    {
        if (!$id) {
            $id = 1; // ou outro valor padrão, se desejado
        }

        $quantity = 1;
        if (isset($_POST['increment'])) {
            $quantity = $_POST['quantity'] + 1;
        } elseif (isset($_POST['decrement'])) {
            $quantity = $_POST['quantity'] - 1;
        }

        $preco = 15.90 * $quantity;



        $lanches = Lanche::where('id', '>=', 2)->get();

        $event = Lanche::findOrFail($id);

        $mensagem = "*Bom dia!*\n\nAqui está meu pedido!\nProduto: X-burguer\nPreço: 30 R$\nForma de pagamento: dinheiro";
        $numero = "11981664628"; // Adicione o número de telefone destinatário aqui
        $link = "https://api.whatsapp.com/send?phone=" . $numero . "&text=" . urlencode($mensagem);


        return view('home', [
            'lanches' => $lanches,
            'link' => $link,
            'event' => $event,
            'quantity'=>$quantity,
            'preco'=>$preco
        ]);
    }
}
