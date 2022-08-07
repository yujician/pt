<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('名前');
            $table->string('email')->unique()->comment('メールアドレス');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->comment('パスワード');
            // $table->string('company_name')->nullable()->comment('会社名');
            // $table->integer('yubin')->comment('郵便番号');
            // $table->string('addr1')->comment('住所1');
            // $table->string('addr2')->comment('住所2');
            // $table->string('addr3')->nullable()->comment('住所3');
            // $table->string('tel')->comment('電話番号');
            // $table->string('fax')->nullable()->comment('FAX番号');
            $table->integer('type_flag')->default('0')->comment('タイプフラグ');
            $table->integer('kanri_flag')->default('0')->comment('管理フラグ');
            $table->integer('reg_date')->default('0')->comment('登録・更新日');
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
        Schema::dropIfExists('users');
    }
}
