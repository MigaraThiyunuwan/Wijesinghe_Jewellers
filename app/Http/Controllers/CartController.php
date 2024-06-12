<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Item;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function showCart()
    {
        $item = new Item();
        return view('Cart.cart', compact('item'));
    }
    
    public function addToCart(Request $request)
    {
        $itemFound = false;
        $itemId = $request->input('item_id');
        $userId = $request->input('user_id');

        $order = [
            'user_id' => $userId,
            'item_id' => $itemId,
            'quantity' => 1
        ];

        $orders = session('orders', []);
        foreach ($orders as &$existingOrder) {
            if ($existingOrder['item_id'] == $itemId) {
                $itemFound = true;
                break;
            }
        }

        if (!$itemFound) {
            
            $cart = new Cart();
            if($cart->addItem($userId, $itemId))
            {
                $cart = new Cart();
                $cartDetails = $cart->getCart($userId);
                session(['orders' => $cartDetails]);
                return redirect()->route('shop.productDetails', $itemId)->with('addItemSucces', 'Item added to Cart!');
            }
            
        }else{
            return redirect()->route('shop.productDetails', $itemId)->with('addItemError', 'Item already in Cart!');
        }
        
        return redirect()->route('shop.productDetails', $itemId)->with('addItemError', 'Something went Wrong!');
    }

    public function updateCartItem(Request $request)
    {
        $item = new Item();
        $itemId = $request->input('item_id');
        $userId = $request->input('user_id');
        $itemQuantity = $request->input('mySelect');
        
        $cart = new Cart();
        if($cart->updateQuantity($userId, $itemId, $itemQuantity))
        {
            $orders = session('orders', []);
            foreach ($orders as &$order) {
                if ($order['item_id'] == $itemId && $order['user_id'] == $userId ) {
                    $order['quantity'] = $itemQuantity;
                    break;
                }
            }
            session()->forget('orders');
            session(['orders' => $orders]);
            return redirect()->route('cart.cart')->with(compact('item'))->with('updateItemSuccess', 'Item quantity updated!');
        }
        
        return redirect()->route('cart.cart')->with(compact('item'))->with('updateItemError', 'Failed to update item quantity!');
    }
    
    
}