<?php

namespace Tests\Feature;

use Tests\TestCase;
use Bigcommerce\Api\Client;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\GetProductCount;
use App\Http\Controllers\GetOrdersController;

class GetProductTest extends TestCase
{

    /** @test **/
    public function test_to_check_product(){

        $response = $this->get('/products/count')->assertStatus(200);

    }
    /** @test **/
    public function test_to_check_product_count(){

        $productCount=new GetProductCount();
        $expected='13';
        $actual=$productCount->show();
        $this->assertEquals($expected,$actual);

    }

    /** @test **/
    public function test_to_check_orders(){

        $response = $this->get('/orders');
        $this->assertNotEmpty($response);

    }
    /** @test **/
    public function test_to_check_get_Order_total_count(){

        $getOrdersController=new GetOrdersController();
        $actual=$getOrdersController->GetTotalPurchase(1);
        $expected='0';
        $this->assertEquals($expected,$actual);


    }


}
