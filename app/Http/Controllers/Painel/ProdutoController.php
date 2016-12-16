<?php

namespace App\Http\Controllers\Painel;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class ProdutoController extends Controller
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->product->all();
        return view('painel.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function tests()
    {
        /*
        $prod = $this->product;
        $prod->name = "PRODUTO 2";
        $prod->number = 123123;
        $prod->active = true;
        $prod->category = 'eletronicos';
        $prod->description = 'Descricao do produto 2';
        $save = $prod->save();
        */

        /*
        $save = $this->product->create([
            'name'        => "PRODUTO 4",
            'number'      => 545467,
            'active'      => true,
            'category'    => 'banho',
            'description' => 'Descricao do produto 4',
        ]);
        */

        /*
        $prod = $this->product->find(5);
        $prod->name = "PRODUTO 2 ALTERADO";
        $prod->number = 12334235123;
        $prod->active = true;
        $prod->category = 'eletronicos';
        $prod->description = 'UPDate Descricao do produto 5';
        $save = $prod->save();
        */

        /*
        $prod = $this->product->find(5);
        $save = $prod->update([
            'name'        => "PRODUTO 5 Aletado de noovo",
            'number'      => 545467,
            'active'      => true,
            'category'    => 'banho',
            'description' => 'Descricao do produto 4',
        ]);
        */

        $prod = $this->product->where('number',545467);
        $save = $prod->update([
            'name'        => "PRODUTO 5 Aletado de noovo",
            'number'      => 545467,
            'active'      => true,
            'category'    => 'banho',
            'description' => 'Descricao do produto 4',
        ]);

        if (!$save) {
            return "Não foi possível salvar o produto";
        }
        return "Salvo com sucesso";
    }
}
