<?php

use Illuminate\Support\Facades\DB;

function getAllCategory(){
    $getAllCategory = DB::table('category')->get();
    return $getAllCategory;
}