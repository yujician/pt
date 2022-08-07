<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_data', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->comment('見積番号');
            $table->string('cover_name')->nullable()->comment('表紙見本');
            $table->string('cover_file')->nullable()->comment('表紙ファイル名');
            $table->string('cover_file_path')->nullable()->comment('表紙ファイルパス');
            $table->string('content_name')->nullable()->comment('本文見本');
            $table->string('content_file')->nullable()->comment('本文ファイル名');
            $table->string('content_file_path')->nullable()->comment('本文ファイルパス');
            $table->string('paper_size')->comment('紙サイズ');
            $table->Integer('copies')->comment('部数');
            $table->string('binding')->comment('綴じ方');
            $table->Integer('pages')->comment('本文ページ数');
            $table->string('paper_type1')->comment('表紙紙質');
            $table->string('paper_weight1')->nullable()->comment('表紙重さ');
            $table->string('cover_color')->comment('表紙カラー');
            $table->string('paper_type2')->comment('本文紙質');
            $table->string('paper_weight2')->nullable()->comment('本文重さ');
            $table->string('contents_color')->comment('本文カラー');
            $table->string('proccess')->comment('表紙特殊加工');
            $table->string('is_kadomaru')->nullable()->comment('角丸有無');
            $table->string('is_holds')->nullable()->comment('穴有無');
            $table->string('number_holds')->nullable()->comment('穴数');
            $table->string('proofreading')->comment('校正');
            $table->string('cover_or_content')->nullable()->comment('本紙校正→表紙／本文');
            $table->string('part_or_whole')->nullable()->comment('全体／部分');
            $table->string('number_parts')->nullable()->comment('部分の時のページ数');
            $table->string('printing_fee')->comment('印刷代');
            $table->string('process_fee')->comment('特殊加工代');
            $table->string('proofreading_fee')->comment('校正代');
            $table->string('product_price')->comment('商品代');
            $table->string('postage_fee')->comment('送料');
            $table->string('unit_price')->comment('単価');
            $table->string('subtotal')->comment('小計');
            $table->string('consumption_tax')->comment('消費税');
            $table->string('total_fee')->comment('合計金額');
            $table->string('o_remarks')->nullable()->comment('備考欄');
            $table->string('customer_code')->nullable()->comment('ユーザーID');
            $table->string('o_company')->nullable()->comment('会社名');
            $table->string('o_name')->comment('お名前');
            $table->string('o_mail')->comment('メールアドレス');
            $table->string('o_tel')->comment('電話番号');
            $table->string('o_fax')->nullable()->comment('FAX番号');
            $table->Integer('o_yubin')->comment('郵便番号');
            $table->string('o_addr1')->comment('都道府県');
            $table->string('o_addr2')->comment('市区町村・番地');
            $table->string('o_addr3')->nullable()->comment('建物名');
            $table->boolean('write_userinfo')->nullable()->comment('お客様情報を上書きまたは新規登録するか');
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
        Schema::dropIfExists('order_data');
    }
}
