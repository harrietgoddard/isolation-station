<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Article;
use App\Comment;

class CommentTest extends TestCase
{
    use RefreshDatabase;
    
    public function setUp() : void
    {
        parent::setUp();
        $this->comment = new Comment([
            'first_name' => 'Jenny',
            'last_name' => 'Tetly',
        ]);
    }

    public function testFullName()
    {
        $this->assertSame('Jenny Tetly', $this->comment->fullName());
    }

    public function testCommentFromDb()
    {
        $article = Article::create([
            'first_name' => 'Emily',
            'last_name' => 'Jackson',
        ]);

        $article->comments()->create([
            'first_name' => 'Mark',
            'last_name' => 'Bolton',
            'comment' => 'test comment'
        ]);

        $commentFromDb = Comment::all()->first();

        $this->assertSame('Mark Bolton', $commentFromDb->fullName());
    }
}
