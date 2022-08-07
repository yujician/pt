件名 : オリジナルノートお見積り内容

お名前 : {{ $request->o_name }}様
                                                      
この度はお見積りいただきありがとうございます。
のちほど担当者よりご連絡いたします。
しばらくお待ちください。
                                          
--------------- お見積り内容 ---------------
お見積り番号 : A{{ $params['$orderNumber']; }}               
                                             
送信日時 : <?php print date("Y-m-d H:i:s");?>
@if ( $request->coverDesign == 'originalCover' )
表紙オリジナルファイル：{{ $request->originalCoverFile }}
{{ asset('uploadfiles') }}/{{ $request->coverFilePath }}
@else
表紙デザイン：{{ $request->coverDesign }}
@endif
@if ( $request->contentDesign == 'originalContent' ) 
本文オリジナルファイル：{{ $request->originalContentFile }}
{{ asset('uploadfiles') }}/{{ $request->contentFilePath }}
                                            
@else
本文デザイン：{{ $request->contentDesign }}
@endif
紙サイズ：{{ $request->paperSize }}
部数：{{ $request->copies }}冊
綴じ方： {{ $request->binding }}
本文ページ数：{{ $request->pages }}ページ
表紙紙質：{{ $request->paperType1 }}
表紙重さ：{{ $request->coverWeight }}
表紙カラー：{{ $request->coverColor }}
表紙カラー表・裏：{{ $request->frontBacks }}
本文紙質：{{ $request->paperType2 }}
本文重さ：{{ $request->contentWeight }}
本文カラー：{{ $request->contentColor }}
表紙特殊加工：{{ $request->proccess }}
角丸有無：{{ $request->isKadomaru }}
穴有無：{{ $request->isHolds }}
穴数：{{ $request->numberHolds }}
校正：{{ $request->proofreading }}              
@if ( $request->proofreading == '本紙校正' )
@if ( $request->coverOrContent == '表紙')
本紙校正時：表紙
@elseif ( $request->coverOrContent == '表紙、本文')
@if ( $request->partOrWhole == '部分')
本紙校正時：表紙、本文=部分、{{ $request->numberParts }}  
@else
本紙校正時：表紙、本文=全体
@endif
@elseif ( $request->coverOrContent == '本文')
@if ( $request->partOrWhole == '部分')
本紙校正時：本文=部分、{{ $request->numberParts }}
@else
本紙校正時：本文=全体
@endif
@endif
@endif
備考欄：{{ $request->o_remarks }}

------------------- 金額 -------------------
印刷代：　　　　{{ $request->printingFee }}円
特殊加工代：　　{{ $request->processFee }}円
校正代：　　　　{{ $request->proofreadingFee }}円
小計：　　　　{{ $request->productPrice }}円
送料：　　　　　{{ $request->postageFee }}円
小計：　　　　　{{ $request->subtotal }}円
消費税：　　　　{{ $request->consumptionTax }}円
合計金額：　　　{{ $request->totalAmountFee }}円
                                           
----------------- ご連絡先 -----------------
@if ( $request->o_company > 0 )
会社名 : {{ $request->o_company }}　様
@endif
お名前 : {{ $request->o_name }}　様
@if ( $request->customer_code > 0 )
ユーザーid : {{ $request->customer_code }}
@else
ユーザーid : ゲスト
@endif
メールアドレス : {{ $request->o_mail }}
電話番号 : {{ $request->o_tel }}
@if ( $request->o_fax > 0 )
FAX番号 : {{ $request->o_fax }}
@endif
ご住所 : 〒{{ $params['$zipcode'] }}          
　　　　　{{ $request->o_addr1 }}{{ $request->o_addr2 }}          
　　　　　　　{{ $request->o_addr3 }}
-------------------------------------------
                                           
見積書(PDF)ダウンロード：
{{ asset('order_pdf') }}/{{ $params['$quotationPath'] }}
                                           
{{-- 株式会社福田印刷 --}}
ジャスミン舎
{{-- URL: http://www.jf1.co.jp/index.html
Mail: jf@jf1.co.jp --}}
Mail: yujician.sumi@gmail.com
