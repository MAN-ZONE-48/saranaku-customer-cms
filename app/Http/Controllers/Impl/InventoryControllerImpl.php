<?php

namespace App\Http\Controllers\Impl;
use Illuminate\Http\Request;

//Buat ngatur Stock
interface InventoryControllerImpl{
    public function getPage();
    public function createStockPage();
    public function createInventoryTypePage();
    public function stockListPage();
    public function inventoryTypePage();
    public function updateStockPage(Request $request);

    //Function
    //PUT
    public function updateStock(Request $request);
    public function updateInventoryType(Request $request);

    //POST
    public function createStock(Request $request);
    public function createInventoryType(Request $request);

    //DELETE
    public function deleteStock(Request $request);
    public function deleteInventoryType(Request $request);

    //PATCH
    public function addStockQuantity(Request $request);
}
