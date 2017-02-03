<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    Use DatabaseTransactions;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $user = factory(\App\User::class)->create([
            'name' => 'Miguel Rodriguez',
            'email' => 'miguel@rodriguez.me',
        ]);

        $this->actingAs($user, 'api')
             ->visit('api/user')
             ->see('Miguel Rodriguez')
             ->see('miguel@rodriguez.me');
    }
}
