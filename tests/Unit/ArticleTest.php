<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Article;

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

    public function testArticleFromDb()
    {
        Article::create([
            'first_name' => 'Henry',
            'last_name' => 'Baker'
        ]);

        $articleFromDb = Article::all()->first();

        $this->assertSame('Henry Baker', $articleFromDb->fullName());
    }
}
