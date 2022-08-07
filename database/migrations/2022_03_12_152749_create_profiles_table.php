<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('u_id')->unique()->comment('ユーザーID');
            $table->string('company')->nullable()->comment('会社名');
            $table->integer('yubin')->comment('郵便番号');
            $table->string('addr1')->comment('住所1');
            $table->string('addr2')->comment('住所2');
            $table->string('addr3')->nullable()->comment('住所3');
            $table->string('tel')->comment('電話番号');
            $table->string('fax')->nullable()->comment('FAX番号');
            $table->string('biko')->nullable()->comment('備考');
            $table->rememberToken();
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
        Schema::dropIfExists('profiles');
    }
}
