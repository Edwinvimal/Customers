<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Bigcommerce\Api\Client;
use App\Http\Controllers\GetOrdersController;
use \Debugbar;

class CustomersController extends BaseController
{
    //Get the customers list
    public function index()
    {
        $orderCount=new GetOrdersController;
        $customers = Client::getCustomers();
        //foreach ($customers as $customer) {

        //    $id=$customer->id;
        // $count=$orderCount->customerId($id);
        //}

        return view('customers', compact('customers'));

    }
}
