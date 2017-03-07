<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    private $user;
    protected function setUp()
    {
        $this->user = new User();
    }

    public function testCase1()
    {
        $user = $this->user;
        $user->first_name = 'Vu';
        $user->last_name = 'Vuong';
        $fullName = $user->getFullName();
        $this->assertEquals('Vu Vuong', $fullName);
    }


}
