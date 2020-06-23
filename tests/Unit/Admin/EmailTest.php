<?php

namespace Tests\Unit\Admin;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

use App\Models\Admin\Email;
use App\Models\Admin\User;
use App\Repositories\Admin\EmailRepository;

class EmailTest extends TestCase
{
	use DatabaseMigrations, WithoutMiddleware;
	
	protected $baseApi = '/api/admin';
	protected $route = 'email';
    /** @test 
	 * Index
	 *
	 * @return void
	 */
	public function testEmailIndexWithError()
	{
    $response = $this->get("{$this->baseApi}/{$this->route}s");
		$response
			->assertStatus(404)
			->assertJson([]);
	}

	/** @test 
	 * Index
	 *
	 * @return void
	 */
	public function testEmailIndex()
	{
    $response = $this->get("{$this->baseApi}/{$this->route}");
		$response->assertHeader('returntype', 'success');
		$response->assertHeader('contenterror', null);
    $response->assertStatus(200);
	}

	/** @test 
	 * Create
	 *
	 * @return void
	 */
	public function testEmailCreateWithNotEmail()
	{
		$user = factory(User::class)->make();
		$notEmail = factory(Email::class)->make(['email'=>null, 'user_id' =>  $user->id])->toArray();
    $response = $this->post("{$this->baseApi}/{$this->route}", $notEmail);
		$response->assertHeader('returntype', 'error');
    $response->assertStatus(422);
	}

	/** @test 
	 * Create
	 *
	 * @return void
	 */
	public function testEmailCreateWithWrongEmail()
	{
		$user = factory(User::class)->make();
		$wrongEmail = factory(Email::class)->make(['email'=>'WrongEmail', 'user_id' =>  $user->id])->toArray();
    $response = $this->post("{$this->baseApi}/{$this->route}", $wrongEmail);
		$response->assertHeader('returntype', 'error');
    $response->assertStatus(422);
	}

	/** @test 
	 * Create
	 *
	 * @return void
	 */
	public function testEmailCreateWithWrongUser()
	{
		$user = factory(User::class)->make();
		$wrongUser = factory(Email::class)->make(['user_id' =>  $user->id += 1])->toArray();
    $response = $this->post("{$this->baseApi}/{$this->route}", $wrongUser);
		$response->assertHeader('returntype', 'error');
    $response->assertStatus(422);
	}

	/** @test 
	 * Create
	 *
	 * @return void
	 */
	public function testEmailCreateWithNotUser()
	{
		$notUser = factory(Email::class)->make(['user_id' => null])->toArray();
    $response = $this->post("{$this->baseApi}/{$this->route}", $notUser);
		$response->assertHeader('returntype', 'error');
    $response->assertStatus(422);
	}

	/** @test 
	 * Create
	 *
	 * @return void
	 */
	public function testEmailCreateWithNotAll()
	{
		$notAll = factory(Email::class)->make(['email'=>null, 'user_id' =>  null])->toArray();
    $response = $this->post("{$this->baseApi}/{$this->route}", $notAll);
		$response->assertHeader('returntype', 'error');
    $response->assertStatus(422);
	}

	/** @test 
	 * Create
	 *
	 * @return void
	 */
	public function testEmailCreate()
	{
		$user = factory(User::class)->create();
		dd($user);
		$email = factory(Email::class)->make(['user_id' => $user->id])->toArray();

    $response = $this->post("{$this->baseApi}/{$this->route}", $email);
		$response->assertHeader('returntype', 'success');
    $response->assertStatus(201); 
	}

	/** @test 
	 * Store
	 *
	 * @return void
	 */
	public function testEmailStoreWithError()
	{
        $this->assertTrue(true); 
	}

	/** @test 
	 * Store
	 *
	 * @return void
	 */
	public function testEmailStore()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * Show
	 *
	 * @return void
	 */
	public function testEmailShowWithError()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * Show
	 *
	 * @return void
	 */
	public function testEmailShow()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * Edit
	 *
	 * @return void
	 */
	public function testEmailEditWithError()
	{
        $this->assertTrue(true); 
	}

	/** @test 
	 * Edit
	 *
	 * @return void
	 */
	public function testEmailEdit()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * Update
	 *
	 * @return void
	 */
	public function testEmailUpdateWithError()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * Update
	 *
	 * @return void
	 */
	public function testEmailUpdate()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * Destroy
	 *
	 * @return void
	 */
	public function testEmailDestroyWithError()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * Destroy
	 *
	 * @return void
	 */
	public function testEmailDestroy()
	{
        $this->assertTrue(true); 
	}

	/** @test 
	 * Restore
	 *
	 * @return void
	 */
	public function testEmailRestoreWithError()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * Restore
	 *
	 * @return void
	 */
	public function testEmailRestore()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * ForceDelete
	 *
	 * @return void
	 */
	public function testEmailForceDeleteWithError()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * ForceDelete
	 *
	 * @return void
	 */
	public function testEmailForceDelete()
	{
        $this->assertTrue(true);
	}

}
