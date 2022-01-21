<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('size_in_km');
            $table->foreignId('solar_system_id');
        });

        DB::table('planets')->insert([
            [
                'name' => 'Mars',
                'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System,
                being larger than only Mercury.',
                'size_in_km' => 144800000,
                'solar_system_id' => 1
            ],
            [
                'name' => 'Venus',
                'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and
                beauty.',
                'size_in_km' => 460200000,
                'solar_system_id' => 2
            ],
            [
                'name' => 'Earth',
                'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats
                inhabited by living things.',
                'size_in_km' => 510100000,
                'solar_system_id' => 1
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planets');
    }
}
