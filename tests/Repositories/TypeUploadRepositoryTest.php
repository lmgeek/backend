<?php namespace Tests\Repositories;

use App\Models\TypeUpload;
use App\Repositories\TypeUploadRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class TypeUploadRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var TypeUploadRepository
     */
    protected $typeUploadRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->typeUploadRepo = \App::make(TypeUploadRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_type_upload()
    {
        $typeUpload = TypeUpload::factory()->make()->toArray();

        $createdTypeUpload = $this->typeUploadRepo->create($typeUpload);

        $createdTypeUpload = $createdTypeUpload->toArray();
        $this->assertArrayHasKey('id', $createdTypeUpload);
        $this->assertNotNull($createdTypeUpload['id'], 'Created TypeUpload must have id specified');
        $this->assertNotNull(TypeUpload::find($createdTypeUpload['id']), 'TypeUpload with given id must be in DB');
        $this->assertModelData($typeUpload, $createdTypeUpload);
    }

    /**
     * @test read
     */
    public function test_read_type_upload()
    {
        $typeUpload = TypeUpload::factory()->create();

        $dbTypeUpload = $this->typeUploadRepo->find($typeUpload->id);

        $dbTypeUpload = $dbTypeUpload->toArray();
        $this->assertModelData($typeUpload->toArray(), $dbTypeUpload);
    }

    /**
     * @test update
     */
    public function test_update_type_upload()
    {
        $typeUpload = TypeUpload::factory()->create();
        $fakeTypeUpload = TypeUpload::factory()->make()->toArray();

        $updatedTypeUpload = $this->typeUploadRepo->update($fakeTypeUpload, $typeUpload->id);

        $this->assertModelData($fakeTypeUpload, $updatedTypeUpload->toArray());
        $dbTypeUpload = $this->typeUploadRepo->find($typeUpload->id);
        $this->assertModelData($fakeTypeUpload, $dbTypeUpload->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_type_upload()
    {
        $typeUpload = TypeUpload::factory()->create();

        $resp = $this->typeUploadRepo->delete($typeUpload->id);

        $this->assertTrue($resp);
        $this->assertNull(TypeUpload::find($typeUpload->id), 'TypeUpload should not exist in DB');
    }
}
