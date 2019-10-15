<?php

namespace App\Observers;

use App\InventoryManager;
use App\ProductMaster;

class ProductMasterObserver
{
    //
    public function saving(ProductMaster $productMaster) {

        $invManager = new InventoryManager();

        $invManager->product_name = $productMaster->product_name;
        $invManager->product_sku = $productMaster->product_sku;
        $invManager->movement = 'IN';

        $invManager->save();

    }

    public function deleted(ProductMaster $productMaster) {

        $invManager = new InventoryManager();

        $invManager->product_name = $productMaster->product_name;
        $invManager->product_sku = $productMaster->product_sku;
        $invManager->movement = 'OUT';

        $invManager->save();

    }
}
