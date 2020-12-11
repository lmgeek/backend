<?php namespace Tests\Repositories;

use App\Models\orders;
use App\Repositories\ordersRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class ordersRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var ordersRepository
     */
    protected $ordersRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->ordersRepo = \App::make(ordersRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_orders()
    {
        $orders = orders::factory()->make()->toArray();

        $createdorders = $this->ordersRepo->create($orders);

        $createdorders = $createdorders->toArray();
        $this->assertArrayHasKey('id', $createdorders);
        $this->assertNotNull($createdorders['id'], 'Created orders must have id specified');
        $this->assertNotNull(orders::find($createdorders['id']), 'orders with given id must be in DB');
        $this->assertModelData($orders, $createdorders);
    }

    /**
     * @test read
     */
    public function test_read_orders()
    {
        $orders = orders::factory()->create();

        $dborders = $this->ordersRepo->find($orders->id);

        $dborders = $dborders->toArray();
        $this->assertModelData($orders->toArray(), $dborders);
    }

    /**
     * @test update
     */
    public function test_update_orders()
    {
        $orders = orders::factory()->create();
        $fakeorders = orders::factory()->make()->toArray();

        $updatedorders = $this->ordersRepo->update($fakeorders, $orders->id);

        $this->assertModelData($fakeorders, $updatedorders->toArray());
        $dborders = $this->ordersRepo->find($orders->id);
        $this->assertModelData($fakeorders, $dborders->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_orders()
    {
        $orders = orders::factory()->create();

        $resp = $this->ordersRepo->delete($orders->id);

        $this->assertTrue($resp);
        $this->assertNull(orders::find($orders->id), 'orders should not exist in DB');
    }
}
