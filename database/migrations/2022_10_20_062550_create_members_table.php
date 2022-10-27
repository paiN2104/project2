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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('phone');
            $table->string('email',100);
            $table->string('password',100);
            $table->string('gender',100);
            $table->bigInteger('age');
            $table->date('joindate',100);
            $table->string('address',100);
            $table->string('city',100);
            $table->string('state',100);
            $table->string('country',100);
            $table->string('postcode');
            $table->string('photo',100);
            $table->string('description');

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
        Schema::dropIfExists('members');
    }
};
