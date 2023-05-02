<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('room_number')->unique();
            $table->foreignId('facility_id')->nullable()->constrained('facilities');
            $table->foreignId('room_type_id')->constrained('room_types');
            $table->enum('room_status', ['booked', 'check_in', 'check_out', 'ready'])->default('ready');
            $table->string('random_str')->unique();
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
        Schema::dropIfExists('rooms');
    }
};
