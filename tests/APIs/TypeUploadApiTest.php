<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\TypeUpload;

class TypeUploadApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_type_upload()
    {
        $typeUpload = TypeUpload::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/type_uploads', $typeUpload
        );

        $this->assertApiResponse($typeUpload);
    }

    /**
     * @test
     */
    public function test_read_type_upload()
    {
        $typeUpload = TypeUpload::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/type_uploads/'.$typeUpload->id
        );

        $this->assertApiResponse($typeUpload->toArray());
    }

    /**
     * @test
     */
    public function test_update_type_upload()
    {
        $typeUpload = TypeUpload::factory()->create();
        $editedTypeUpload = TypeUpload::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/type_uploads/'.$typeUpload->id,
            $editedTypeUpload
        );

        $this->assertApiResponse($editedTypeUpload);
    }

    /**
     * @test
     */
    public function test_delete_type_upload()
    {
        $typeUpload = TypeUpload::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/type_uploads/'.$typeUpload->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/type_uploads/'.$typeUpload->id
        );

        $this->response->assertStatus(404);
    }
}
