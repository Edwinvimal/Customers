<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use Bigcommerce\Api\Client;
use App\Http\Controllers\GetOrdersController;

class CustomerDetailsController extends BaseController
{

    public function show($id)
    {
        $customer_id = array_map('intval', explode(',', $id));

        $customerdetails= Client::getCustomers($customer_id);

        return view('details', [
            'customer' => $this->getCustomer($id),
            'lifeTimeValue' => 100,
            'count'=>$this->getOrderCount(),
            'total'=>$this->getProductPurchaseTotal($id),
        ]);
    }

    //Fetch the current customer
    public function getCustomer($id){
         $customers = Client::getCustomers();
        foreach($customers as $customer){
            if($customer->id == $id){
                return $customer;
            }
        }
    }

    //Get total order count
    public function getOrderCount(){
        $getProductCount= new GetProductCount();
       return $getProductCount->show();

    }
    //Get purchase list count
    public function getProductPurchaseTotal($id){
        $getPurchaseTotal= new GetOrdersController();
        return $getPurchaseTotal->GetTotalPurchase($id);
    }


}
