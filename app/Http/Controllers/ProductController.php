<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function insert(Request $request) {
        if ($request->id_product == '' || $request->name == '' || $request->size == '' || $request->quantity == '' || $request->id_customer == '' || $request->form == '' || $request->price == '') {
            return response(["code" => 400, "message" => "Cần điền đầy đủ!"], 400);
        }
        $product = new Product;

        $product->product_id = $request->id_product;
        $product->customer_id = $request->id_customer;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->description = 'Hello World';
        $product->form = $request->form;
        $product->to = 'VN';
        $product->state = 'Hello 1234';
        $product->save();

        return response(["code" => 200, "message" => "Them thanh cong!"], 200);
    }

    public function show() {
        $data = [];
        $data['data'] = [];
        foreach (Product::all() as $product) {
            $data_item = array(
                'id' => $product->id,
                'product_id' => $product->product_id,
                'customer_id' => $product->customer_id,
                'quantity' => $product->quantity,
                'price' => $product->price,
                'description' => $product->description,
                'form' => $product->form,
                'to' => $product->to,
                'state' => $product->state,
                'created' => $product->created,
                'update' => $product->update,
            );
            array_push($data['data'], $data_item);
        }
        echo json_encode($data);
    }
}
