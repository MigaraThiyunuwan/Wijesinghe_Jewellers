<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'item_id',
        'quantity',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function addItem($user_id, $item_id)
    {
        $cart = new Cart();
        $cart->user_id = $user_id;
        $cart->item_id = $item_id;
        $cart->quantity = 1;

        $cart->save();
        return true;
    }

    public function getCart($user_id)
    {
        return self::where('user_id', $user_id)->get();
    }
    
    public function deleteItem($user_id, $item_id)
    {
        self::where('user_id', $user_id)->where('item_id', $item_id)->delete();
        return true;
    }

    public function updateQuantity($user_id, $item_id, $quantity)
    {
        return self::where('user_id', $user_id)->where('item_id', $item_id)->update(['quantity' => $quantity]);
    }

    public function clearCart($user_id)
    {
        return self::where('user_id', $user_id)->delete();
    }

    public function getCartTotal($user_id)
    {
        $cart = self::where('user_id', $user_id)->get();
        $total = 0;
        foreach ($cart as $item) {
            $total += Item::where('id', $item->item_id)->first()->price * $item->quantity;
        }
        return $total;
    }

    public function getCartCount($user_id)
    {
        return self::where('user_id', $user_id)->count();
    }

    public function getCartItems($user_id)
    {
        $cart = self::where('user_id', $user_id)->get();
        $items = [];
        foreach ($cart as $item) {
            $item = Item::where('id', $item->item_id)->first();
            $item->quantity = self::where('user_id', $user_id)->where('item_id', $item->id)->first()->quantity;
            array_push($items, $item);
        }
        return $items;
    }

    public function getCartQuantity($user_id, $item_id)
    {
        return self::where('user_id', $user_id)->where('item_id', $item_id)->first()->quantity;
    }

    
    
}