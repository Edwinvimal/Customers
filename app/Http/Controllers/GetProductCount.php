<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Bigcommerce\Api\Client;

class GetProductCount extends Controller
{
    //Get the customers purchased product count
    public function show()
    {
        $product = Client::getProductsCount();

        return $product;
    }
}
