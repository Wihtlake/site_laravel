<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request){
		$user_auth = auth()->user();
		$carts = Cart::with('products')->get();
		// dd($carts);
		return view('products/basket', compact('carts', 'user_auth'));
	}
	public function add(Request $request, $id){
		$user_id = auth()->user()->id;
        $quantity = $request->input('quantity');
		$product_id = $id;
		$cart = Cart::where('user_id', $user_id)
        ->where('product_id', $product_id)
        ->first();
		if ($cart) {
			// Если запись корзины уже существует, увеличить количество
			$cart->quantity += $quantity;
			$cart->save();
		} else {
			// Если запись корзины не существует, создать новую запись
			$cart = Cart::create([
				'user_id' => $user_id,
				'product_id' => $product_id,
				'quantity' => $quantity,
			]);
		}
	
		return redirect()->route('basket.index');
	}
	public function destroy($id){
		$cart = Cart::findOrFail($id);
		$cart->delete();
		return redirect()->route('basket.index');
	}

}
