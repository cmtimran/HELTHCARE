<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->integer('order_id');
            $table->text('case_description')->nullable();
            $table->text('question_one')->nullable();
            $table->text('question_two')->nullable();
            $table->text('question_three')->nullable();
            $table->text('question_four')->nullable();
            $table->text('question_five')->nullable();
            $table->text('question_six')->nullable();
            $table->text('question_seven')->nullable();
            $table->integer('assigned_doctor')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('case_lists');
    }
}
