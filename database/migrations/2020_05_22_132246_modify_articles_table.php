<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('articles', function (Blueprint $table) {
            $table->text('gratitude')->nullable()->change();
            $table->text('achievement')->nullable()->change();
            $table->text('resolution')->nullable()->change();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->text('gratitude')->change();
            $table->text('achievement')->change();
            $table->text('resolution')->change();
        });
    }
}
