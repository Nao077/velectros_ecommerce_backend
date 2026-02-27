<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'status' => 200,
            'products' => Product::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_name' => 'required|string|max:255',
            'stock_quantity' => 'required|integer|min:0',
            'purchase_cost' => 'required|numeric|min:0',
            'selling_price' => 'required|numeric|min:0',
            'alert_threshold' => 'required|integer|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->errors(),
            ], 422);
        }

        $product = Product::create($request->all());

        return response()->json([
            'status' => 201,
            'message' => 'Produit ajouté avec succès.',
            'product' => $product
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'status' => 404,
                'message' => "Ce produit n'existe pas.",
            ], 404);
        } else {
            return response()->json([
                'status' => 200,
                'product' => $product,
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'product_name' => 'required|string|max:255',
            'stock_quantity' => 'required|integer|min:0',
            'purchase_cost' => 'required|numeric|min:0',
            'selling_price' => 'required|numeric|min:0',
            'alert_threshold' => 'required|integer|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->errors(),
            ], 422);
        }
        
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'status' => 404,
                'message' => "Ce produit n'existe pas.",
            ], 404);
        } else {
            $product->update($request->all());
            return response()->json([
                'status' => 200,
                'message' => 'Produit mis à jour avec succès.',
                'product' => $product,
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'status' => 404,
                'message' => "Ce produit n'existe pas.",
            ], 404);
        } else {
            $product->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Produit supprimé avec succès.',
            ]);
        }
    }
    }
}
