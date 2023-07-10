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
        Schema::create('consigned_products', function (Blueprint $table) {
            $table->id('cp_id');
            $table->unsignedBigInteger('supp_id');
            $table->foreign('supp_id')->references('supp_id')->on('suppliers')->onDelete('no action');
            $table->unsignedBigInteger('userid');
            $table->foreign('userid')->references('userid')->on('users')->onDelete('no action');
            $table->date('date_received')->format('Y-m-d');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consigned_products');
    }
};
