<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Item;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {
        $cart = new Cart();
        $order = new Order();
        $itemOBJ = new Item();
        $order->user_id = $request->user_id;
        $order->totalPrice = $cart->getCartTotal($request->user_id);
        $order->deliveryAddress = $request->deliveryAddress;
        $order->country = $request->countries;
        $order->receiverName = $request->receiverName;
        $order->contact_no = $request->contact_no;
        $order->placed_at = now();
        //save order in database
        $order->save();

        // Retrieve cart items from session
        $cartItems = session('orders', []);

        // Save each item in the order_items table
        foreach ($cartItems as $item) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->item_id = $item['item_id'];
            $orderItem->itemQuantity = $item['quantity'];

            //reduce item quantity in database
            $currentQuantity = $itemOBJ->getItemQuantity($item['item_id']);
            $newQuantity = $currentQuantity - $item['quantity'];
            $itemOBJ->changequantity($item['item_id'], $newQuantity);
            
            $orderItem->save();
        }
        //clear cart database
        $cart->clearCart($request->user_id);
        //clear cart session
        session()->forget('orders');

        return redirect()->route('user.profile')->with('orderSuccess', 'Order placed successfully');
    }

    public function changestatus(Request $request)
    {
        $order = new Order();
        $order->changeOrderStatus($request->order_id, $request->status);
        return redirect()->route('manager.profile');
    }

    public function changecolumn(Request $request)
    {
        $order = new Order();
        $order->changeOrderProcess($request->order_id, $request->columnName);
        return redirect()->route('manager.profile');
    }
}