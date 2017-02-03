<?php


class CreatePostsTest extends FeatureTestCase
{
    public function test_a_user_create_a_post()
    {
        $title = 'Esta es una pregunta';
        $content = 'Este es el contenido';

        $this->actingAs($user = $this->defaultUser());


        $this->visit(route('posts.create'))
            ->type($title, 'title')
            ->type($content, 'content')
            ->press('Publicar');
//        Then
        $this->seeInDatabase('posts', [
            'title' => $title,
            'content' => $content,
            'pending' => true,
            'user_id' => $user->id,
        ]);
//        Test a user is redirected to the post details after it's been created
        $this->see($title);
    }
}