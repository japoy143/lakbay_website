<?php

use App\Models\Customer;
use App\Models\Hotels;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Hotels::class);
            $table->foreignIdFor(Customer::class);
            $table->timestamps();
            $table->date('checkin_date')->nullable();
            $table->date('checkout_date')->nullable();
            $table->string('customer_name');
            $table->string('location');
            $table->integer('phone_number');
            $table->string('payment_method');
            $table->integer('days')->default(1);
            $table->integer('total_payment');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
