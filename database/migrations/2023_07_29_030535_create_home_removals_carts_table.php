<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('home_removals_carts', function (Blueprint $table) {
            $table->id();
            $table->integer('userid');
            $table->integer('reference_id');
            $table->json('cart_list')->nullable();
            $table->integer('hour')->default(2);
            $table->integer('minute')->default(0);
            $table->integer('men')->default(0);
            $table->integer('van')->default(1);
            $table->integer('number_of_car')->default(0);
            $table->tinyInteger('congestion')->default(2);
            $table->tinyInteger('packing_service')->default(2);
            $table->integer('year')->default(0);
            $table->integer('month')->default(0);
            $table->integer('day')->default(0);
            $table->integer('arrange_hour')->default(0);
            $table->integer('arrange_minute')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_removals_carts');
    }
};
