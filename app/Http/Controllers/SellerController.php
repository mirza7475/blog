<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seller;
 use App\Models\product;
class SellerController extends Controller
{
    //
    function getseller()
    {
        $seller =Seller::find(2)->productData;
        return $seller;
    }
}
