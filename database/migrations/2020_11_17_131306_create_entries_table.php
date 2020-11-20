<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->timestamps();
            $table->integer('hours');
            $table->integer('minutes');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('difficulty', 255);
            $table->text('comments')->default('');
            $table->string('url', 255);
        });

        Schema::create('entry_user', function (Blueprint $table) {
            $table->foreignId('entry_id')->constrained('entries')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entries');
    }
}
