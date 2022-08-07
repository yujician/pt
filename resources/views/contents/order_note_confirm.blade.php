<x-order-base>
  <x-slot name="title">お見積り確認</x-slot>
    
  <x-slot name="slot">
<section class="py-8 py-md-8">
  <div class="comfirm-container">
    <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
    <div class="order-title">
      <h3>お見積確認</h3>
    </div>

    @auth {{-- ここからログインユーザー用のフォーム --}}
    {{-- <table class="table table-striped table-bordered border-secondary"> --}}
    <form method="post" action="{{ route('send_order_note_auth') }}" class="h-adr">
      <span class="p-country-name" style="display:none;">Japan</span>
      @csrf
      <input type="hidden" id="o_id" name="o_id" value="{{ Auth::user()->id }}">

      <table class="table table-bordered">
        <tr><td colspan="2">商 品 名：</td><td>&nbsp;&nbsp;&nbsp;&nbsp;オリジナルノート</td></tr>
        <tr><td colspan="2">サ イ ズ：</td><td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $paperSize }}</td></tr>
        <tr><td colspan="2">部 数：</td><td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $copies }}&nbsp;冊</td></tr>
        <tr><td rowspan="3">表 紙：</td>
            <td>紙の種類：</td><td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $paperType1 }}</td></tr>
                <tr><td>紙の厚さ：</td><td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $coverWeight }}&nbsp;kg</td></tr>
                <tr><td>印 刷：</td><td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $coverColor }}</td></tr>
        <tr><td rowspan="4">本 文：</td>
            <td>ページ数：</td><td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $pages }}&nbsp;ページ</td></tr>
                <tr><td>紙の種類：</td><td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $paperType2 }}&nbsp;</td></tr>
                <tr><td>紙の厚さ：</td><td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $contentWeight }}&nbsp;kg</td></tr>
                <tr><td>イ ン ク：</td><td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $contentColor }}</td></tr>
        <tr><td colspan="2">製 本：</td><td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $binding }}</td></tr>
        <tr><td rowspan="3">加 工：</td>
            <td>表紙特殊加工：</td><td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $proccess }}</td></tr>
                <tr><td>オプション：</td><td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $isKadomaru }}&nbsp;&nbsp;
                    {{ $isHolds }}&nbsp;&nbsp;{{ $numberHolds }}</td></tr>
                <tr><td>本刷校正：</td><td>&nbsp;&nbsp;&nbsp;
                @if ( $proofreading == '本紙校正' )
                  @if ( $coverOrContent == '表紙')
                      本紙校正&nbsp;:&nbsp;表紙
                  @elseif ( $coverOrContent == '表紙、本文')
                    @if ( $partOrWhole == '部分')
                      本紙校正&nbsp;:&nbsp;表紙、本文=部分、{{ $numberParts }}
                    @else
                      本紙校正&nbsp;:&nbsp;表紙、本文=全体
                    @endif
                  @elseif ( $coverOrContent == '本文')
                    @if ( $partOrWhole == '部分')
                      本紙校正&nbsp;:&nbsp;本文=部分、{{ $numberParts }}
                    @else
                      本紙校正&nbsp;:&nbsp;本文=全体
                    @endif
                  @endif
                @endif
                </td></tr>
        </tr>
        <tr><td colspan="2">そ の 他：</td><td>&nbsp;&nbsp;&nbsp;
          @if ( $o_remarks > 0 )
              記載あり&nbsp;&nbsp;（メール本文をご覧下さい）</td>
          @else
              記載なし</td>
          @endif
        </tr>
      </table>
      <div class="card p-1">
        <div class="remarks">備考：<p>{{ $o_remarks }}</p></div>
      </div>

      <input type="hidden" id="coverDesignInput" name="coverDesign" value="{{ $coverDesign }}">
      <input type="hidden" id="originalCoverFileInput" name="originalCoverFile" value="{{ $originalCoverFile }}">
      <input type="hidden" id="uploadedCoverFile" name="coverFilePath" value="{{ $uploadedCoverFile }}">
      <input type="hidden" id="contentDesignInput" name="contentDesign" value="{{ $contentDesign }}">
      <input type="hidden" id="originalContentFileInput" name="originalContentFile" value="{{ $originalContentFile }}">
      <input type="hidden" id="uploadedContentFile" name="contentFilePath" value="{{ $uploadedContentFile }}">
      <input type="hidden" id="paperSizeInput" name="paperSize" value="{{ $paperSize }}">
      <input type="hidden" id="copiesInput" name="copies" value="{{ $copies }}">
      <input type="hidden" id="bindingInput" name="binding" value="{{ $binding }}">
      <input type="hidden" id="pages" name="pages" value="{{ $pages }}">
      <input type="hidden" id="paperType1Input" name="paperType1" value="{{ $paperType1 }}">
      <input type="hidden" id="coverWeight" name="coverWeight" value="{{ $coverWeight }}">
      <input type="hidden" id="coverColorInput" name="coverColor" value="{{ $coverColor }}">
      <input type="hidden" id="paperType2Input" name="paperType2" value="{{ $paperType2 }}">
      <input type="hidden" id="contentWeight" name="contentWeight" value="{{ $contentWeight }}">
      <input type="hidden" id="contentColorInput" name="contentColor" value="{{ $contentColor }}">
      <input type="hidden" id="proccessInput" name="proccess" value="{{ $proccess }}">
      <input type="hidden" id="isKadomaruInput" name="isKadomaru" value="{{ $isKadomaru }}">
      <input type="hidden" id="isHoldsInput" name="isHolds" value="{{ $isHolds }}">
      <input type="hidden" id="numberHoldsInput" name="numberHolds" value="{{ $numberHolds }}">
      <input type="hidden" id="proofreadingInput" name="proofreading" value="{{ $proofreading }}">
      <input type="hidden" id="coverOrContentInput" name="coverOrContent" value="{{ $coverOrContent }}">
      <input type="hidden" id="partOrWholeInput" name="partOrWhole" value="{{ $partOrWhole }}">
      <input type="hidden" id="numberPartsInput" name="numberParts" value="{{ $numberParts }}">
      <input type="hidden" id="printingFee" name="printingFee" value="{{ $printingFee }}">
      <input type="hidden" id="processFee" name="processFee" value="{{ $processFee }}">
      <input type="hidden" id="proofreadingFee" name="proofreadingFee" value="{{ $proofreadingFee }}">
      <input type="hidden" id="postageFee" name="postageFee" value="{{ $postageFee }}">
      <input type="hidden" id="unitPrice" name="unitPrice" value="{{ $unitPrice }}">
      <input type="hidden" id="productPrice" name="productPrice" value="{{ $productPrice }}">
      <input type="hidden" id="subtotal" name="subtotal" value="{{ $subtotal }}">
      <input type="hidden" id="consumptionTax" name="consumptionTax" value="{{ $consumptionTax }}">
      <input type="hidden" id="totalAmountFee" name="totalAmountFee" value="{{ $totalAmountFee }}">
      <input type="hidden" id="o_remarks" name="o_remarks" value="{{ $o_remarks }}">
      
      <div class="order-customer">
        <h3>お客様情報</h3>
      </div>
      <div class="row">
        {{-- <div class="col-sm-12 col-xs-12">
          <div class="form-group form-group-icon">
            <i class="fa fa-building"></i>
            <label for="o_company" class="form-label">会社名</label>
              <input type="text" class="confirm-form-control" id="o_company" name="o_company" maxlength="50" placeholder="50字以内" value="{{$sub_data[0]->company}}">
          </div>
        </div> --}}
        <div class="col-sm-12 col-xs-12">
          <div class="form-group form-group-icon">
            <i class="fa fa-user"></i>
            <label for="o_name" class="form-label">お名前<span class="text-danger">*</span></label>
              <input type="text" class="confirm-form-control border-primary" id="o_name" name="o_name" value="{{ Auth::user()->name }}" placeholder="名前" readonly required>
          </div>
        </div>
        
        <div class="col-sm-12 col-xs-12">
          <div class="form-group form-group-icon">
            <i class="fa fa-envelope"></i>
            <label for="o_mail" class="form-label">メールアドレス<span class="text-danger">*</span></label>
              <input type="text" class="confirm-form-control border-success" id="o_mail" name="o_mail" value="{{ Auth::user()->email }}" readonly>
          </div>
        </div>
        <div class="col-sm-6 col-xs-12">
          <div class="form-group form-group-icon">
            <i class="fas fa-phone-alt"></i>
            <label for="o_tel" class="form-label">電話番号<span class="text-danger">*</span></label>
            @if ( isset($sub_data[0]->tel) )
              <input type="tel" class="confirm-form-control border-purple" id="o_tel" name="o_tel" minlength="12" maxlength="13" placeholder="ハイフンありで10または11桁の数字" pattern="^[0-9-]+$" value="{{$sub_data[0]->tel}}" required>
            @else
              <input type="text" class="confirm-form-control border-purple" id="o_tel" name="o_tel" minlength="12" maxlength="13" placeholder="ハイフンありで10または11桁の数字" pattern="^[0-9-]+$" :value="old('o_tel')" placeholder="電話番号" required>
            @endif
          </div>
        </div>
        <div class="col-sm-6 col-xs-12">
          <div class="form-group form-group-icon">
            <i class="fas fa-phone-alt"></i>
            <label for="o_tel" class="form-label">FAX</label>
            @if ( isset($sub_data[0]->fax) )
              <input type="tel" class="confirm-form-control border-purple" id="o_fax" name="o_fax" minlength="12" maxlength="13" placeholder="ハイフンありで10または11桁の数字" pattern="^[0-9-]+$" value="{{$sub_data[0]->fax}}" required>
            @else
             <input type="text" class="confirm-form-control border-purple" id="o_fax" name="o_fax" minlength="12" maxlength="13" placeholder="ハイフンありで10または11桁の数字" pattern="^[0-9-]+$" :value="old('o_tel')" placeholder="電話番号">
            @endif
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="o_yubin">郵便番号<span class="text-danger">*</span></label>
            @if ( isset($sub_data[0]->o_yubin) )
              <input type="postal-code" class="confirm-form-control p-postal-code" id="o_yubin" name="o_yubin" minlength="7" maxlength="7" pattern="^[0-9]+$" placeholder="7桁の数字" value="{{$sub_data[0]->yubin}}" required>
            @else
              <input type="postal-code" class="confirm-form-control p-postal-code" id="o_yubin" name="o_yubin" minlength="7" maxlength="7" pattern="^[0-9]+$" placeholder="7桁の数字" :value="old('o_yubin')" required>
            @endif
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="o_addr1">都道府県<span class="text-danger">*</span></label>
            @if ( isset($sub_data[0]->o_addr1) )
              <input type="address-level1" class="confirm-form-control p-region" id="o_addr1" name="o_addr1" maxlength="10" value="{{$sub_data[0]->addr1}}" required>
            @else
              <input type="address-level1" class="confirm-form-control p-region" id="o_addr1" name="o_addr1" maxlength="10" :value="old('o_addr1')" required>
            @endif
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label for="o_addr2">市区町村・番地<span class="text-danger">*</span></label>
            @if ( isset($sub_data[0]->o_addr2) )
              <input type="address-level2" class="confirm-form-control p-locality p-street-address p-extended-address" id="o_addr2" name="o_addr2" maxlength="50" placeholder="50字以内" value="{{$sub_data[0]->addr2}}" required>
            @else
              <input type="address-level2" class="confirm-form-control p-locality p-street-address p-extended-address" id="o_addr2" name="o_addr2" maxlength="50" placeholder="50字以内" :value="old('o_addr2')" required>
            @endif
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label for="o_addr3">建物名</label>
            @if ( isset($sub_data[0]->addr3) )
              <input type="text" class="confirm-form-control" id="o_addr3" name="o_addr3" maxlength="30" placeholder="30字以内" value="{{$sub_data[0]->addr3}}">
            @else
              <input type="text" class="confirm-form-control" id="o_addr3" name="o_addr3" maxlength="30" placeholder="30字以内" :value="old('o_addr3')">
            @endif
          </div>
        </div>

        <div class="col-12">
          <div class="text-sm-center mt-6">
            <p class="text-center mt-5"><a href="{{ route('order_note') }}" class="btn btn-secondary" value="cancel">キャンセル</a>
              <button type="submit" class="btn btn-primary" value="send">お見積りを送信</button>
              </p>
          </div>
        </div>
      </div>
    </form>  {{-- ここまでログインユーザー用のフォーム --}}

  @else   {{-- ここからゲスト用のフォーム --}}
          
    <form method="post" action="{{ route('send_order_note') }}" class="h-adr">
      <span class="p-country-name" style="display:none;">Japan</span>
      @csrf
      <table class="table table-bordered">
        <tr><td colspan="2">商 品 名：</td><td>&nbsp;&nbsp;&nbsp;&nbsp;オリジナルノート</td></tr>
        <tr><td colspan="2">サ イ ズ：</td><td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $paperSize }}</td></tr>
        <tr><td colspan="2">部 数：</td><td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $copies }}&nbsp;冊</td></tr>
        <tr><td rowspan="3">表 紙：</td>
            <td>紙の種類：</td><td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $paperType1 }}</td></tr>
                <tr><td>紙の厚さ：</td><td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $coverWeight }}&nbsp;kg</td></tr>
                <tr><td>印 刷：</td><td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $coverColor }}</td></tr>
        <tr><td rowspan="4">本 文：</td>
            <td>ページ数：</td><td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $pages }}&nbsp;ページ</td></tr>
                <tr><td>紙の種類：</td><td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $paperType2 }}&nbsp;</td></tr>
                <tr><td>紙の厚さ：</td><td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $contentWeight }}&nbsp;kg</td></tr>
                <tr><td>イ ン ク：</td><td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $contentColor }}</td></tr>
        <tr><td colspan="2">製 本：</td><td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $binding }}</td></tr>
        <tr><td rowspan="3">加 工：</td>
            <td>表紙特殊加工：</td><td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $proccess }}</td></tr>
                <tr><td>オプション：</td><td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $isKadomaru }}&nbsp;&nbsp;
                    {{ $isHolds }}&nbsp;&nbsp;{{ $numberHolds }}</td></tr>
                <tr><td>本刷校正：</td><td>&nbsp;&nbsp;&nbsp;
                @if ( $proofreading == '本紙校正' )
                  @if ( $coverOrContent == '表紙')
                      本紙校正&nbsp;:&nbsp;表紙
                  @elseif ( $coverOrContent == '表紙、本文')
                    @if ( $partOrWhole == '部分')
                      本紙校正&nbsp;:&nbsp;表紙、本文=部分、{{ $numberParts }}
                    @else
                      本紙校正&nbsp;:&nbsp;表紙、本文=全体
                    @endif
                  @elseif ( $coverOrContent == '本文')
                    @if ( $partOrWhole == '部分')
                      本紙校正&nbsp;:&nbsp;本文=部分、{{ $numberParts }}
                    @else
                      本紙校正&nbsp;:&nbsp;本文=全体
                    @endif
                  @endif
                @endif
                </td></tr>
        </tr>
        <tr><td colspan="2">そ の 他：</td><td>&nbsp;&nbsp;&nbsp;
          @if ( $o_remarks > 0 )
              記載あり&nbsp;&nbsp;（メール本文をご覧下さい）</td>
          @else
              記載なし</td>
          @endif
        </tr>
      </table>

      <input type="hidden" id="coverDesignInput" name="coverDesign" value="{{ $coverDesign }}">
      <input type="hidden" id="originalCoverFileInput" name="originalCoverFile" value="{{ $originalCoverFile }}">
      <input type="hidden" id="uploadedCoverFile" name="coverFilePath" value="{{ $uploadedCoverFile }}">
      <input type="hidden" id="contentDesignInput" name="contentDesign" value="{{ $contentDesign }}">
      <input type="hidden" id="originalContentFileInput" name="originalContentFile" value="{{ $originalContentFile }}">
      <input type="hidden" id="uploadedContentFile" name="contentFilePath" value="{{ $uploadedContentFile }}">
      <input type="hidden" id="paperSizeInput" name="paperSize" value="{{ $paperSize }}">
      <input type="hidden" id="copiesInput" name="copies" value="{{ $copies }}">
      <input type="hidden" id="bindingInput" name="binding" value="{{ $binding }}">
      <input type="hidden" id="pages" name="pages" value="{{ $pages }}">
      <input type="hidden" id="paperType1Input" name="paperType1" value="{{ $paperType1 }}">
      <input type="hidden" id="coverWeight" name="coverWeight" value="{{ $coverWeight }}">
      <input type="hidden" id="coverColorInput" name="coverColor" value="{{ $coverColor }}">
      <input type="hidden" id="paperType2Input" name="paperType2" value="{{ $paperType2 }}">
      <input type="hidden" id="contentWeight" name="contentWeight" value="{{ $contentWeight }}">
      <input type="hidden" id="contentColorInput" name="contentColor" value="{{ $contentColor }}">
      <input type="hidden" id="proccessInput" name="proccess" value="{{ $proccess }}">
      <input type="hidden" id="isKadomaruInput" name="isKadomaru" value="{{ $isKadomaru }}">
      <input type="hidden" id="isHoldsInput" name="isHolds" value="{{ $isHolds }}">
      <input type="hidden" id="numberHoldsInput" name="numberHolds" value="{{ $numberHolds }}">
      <input type="hidden" id="proofreadingInput" name="proofreading" value="{{ $proofreading }}">
      <input type="hidden" id="coverOrContentInput" name="coverOrContent" value="{{ $coverOrContent }}">
      <input type="hidden" id="partOrWholeInput" name="partOrWhole" value="{{ $partOrWhole }}">
      <input type="hidden" id="numberPartsInput" name="numberParts" value="{{ $numberParts }}">
      <input type="hidden" id="printingFee" name="printingFee" value="{{ $printingFee }}">
      <input type="hidden" id="processFee" name="processFee" value="{{ $processFee }}">
      <input type="hidden" id="proofreadingFee" name="proofreadingFee" value="{{ $proofreadingFee }}">
      <input type="hidden" id="postageFee" name="postageFee" value="{{ $postageFee }}">
      <input type="hidden" id="unitPrice" name="unitPrice" value="{{ $unitPrice }}">
      <input type="hidden" id="productPrice" name="productPrice" value="{{ $productPrice }}">
      <input type="hidden" id="subtotal" name="subtotal" value="{{ $subtotal }}">
      <input type="hidden" id="consumptionTax" name="consumptionTax" value="{{ $consumptionTax }}">
      <input type="hidden" id="totalAmountFee" name="totalAmountFee" value="{{ $totalAmountFee }}">
      <input type="hidden" id="o_remarks" name="o_remarks" value="{{ $o_remarks }}">

      <div class="order-customer">
        <h3>お客様情報</h3>
      </div>
      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <div class="form-group form-group-icon">
            <i class="fa fa fa-building"></i>
            <label for="o_company" class="form-label">会社名</span></label>
              <input type="text" class="confirm-form-control border-info" id="o_company" name="o_company" :value="old('o_company')" placeholder="会社名">
          </div>
        </div>
        <div class="col-sm-12 col-xs-12">
          <div class="form-group form-group-icon">
            <i class="fa fa-user"></i>
            <label for="o_name" class="form-label">お名前<span class="text-danger">*</span></label>
              <input type="text" class="confirm-form-control border-primary" id="o_name" name="o_name" :value="old('o_name')" placeholder="名前" required>
          </div>
        </div>
        
        <div class="col-sm-12 col-xs-12">
          <div class="form-group form-group-icon">
            <i class="fa fa-envelope"></i>
            <label for="o_mail" class="form-label">メールアドレス<span class="text-danger">*</span></label>
              <input type="text" class="confirm-form-control border-success" id="o_mail" name="o_mail" :value="old('o_mail')" placeholder="メールアドレス" required
                pattern="^[a-zA-Z0-9.!#$&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+$">
          </div>
        </div>
        <div class="col-sm-6 col-xs-12">
          <div class="form-group form-group-icon">
            <i class="fas fa-phone-alt"></i>
            <label for="o_tel" class="form-label">電話番号<span class="text-danger">*</span></label>
              <input type="text" class="confirm-form-control border-purple" id="o_tel" name="o_tel" minlength="12" maxlength="13" placeholder="ハイフンありで10または11桁の数字" pattern="^[0-9-]+$" :value="old('o_tel')" placeholder="電話番号" required>
          </div>
        </div>
        <div class="col-sm-6 col-xs-12">
          <div class="form-group form-group-icon">
            <i class="fas fa-phone-alt"></i>
            <label for="o_tel" class="form-label">FAX</label>
              <input type="text" class="confirm-form-control border-purple" id="o_fax" name="o_fax" minlength="12" maxlength="13" placeholder="ハイフンありで10または11桁の数字" pattern="^[0-9-]+$" :value="old('o_tel')" placeholder="電話番号">
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="o_yubin">郵便番号<span class="text-danger">*</span></label>
            <input type="postal-code" class="confirm-form-control p-postal-code" id="o_yubin" name="o_yubin" minlength="7" maxlength="7" pattern="^[0-9]+$" placeholder="7桁の数字" :value="old('o_yubin')" required>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="o_addr1">都道府県<span class="text-danger">*</span></label>
            <input type="address-level1" class="confirm-form-control p-region" id="o_addr1" name="o_addr1" maxlength="10" :value="old('o_addr1')" required>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label for="o_addr2">市区町村・番地<span class="text-danger">*</span></label>
            <input type="address-level2" class="confirm-form-control p-locality p-street-address p-extended-address" id="o_addr2" name="o_addr2" maxlength="50" placeholder="50字以内" :value="old('o_addr2')" required>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label for="o_addr3">建物名</label>
            <input type="text" class="confirm-form-control" id="o_addr3" name="o_addr3" maxlength="30" placeholder="30字以内" :value="old('o_addr3')">
          </div>
        </div>
        
        <div class="col-12">
          <div class="text-sm-center mt-6">
            <p class="text-center mt-5"><a href="{{ route('order_note') }}" class="btn btn-secondary" value="cancel">キャンセル</a>
              <button type="submit" class="btn btn-primary" value="send">お見積りを送信</button>
              </p>
          </div>
        </div>
      </div>
    </form>  {{-- ここまでゲスト用のフォーム --}}
  @endauth
  </div>  {{--/container --}}
</section>

  {{-- jsファイルはローカルではとりあえずこの場所でOK --}}

  </x-slot>

  <x-slot name="script">
    <!-- Slider js トップページのスタイダー用 -->
    
    </x-slot>

</x-order-base>

