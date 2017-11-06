<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product as ProductModel;
use App\ProductPhoto;
use Illuminate\Support\Facades\DB;

class Product extends Controller
{
    // get product
    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($id) // get id param from http get
    {
        /** @var \App\Product $product */
        $product = ProductModel::findOrFail($id);
        $productPhotos = DB::select('SELECT * FROM product_photo WHERE product_id = ?', [$id]);
        $photos = [];
        if (count($productPhotos)) {
            foreach ($productPhotos as $photo) {
                $photos[] = [
                    'id' => $photo->id,
                    'type' => $photo->type,
                    'url' => $photo->url,
                ];
            }
        }
        return view('product.detail', ['product' => $product->toArray(), 'photos' => $photos]);
    }

    public function upload(Request $request)
    {
        $path = $request->file('fileToUpload')->store('');

        return asset('storage/' . $path);
    }
}