<?php

use App\Models\HotelOwner;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(HotelOwner::class);
            $table->string('hotel_name');
            $table->string('location');
            $table->integer('pricing');
            $table->boolean('is_liked')->default(false);
            $table->string('hotel_img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
