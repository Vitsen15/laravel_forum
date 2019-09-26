<?php

namespace Tests\Feature;

use App\Thread;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ThreadsTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * @test
     * @return void
     */
    public function user_can_browse_threads()
    {
        $thread = factory(Thread::class)->create();

        $response = $this->get('/threads');
        $response->assertSee($thread->title);
    }


    /**
     * @test
     * @return void
     */
    public function user_can_see_single_thread()
    {
        $thread = factory(Thread::class)->create();

        $response = $this->get("/thread/{$thread->id}");
        $response->assertSee($thread->title);
    }
}
