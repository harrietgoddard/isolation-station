<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Article;
use App\Comment;

class ArticleTest extends TestCase
{
    use RefreshDatabase;
    
    public function setUp() : void
    {
        parent::setUp();
        $this->article = new Article([
            'first_name' => 'Jenny',
            'last_name' => 'Tetly',
        ]);
    }

    public function testFullName()
    {
        $this->assertSame('Jenny Tetly', $this->article->fullName());
    }

    //testing articles are saved to the database
    public function testArticleFromDb()
    {
        Article::create([
            'first_name' => 'Henry',
            'last_name' => 'Baker'
        ]);

        $articleFromDb = Article::all()->first();

        $this->assertSame('Henry Baker', $articleFromDb->fullName());
    }

    //Articles controller tests

    public function testCreateArticle()
    {
        $this->call('POST', '/create', [
            'first_name' => 'Ben',
            'last_name' => 'Miller'
        ]);

        $articleFromDb = Article::all()->first();

        $this->assertSame('Ben Miller', $articleFromDb->fullName());
    }

    public function testCreateComment()
    {
        $article = Article::create([
            'first_name' => 'Georgia',
            'last_name' => 'Winterborne'
        ]);
        
        $this->call('POST', "articles/{$article->id}", [
            'first_name' => 'Jake',
            'last_name' => 'Fuller',
            'comment' => 'test comment'
        ]);

        $commentFromDb = Comment::all()->first();

        $this->assertSame('Jake', $commentFromDb->first_name);
    }
}
