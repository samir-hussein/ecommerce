<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Add Item To Cart.
     *
     *
     */
    public function addItem($item_id)
    {
        if (Auth::guard('customer')->check()) {
            $product = Product::find($item_id);

            if ($product && $product->stock_status == "available") {
                $product_in_cart = Cart::where([
                    'product_id' => $product->id,
                    'customer_id' => Auth::guard('customer')->id()
                ])->first();

                $product_price = $product->sale_price;
                if ($product->discount) {
                    $product_price = $product->discount_price;
                }

                Cart::updateOrCreate(
                    [
                        'customer_id' => Auth::guard('customer')->id(),
                        'product_id' => $product->id
                    ],
                    [
                        'unit_price' => $product_price,
                        'total_price' => $product_price * (1 + (($product_in_cart->quantity) ?? 0)),
                        'quantity' => (1 + (($product_in_cart->quantity) ?? 0)),
                    ]
                );
    
                return response()->json(['message' => 'success']);
            }
    
            return response()->json(['message' => 'product not found']);
        }

        return response()->json(['message' => 'not authenticated']);
    }

    /**
     * Show All Cart Items.
     */
    public function read()
    {
        if (Auth::guard('customer')->check()) {
            $all_items = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->join('product_images', 'carts.product_id', '=', 'product_images.product_id')
            ->select('carts.*', 'products.name as product_name', 'products.desc', DB::raw('(SELECT name FROM product_images WHERE product_images.product_id=carts.product_id LIMIT 1) as img_name'))
            ->where("carts.customer_id", Auth::guard('customer')->id())
            ->groupBy("carts.product_id")
            ->orderBy("created_at")
            ->get();

            if (!$all_items->isEmpty()) {
                return response()->json([
                    'items' => $all_items,
                    'total_price' => self::totalAmount(),
                    'message' => "success",
                ]);
            }
            return response()->json(['message' => 'Empty Cart']);
        }

        return response()->json(['message' => "not authenticated"]);
    }

    /**
     * Remove Item From Cart.
     *
     */
    public function removeItem($item_id, $all = null)
    {
        if (Auth::guard('customer')->check()) {
            $product_in_cart = Cart::where([
                'product_id' => $item_id,
                'customer_id' => Auth::guard('customer')->id()
            ])->first();

            if ($product_in_cart) {
                if ($product_in_cart->quantity > 1 && !$all) {
                    $new_quantity = ($product_in_cart->quantity - 1);
                    $product_in_cart->update([
                        'quantity' => $new_quantity,
                        'total_price' => $new_quantity * $product_in_cart->unit_price,
                    ]);
                } elseif ($all == "all" || $product_in_cart->quantity == 1) {
                    $product_in_cart->delete();
                } else {
                    return response()->json(['message' => 'unrecognized parameter']);
                }
    
                return response()->json(['message' => 'success']);
            }
    
            return response()->json(['message' => 'product not found']);
        }

        return response()->json(['message' => 'not authenticated']);
    }

    /**
     * Remove All Items From The Cart.
     *
     */
    public function clear()
    {
        if (Auth::guard('customer')->check()) {
            self::clearCart();
            return response()->json(['message' => 'success']);
        }

        return response()->json(['message' => 'not authenticated']);
    }

    public function numberOfItems()
    {
        if (Auth::guard('customer')->check()) {
            return response()->json(['message' => self::countItems()]);
        }

        return response()->json(['message' => 0]);
    }

    /**
     * Get All Items.
     *
     */
    public static function getCartItems()
    {
        return Cart::where('customer_id', Auth::guard('customer')->id())->get();
    }

    /**
     * Remove All Items From The Cart.
     *
     */
    public static function clearCart()
    {
        Cart::where('customer_id', Auth::guard('customer')->id())->delete();
    }

    public static function totalAmount()
    {
        $total_amount = Cart::where('customer_id', Auth::guard('customer')->id())->sum('total_price');

        return round($total_amount, 2);
    }

    public static function countItems()
    {
        return Cart::where("customer_id", Auth::guard('customer')->id())->sum('quantity');
    }
}
