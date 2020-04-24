<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Impl\InventoryControllerImpl;

class InventoryController extends Controller implements InventoryControllerImpl
{
    public function getPage(){

    }

    public function createStockPage(){

    }

    public function createInventoryTypePage(){

    }

    public function stockListPage(){
        return view('cms/inventory/pages/inventory-list');
    }

    public function inventoryTypePage(){

    }

    public function updateStockPage(Request $request){

    }

    //Function
    //PUT
    public function updateStock(Request $request){

    }

    public function updateInventoryType(Request $request){

    }

    //POST
    public function createStock(Request $request){

    }

    public function createInventoryType(Request $request){

    }

    //DELETE
    public function deleteStock(Request $request){

    }

    public function deleteInventoryType(Request $request){

    }

    //PATCH
    public function addStockQuantity(Request $request){

    }
}
