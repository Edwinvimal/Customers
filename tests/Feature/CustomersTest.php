<?php

namespace Tests\Feature;

use Tests\TestCase;
use Bigcommerce\Api\Client;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\GetOrdersController;
use App\Http\Controllers\CustomerDetailsController;

class CustomersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    public function test_to_check_Get_Customer_list()
    {
        $response = $this->get('/customers')->assertStatus(200);
        $this->assertNotEmpty($response);

    }

    /** @test **/
    public function test_to_check_Individual_customer(){
        $customer =$this->get('/customers/1')->assertStatus(200);
        $this->assertNotEmpty($customer);
    }

    /** @test **/
    public function test_to_check_Customer_count(){
        $getOrdersController=new GetOrdersController();
        $actual=$getOrdersController->customerId(1);
        $expected='0';
        $this->assertEquals($expected,$actual);
    }

    /** @test **/
    public function test_to_get_individual_customer_by_id(){

        $customerDetailsController=new CustomerDetailsController();
        $actual=$customerDetailsController->getCustomer(1);
        $this->assertNotEmpty($actual);
    }

}
