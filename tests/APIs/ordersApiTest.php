<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\orders;

class ordersApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_orders()
    {
        $orders = orders::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/orders', $orders
        );

        $this->assertApiResponse($orders);
    }

    /**
     * @test
     */
    public function test_read_orders()
    {
        $orders = orders::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/orders/'.$orders->id
        );

        $this->assertApiResponse($orders->toArray());
    }

    /**
     * @test
     */
    public function test_update_orders()
    {
        $orders = orders::factory()->create();
        $editedorders = orders::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/orders/'.$orders->id,
            $editedorders
        );

        $this->assertApiResponse($editedorders);
    }

    /**
     * @test
     */
    public function test_delete_orders()
    {
        $orders = orders::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/orders/'.$orders->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/orders/'.$orders->id
        );

        $this->response->assertStatus(404);
    }
}
