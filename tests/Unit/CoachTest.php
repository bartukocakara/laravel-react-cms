<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class CoachTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_can_create_post()
    {
        $data = [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph
        ];

        $this->post(route('coach.store'), $data)
            ->assertStatus(201)
            ->assertJson($data);
    }

    public function test_can_update_post()
    {
        $post = factory(Post::class)->create();

        $data = [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph
        ];

        $this->put(route('coach.update', $post->id), $data)
            ->assertStatus(200)
            ->assertJson($data);
    }

    public function test_can_show_post()
    {
        $post = factory(Post::class)->create();

        $this->get(route('coach.show', $post->id))
            ->assertStatus(200);
    }

    public function test_can_delete_post()
    {
        $post = factory(Post::class)->create();

        $this->delete(route('coach.delete', $post->id))
            ->assertStatus(204);
    }

    public function test_can_list_posts()
    {
        $posts = factory(Post::class, 2)->create()->map(function ($post) {
            return $post->only(['id', 'title', 'content']);
        });

        $this->get(route('coach'))
            ->assertStatus(200)
            ->assertJson($posts->toArray())
            ->assertJsonStructure([
                '*' => [ 'id', 'title', 'content' ]
            ]);
    }
}
