<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produtos::all();
        return response()->json($produtos);
    }

    public function show($id)
    {
        $produtos = Produtos::find($id);
        return response()->json($produtos);
    }

    public function store(Request $request)
    {
        $produtos = Produtos::create($request->all());
        return response()->json($produtos, 201);
    }

    public function update(Request $request, $id)
    {
        $produtos = Produtos::findOrFail($id);
        $produtos->update($request->all());
        return response()->json($produtos, 200);
    }

    public function destroy($id)
    {
        Produtos::findOrFail($id)->delete();
        return response()->json(['message' => 'Product deleted'], 200);
    }
}
