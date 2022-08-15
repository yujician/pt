<x-inquiry-base>
  <x-slot name="title">お問い合わせ</x-slot>
  
  <x-slot name="slot">
<!-- ====================================
———	ABOUT MEDIA
===================================== -->
<section class="py-8 py-md-10">
  <div class="container">
    <div class="mb-9">
      <div class="row">
        <div class="col-sm-4 col-xs-12">
          <div class="media flex-md-column flex-lg-row mb-4">
            <div class="icon-rounded-circle-large shadow-sm mb-md-2 me-md-0 me-2 me-lg-2 bg-primary">
              <i class="fas fa-map-marker-alt text-white" aria-hidden="true"></i>
            </div>
            <div class="media-body">
              <h3 class="media-heading text-primary mt-0 font-weight-bold mb-3">Address:</h3>
              {{-- <p class="text-muted font-weight-medium">〒800-0037<br>北九州市門司区原町別院3番5号</p> --}}
              <p class="text-muted font-weight-medium">〒000-0000<br>愛知県×××××××××××</p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 col-xs-12">
          <div class="media flex-md-column flex-lg-row mb-6">
            <div class="icon-rounded-circle-large shadow-sm me-2 mb-md-2 me-md-0 me-lg-2 bg-success">
              <i class="fas fa-phone-alt text-white" aria-hidden="true"></i>
            </div>
            <div class="media-body">
              <h3 class="media-heading text-success mt-0 font-weight-bold mb-3">Phone:</h3>
              {{-- <a class="text-muted font-weight-medium" href="tel:093 371 3231"> --}}
              <a class="text-muted font-weight-medium" href="#">
                {{-- 093-371-3231<br>Fax:093-371-5735 --}}
                090-0000-0000<br>Fax:090-000-0000
              </a>
            </div>
          </div>
        </div>

        <div class="col-sm-4 col-xs-12">
          <div class="media flex-md-column flex-lg-row mb-3 mb-md-0">
            <div class="icon-rounded-circle-large shadow-sm me-2 mb-md-2 me-md-0 me-lg-2 bg-danger">
              <i class="far fa-envelope text-white" aria-hidden="true"></i>
            </div>
            <div class="media-body">
              <h3 class="media-heading text-danger">Email:</h3>
              <p class="font-weight-medium">
                {{-- <a class="text-muted" href="mailto:hello@example.com">jf@jf1.co.jp</a> --}}
                <a class="text-muted" href="mailto:hello@example.com">yujician.sumi@gmail.com</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- <div class="mb-10" id="map" style="width:100%; height:420px;"></div> --}}

    @auth {{-- ここからログインユーザー用のフォーム --}}

      {{-- <form method="post" action="{{ route('user_inquiry') }}"> --}}
      <form method="post" action="{{ route('inquiry_auth') }}">
        @csrf
        <input type="hidden" id="g_id" name="g_id" value="{{ Auth::user()->id }}">
            {{-- <input type="hidden" id="inquiry_id" name="inquiry_id" value="{{ $inquiry->id }}"> --}}
        <div class="row">

          <div class="col-sm-6 col-xs-12">
            <div class="form-group form-group-icon">
              <i class="fa fa-user"></i>
              <label for="g_name" class="form-label">お名前<span class="text-danger">*</span></label>
                <input type="text" class="form-control border-primary" id="g_name" name="g_name" value="{{ Auth::user()->name }}" readonly>
            </div>
          </div>

          <div class="col-sm-6 col-xs-12">
            <div class="form-group form-group-icon">
              <i class="fa fa-envelope"></i>
              <label for="g_mail" class="form-label">メールアドレス<span class="text-danger">*</span></label>
                <input type="text" class="form-control border-success" id="g_mail" name="g_mail" value="{{ Auth::user()->email }}" readonly>
            </div>
          </div>

          <div class="col-sm-4 col-xs-12">
            <div class="form-group form-group-icon">
              <label for="g_tel" class="form-label">電話番号</label>
              <i class="fas fa-phone-alt"></i>
              {{-- <input type="text" class="form-control border-primary" id="g_tel" name="g_tel" minlength="10" maxlength="11" placeholder="10または11桁の数字" pattern="^[0-9]+$" :value="old('tel')" placeholder="電話番号" required> --}}
              {{-- <input type="text" class="form-control border-purple" id="g_tel" name="g_tel" minlength="12" maxlength="13" placeholder="ハイフンありで10または11桁の数字" pattern="^[0-9]+$" :value="old('tel')"> --}}
              <input type="text" class="form-control border-purple" id="g_tel" name="g_tel" minlength="12" maxlength="13" placeholder="ハイフンありで10または11桁の数字" pattern="^[0-9-]+$" value="{{ Auth::user()->profile()->tel }}">
            </div>
          </div>

          <div class="col-sm-8 col-xs-12">
            <div class="form-group form-group-icon">
              <label for="g_message" class="form-label">お問い合わせ件名<span class="text-danger">*</span></label>
              <i class="fa fa-book"></i>
              <input type="text" class="form-control border-pink" id="g_subject" name="g_subject" maxlength="30" placeholder="件名（30字以内）" :value="old('g_subject')" required>
            </div>
          </div>

          <div class="col-12">
            <div class="form-group form-group-icon">
              <label for="g_message" class="form-label">お問い合わせ内容<span class="text-danger">*</span></label>
              <i class="fa fa-comments"></i>
              <textarea class="form-control border-info" id="g_contents" name="g_contents" :value="old('g_contents')" maxlength="1000" 
              placeholder="内容（最大1000字まで）" rows="6" :valuer="old('g_contents')" required></textarea>
            </div>
          </div>

          <div class="col-12">
            <div class="text-sm-center mt-6">
              <p class="text-center mt-5"><a href="./" class="btn btn-secondary" value="cancel">キャンセル</a>
                <button type="submit" class="btn btn-primary" value="send">お問い合わせを送信</button>
                </p>
            </div>
          </div>
        </div>
      </form>  {{-- ここまでログインユーザー用のフォーム --}}

    @else   {{-- ここからゲスト用のフォーム --}}
            
      <form method="post" action="{{ route('inquiry') }}">
        @csrf
        <div class="row">
          <div class="col-sm-6 col-xs-12">
            <div class="form-group form-group-icon">
              <i class="fa fa-user"></i>
              <label for="g_name" class="form-label">お名前<span class="text-danger">*</span></label>
                <input type="text" class="form-control border-primary" id="g_name" name="g_name" :value="old('g_name')" placeholder="名前" required>
            </div>
          </div>

          <div class="col-sm-6 col-xs-12">
            <div class="form-group form-group-icon">
              <i class="fa fa-envelope"></i>
              <label for="g_mail" class="form-label">メールアドレス<span class="text-danger">*</span></label>
                <input type="text" class="form-control border-success" id="g_mail" name="g_mail" :value="old('g_mail')" placeholder="メールアドレス" required
                  pattern="^[a-zA-Z0-9.!#$&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+$">
            </div>
          </div>

          <div class="col-sm-4 col-xs-12">
            <div class="form-group form-group-icon">
              <i class="fas fa-phone-alt"></i>
              <label for="g_tel" class="form-label">電話番号</label>
                <input type="text" class="form-control border-purple" id="g_tel" name="g_tel" minlength="12" maxlength="13" placeholder="ハイフンありで10または11桁の数字" pattern="^[0-9-]+$" :value="old('tel')" placeholder="電話番号">
            </div>
          </div>

          <div class="col-sm-8 col-xs-12">
            <div class="form-group form-group-icon">
              <label for="g_message" class="form-label">お問い合わせ件名<span class="text-danger">*</span><span class="text-danger">*</span></label>
              <i class="fa fa-book"></i>
              <input type="text" class="form-control border-pink" id="g_subject" name="g_subject" maxlength="30" placeholder="件名（30字以内）" :value="old('g_subject')" required>
            </div>
          </div>

          <div class="col-12">
            <div class="form-group form-group-icon">
              <label for="g_message" class="form-label">お問い合わせ内容<span class="text-danger">*</span></label>
              <i class="fa fa-comments"></i>
              <textarea class="form-control border-info" id="g_contents" name="g_contents" :value="old('g_contents')" maxlength="1000" 
              placeholder="内容（最大1000字まで）" rows="6" :valuer="old('g_contents')" equired></textarea>
            </div>
          </div>

          <div class="col-12">
            <div class="text-sm-center mt-6">
              <p class="text-center mt-5"><a href="./" class="btn btn-secondary" value="cancel">キャンセル</a>
                <button type="submit" class="btn btn-primary" value="send">お問い合わせを送信</button>
                </p>
            </div>
          </div>
        </div>
      </form>  {{-- ここまでゲスト用のフォーム --}}
    @endauth
  </div>  {{--/container --}}
</section>

  </x-slot>
  
  <x-slot name="script">
<!-- Slider js トップページのスタイダー用 -->

  </x-slot>
  
</x-inquiry-base>
