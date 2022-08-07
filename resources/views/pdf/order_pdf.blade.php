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
            @font-face{
                font-family: ipagp;
                font-style: normal;
                font-weight: normal;
                src: url("{{ storage_path('fonts/ipagp.ttf')}}") format('truetype');
            }
            @font-face{
                font-family: ipagp;
                font-style: bold;
                font-weight: bold;
                src: url("{{ storage_path('fonts/ipagp.ttf')}}") format('truetype');
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
                top: 27px;
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
            .to-company {
	            width: 55%;
                height: 20px;
                border-bottom: solid 1px;
            }

            .to-incharge {
	            width: 55%;
                height: 20px;
                border-bottom: dotted 1px;
            }

            .fukuda h1 {
                left: 0;
            }
            .info-container {
                display: flex;
                justify-content: space-between;
                margin: 10px 0 0 0;
	            width: 100%;
                height: 60px;
            }
            .user-info {
                line-height: 0.15em;
                width: 55%;
            }
            .orner-info{
                line-height: 0.15em;
                width: 45%;
            }
            .order-total-fee {
                margin: 170px 0 0 0;
                height: 15px;
                width: 40%;
                border-bottom: solid 2px;
            }
            .table-container {
                margin: 50px 0 0 0;
            }
            table {
                width:100%;
                border-collapse: collapse; /* セルの線を重ねる */
            }
            
            .table1 th {
                border: solid 1px;
                height: 25px;
                padding-top: 4px;
            }
            .table1 td {
                border: solid 1px;
                height: 25px;
                padding-top: 4px;
            }

            .bank {
                font-family: ipagp;
                line-height: 0.5 !important;
                height: 8px !important;
                font-size:0.85rem !important;
                border-top: none !important;
                border-left: none !important;
                border-bottom: none !important;
            }
            .subtotal {
                height: 20px !important;
            }

            /* .table1 td:nth-child(3)  {
                text-align: center;
            } */
            
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
                height: 15px;
                width: 20%;
                /* border-bottom: solid 2px; */
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

      <div class="table-container">
        <table class="table">

        <div class="tofukuda-container">
          @if ( $orderNote->o_company > 0 )
            <div class="to-company"><h2>{{ $orderNote->o_company }}&nbsp;&nbsp;御中&nbsp;</h2></div>
          @else
          <div class="to-company"><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            御中</h2></div>
          @endif
        </div>
        <div class="tofukuda-container">
            <div class="to-incharge"><h3>&nbsp;&nbsp;&nbsp;&nbsp;ご担当 &nbsp;&nbsp;{{ $orderNote->o_name }}&nbsp;様&nbsp;&nbsp;</h3></div>
        </div>
        <div class="row info-container">
          <table class="table border-0">
            <tr><td class="order-width" style="width: 55%;line-height:1.1;">〒{{ $zipcode }}</td><td></td></tr>
            <tr><td class="order-width" style="line-height:1.1;">{{ $orderNote->o_addr1 }}{{ $orderNote->o_addr2 }}</td><td></td></tr>
          @if ( $orderNote->o_addr3 > 0 )
            <tr><td class="order-width" style="line-height:1.1;">&nbsp;&nbsp;&nbsp;&nbsp;{{ $orderNote->o_addr3 }}</td><td></td></tr>
          @else
            <tr><td class="order-width" style="line-height:1.1;"></td>
          @endif
            <tr><td class="order-width" style="line-height:1.1;">TEL&nbsp;&nbsp;{{ $orderNote->o_tel }}</td><td></td></tr>
          @if ( $orderNote->o_fax > 0 )
            <tr><td class="order-width" style="line-height:1.1;">FAX&nbsp;&nbsp;{{ $orderNote->o_fax }}</td>
          @else
            <tr><td class="order-width" style="line-height:1.1;"></td>
          @endif
                                                                      <td style="font-size:1.1rem;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ジャスミン舎　株式会社</td></tr>
            <tr><td class="order-width" style="line-height:1.2;font-size:0.85rem;border-bottom:1px solid;width:55%;padding-top:0.6rem;">
                        下記のとおり、御見積書（兼請求書）送付致します。</td>
                    <td style="font-size:1rem;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;代表取締役　鷲見　祐司</td></tr>
            <tr><td class="order-width" style="line-height:1;font-family:ipagp;font-size:0.85rem;padding-top:0.6rem;">
                        ご注意&nbsp;&nbsp;この御見積書（兼請求書）は入金を催促するものでは</td>
                    <td style="line-height:1.1;font-size:0.85rem;padding-top:0.6rem;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        〒493-0000</td></tr>
            <tr><td class="order-width" style="line-height:1;font-family:ipagp;font-size:0.85rem;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        有りません。&nbsp;内容に納得され入稿される時点でご入金</td>
                    <td style="line-height:1.1;font-size:0.85rem;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        愛知県一宮市〇〇〇〇〇〇</td></tr>
            <tr><td class="order-width" style="line-height:1;font-family:ipagp;font-size:0.85rem;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        頂くための書類です。その他ご不明な点が有りましたら</td>
                    <td style="line-height:1.1;font-size:0.8rem;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        TEL&nbsp;090-000-1111&nbsp;&nbsp;FAX&nbsp;090-000-1112</td></tr>
            <tr><td class="order-width" style="line-height:1;font-family:ipagp;font-size:0.85rem;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        お問い合わせ下さい。</td><td style="line-height:1.1;font-size:0.8rem;"></td></tr>
          </table>
        </div>
            
        <div class="order-total-fee">
            <h2>合計金額&nbsp;&nbsp;&nbsp;¥{{ $orderNote->total_fee }}.-</h2>
        </div>

        <div class="orderinfo-container">
            <div class="order-fee-text">
                {{-- <h2>お見積金額</h2> --}}
            </div>
            <div class="fee-container">
                <table class="table1">
                    <tr><th class="product-name" style="width: 55%;">商品名</th><th class="copies">数　量</th><th class="unit">単　位</th><th class="unit-price">単　価</th><th class="total-fee">金　額</th></tr>
                    <tr><td>&nbsp;&nbsp;{{ $orderNote->paper_size }}&nbsp;&nbsp;オリジナルノート</td><td class="to-right">{{ $orderNote->copies }}&nbsp;</td>
                        <td class="to-center">部</td><td class="to-right">{{ $orderNote->unit_price }}&nbsp;</td>
                        <td class="to-right">{{ $orderNote->product_price }}.-&nbsp;</td></tr>
                    <tr><td>&nbsp;&nbsp;表　紙
                            &nbsp;&nbsp;{{ $orderNote->paper_type1 }}
                            &nbsp;&nbsp;{{ $orderNote->paper_weight1 }}
                            &nbsp;&nbsp;{{ $orderNote->cover_color }}</td>
                            <td></td><td></td><td></td><td></td></tr>
                    <tr><td>&nbsp;&nbsp;本　文
                            &nbsp;&nbsp;{{ $orderNote->paper_type2 }}&nbsp;
                            &nbsp;&nbsp;{{ $orderNote->paper_weight2 }}&nbsp;
                            &nbsp;&nbsp;{{ $orderNote->contents_color }}</td>
                            <td></td><td></td><td></td><td></td></tr>
                    <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;{{ $orderNote->pages }}&nbsp;頁&nbsp;</td>
                            <td></td><td></td><td></td><td></td></tr>
                    <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;{{ $orderNote->binding }}&nbsp;&nbsp;
                            &nbsp;&nbsp;{{ $orderNote->proccess }}</td>
                            <td></td><td></td><td></td><td></td></tr>
                    <tr><td>&nbsp;&nbsp;{{ $orderNote->is_kadomaru }}&nbsp;&nbsp;
                            {{ $orderNote->is_holds }}&nbsp;&nbsp;{{ $orderNote->number_holds }}</td>
                            <td></td><td></td><td></td><td></td></tr>
                    <tr><td>&nbsp;
                        @if ( $orderNote->proofreading == '本紙校正' )
                          @if ( $orderNote->cover_or_content == '表紙')
                            本紙校正=表紙
                          @elseif ( $orderNote->cover_or_content == '表紙、本文')
                            @if ( $orderNote->part_or_whole == '部分')
                              本紙校正&nbsp;&nbsp;表紙&nbsp;&nbsp;本文=部分（{{ $orderNote->number_parts }}ページ分）
                            @else
                              本紙校正=表紙&nbsp;&nbsp;本文=全体
                            @endif
                          @elseif ( $orderNote->cover_or_content == '本文')
                            @if ( $orderNote->part_or_whole == '部分')
                              本紙校正&nbsp;&nbsp;本文=部分（{{ $orderNote->number_parts }}ページ分）
                            @else
                              本紙校正&nbsp;:&nbsp;本文=全体
                            @endif
                          @endif
                        @endif
                        </td><td></td><td></td><td></td><td></td></tr></tr>
                    <tr><td></td><td></td><td></td><td></td><td></td></tr></tr>
                    <tr><td>&nbsp;&nbsp;送料</td><td class="to-right">1&nbsp;</td>
                        <td class="to-center">所</td><td class="to-right">1,000&nbsp;</td>
                        <td class="to-right">{{ $orderNote->postage_fee }}.-&nbsp;</td></tr>
                    <tr><td></td><td></td><td></td><td></td><td></td></tr></tr>
                    <tr><td style="line-height:1.1;font-size:0.8rem;">&nbsp;&nbsp;&nbsp;&nbsp;以上ご確認下さい。</td><td></td><td></td><td></td><td></td></tr></tr>
                    {{-- <tr><td></td><td></td><td></td><td></td><td></td></tr></tr> --}}
                    <tr><td colspan="5" style="line-height:1;font-family:ipagp;font-size:1.1rem;">&nbsp;&nbsp;ご注意&nbsp;&nbsp;
                    <span style="line-height:1;font-family:ipamp;font-size:1rem;">原稿内容によっては、印刷を引き受けできない事があります。予め御了承下さい。</span></td></tr>
                    <tr><td class="bank"></td><td class="subtotal to-right" rowspan="2" colspan="2">小&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;計&nbsp;&nbsp;</td>
                        <td class="to-right" rowspan="2" colspan="2">{{ $orderNote->subtotal }}.-&nbsp;</td></tr>
                    <tr><td class="bank" style="padding-bottom:5px;">&nbsp;&nbsp;銀行振込</td></tr>
                    <tr><td class="bank" style="padding-top:5px;">&nbsp;&nbsp;&nbsp;&nbsp;北九州銀行大里支店&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;普通預金&nbsp;&nbsp;&nbsp;&nbsp;2222222</td><td class="subtotal to-right" rowspan="2" colspan="2">消&nbsp;&nbsp;費&nbsp;&nbsp;税&nbsp;&nbsp;</td>
                        <td class="to-right" rowspan="2" colspan="2">{{ $orderNote->consumption_tax }}.-&nbsp;</td></tr>
                    <tr><td class="bank">&nbsp;&nbsp;&nbsp;&nbsp;三井住友銀行北九州支店&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;普通預金&nbsp;&nbsp;&nbsp;&nbsp;0000000</td></tr>
                    <tr><td class="bank" style="padding-bottom:5px;">&nbsp;&nbsp;&nbsp;&nbsp;西日本シティ銀行門司駅前支店&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;普通預金&nbsp;&nbsp;&nbsp;&nbsp;1111111</td><td class="subtotal to-right" rowspan="2" colspan="2">合&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;計&nbsp;&nbsp;</td>
                        <td class="to-right" rowspan="2" colspan="2">{{ $orderNote->total_fee }}.-&nbsp;</td></tr>
                    <tr><td class="bank" style="margin-top:8px;padding-top:8px;">&nbsp;&nbsp;口座名&nbsp;&nbsp;ジャスミン舎（株）&nbsp;&nbsp;鷲見祐司</td></tr>
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