<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ages', function (Blueprint $table) {
            $table->id();
            $table->string('age')->nullable();
            $table->string('male_img')->nullable();
            $table->string('female_img')->nullable();
            $table->integer('cm')->nullable();
            $table->integer('inch')->nullable();
            $table->integer('eur')->nullable();
            $table->integer('uk')->nullable();
            $table->integer('usa')->nullable();
            $table->integer('jap')->nullable();
            $table->timestamps();
        });
        \Illuminate\Support\Facades\DB::table('ages')->insert([
            [
                'age' => "حديث الولادة",
                'male_img' => 'uploads/ages/males/uDhAKF7fGTXqnRvomUHz81NCcysUymahkgvgDgGQ.jpg',
                'female_img' => 'uploads/ages/females/0jcayUqcu1JXC2JKpzUW3WbPBKGtvY0ysLGVXE7U.jpg',
                'cm' => 60,
                'inch' => 23,
                'eur' => 15,
                'uk' => 0,
                'usa' => 0,
                'jap' => 7,
            ],
            [
                'age' => "0-3 أشهر",
                'male_img' => 'uploads/ages/males/37ThF0U4SbbAJ7yR59CbQapnOY8b4fPn6uwGwkQc.jpg',
                'female_img' => 'uploads/ages/females/pCfyxgUrEzLYhv7R08i6VOUXtcc8mUalfeowQB3D.jpg',
                'cm' => 62,
                'inch' => 24,
                'eur' => 16,
                'uk' => 0,
                'usa' => 1,
                'jap' => 8,
            ],
            [
                'age' => "2 سنة",
                'male_img' => 'uploads/ages/males/xrMxqHwI73FcKD5TMeIYUv39G7DqRkGqoz4KCLZt.jpg',
                'female_img' => 'uploads/ages/females/BduOBqMmsobG50ONjxBK9urEeVVp5rnUVkJ4czPy.jpg',
                'cm' => 92,
                'inch' => 36,
                'eur' => 22,
                'uk' => 5,
                'usa' => 7,
                'jap' => 13,
            ],
            [
                'age' => "7 سنوات",
                'male_img' => 'uploads/ages/males/HmpeuwRtDEBJx1a5Tx4O8tjNLZdGcHaU2nNYkSeF.jpg',
                'female_img' => 'uploads/ages/females/mdoqReqytzPHZllKvxNJZAajkXx5dsOCNmha88Br.jpg',
                'cm' => 122,
                'inch' => 48,
                'eur' => 31,
                'uk' => 12,
                'usa' => 13,
                'jap' => 20,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ages');
    }
}
