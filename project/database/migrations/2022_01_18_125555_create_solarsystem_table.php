<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolarsystemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solar_systems', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age_in_years');
        });

        DB::table('solar_systems')->insert([
            [
                'name' => 'Pikachu',
                'age_in_years' => 60000
            ],
            [
                'name' => 'Osman',
                'age_in_years' => 35000
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
        Schema::dropIfExists('solar_systems');
    }
}
