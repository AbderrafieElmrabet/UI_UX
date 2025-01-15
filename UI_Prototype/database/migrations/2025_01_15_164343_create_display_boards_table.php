<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisplayBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('display_boards', function (Blueprint $table) {
            $table->id(); // Primary key (auto-incrementing)
            $table->string('title'); // Title of the display board
            $table->text('content'); // Content/Description of the event
            $table->dateTime('start_date'); // Start date and time
            $table->dateTime('end_date'); // End date and time
            $table->string('image_path'); // Path to the associated image
            $table->enum('status', ['Active', 'Inactive'])->default('Inactive'); // Status (Active/Inactive)
            $table->timestamps(); // Created at and Updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('display_boards');
    }
}
