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
        Schema::table("users", function (Blueprint $table){
            $table->unsignedBigInteger("software_house_id")->nullable();

            $table->foreign("software_house_id")->references("id")->on("software_house");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("users", function (Blueprint $table){
            $table->dropForeign("users_software_house_id_foreign");
            $table->dropColumn("software_house_id");
        });
    }
};
