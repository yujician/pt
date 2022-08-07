<x-app-layout>
  <x-slot name="title">プロフィール編集</x-slot>
  <x-slot name="msg">プロフィール編集</x-slot>
  
      <x-slot name="header">
      <div class="container">
        <div class="row">
            <div class="col-12 p-3">
                <h2 class="text-secondary">登録情報編集</h2>
            </div>
        </div>
      </div>
      </x-slot>
  
      {{-- {!! dd($errors) !!} --}}

      {{-- app.bladeの{{slot}}へ出力される --}}
    <x-slot name="slot">
      <div class="container">
        <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
        {{-- <script href="{{ asset('js/yubinbango.js')}}" charset="UTF-8"></script> --}}
            
            <!-- Validation Errors -->

            {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}

            @if (count($errors) > 0)
            <div>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            <form method="post" action="{{ route('user_change') }}" class="row g-3 h-adr pt-3">
              <span class="p-country-name" style="display:none;">Japan</span>
              @csrf
              <input type="hidden" name="u_id" value="{{$master_data->id}}">

            @if(count($sub_data) > 0)
            <div class="col-sm-6">
              <div class="form-group">
                <label for="u_company_name">会社名</label>
                <input type="text" class="form-control" id="u_company_name" name="u_company_name" maxlength="20" placeholder="20字以内" value="{{$sub_data[0]->company}}">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="u_name">名前<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="u_name" name="u_name" minlength="2" maxlength="13" placeholder="2〜13字以内" value="{{$master_data->name}}" autocomplete="name">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="u_mail">メールアドレス</label>
                <input type="email" class="form-control" id="u_mail" name="u_mail" maxlength="40" placeholder="40字以内" value="{{$master_data->email}}" readonly>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <label for="u_yubin">郵便番号<span class="text-danger">*</span></label>
                <input type="postal-code" class="form-control p-postal-code" id="u_yubin" name="u_yubin" minlength="7" maxlength="7" pattern="^[0-9]+$" placeholder="7桁の数字" value="{{$sub_data[0]->yubin}}" required>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <label for="u_addr1">都道府県<span class="text-danger">*</span></label>
                <input type="address-level1" class="form-control p-region" id="u_addr1" name="u_addr1" maxlength="10" value="{{$sub_data[0]->addr1}}" required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="u_addr2">市区町村・番地<span class="text-danger">*</span></label>
                <input type="address-level2" class="form-control p-locality p-street-address p-extended-address" id="u_addr2" name="u_addr2" maxlength="50" placeholder="50字以内" value="{{$sub_data[0]->addr2}}" required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="u_addr3">建物名</label>
                <input type="text" class="form-control" id="u_addr3" name="u_addr3" maxlength="30" placeholder="30字以内" value="{{$sub_data[0]->addr3}}">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label for="u_tel">電話番号<span class="text-danger">*</span></label>
                <input type="tel" class="form-control" id="u_tel" name="u_tel" minlength="12" maxlength="13" placeholder="ハイフンありで10または11桁の数字" pattern="^[0-9-]+$" value="{{$sub_data[0]->tel}}" required>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label for="u_fax">FAX番号</label>
                <input type="tel" class="form-control" id="u_fax" name="u_fax" minlength="12" maxlength="13" placeholder="ハイフンありで10または11桁の数字" pattern="^[0-9-]+$" value="{{$sub_data[0]->fax}}">
              </div>
            </div>
            <div class="col-sm-9">
              <div class="form-group">
                <label for="u_biko">備考</label>
                <textarea class="form-control" id="u_biko" name="u_biko" rows="6" maxlength="500" placeholder="500字以内でご自由にご記入下さい。" value="{{$sub_data[0]->biko}}"></textarea>
              </div>
            </div>
    
            @else
            <div class="col-sm-6">
              <div class="form-group">
                <label for="u_company_name">会社名</label>
                <input type="text" class="form-control" id="u_company_name" name="u_company_name" maxlength="20" placeholder="20文字以内" :value="old('u_company_name')">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="u_name">名前</label>
                <input type="text" class="form-control" id="u_name" name="u_name" minlength="2" maxlength="13" placeholder="2〜13字以内" value="{{$master_data->name}}" autocomplete="name">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="u_mail">メールアドレス</label>
                <input type="email" class="form-control" id="u_mail" name="u_mail" maxlength="40" placeholder="40字以内" value="{{$master_data->email}}" readonly>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <label for="u_yubin">郵便番号<span class="text-danger">*</span></label>
                <input type="postal-code" class="form-control p-postal-code" id="u_yubin" name="u_yubin" minlength="7" maxlength="7" pattern="^[0-9]+$" placeholder="7桁の数字" :value="old('u_yubin')" required>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <label for="u_addr1">都道府県<span class="text-danger">*</span></label>
                <input type="address-level1" class="form-control p-region" id="u_addr1" name="u_addr1" :value="old('u_yubin')" required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="u_addr2">市区町村・番地<span class="text-danger">*</span></label>
                <input type="address-level2" class="form-control p-locality p-street-address p-extended-address" id="u_addr2" name="u_addr2" maxlength="50" placeholder="50字以内" :value="old('u_addr2')" required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="u_addr3">建物名</label>
                <input type="text" class="form-control" id="u_addr3" name="u_addr3" maxlength="30" placeholder="30字以内" :value="old('u_addr3')">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label for="u_tel">電話番号<span class="text-danger">*</span></label>
                <input type="tel" class="form-control" id="u_tel" name="u_tel" minlength="12" maxlength="13" placeholder="ハイフンありで10または11桁の数字" pattern="^[0-9-]+$" :value="old('u_tel')" required>
 
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label for="u_fax">FAX番号</label>
                <input type="tel" class="form-control" id="u_fax" name="u_fax" minlength="12" maxlength="13" placeholder="ハイフンありで10または11桁の数字" pattern="^[0-9-]+$" :value="old('u_fax')">
              </div>
            </div>
            <div class="col-sm-9">
              <div class="form-group">
                <label for="u_biko">備考</label>
                <textarea class="form-control" id="u_biko" name="u_biko" rows="6" maxlength="500" placeholder="500字以内でご自由にご記入下さい。" :value="old('biko')"></textarea>
              </div>
            </div>
            @endif
            <div class="col-sm-12 text-center p-3 pb-5">
              <a href="{{ route('profile') }}" class="btn btn-secondary" name="cancel" value="cancel">キャンセル</a>
              <button type="submit" class="btn btn-primary" name="change" value="change">更新</button>
            </div>
          </form>
            
      </div>
      </x-slot>
  
      <x-slot name="script">
        <script>
  
        </script>
      </x-slot>
  </x-app-layout>
  