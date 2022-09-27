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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->integer('user_id')->nullable();
            $table->timestamps();
        });

        DB::table('categories')->insert(
            array(
                'category' => 'Dziennik wdzięczności',
            )
        );

        DB::table('categories')->insert(
            array(
                'category' => 'Dziennik przemyśleń',
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
