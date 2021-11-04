<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function categories()
    {
        $categories = Category::all();
        $sub_categories = SubCategory::all();
        foreach ($categories as $category) {
            $sub = [];
            foreach ($sub_categories as $sub_category) {
                if ($sub_category->category_id == $category->id) {
                    array_push($sub, $sub_category);
                }
            }
            $category["sub_categories"] = $sub;
        }
        return response()->json($categories);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified products.
     */
    public function show(Request $request, $category = null, $sub_category = null)
    {
        $all_products = DB::table('products')
            ->join('product_images', 'products.id', '=', 'product_images.product_id');
        
        // if category selected
        if (isset($category)) {
            $all_products->join('categories', 'categories.id', '=', 'products.category_id');
        }

        // if sub category selected
        if (isset($sub_category)) {
            $all_products->join('sub_categories', 'sub_categories.id', '=', 'products.subcategory_id');
        }

        // if brand selected
        if (isset($request->brand)) {
            $all_products->join('brands', 'brands.id', '=', 'products.brand_id');
        }

        $all_products->select('products.*', DB::raw('(SELECT name FROM product_images WHERE product_images.product_id=products.id LIMIT 1) as img_name'));

        // if category selected
        if (isset($category)) {
            $all_products->where("categories.name", "like", "%$category%");
        }

        // if sub category selected
        if (isset($sub_category)) {
            $all_products->where("sub_categories.name", "like", "%$sub_category%");
        }

        // filter products (on sale)
        if (isset($request->on_sale)) {
            $all_products->whereNotNull("products.discount");
        }

        // filter products depending on rating
        if (isset($request->rating)) {
            $all_products->where("products.rating", ">=", $request->rating);
        }

        // filter products depending on brand
        if (isset($request->brand)) {
            $all_products->where("products.brand_id", $request->brand);
        }

        // filter products depending on price range
        if (isset($request->price_from) && isset($request->price_to)) {
            $all_products->whereBetween('sale_price', [$request->price_from, $request->price_to]);
        }

        $all_products->groupBy("products.id");

        if (!isset($request->high_to_low) && !isset($request->low_to_high)) {
            $all_products->orderBy("created_at", "desc");
        }

        // filter products from high price to low
        if (isset($request->high_to_low)) {
            $all_products->orderBy("sale_price", "desc");
        }

        // filter products from low price to high
        if (isset($request->low_to_high)) {
            $all_products->orderBy("sale_price", "asc");
        }

        $price = $all_products->get();
        $result = $all_products->paginate(5);
    
        return response()->json([$result, $this->min_max_price($price)]);
    }

    public function min_max_price($products)
    {
        if (count($products)) {
            $min = $products[0]->sale_price;
            $max = $products[0]->sale_price;
            foreach ($products as $product) {
                if ($min > $product->sale_price) {
                    $min = $product->sale_price;
                }
                if ($max < $product->sale_price) {
                    $max = $product->sale_price;
                }
            }
            return [
                "min_price" => $min,
                "max_price" => $max
            ];
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
