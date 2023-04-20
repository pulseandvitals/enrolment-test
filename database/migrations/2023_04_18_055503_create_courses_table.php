<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->text('name');
            $table->string('code');
            $table->string('gpa_requirement');
            $table->boolean('isOpen')->default(1);
            $table->integer('student_capacity');
            $table->bigInteger('user_id');
            $table->boolean('requires_scholarship');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('courses');
    }
};
