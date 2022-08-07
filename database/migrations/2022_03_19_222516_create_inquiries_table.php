<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('u_id')->nullable()->comment('ユーザーID');
            $table->string('company')->comment('会社名');
            $table->string('name')->comment('名前');
            $table->string('email')->comment('メールアドレス');
            $table->string('tel')->nullable()->comment('電話番号');
            $table->string('subject')->comment('件名');
            $table->string('content')->comment('内容');
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
        Schema::dropIfExists('inquiries');
    }
}
