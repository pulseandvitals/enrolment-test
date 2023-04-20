<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('collection_files', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->bigInteger('collection_id');
            $table->text('file_url')->nullable();
            $table->text('file_name')->nullable();
            $table->text('order')->nullable();
            $table->bigInteger('user_id');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('collection_files');
    }
};
