<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Bigcommerce\Api\Client;

class GetOrdersController extends Controller

{

    public function index()
    {
        $orders = Client::getOrders();
         return view('customers', compact('orders'));

    }

    //Calculate how many products customer purchased
    public function customerId($customer_id){
        $orders = Client::getOrders();
         $count=0;

        foreach( $orders as $order){
            if($order->customer_id == $customer_id){
                $count++;
            }
        }
            return $count;
    }

    //Get purchased item total amount
    public function GetTotalPurchase($customer_id){
        $orders = Client::getOrders();
        foreach( $orders as $order){
            if($order->customer_id == $customer_id){
                return $order->total_tax;
            }
            else{
                return "0";
            }
        }
    }

}
