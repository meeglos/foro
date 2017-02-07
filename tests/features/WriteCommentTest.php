<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WriteCommentTest extends TestCase
{

    function test_a_user_can_write_a_comment()
    {
        $post = $this->createPost();

        $this->actingAs($this->defaultUser())
            ->visit($post->url)
            ->type('Un comentario', 'comment')
            ->press('Publicar comentario');

        $this->seeInDatabase('comments', [
           'comment' => 'Un comentario',
            'user_id' => $this->defaultUser()->id,
            'post_id' => $post->id,
        ]);

        $this->seePageIs($post->url);
    }
}
