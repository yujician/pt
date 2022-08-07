<!DOCTYPE html>
<html>
    <head>
        <title>pdf output test</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <style type="text/css">
            @font-face{
                font-family: ipamp;
                font-style: normal;
                font-weight: normal;
                src: url("{{ storage_path('fonts/ipamp.ttf')}}") format('truetype');
            }
            @font-face{
                font-family: ipamp;
                font-style: bold;
                font-weight: bold;
                src: url("{{ storage_path('fonts/ipamp.ttf')}}") format('truetype');
            }
            body {
                font-family: ipamp;
                line-height: 80%;
            }
            hr {
                color: #666;
            }
            .container {
                width: 100%;
                margin: 0 auto;
            }
            .number-container {
                position: relative;
                margin: 0 0 0 auto;
	            width: 16%;
                height: 10px;
            }
            .number h3{
                position: absolute;
                right: 0;
                width: 100%;
                border-bottom: solid 1px;
            }
            .title-container {
                position: relative;
                margin: 0 0 15px 0;
	            width: 100%;
                height: 20px;
            }
            .title h1 {
                position: absolute;
                left: 50%;
                font-weight: bold;
                border-bottom: solid 2px;
                transform: translateX(-50%);
            }
            .date-container {
                position: relative;
                margin: 0 0 0 auto;
	            width: 20%;
                height: 8px;
            }
            .date p{
                position: absolute;
                right: 0;
                width: 100%;
                border-bottom: solid 1px;
            }
            .tofukuda-container {
                position: relative;
                margin: 20px 0 0 0;
	            width: 45%;
                height: 20px;
            }
            .fukuda h1 {
                position: absolute;
                left: 0;
            }
            .fukudamail-container {
                position: relative;
                margin: 0 0 15px auto;
	            width: 36%;
                height: 10px;
            }
            .fukuda-mail p{
                position: absolute;
                right: 0;
                font-size: 1.0rem;
                width: 100%;
            }
            .fukudafax-container {
                position: relative;
                margin: 10px 0 20px auto;
	            width: 30%;
                height: 10px;
            }
            .fukuda-fax p{
                position: absolute;
                right: 0;
                font-size: 1.0rem;
                width: 100%;
            }
            .userinfo-area-container {
                position: relative;
                margin: 0 0 0 30px;
	            width: 100%;
                height: 200px;
            }
            .userinfo-container {
                position: relative;
                margin: 10px 0 0 0;
	            width: 100%;
                height: 17px;
            }
            .user-info h3 {
                position: absolute;
                left: 0;
                border-bottom: solid 1px;
                width: 100%;
            }
            .order-total-fee {
                margin: 30px 0 0 0;
                height: 15px;
                width: 40%;
                border-bottom: solid 2px;
            }
            .table-container {
                margin: 30px 0 0 0;
            }
            table {
                width:100%;
                border-collapse: collapse; /* セルの線を重ねる */
            }
            
            .table1 th {
                border: solid 1px;
                height: 25px;
                width: 125px;
                padding-top: 4px;
            }
            .table1 td {
                border: solid 1px;
                height: 23px;
                padding-top: 4px;
            }
            .table2 th {
                border: solid 1px;
                height: 23px;
                padding-top: 4px;
            }
            .table2 td {
                border: solid 1px;
                height: 23px;
                padding-top: 4px;
            }

            .table2 td:nth-child(3)  {
                text-align: center;
            }
            
            .to-right {
                text-align: right;
            }

            .to-center {
                text-align: center;
            }
  

            /* .product-name {
                width: 20px;
            }
            .copies {
                width: 20px;
            }
            .unit {
                width: 15px;
            }
            .unit-price {
                width: 20px;
            }
            .total-fee {
                width: 20px;
            } */
            .order-fee-text {
                margin: 18px 0 15px 0;
                height: 15px;
                width: 20%;
                border-bottom: solid 2px;
            }
            .order-fee {
                border-bottom: solid 2px;
                height: 15px;
                width: 100%;
            }

        </style>
    </head>
    <body>
    <div class="container">
        <div class="number-container">
            <div class="number"><h3>No.&nbsp;&nbsp;A{{ $order_number }}</h3></div>
        </div>
        <div class="title-container">
          <div class="title"><h1>&nbsp;御見積書（兼請求書）&nbsp;</h1></div>
        </div>
        <div class="date-container">
            <div class="date"><p>{{ \Carbon\Carbon::now()->format("Y 年 n 月 j 日") }}</p></div>
        </div>
        <div class="tofukuda-container">
            <div class="tofukuda"><h2>ジャスミン舎 行&nbsp;</h2></div>
        </div>
        <div class="fukudamail-container">
            <div class="fukuda-mail"><p>メール&nbsp;:&nbsp;&nbsp;yujician.sumi@gmail.com</p></div>
        </div>
        <div class="fukudafax-container">
            <div class="fukuda-fax"><p>FAX&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;090-000-0000</p></div>
        </div>
        <div class="userinfo-container">
            <div class="user-info"><h3>御　社　名&nbsp;:
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $orderNote->o_company }}</h3></div>
        </div>
        <div class="userinfo-container">
            <div class="user-info"><h3>御担当者様&nbsp;:
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $orderNote->o_name }}</h3></div>
        </div>
        <div class="userinfo-container">
            <div class="user-info"><h3>御　住　所&nbsp;:
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;〒{{ $zipcode }}
                &nbsp;&nbsp;{{ $orderNote->o_addr1 }}{{ $orderNote->o_addr2 }}</h3></div>
        </div>
        <div class="userinfo-container">
            <div class="user-info"><h3>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $orderNote->o_addr3 }}</h3></div>
        </div>
        <div class="userinfo-container">
            <div class="user-info"><h3>電 話 番 号&nbsp;:
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $orderNote->o_tel }}</h3></div>
        </div>
        <div class="userinfo-container">
            <div class="user-info"><h3>ＦＡＸ番&nbsp;:
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                {{ $orderNote->o_fax }}</h3></div>
        </div>
        <div class="userinfo-container">
            <div class="user-info"><h3>メ　ー　ル&nbsp;:
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                {{ $orderNote->o_mail }}</h3></div>
        </div>

        <div class="order-total-fee">
            <h2>合計金額&nbsp;&nbsp;&nbsp;¥{{ $orderNote->total_fee }}.-</h2>
        </div>

        <div class="table-container">
        <table class="table1">
        <tr><th>商品名</th>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $orderNote->paper_size }}&nbsp;&nbsp;オリジナルノート</td></tr>
        <tr><th>部数</th>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $orderNote->copies }}&nbsp;冊</td></tr>
        <tr><th>表　紙</th>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $orderNote->paper_type1 }}&nbsp;、
                &nbsp;&nbsp;{{ $orderNote->paper_weight1 }}&nbsp;kg&nbsp;、
                &nbsp;&nbsp;{{ $orderNote->cover_color }}</td></tr>
        <tr><th>本　文</th>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $orderNote->pages }}&nbsp;ページ&nbsp;、
                &nbsp;&nbsp;{{ $orderNote->paper_type2 }}&nbsp;、
                &nbsp;&nbsp;{{ $orderNote->paper_weight2 }}&nbsp;kg&nbsp;、
                &nbsp;&nbsp;{{ $orderNote->contents_color }}</td></tr>
        <tr><th>製　本</th><td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $orderNote->binding }}</td></tr>
        <tr><th>表紙特殊加工</th><td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $orderNote->proccess }}</td></tr>
        <tr><th>オプション</th><td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $orderNote->is_kadomaru }}&nbsp;&nbsp;
                    {{ $orderNote->is_holds }}&nbsp;&nbsp;{{ $orderNote->number_holds }}</td></tr>
        <tr><th>本刷校正</th><td>&nbsp;&nbsp;&nbsp;
                @if ( $orderNote->proofreading == '本紙校正' )
                  @if ( $orderNote->cover_or_content == '表紙')
                      本紙校正&nbsp;:&nbsp;表紙
                  @elseif ( $orderNote->cover_or_content == '表紙、本文')
                    @if ( $orderNote->part_or_whole == '部分')
                      本紙校正&nbsp;:&nbsp;表紙、本文=部分、{{ $orderNote->number_parts }}
                    @else
                      本紙校正&nbsp;:&nbsp;表紙、本文=全体
                    @endif
                  @elseif ( $orderNote->cover_or_content == '本文')
                    @if ( $orderNote->part_or_whole == '部分')
                      本紙校正&nbsp;:&nbsp;本文=部分、{{ $orderNote->number_parts }}
                    @else
                      本紙校正&nbsp;:&nbsp;本文=全体
                    @endif
                  @endif
                @endif
                </td>
        </tr>
        <tr><th>その他</th><td>&nbsp;&nbsp;&nbsp;
          @if ( $orderNote->o_remarks > 0 )
              記載あり&nbsp;&nbsp;（メール本文をご覧下さい）</td>
          @else
              記載なし</td>
          @endif
        </tr>
        </table>

        <div class="orderinfo-container">
            <div class="order-fee-text">
                <h2>お見積金額</h2>
            </div>
            <div class="fee-container">
                <table class="table2">
                    <tr><th class="product-name">商品名</th><th class="copies">数　量</th><th class="unit">単　位</th><th class="unit-price">単　価</th><th class="total-fee">金　額</th></tr>
                    <tr><td>&nbsp;&nbsp;{{ $orderNote->paper_size }}&nbsp;&nbsp;オリジナルノート</td><td class="to-right">{{ $orderNote->copies }}&nbsp;</td>
                        <td class="to-center">部</td><td class="to-right">{{ $orderNote->unit_price }}&nbsp;</td>
                        <td class="to-right">{{ $orderNote->product_price }}.-&nbsp;</td></tr>
                    <tr><td>&nbsp;&nbsp;送料</td><td class="to-right">1&nbsp;</td>
                        <td class="to-center">所</td><td class="to-right">1,000&nbsp;</td>
                        <td class="to-right">{{ $orderNote->postage_fee }}.-&nbsp;</td></tr>
                    <tr><td>&nbsp;&nbsp;小計</td><td class="to-right" colspan="4">{{ $orderNote->subtotal }}.-&nbsp;</td></tr>
                    <tr><td>&nbsp;&nbsp;消費税</td><td class="to-right" colspan="4">{{ $orderNote->consumption_tax }}.-&nbsp;</td></tr>
                    <tr><td>&nbsp;&nbsp;合計金額</td><td class="to-right" colspan="4">{{ $orderNote->total_fee }}.-&nbsp;</td></tr>
                </table>
            </div>
            {{-- <div class="order-fee"><h3>小　計&nbsp;:&nbsp;&nbsp;{{ $orderNote->subtotal }}円&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                消費税&nbsp;:&nbsp;&nbsp;{{ $orderNote->consumption_tax }}円&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                合計金額&nbsp;:&nbsp;&nbsp;{{ $orderNote->total_fee }}円</h3>
            </div> --}}
            {{-- <div class="order-fee"><h4>消費税：&nbsp;&nbsp;&nbsp;&nbsp;{{ $orderNote->consumption_tax }}円</h4></div>
            <div class="order-fee"><h4>合計金額：&nbsp;&nbsp;{{ $orderNote->total_fee }}円</h4></div> --}}
        </div>
    </div>
    </body>
</html>