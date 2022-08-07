<x-order-base>
  <x-slot name="title">お見積り</x-slot>
    
  <x-slot name="slot">
    <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
    <span class="p-country-name" style="display:none;">Japan</span>

<section class="py-8 py-md-8">
  {{-- <div class="container order-wrapper"> --}}
  <div class="container">
    {{-- <div class="margin-space">&nbsp;</div> --}}
    <div class="section-title justify-content-center mb-4 order-mb-md-8 mb-md-8 wow fadeInUp">
      <span class="shape shape-left bg-info"></span>
      <h2 class="text-danger">オリジナルノートお見積り</h2>
      <span class="shape shape-right bg-info"></span>
    </div>
    <form method="post" action="{{ route('send_order_note') }}" class="h-adr" enctype='multipart/form-data'>
      @csrf
      
      <div class="container">
        <div class="image-group1">
            <label for="size">表紙デザイン<span class="text-danger">*</span></label>
            <label class="image-group1" id="coverVali"></label>
        </div>
        <div class="isOriginal-wrapper">
          <div class="covers">
            <input class="cover-select" id="isCoverExisting" type="radio" name="ExistingOrOriginal" value="existing" checked >
            <label for="size" class="cover-name" style="font-size: 1.01rem">既存のデザイン</label>
          </div>
          <div class="covers">
            <input class="cover-select" id="isCoverOriginal" type="radio" name="ExistingOrOriginal" value="original">
            <label for="size" class="cover-name" style="font-size: 1.01rem">表紙デザインをアップロードする</label>
          </div>
          <div class="original-cover-wrapper">
            <div class="original-btn">
              <input type="file" class="upload-btn" id="originalCoverFile" name="originalCoverFile" value="">
              {{-- <input type="file" class="upload-btn" id="originalCoverFile" name="originalCoverFile" accept="image/*,.pdf" value=""> --}}
            </div>
          </div>
        </div>
        <div class="cover-container" id="coverContainer">
          <div class="cover-containersub">
            <div class="covers">
              <a href="{{ asset('img/note/hyoushi/hyoshi_01.jpg') }}" data-lightbox="group"><img src="{{ asset('img/note/hyoushi/hyoshi_01.jpg') }}" style="height: 312px; width: 220px" alt="hyoushi-01"></a>
              {{-- <img class="cover-design" style="height: 312px; width: 220px" src="{{ asset('img/note/hyoushi/hyoshi_01.jpg') }}" alt="hyoushi-01"> --}}
              <input class="cover-select" id="coverSelect1" type="radio" name="coverDesign" value="hyoushi-01" checked >
              <label for="size" class="cover-name">スタンダード1</label>
            </div>
            <div class="covers">
              <a href="{{ asset('img/note/hyoushi/hyoshi_02.jpg') }}" data-lightbox="group"><img src="{{ asset('img/note/hyoushi/hyoshi_02.jpg') }}" style="height: 312px; width: 220px" alt="hyoushi-02"></a>
              <input class="cover-select" id="coverSelect2" type="radio" name="coverDesign" value="hyoushi-02">
              <label for="size" class="cover-name">スタンダード2</label>
            </div>
            <div class="covers">
              <a href="{{ asset('img/note/hyoushi/hyoshi_03.jpg') }}" data-lightbox="group"><img src="{{ asset('img/note/hyoushi/hyoshi_03.jpg') }}" style="height: 312px; width: 220px" alt="hyoushi-03"></a>
              <input class="_select" id="coverSelect3" type="radio" name="coverDesign" value="hyoushi-03">
              <label for="size" class="cover-name">趣味</label>
            </div>
            <div class="covers">
              <a href="{{ asset('img/note/hyoushi/hyoshi_04.jpg') }}" data-lightbox="group"><img src="{{ asset('img/note/hyoushi/hyoshi_04.jpg') }}" style="height: 312px; width: 220px" alt="hyoushi-04"></a>
              <input class="cover-select" id="coverSelect4" type="radio" name="coverDesign" value="hyoushi-04">
              <label for="size" class="cover-name">学習塾ノート1</label>
            </div>
            <div class="covers">
              <a href="{{ asset('img/note/hyoushi/hyoshi_05.jpg') }}" data-lightbox="group"><img src="{{ asset('img/note/hyoushi/hyoshi_05.jpg') }}" style="height: 312px; width: 220px" alt="hyoushi-05"></a>
              <input class="cover-select" id="coverSelect5" type="radio" name="coverDesign" value="hyoushi-05">
              <label for="size" class="cover-name">学習塾ノート2</label>
            </div>
            <div class="covers">
              <a href="{{ asset('img/note/hyoushi/hyoshi_06.jpg') }}" data-lightbox="group"><img src="{{ asset('img/note/hyoushi/hyoshi_06.jpg') }}" style="height: 312px; width: 220px" alt="hyoushi-06"></a>
              <input class="cover-select" id="coverSelect6" type="radio" name="coverDesign" value="hyoushi-06">
              <label for="size" class="cover-name">スポーツ</label>
            </div>
          </div>
        </div>

        <div class="image-group1" id="coverVali"></div>
        <div class="image-group1">
          <label for="size">本文デザイン<span class="text-danger" id="contentVali">*</span></label>
        </div>
        <div class="isOriginal-wrapper">
          <div class="covers">
            <input class="cover-select" id="isContentExisting" type="radio" name="isContentOriginal" value="existing" checked >
            <label for="size" class="cover-name" style="font-size: 1.01rem">既存のデザイン</label>
          </div>
          <div class="covers">
            <input class="cover-select" id="isContentOriginal" type="radio" name="isContentOriginal" value="original">
            <label for="size" class="cover-name" style="font-size: 1.01rem">本文デザインをアップロードする</label>
          </div>
          <div class="original-cover-wrapper">
            <div class="original-btn">
              <input type="file" class="upload-btn" id="originalContentFile" name="originalContentFile" value="">
              {{-- <input type="file" class="upload-btn" id="originalContentFile" name="originalContentFile" accept="image/*,.pdf" value="old('originalContentFile')"> --}}
            </div>
          </div>
        </div>
        <div class="cover-container" id="contentContainer">
          <div class="cover-containersub">
            <div class="covers">
              <a href="{{ asset('img/note/honbun/honbun_01.jpg') }}" data-lightbox="group"><img src="{{ asset('img/note/honbun/honbun_01.jpg') }}" style="height: 312px; width: 220px" alt="honbun_01"></a>
              <input class="cover-select" id="contentSelect1" type="radio" name="contentDesign" value='content-01' checked >
              <label for="size" class="cover-name">罫線</label>
            </div>
            <div class="covers">
              <a href="{{ asset('img/note/honbun/honbun_02.jpg') }}" data-lightbox="group"><img src="{{ asset('img/note/honbun/honbun_02.jpg') }}" style="height: 312px; width: 220px" alt="honbun_02"></a>
              <input class="cover-select" id="contentSelect2" type="radio" name="contentDesign" value='content-02'>
              <label for="size" class="cover-name">罫線＋区切り線</label>
            </div>
            <div class="covers">
              <a href="{{ asset('img/note/honbun/honbun_03.jpg') }}" data-lightbox="group"><img src="{{ asset('img/note/honbun/honbun_03.jpg') }}" style="height: 312px; width: 220px" alt="honbun_03"></a>
              <input class="cover-select" id="contentSelect3" type="radio" name="contentDesign" value='content-03'>
              <label for="size" class="cover-name">マス目</label>
            </div>
            <div class="covers">
              <a href="{{ asset('img/note/honbun/honbun_04.jpg') }}" data-lightbox="group"><img src="{{ asset('img/note/honbun/honbun_04.jpg') }}" style="height: 312px; width: 220px" alt="honbun_04"></a>
              <input class="cover-select" id="contentSelect4" type="radio" name="contentDesign" value='content-04'>
              <label for="size" class="cover-name">罫線＋メモ欄</label>
            </div>
            <div class="covers">
              <a href="{{ asset('img/note/honbun/honbun_05.jpg') }}" data-lightbox="group"><img src="{{ asset('img/note/honbun/honbun_05.jpg') }}" style="height: 312px; width: 220px" alt="honbun_05"></a>
              <input class="cover-select" id="contentSelect5" type="radio" name="contentDesign" value='content-05'>
              <label for="size" class="cover-name">マス目＋メモ欄</label>
            </div>
            <div class="covers">
              <a href="{{ asset('img/note/honbun/honbun_06.jpg') }}" data-lightbox="group"><img src="{{ asset('img/note/honbun/honbun_06.jpg') }}" style="height: 312px; width: 220px" alt="honbun_06"></a>
              <input class="cover-select" id="contentSelect6" type="radio" name="contentDesign" value='content-06'>
              <label for="size" class="cover-name">ドット</label>
            </div>
          </div>
          {{-- <div class="covers">
            <input class="cover-select" id="isCoverMuji" type="radio" name="contentDesign" value='muji'>
            <label for="size" class="cover-name">無地</label>
          </div> --}}
        </div>

        <div class="margin-space">&nbsp;</div>

      {{-- <table class="table table-striped table-bordered border-secondary"> --}}
      {{-- <form method="post" action="{{ route('send_order_note_auth') }}" class="h-adr"> --}}
        <span class="p-country-name" style="display:none;">Japan</span>

        {{-- <input type="hidden" id="o_id" name="o_id" value="{{ Auth::user()->id }}"> --}}

        {{-- バリデーションメッセージが入る --}}
        <div class="validation-text" id="validation-text">
          <div class="validation-text" id="paperSizeAlert"></div>
          <div class="copiesAlert validation-text" id="copiesAlert"></div>
          <div class="pagesAlert validation-text" id="pagesAlert"></div>
          <div class="sub-1" id="bindingVali"></div>
          <div class="sub-1" id="coverPaperVali" value=""></div>
          <div class="sub-1" id="coverColorVali"></div>
          <div class="sub-1" id="contentPaperVali"></div>
          <div class="sub-1" id="contentColorVali"></div>
          <div class="sub-1" id="proccessOptionVali"></div>
          <div class="sub-1" id="SpecialProcessingVali"></div>
        </div>
        
        <table class="table table-bordered table-order">
          <tr><td class="order-width">商 品 名：</td><td>オリジナルノート</td></tr>
          <tr><td>サイズ<span class="text-danger">&nbsp;*</span>：</td>
            <td>
              <div class="flex-container">
                <div>
                  <select class="size-form-select" id="lv1Pulldown" name="paperSize" aria-label="Default select example" style="font-size: 0.95rem">
                    <option value="0" selected="selected" class="msg" disabled="disabled">選択</option>
                    <option value="1" class="A">A4</option>
                    <option value="2" class="A">A5</option>
                    <option value="4" class="B">B5</option>
                    <option value="5" class="B">B6</option>
                    <option value="99" class="C">その他</option>
                  </select>
                </div>
              </div>
            </td>
          </tr>

          <tr><td>部 数<span class="text-danger">&nbsp;*</span>：</td>
            <td>
              <div class="flex-container">
                <div>
                <input type="number" class="copies-form-control border-success" id="copies" name="copies" min="0" max="999999" 
                    step="1" oninput="sliceMaxLength(this, 6)" pattern="^[0-9]+$" :value="old('copies')" placeholder="部数" style="font-size: 0.95rem" required>
                </div>
                <div copies-text>&nbsp;&nbsp;冊</div>
              </div>
            </td>
          </tr>
          <tr><td>本文ページ数<span class="text-danger">&nbsp;*</span>：</td>
            <td>
              <div class="flex-container">
                <div>
                  <input type="number" class="copies-form-control border-primary" id="pages" name="pages" min="0" max="999" step="2" oninput="sliceMaxLength(this, 3)" pattern="\d*[02468]\b" :value="old('pages')" placeholder="本文" style="font-size: 0.95rem" required>
                </div>
                <div copies-text>&nbsp;&nbsp;ページ</div>
                <div class="pages-varidate" id="pagesVali1">
                    <label for="size"><span class="text-grey">&nbsp;&nbsp;&nbsp;&nbsp;※偶数でご入力ください。</span></label>
                    <label for="size"><span class="text-grey" id="pagesVali2">「製本」欄が「中綴じ」の場合は次の4の倍数に繰り上げて計算され、仕上がりも4の倍数になります。</span></label>
                </div>
                <div class="pages-varidate" id="pagesVali2">
                    {{-- <label for="size"><span class="text-grey" id="pagesVali2">「製本」欄が「中綴じ」の場合は次の4の倍数に繰り上げて計算され、仕上がりも4の倍数になります</span></label> --}}
                </div>
              </div>
            </td>
          </tr>
          <tr><td>製 本<span class="text-danger">&nbsp;*</span>：</td>
            <td>
              <div class="flex-container">
                <div>
                  <select class="order-form-select1" id="lv11Pulldown" name="bind" aria-label="Default select example" style="font-size: 0.95rem">
                    <option value="0" selected="selected" class="msg" disabled="disabled">選択</option>
                    <option value="1" >なし</option>
                    <option value="2" >無線綴じ</option>
                    <option value="3" >中綴じ</option>
                  </select>
                </div>
              </div>
            </td>
          </tr>
          <tr><td>表 紙<span class="text-danger">&nbsp;*</span>：</td><td>
            <div class="flex-container">
              <div id="coverPaper">
                <select class="order-form-select2"  id="lv2Pulldown" name="coverCode" aria-label="Default select example" disabled="disabled" style="font-size: 0.95rem">
                  <option value="0" selected="selected" disabled="disabled">紙の種類</option>
                  <option value="5" class="p1">上質</option>
                  <option value="6" class="p1">マットコート</option>
                  <option value="7" class="p1">マットポスト</option>
                  <option value="8" class="p1">コート</option>
                  <option value="99" class="p1">その他</option>
                </select>
              </div>
              &nbsp;&nbsp;&nbsp;
              <div id="paperWeight1Area">
                <select class="order-form-select1" id="lv3Pulldown" name="coverWeight" aria-label="Default select example"  disabled="disabled" style="font-size: 0.95rem">
                  <option value="0" selected="selected" disabled="disabled">紙の厚さ</option>
                  <option value="31" class="p5">31（28.5）</option> {{-- A4版、上質 --}}
                  <option value="38" class="p5">38（35）</option>
                  <option value="48.5" class="p5">48.5（44.5）</option>
                  <option value="62.5" class="p5">62.5（57.5）</option>
                  <option value="76.5" class="p5">76.5（70.5）</option>
                  <option value="93.5" class="p5">93.5（86.5）</option>
                  <option value="125" class="p5">125（ー）</option>
                </select>
              </div>
              &nbsp;&nbsp;&nbsp;
              <div class="flex-container">
                <div class="cover-color" id="frontBackArea">
                  <input type="text" class="cover-form-control border-info btn btn-info" data-bs-toggle="modal" data-bs-target="#offday" id="frontBack" name="frontBack" value="" placeholder="カラーを選択" style="font-size: 0.95rem" readonly required>
                  <label for="size"><span class="text-grey">※下画像より選択下さい</span></label>

                  <div class="modal fade" id="offday" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <label class="modal-title" for="size">&nbsp;表紙カラー</label>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                          <div class="flex-container">
                            <div class="row cover-row">
                              <div class="cover-img">
                                <img src="{{ asset('img/order/両面カラー.jpg') }}" alt="cover-full">
                                <div class="frontBackInput">
                                  <input class="form-check-input" id="frontBack1" type="radio" name="frontBack" value="1" onclick="closeCoverColorVali()">
                                  <label class="form-check-label">両面カラー</label>
                                </div>
                              </div>
                              <div class="cover-img">
                                <img src="{{ asset('img/order/片面カラー.jpg') }}" alt="cover-one">
                                <div class="frontBackInput">
                                  <input class="form-check-input" id="frontBack2" type="radio" name="frontBack" value="2" onclick="closeCoverColorVali()">
                                  <label class="form-check-label">片面カラー</label>
                                </div>
                              </div>
                              <div class="cover-img">
                                <img src="{{ asset('img/order/カラー裏モノクロ.jpg') }}" alt="cover-mono">
                                <div class="frontBackInput">
                                  <input class="form-check-input" id="frontBack3" type="radio" name="frontBack" value="3" onclick="closeCoverColorVali()">
                                  <label class="form-check-label">カラー裏モノクロ</label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="flex-container">
                            <div class="row cover-row">
                              <div class="cover-img">
                                <img src="{{ asset('img/order/両面モノクロ.jpg') }}" alt="cover-mono">
                                <div class="frontBackInput">
                                  <input class="form-check-input" id="frontBack4" type="radio" name="frontBack" value="4" onclick="closeCoverColorVali()">
                                  <label class="form-check-label">両面モノクロ</label>
                                </div>
                              </div>
                              <div class="cover-img">
                                <img src="{{ asset('img/order/片面モノクロ.jpg') }}" alt="cover-one">
                                <div class="frontBackInput">
                                  <input class="form-check-input" id="frontBack5" type="radio" name="frontBack" value="5" onclick="closeCoverColorVali()">
                                  <label class="form-check-label">片面モノクロ</label>
                                </div>
                              </div>
                              {{-- <div class="close-img">
                                <button class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
                              </div> --}}
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr><td>本 文<span class="text-danger">&nbsp;*</span>：</td>
            <td>
              <div class="flex-container">
                <div id="contentPaper">
                  <select class="order-form-select2"  id="lv4Pulldown" name="coverCode" aria-label="Default select example" disabled="disabled" style="font-size: 0.95rem">
                    <option value="0" selected="selected" disabled="disabled">紙の種類</option>
                    <option value="5" class="p1">上質</option>{{-- A4版 --}}
                    <option value="99" class="p1">その他</option>{{-- A4版 --}}
                  </select>
                </div>
                &nbsp;&nbsp;&nbsp;
                <div id="paperWeight2Area">
                  <select class="order-form-select1" id="lv5Pulldown" name="contentWeight" aria-label="Default select example" disabled="disabled" style="font-size: 0.95rem">
                    <option value="0" selected="selected" disabled="disabled">紙の厚さ</option>
                    <option value="31" class="p5">31（28.5）</option>{{-- A4版、上質 --}}
                    <option value="38" class="p5">38（35）</option>
                    <option value="48.5" class="p5">48.5（44.5）</option>
                    <option value="62.5" class="p5">62.5（57.5）</option>
                    <option value="76.5" class="p5">76.5（70.5）</option>
                    <option value="93.5" class="p5">93.5（86.5）</option>
                    <option value="125" class="p5">125（ー）</option>
                  </select>
                </div>
                &nbsp;&nbsp;&nbsp;
                <div class="flex-container">
                  <div class="cover-color" id="frontBackArea">
                    <select class="order-form-select2" id="lv8Pulldown" aria-label="Default select example" style="font-size: 0.95rem">
                      <option value="0" selected="selected" disabled="disabled">本文カラー</option>
                      {{-- <option value="11" class="">カラー</option> --}}
                      <option value="12" class="">単色黒</option>
                      <option value="13" class="">単色シアン</option>
                      <option value="14" class="">単色マゼンタ</option>
                      <option value="15" class="">単色黄</option>
                    </select>
                    <label for="size"><span class="text-grey">※原則全ページ同色です</span></label>
                  </div>
                </div>
              </div>
            </td>
          </tr>

          <tr><td>表紙特殊加工<span class="text-danger">&nbsp;*</span>：</td>
            <td>
              <div class="flex-container">
                <div id="optionPP">
                  <select class="process-form-select" id="lv9Pulldown" aria-label="Default select example" style="font-size: 0.95rem">
                    <option value="0" selected="selected" class="msg" disabled="disabled">表紙特殊加工</option>
                    <option value="1" >なし</option>
                    <option value="2" >PP加工</option>
                    {{-- <option value="3" >PP加工（両面）</option> --}}
                    <option value="4" >マットPP加工</option>
                    {{-- <option value="5" >マットPP加工（両面）</option> --}}
                    <option value="99" >その他</option>
                  </select>
                </div>
              </div>
            </td>
          </tr>
          <tr><td>オプション：</td>
            <td>
              <div class="flex-container">
                <div class="flex-container">
                  <div class="option-wrapper">
                    <input class="form-check-input" id="isKadomaru" type="checkbox" value="" style="font-size: 0.95rem">
                    <label class="form-check-label" for="flexCheckDefault" style="font-size: 1.01rem">角丸</label>
                  </div>
                </div>
                <div class="flex-container">
                  <div class="hold-wrapper">
                    <input class="form-check-input" id="isHolds" type="checkbox" value="" style="font-size: 0.95rem">
                    <label class="form-check-label" for="flexCheckDefault" style="font-size: 1.01rem">穴（穴数）</label>
                  </div>
                  <div class="hold-input" id="numberHoldsArea">
                    <select class="order-form-control1 border-primary" id="numberHolds" name="numberHolds" aria-label="Default select example" disabled="disabled" style="font-size: 0.95rem">
                      <option value="0" selected="selected" disabled="disabled">選択</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="4">4</option>
                      <option value="99">その他</option>
                    </select>
                  </div>
                  <div class="numberHoldsVali" id="numberHoldsVali"></div>
                </div>
              </div>
            </td>
          </tr>
          <tr><td>本刷校正<span class="text-danger">&nbsp;*</span>：</td>
            <td>
              <div class="flex-container">
                <div id="proofreadingArea">
                  <select class="proofreading-form-select" id="proofreading" aria-label="Default select example" style="font-size: 0.95rem">
                      <option value="0" selected="selected" class="msg" disabled="disabled">選択して下さい</option>
                      <option value="1" >なし</option>
                      <option value="2" >メール校正</option>
                      <option value="3" >紙校正</option>
                      <option value="4" >本紙校正</option>
                  </select>
                </div>&nbsp;
                <div class="sub-1" id="proofreadingVali"></div>
                &nbsp;&nbsp;&nbsp;
                <div id="coverProofArea">
                  {{-- <div class="isProofcheckedVali" id="isProofcheckedVali"></div> --}}
                  <div class="flex-container">
                    <div class="option-wrapper">
                      <input class="form-check-input" id="coverProof" type="checkbox" name="coverOrContent" value="cover" onclick="coverOrContentVali()" style="font-size: 0.95rem">
                      <label class="form-check-label" for="flexCheckDefault" style="font-size: 1.01rem">表紙</label>
                    </div>
                    <div class="isProofcheckedVali" id="isProofcheckedVali"></div>
                    <div class="wholeOrPartVali" id="wholeOrPartVali">
                    </div>
                  </div>
                  <div class="flex-container">
                    <div class="proof-wrpper1">
                      <input class="form-check-input" id="contentProof" type="checkbox" name="coverOrContent" value="content" onclick="coverOrContentVali()" style="font-size: 0.95rem">
                      <label class="form-check-label" for="flexCheckDefault" style="font-size: 1.01rem">本文</label>
                    </div>
                    <div class="proof-wrpper2" id="wholeOrPartArea">
                      <input class="form-check-input" id="isWhole" type="radio" name="wholeOrPart" value="whole" onclick="isPartStyle()" disabled="disabled" style="font-size: 0.95rem">
                      <label class="form-check-label" style="font-size: 1.01rem">全体</label>
                      <input class="form-check-input" id="isPart" type="radio" name="wholeOrPart" value="part" onclick="isPartStyle()" disabled="disabled" style="font-size: 0.95rem">
                      <label class="form-check-label" style="font-size: 1.01rem">部分</label>
                    </div>
                    <div class="number-part-input" id="numberPartsArea">
                      <select class="order-form-control2 border-primary" id="numberParts" name="numberParts" aria-label="Default select example" disabled="disabled" style="font-size: 0.95rem">
                        <option value="0" selected="selected" disabled="disabled">選択</option>
                        <option value="4">4ページ分</option>
                        <option value="8">8ページ分</option>
                        <option value="12">12ページ分</option>
                        <option value="16">16ページ分</option>
                        <option value="20">20ページ分</option>
                      </select>
                    </div>
                  </div>
                  <div class="select-page-message" id="selectPageMessage" style="font-size: 1.01rem">
                    {{-- <label>※の絵柄をご指定し備考欄にお書き下さい）</label> --}}
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr><td>納品先数：</td>
            <td>
              <div class="flex-container">
                <div class="number-delivery" id="NumberOfDeliveryArea">
                  <select class="order-form-control1 border-primary" id="NumberOfDelivery" name="NumberOfDelivery" aria-label="Default select example" style="font-size: 0.95rem">
                    <option value="0" selected="selected">1か所</option>
                    <option value="1">2か所</option>
                    <option value="2">3か所</option>
                    <option value="3">4か所</option>
                    <option value="99">その他</option>
                  </select>
                </div>
                <div class="number-delivery-text" id="NumberOfDeliveryText" style="font-size: 0.95rem">（例）東京本社、大阪支社の2か所等</div>
              </div>
            </td>
          </tr>

          <tr><td>そ の 他：</td>
            <td>
              <div class="form-group-icon">
                <label for="g_message" class="form-label">備考</label>
                <i class="fa fa-comments"></i>
                <textarea class="remark-form-control border-info" id="o_remarks" name="o_remarks" :value="old('o_remarks')" maxlength="1000" 
                placeholder="※用紙または紙質、表紙特殊加工、穴数で「その他」を選んだ場合は、こちらに具体的にご記入ください（最大1000字まで）" rows="4" style="font-size: 0.95rem"></textarea>
              </div>
            </td>
          </tr>
        </table>
      
        <div class="calc-btn scroll-to-vali">
          <p class="text-center"><span class="btn middle-btn btn-primary" id="noteCalcBtn">計算する</span>
        </div>
        
            {{-- <div class="calc-btn">
                <p class="text-center mt-5"><button class="btn middle-btn btn-secondary" id="orderReset">リセットする</button>
            </div> --}}

            
      <div class="calc-result"  id="calcResult">
        {{-- <div class="text-sm-left mt-6 order-reslt">
          <p class="text-left mt-5"><button type="submit" class="btn result-btn btn-info" id="resultBtn" value="send" disabled>お見積り金額</button></p>
        </div> --}}
        <div class="show-total-fee">
          <div id="showtotalFee"></div>
        </div>
        <table class="table table-bordered table-order show-fees">
          <tr><td class="order-width" rowspan="4"><label>印 刷 代：</label></td>
                  <td colspan="2"><label id="printingFeeArea1"></label></td>
                  <td rowspan="6"><label class="show-Fee" id="printingFeeArea2"></label></td></tr> {{-- 商品代 --}}
              <tr><td colspan="2"><label id="printingFeeArea3"></label></td></tr>
              <tr><td colspan="2"><label id="printingFeeArea4"></label></td></tr>
              <tr><td colspan="2"><label id="printingFeeArea5"></label></td></tr> {{-- 製本 --}}
          <tr><td class="order-width"><label>特殊加工代：</label></td>
                  <td><label id="processFeeArea1"></label></td>
                  <td><label class="show-Fee" id="processFeeArea2" style="text-align:right;"></label></td></tr> {{-- 特殊加工代 --}}

          <tr><td class="order-width"><label>校  正：</label></td>
                  <td><label id="proofreadingFeeArea1"></label></td>
                  <td><label class="show-Fee" id="proofreadingFeeArea2" style="text-align:right;"></label></td></tr> {{-- 校正代 --}}
          {{-- <tr><td class="order-width"><label>送  料：</label></td>
            <td colspan="2"><label id="postageFeeArea1"></label></td>
            <td><label class="show-Fee" id="postageFeeArea2"></label></td>
          </tr> --}}
          <tr class="border-0">
            <td class="border-0"></td>
            <td class="border-0"></td>
            <td class="show-subtotal border"><label>送&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;料</label></td>
            <td class="show-Fee border" id="postageFeeArea2"></td> {{-- 送料 --}}
          </tr>
          <tr class="border-0">
            <td class="border-0"></td>
            <td class="border-0"></td>
            <td class="show-subtotal border"><label>小&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;計</label></td>
            <td class="show-Fee border" id="subtotalArea"></td> {{-- 小計 --}}
          </tr>
          <tr class="border-0">
            <td class="border-0"></td>
            <td class="border-0"></td>
            <td class="show-subtotal border"><label>消費税計</label></td>
            <td class="show-Fee border" id="consumptionTaxArea"></td> {{-- 消費税計 --}}
          </tr>
          <tr class="border-0">
            <td class="border-0"></td>
            <td class="border-0"></td>
            <td class="show-subtotal border"><label>合&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;計</label></td>
            <td class="show-Fee border" id="totalAmountFeeArea"></td> {{-- 合計 --}}
          </tr>
        </table>
        <div class="commentArea">
          <p class="comment" style="font-size: 1.01rem">※選択に「その他」が含まれる場合は備考欄に具体的なお見積り内容をご記入下さい。後ほどメールにて金額をお知らせ致します。</p>
        </div>

  </div>{{--/container --}}

  <div class="user-container">

    @auth {{-- ここからログインユーザー用のフォーム --}}
      <input type="hidden" id="o_id" name="o_id" value="{{ Auth::user()->id }}">
      <div class="order-customer">
        <h3>お客様情報</h3>
      </div>
      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <div class="form-group form-group-icon">
            <i class="fa fa-building"></i>
            <label for="o_company" class="form-label">会社名</label>
              <input type="text" class="confirm-form-control" id="o_company" name="o_company" maxlength="20" placeholder="20字以内" value="{{ $sub_data[0]->company }}" style="font-size: 0.97rem">
          </div>
        </div>
        <div class="col-sm-12 col-xs-12">
          <div class="form-group form-group-icon">
            <i class="fa fa-user"></i>
            <label for="o_name" class="form-label">お名前<span class="text-danger">*</span></label>
              <input type="text" class="confirm-form-control border-primary" id="o_name" name="o_name" minlength="2" maxlength="13" value="{{ $master_data->name }}" placeholder="2〜13字以内" autocomplete="name" style="font-size: 0.97rem" readonly required>
          </div>
        </div>
        
        <div class="col-sm-12 col-xs-12">
          <div class="form-group form-group-icon">
            <i class="fa fa-envelope"></i>
            <label for="o_mail" class="form-label">メールアドレス<span class="text-danger">*</span></label>
              <input type="email" class="confirm-form-control border-success" id="o_mail" name="o_mail" maxlength="40" placeholder="40字以内" value="{{ $master_data->email }}" style="font-size: 0.97rem" readonly>
          </div>
        </div>
        <div class="col-sm-6 col-xs-12">
          <div class="form-group form-group-icon">
            <i class="fas fa-phone-alt"></i>
            <label for="o_tel" class="form-label">電話番号<span class="text-danger">*</span></label>
            @if ( isset($sub_data[0]->tel) )
              <input type="tel" class="confirm-form-control border-purple" id="o_tel" name="o_tel" minlength="12" maxlength="13" placeholder="ハイフンありで10または11桁の数字" pattern="^[0-9-]+$" value="{{ $sub_data[0]->tel }}" style="font-size: 0.97rem" required>
            @else
              <input type="tel" class="confirm-form-control border-purple" id="o_tel" name="o_tel" minlength="12" maxlength="13" placeholder="ハイフンありで10または11桁の数字" pattern="^[0-9-]+$" :value="old('o_tel')" style="font-size: 0.97rem" required>
            @endif
          </div>
        </div>
        <div class="col-sm-6 col-xs-12">
          <div class="form-group form-group-icon">
            <i class="fas fa-phone-alt"></i>
            <label for="o_tel" class="form-label">FAX</label>
            @if ( isset($sub_data[0]->fax) )
              <input type="tel" class="confirm-form-control border-purple" id="o_fax" name="o_fax" minlength="12" maxlength="13" placeholder="ハイフンありで10または11桁の数字" pattern="^[0-9-]+$" value="{{ $sub_data[0]->fax }}" style="font-size: 0.97rem" required>
            @else
              <input type="tel" class="confirm-form-control border-purple" id="o_fax" name="o_fax" minlength="12" maxlength="13" placeholder="ハイフンありで10または11桁の数字" pattern="^[0-9-]+$" :value="old('o_tel')" placeholder="電話番号" style="font-size: 0.97rem">
            @endif
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="o_yubin">郵便番号<span class="text-danger">*</span></label>
            @if ( isset($sub_data[0]->yubin) )
              <input type="postal-code" class="confirm-form-control p-postal-code" id="o_yubin" name="o_yubin" minlength="7" maxlength="7" pattern="^[0-9]+$" placeholder="7桁の数字" value="{{ $sub_data[0]->yubin }}" style="font-size: 0.97rem" required>
            @else
              <input type="postal-code" class="confirm-form-control p-postal-code" id="o_yubin" name="o_yubin" minlength="7" maxlength="7" pattern="^[0-9]+$" placeholder="7桁の数字" :value="old('o_yubin')" style="font-size: 0.97rem" required>
            @endif
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="o_addr1">都道府県<span class="text-danger">*</span></label>
            @if ( isset($sub_data[0]->addr1) )
              <input type="address-level1" class="confirm-form-control p-region" id="o_addr1" name="o_addr1" maxlength="10" value="{{ $sub_data[0]->addr1 }}" style="font-size: 0.97rem" required>
            @else
              <input type="address-level1" class="confirm-form-control p-region" id="o_addr1" name="o_addr1" maxlength="10" :value="old('o_addr1')" style="font-size: 0.97rem" required>
            @endif
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label for="o_addr2">市区町村・番地<span class="text-danger">*</span></label>
            @if ( isset($sub_data[0]->addr2) )
              <input type="address-level2" class="confirm-form-control p-locality p-street-address p-extended-address" id="o_addr2" name="o_addr2" maxlength="50" placeholder="50字以内" value="{{ $sub_data[0]->addr2 }}" style="font-size: 0.97rem" required>
            @else
              <input type="address-level2" class="confirm-form-control p-locality p-street-address p-extended-address" id="o_addr2" name="o_addr2" maxlength="50" placeholder="50字以内" :value="old('o_addr2')" style="font-size: 0.97rem" required>
            @endif
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label for="o_addr3">建物名</label>
            @if ( isset($sub_data[0]->addr3) )
              <input type="text" class="confirm-form-control" id="o_addr3" name="o_addr3" maxlength="30" placeholder="30字以内" value="{{ $sub_data[0]->addr3 }}" style="font-size: 0.97rem">
            @else
              <input type="text" class="confirm-form-control" id="o_addr3" name="o_addr3" maxlength="30" placeholder="30字以内" :value="old('o_addr3')" style="font-size: 0.97rem">
            @endif
          </div>
        </div>

        {{-- <div class="col-12">
          <div class="text-sm-center mt-6">
            <p class="text-center mt-5"><a href="{{ route('order_note') }}" class="btn btn-secondary" value="cancel">キャンセル</a>
              <button type="submit" class="btn calc-btn btn-primary" id="confirm" value="send" disabled>お見積りを送信</button>
              </p>
          </div>
        </div>
      </div> --}}

      <div class="flex-container">
        <div class="col-12">
          <div class="text-sm-center mt-6">
            <p class="text-center mt-5"><button type="submit" class="btn calc-btn btn-secondary" id="confirm" value="send" disabled>お見積りを送信</button></p>
          </div>
        </div>
      </div>

      <input type="hidden" id="coverDesignInput" name="coverDesign" value="">
      <input type="hidden" id="originalCoverFileInput" name="originalCoverFile" value="">
      <input type="hidden" id="uploadedCoverFile" name="coverFilePath" value="">
      <input type="hidden" id="contentDesignInput" name="contentDesign" value="">
      <input type="hidden" id="originalContentFileInput" name="originalContentFile" value="">
      <input type="hidden" id="uploadedContentFile" name="contentFilePath" value="">
      <input type="hidden" id="paperSizeInput" name="paperSize" value="">
      {{-- <input type="hidden" id="copiesInput" name="copies" value=""> --}}
      <input type="hidden" id="bindingInput" name="binding" value="">
      {{-- <input type="hidden" id="pages" name="pages" value=""> --}}
      <input type="hidden" id="paperType1Input" name="paperType1" value="">
      <input type="hidden" id="coverWeightInput" name="coverWeightInput" value="">
      <input type="hidden" id="coverColorInput" name="coverColor" value="">
      <input type="hidden" id="paperType2Input" name="paperType2" value="">
      <input type="hidden" id="contentWeightInput" name="contentWeightInput" value="">
      <input type="hidden" id="contentColorInput" name="contentColor" value="">
      <input type="hidden" id="proccessInput" name="proccess" value="">
      <input type="hidden" id="isKadomaruInput" name="isKadomaru" value="">
      <input type="hidden" id="isHoldsInput" name="isHolds" value="">
      <input type="hidden" id="numberHoldsInput" name="numberHolds" value="">
      <input type="hidden" id="proofreadingInput" name="proofreading" value="">
      <input type="hidden" id="coverOrContentInput" name="coverOrContent" value="">
      <input type="hidden" id="partOrWholeInput" name="partOrWhole" value="">
      {{-- <input type="hidden" id="numberPartsInput" name="numberParts" value=""> --}}
      <input type="hidden" id="printingFee" name="printingFee" value="">
      <input type="hidden" id="processFee" name="processFee" value="">
      <input type="hidden" id="proofreadingFee" name="proofreadingFee" value="">
      <input type="hidden" id="postageFee" name="postageFee" value="">
      <input type="hidden" id="unitPriceInput" name="unitPriceInput" value="">
      <input type="hidden" id="productPriceInput" name="productPrice" value="">
      <input type="hidden" id="subtotal" name="subtotal" value="">
      <input type="hidden" id="consumptionTax" name="consumptionTax" value="">
      <input type="hidden" id="totalAmountFee" name="totalAmountFee" value="">
      {{-- <input type="hidden" id="o_remarks" name="o_remarks" value=""> --}}

    </form> {{-- ここまでログインユーザー用のフォーム --}}

    @else   {{-- ここからゲスト用のフォーム --}}
          
      <div class="order-customer">
        <h3>お客様情報</h3>
      </div>
      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <div class="form-group form-group-icon">
            <i class="fa fa fa-building"></i>
            <label for="o_company" class="form-label">会社名</span></label>
              <input type="text" class="confirm-form-control" id="o_company" name="o_company" maxlength="20" :value="old('o_company')" placeholder="20文字以内" style="font-size: 0.97rem">
          </div>
        </div>
        <div class="col-sm-12 col-xs-12">
          <div class="form-group form-group-icon">
            <i class="fa fa-user"></i>
            <label for="o_name" class="form-label">お名前<span class="text-danger">*</span></label>
              <input type="text" class="confirm-form-control border-primary" id="o_name" name="o_name" minlength="2" maxlength="13" placeholder="2〜13字以内" :value="old('o_name')" placeholder="名前" style="font-size: 0.97rem" required>
          </div>
        </div>
        
        <div class="col-sm-12 col-xs-12">
          <div class="form-group form-group-icon">
            <i class="fa fa-envelope"></i>
            <label for="o_mail" class="form-label">メールアドレス<span class="text-danger">*</span></label>
              <input type="email" class="confirm-form-control border-success" id="o_mail" name="o_mail" :value="old('o_mail')" maxlength="40" placeholder="40字以内" style="font-size: 0.97rem" required
                pattern="^[a-zA-Z0-9.!#$&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+$">
          </div>
        </div>
        <div class="col-sm-6 col-xs-12">
          <div class="form-group form-group-icon">
            <i class="fas fa-phone-alt"></i>
            <label for="o_tel" class="form-label">電話番号<span class="text-danger">*</span></label>
              <input type="tel" class="confirm-form-control border-purple" id="o_tel" name="o_tel" minlength="12" maxlength="13" placeholder="ハイフンありで10または11桁の数字" pattern="^[0-9-]+$" :value="old('o_tel')" placeholder="電話番号" style="font-size: 0.97rem" required>
          </div>
        </div>
        <div class="col-sm-6 col-xs-12">
          <div class="form-group form-group-icon">
            <i class="fas fa-phone-alt"></i>
            <label for="o_tel" class="form-label">FAX</label>
              <input type="tel" class="confirm-form-control border-purple" id="o_fax" name="o_fax" minlength="12" maxlength="13" placeholder="ハイフンありで10または11桁の数字" pattern="^[0-9-]+$" :value="old('o_tel')" placeholder="電話番号" style="font-size: 0.97rem">
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="o_yubin">郵便番号<span class="text-danger">*</span></label>
            <input type="postal-code" class="confirm-form-control p-postal-code" id="o_yubin" name="o_yubin" minlength="7" maxlength="7" pattern="^[0-9]+$" placeholder="7桁の数字" :value="old('o_yubin')" style="font-size: 0.97rem" required>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="o_addr1">都道府県<span class="text-danger">*</span></label>
            <input type="address-level1" class="confirm-form-control p-region" id="o_addr1" name="o_addr1" maxlength="10" :value="old('o_addr1')" style="font-size: 0.97rem" required>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label for="o_addr2">市区町村・番地<span class="text-danger">*</span></label>
            <input type="address-level2" class="confirm-form-control p-locality p-street-address p-extended-address" id="o_addr2" name="o_addr2" maxlength="50" placeholder="50字以内" :value="old('o_addr2')" style="font-size: 0.97rem" required>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label for="o_addr3">建物名</label>
            <input type="text" class="confirm-form-control" id="o_addr3" name="o_addr3" maxlength="30" placeholder="30字以内" :value="old('o_addr3')" style="font-size: 0.97rem">
          </div>
        </div>
        
        <div class="flex-container">
          <div class="col-12">
            <div class="text-sm-center mt-6">
              <p class="text-center mt-5"><button type="submit" class="btn calc-btn btn-secondary" id="confirm" value="send" disabled>お見積りを送信</button></p>
              <label class="form-check-label" for="flexCheckDefault">※上で入力されたメールアドレスへお見積情報を自動送信されますが、サンプルサイトの為、実際には見積依頼はされません。<br>
              自動メールにて見積依頼書のPDF出力をご覧いただけます。</label>
              {{-- <div class="write-user-info">
                <input class="form-check-input" type="checkbox" id="writeUserInfo" name="writeUserInfo" value="">
                <label class="form-check-label" for="flexCheckDefault">新規ユーザー登録をする</label>
              </div> --}}
              </div>
          </div>
        </div>
{{--         
        <div class="col-12">
          <div class="text-sm-center mt-6">
            <p class="text-center mt-5"><a href="{{ route('order_note') }}" class="btn btn-secondary" value="cancel">キャンセル</a>
              <button type="submit" class="btn calc-btn btn-primary" value="send" >お見積りを送信</button>
              </p>
          </div>
        </div> --}}
      </div>

      <input type="hidden" id="coverDesignInput" name="coverDesign" value="">
      <input type="hidden" id="originalCoverFileInput" name="originalCoverFile" value=""> {{-- 表紙ファイル名 --}}
      <input type="hidden" id="uploadedCoverFile" name="coverFilePath" value="">
      <input type="hidden" id="contentDesignInput" name="contentDesign" value="">
      <input type="hidden" id="originalContentFileInput" name="originalContentFile" value=""> {{-- 本文ファイル名 --}}
      <input type="hidden" id="uploadedContentFile" name="contentFilePath" value="">
      <input type="hidden" id="paperSizeInput" name="paperSize" value="">
      {{-- <input type="hidden" id="copiesInput" name="copies" value=""> --}}
      <input type="hidden" id="bindingInput" name="binding" value="">
      {{-- <input type="hidden" id="pages" name="pages" value=""> --}}
      <input type="hidden" id="paperType1Input" name="paperType1" value="">
      <input type="hidden" id="coverWeightInput" name="coverWeightInput" value="">
      <input type="hidden" id="coverColorInput" name="coverColor" value="">
      <input type="hidden" id="paperType2Input" name="paperType2" value="">
      <input type="hidden" id="contentWeightInput" name="contentWeightInput" value="">
      <input type="hidden" id="contentColorInput" name="contentColor" value="">
      <input type="hidden" id="proccessInput" name="proccess" value="">
      <input type="hidden" id="isKadomaruInput" name="isKadomaru" value="">
      <input type="hidden" id="isHoldsInput" name="isHolds" value="">
      <input type="hidden" id="numberHoldsInput" name="numberHolds" value="">
      <input type="hidden" id="proofreadingInput" name="proofreading" value="">
      <input type="hidden" id="coverOrContentInput" name="coverOrContent" value="">
      <input type="hidden" id="partOrWholeInput" name="partOrWhole" value="">
      {{-- <input type="hidden" id="numberPartsInput" name="numberParts" value=""> --}}
      <input type="hidden" id="printingFee" name="printingFee" value="">
      <input type="hidden" id="processFee" name="processFee" value="">
      <input type="hidden" id="proofreadingFee" name="proofreadingFee" value="">
      <input type="hidden" id="postageFee" name="postageFee" value="">
      <input type="hidden" id="unitPriceInput" name="unitPriceInput" value="">
      <input type="hidden" id="productPriceInput" name="productPrice" value="">
      <input type="hidden" id="subtotal" name="subtotal" value="">
      <input type="hidden" id="consumptionTax" name="consumptionTax" value="">
      <input type="hidden" id="totalAmountFee" name="totalAmountFee" value="">
      {{-- <input type="hidden" id="o_remarks" name="o_remarks" value=""> --}}

    </form>  {{-- ここまでゲスト用のフォーム --}}
  @endauth
</div>{{--/user-container --}}
</section>

  {{-- jsファイルはローカルではとりあえずこの場所でOK --}}
  <script src="{{ asset('js/confirm-calc.js') }}"></script> 
  <script src="{{ asset('js/book-order-calc.js') }}"></script>

  </x-slot>

  <x-slot name="script">
    <!-- Slider js トップページのスタイダー用 -->
    
    </x-slot>

</x-order-base>

