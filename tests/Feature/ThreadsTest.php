<?php

namespace Tests\Feature;

use App\Thread;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ThreadsTest extends TestCase
{
    use DatabaseMigrations;

    /** @var Thread */
    protected $thread;

    protected function setUp(): void
    {
        parent::setUp();

        $this->thread = factory(Thread::class)->create();
    }

    /**
     * @test
     * @return void
     */
    public function user_can_browse_threads()
    {
        $this->get('/threads')->assertSee($this->thread->title);
    }


    /**
     * @test
     * @return void
     */
    public function user_can_see_single_thread()
    {
        $this->get("/thread/{$this->thread->id}")->assertSee($this->thread->title);
    }

    /**
     * @test
     * @return void
     */
    public function user_can_see_thread_replies()
    {
        $this->get("/thread/{$this->thread->id}")
            ->assertSee($this->thread->replies()->each(function ($reply) {
            return $reply->body;
        }));
    }
}
