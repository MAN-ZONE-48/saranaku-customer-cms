<?php

namespace App\Http\Controllers\Impl;
use Illuminate\Http\Request;

interface SettingsControllerImpl{
    //Page
    public function getPage();

    //Settings
    public function updateSetting(Request $request);

}
