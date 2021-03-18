<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('package_id');
            $table->unsignedInteger('billing_address_id');
            $table->unsignedInteger('shipping_address_id');
            $table->integer('package_quantity');
            $table->float('package_total_price');
            $table->string('payment_method');
            $table->string('payer_id')->nullable()->default('');
            $table->string('payment_id')->nullable()->default('');
            $table->string('order_id')->nullable()->default('');
            $table->boolean('payment_status')->default(false);
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
        Schema::dropIfExists('orders');
    }
}
