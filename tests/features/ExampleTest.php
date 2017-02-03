<?php

class ExampleTest extends FeatureTestCase
{

    /**
     * A basic functional test example.
     *
     * @return void
     */
    function test_basic_example()
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
