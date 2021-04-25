<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index();
            $table->string('type');
            $table->string('asset_name');
            $table->unsignedBigInteger('resourcable_id')->nullable();
            $table->string('resourcable_type')->nullable();
            $table->double('quantity', 18,8);
            $table->timestamps();

            $table->index(['resourcable_id', 'resourcable_type'], 'resourcable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
