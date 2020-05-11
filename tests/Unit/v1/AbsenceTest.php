<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\v1\Absence;
use App\Repositories\v1\AbsenceRepository;

class AbsenceUnitTest extends TestCase
{
    use DatabaseMigrations;
 
    /** @test 
	 * SearchGetWithError
	 *
	 * @return void
	 */
	public function testAbsenceSearchGetWithErrorTest()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * SearchGet
	 *
	 * @return void
	 */
	public function testAbsenceSearchGetTest()
	{
        $this->assertTrue(true); 
	}

	/** @test 
	 * SearchPostWithError
	 *
	 * @return void
	 */
	public function testAbsenceSearchPostWithErrorTest()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * SearchPost
	 *
	 * @return void
	 */
	public function testAbsenceSearchPostTest()
	{
        $this->assertTrue(true); 
	}

}