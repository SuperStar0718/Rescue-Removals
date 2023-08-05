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
        Schema::create('man_van_carts', function (Blueprint $table) {
            $table->id();
            $table->integer('userid');
            $table->integer('reference_id');
            $table->json('cart_list')->nullable();
            $table->json('from')->nullable();
            $table->json('to')->nullable();
            $table->string('from_stair')->default("Ground floor");
            $table->string('to_stair')->default("Ground floor");
            $table->integer('hour')->default(2);
            $table->integer('minute')->default(0);
            $table->integer('men')->default(1);
            $table->integer('van')->default(1);
            $table->integer('number_of_car')->default(1);
            $table->tinyInteger('congestion')->default(2);
            $table->integer('year')->default(0);
            $table->integer('month')->default(0);
            $table->integer('day')->default(0);
            $table->integer('arrange_hour')->default(8);
            $table->integer('arrange_minute')->default(0);
            $table->string('username')->default("");
            $table->string('user_email')->default("");
            $table->string('phone_number')->default("");
            $table->string('phone_number_2')->default("");
            $table->string('pickup_address1')->default("");
            $table->string('pickup_address2')->default("");
            $table->string('pickup_city')->default("");
            $table->string('pickup_country')->default("");
            $table->string('pickup_name')->default("");
            $table->string('pickup_phone')->default("");

            $table->string('delivery_address1')->default("");
            $table->string('delivery_address2')->default("");
            $table->string('delivery_city')->default("");
            $table->string('delivery_country')->default("");
            $table->string('delivery_name')->default("");
            $table->string('delivery_phone')->default("");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('man_van_carts');
    }
};
