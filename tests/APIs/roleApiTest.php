<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\role;

class roleApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_role()
    {
        $role = role::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/roles', $role
        );

        $this->assertApiResponse($role);
    }

    /**
     * @test
     */
    public function test_read_role()
    {
        $role = role::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/roles/'.$role->id
        );

        $this->assertApiResponse($role->toArray());
    }

    /**
     * @test
     */
    public function test_update_role()
    {
        $role = role::factory()->create();
        $editedrole = role::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/roles/'.$role->id,
            $editedrole
        );

        $this->assertApiResponse($editedrole);
    }

    /**
     * @test
     */
    public function test_delete_role()
    {
        $role = role::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/roles/'.$role->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/roles/'.$role->id
        );

        $this->response->assertStatus(404);
    }
}
