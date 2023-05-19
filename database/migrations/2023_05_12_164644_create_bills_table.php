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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->uuid('invoice_no');
            $table->foreignId('reservation_id')->constrained('reservations');
            $table->float('tax');
            $table->integer('room_charge');
            $table->integer('etc_charge');
            $table->float('total_charge');
            $table->datetime('payment_date')->nullable();
            $table->datetime('payment_due_date');
            $table->enum('status', ['unpaid', 'process', 'paid']);
            $table->string('proof_of_payment')->nullable();
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
        Schema::dropIfExists('bills');
    }
};
