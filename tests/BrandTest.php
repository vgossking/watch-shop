<?php

use App\Brand;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BrandTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */



    public function testCaseOne()
    {
        $brand = Brand::findOrFail(2);
        $this->assertTrue($brand->hasChildren());

    }
}
