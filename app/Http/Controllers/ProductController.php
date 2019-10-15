<?php

namespace App\Http\Controllers;

use App\ProductMaster;
use Carbon\Carbon;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index() {

        return view('product-page');

    }

    /**
     * @param Request $request
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function store(Request $request) {

        $requiredArray = ['product-name', 'product-sku', 'product-desc', 'product-tax'];
        if($request->filled($requiredArray)){

            //
            ProductMaster::create([
                'product_name' => $request->input('product-name'),
                'product_sku' => $request->input('product-sku'),
                'product_desc' => $request->input('product-desc'),
                'product_tax' => $request->input('product-tax'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

            //
            return redirect()->route('products-view', ["allProducts" => ProductMaster::all()]);

        }
        //
        return response([
            'status' => false,
            'msg'    => 'Some Params from ['. implode(',',$requiredArray). '] are missing'
        ], 422);

    }

    /**
     * @return Factory|View
     */
    public function view() {

        $allProducts = ProductMaster::selectRaw('product_name as `product_name`,'.
                                                'product_sku as `product_sku`,'.
                                                'product_desc as `product_desc`,'.
                                                'product_tax as `product_tax`,'.
                                                'id as `product_id`,'.
                                                'created_at as `created_at`,'.
                                                'updated_at as `updated_at`')
                                    ->get();
        //
        return view("products-view")->with("allProducts", $allProducts);

    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function delete($id) {

        $deleted = ProductMaster::find($id)->delete();

        return redirect()->route('products-view', ["allProducts" => ProductMaster::all()]);
    }
}
