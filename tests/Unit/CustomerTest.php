<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CustomerTest extends TestCase
{
    // use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = factory(\App\User::class)->create();
        $customer = factory(\App\Customer::class)->create();
        $customer->user()->save($user);

        $this->assertTrue($user->model_type == 'App\Customer');
    }
}
