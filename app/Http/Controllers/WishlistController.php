<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    /**
     * Add Item To Wishlist.
     */
    public function addItem($item_id)
    {
        if (Auth::guard('customer')->check()) {
            $product = Product::find($item_id);

            if ($product) {
                $product_in_list = Wishlist::where([
                    'product_id' => $product->id,
                    'customer_id' => Auth::guard('customer')->id()
                ])->first();

                if (!$product_in_list) {
                    Wishlist::create([
                        'product_id' => $product->id,
                        'customer_id' => Auth::guard('customer')->id()
                    ]);

                    return response()->json(['message' => 'success']);
                }

                return response()->json(['message' => "product is already added"]);
            }
    
            return response()->json(['message' => 'product not found']);
        }

        return response()->json(['message' => 'not authenticated']);
    }

    /**
     * Show All Wishlist Items.
     */
    public function read()
    {
        if (Auth::guard('customer')->check()) {
            $all_items = DB::table('wishlists')
            ->join('products', 'wishlists.product_id', '=', 'products.id')
            ->join('product_images', 'wishlists.product_id', '=', 'product_images.product_id')
            ->select('products.id', 'products.name', 'products.sale_price', 'products.stock_status', 'products.rating', 'products.discount', 'products.discount_price', 'products.created_at', DB::raw('(SELECT name FROM product_images WHERE product_images.product_id=wishlists.product_id LIMIT 1) as img_name'))
            ->where("wishlists.customer_id", Auth::guard('customer')->id())
            ->groupBy("wishlists.product_id")
            ->orderBy("created_at")
            ->get();

            if (!$all_items->isEmpty()) {
                return response()->json([
                    'items' => $all_items,
                    'message' => "success",
                ]);
            }
            return response()->json(['message' => 'Empty Wishlist']);
        }

        return response()->json(['message' => "not authenticated"]);
    }

    /**
     * Remove Item From The Wishlist.
     *
     */
    public function removeItem($item_id)
    {
        if (Auth::guard('customer')->check()) {
            $response = Wishlist::where([
                'customer_id' => Auth::guard('customer')->id(),
                'product_id' => $item_id
            ])->delete();

            if ($response) {
                return response()->json(['message' => 'success']);
            }

            return response()->json(['message' => "product not found"]);
        }

        return response()->json(['message' => 'not authenticated']);
    }

    /**
     * Remove All Items From The Wishlist.
     *
     */
    public function clear()
    {
        if (Auth::guard('customer')->check()) {
            Wishlist::where('customer_id', Auth::guard('customer')->id())->delete();
            return response()->json(['message' => 'success']);
        }

        return response()->json(['message' => 'not authenticated']);
    }

    public function numberOfItems()
    {
        if (Auth::guard('customer')->check()) {
            $countItems = Wishlist::where("customer_id", Auth::guard('customer')->id())->count('id');
            return response()->json(['message' => $countItems]);
        }

        return response()->json(['message' => 0]);
    }
}
