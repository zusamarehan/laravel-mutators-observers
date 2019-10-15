<?php

namespace App\Http\Controllers;

use App\InventoryManager;
use App\ProductMaster;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    //
    public static function view() {

        return view("inventory-view")->with("inventoryDetails", InventoryManager::all());
    }
}
