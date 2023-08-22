<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_data', function (Blueprint $table) {
            $table->id();

            $table->string('cpf', 11)->unique();
            $table->string('rg', 9)->unique();
            $table->string('phone', 11)->unique();
            $table->string('address', 100);
            $table->string('number', 10);
            $table->string('complement', 50);
            $table->string('district', 50);
            $table->string('city', 50);
            $table->string('state', 2);
            $table->string('country', 50);
            $table->string('zipcode', 8);

            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

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
        Schema::dropIfExists('users_data');
    }
}
