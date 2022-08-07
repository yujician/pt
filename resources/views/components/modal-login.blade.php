<!-- Modal Login -->
<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">

      <!-- Session Status -->
      <x-auth-session-status class="mb-4" :status="session('status')" />

      <!-- Validation Errors -->
      <x-auth-validation-errors class="mb-4" :errors="$errors" />

      <div class="bg-warning rounded-top p-2">
        <h3 class="text-white font-weight-bold mb-0 ms-2">ログイン</h3>
      </div>

      <div class="rounded-bottom-md border-top-0">
        <div class="p-3">
          <form method="POST" action="{{ route('login') }}" role="form">
            @csrf

          <!-- Email Address -->
            <div class="form-group form-group-icon">
              <input type="email" class="form-control border" id="email" placeholder="メールアドレス" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="form-group form-group-icon">
              <input type="password" class="form-control border" id="password" placeholder="パスワード" name="password" required autocomplete="current-password" />
          </div>

            <div class="form-group">
              <button type="submit" class="btn btn-danger text-uppercase w-100">ログイン</button>
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="form-group text-center text-secondary mb-0">
              @if (Route::has('password.request'))
                  <a class="text-danger" href="{{ route('password.request') }}">
                      {{ __('Forgot your password?') }}
                  </a>
              @endif
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Create Account -->
<div class="modal fade" id="modal-createAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm rounded" role="document">
    <div class="modal-content">
      <div class="bg-warning rounded-top p-2">
        <h3 class="text-white font-weight-bold mb-0 ms-2">新規登録</h3>
      </div>

      <div class="rounded-bottom-md border-top-0">
        <div class="p-3">
          
          <!-- Validation Errors -->
        {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}
          <form method="POST" action="{{ route('register') }}" role="form">
          @csrf
            @if ($errors->has('name'))
              <p class="text-danger">{{$errors->first('name')}}</p>
            @endif
            <div class="form-group form-group-icon">
              <input type="text" class="form-control border" id="name" placeholder="ニックネーム" name="name" :value="old('name')" required autofocus />
            </div>
            @if ($errors->has('email'))
              <p class="text-danger">{{$errors->first('email')}}</p>
            @endif
            <div class="form-group form-group-icon">
              <input type="email" class="form-control border" id="email" placeholder="メール" name="email" :value="old('email')" required />
            </div>
            @if ($errors->has('password'))
              <p class="text-danger">{{$errors->first('password')}}</p>
            @endif
            <div class="form-group form-group-icon">
              <input type="password" class="form-control border" placeholder="パスワード" name="password" required autocomplete="new-password" />
            </div>

            <div class="form-group form-group-icon">
              <input type="password" class="form-control border" placeholder="パスワード確認" name="password_confirmation" required />
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-danger text-uppercase w-100">登録する</button>

              {{-- @if (count($errors) > 0)
              <form method="POST" action="{{ route('register') }}" role="form">
              @endif --}}
              
            </div>

            <div class="form-group text-center text-secondary mb-0">
              <p class="mb-0">既にアカウントをお持ちですか? <a class="text-danger" href="javascript:void(0)">ログイン</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Enroll -->
{{-- <div class="modal fade" id="modal-enrolAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm rounded" role="document">
    <div class="modal-content">
      <div class="bg-pink rounded-top p-2">
        <h3 class="text-white font-weight-bold mb-0 ms-2">Create An Account</h3>
      </div>

      <div class="rounded-bottom-md border-top-0">
        <div class="p-3">
          <form method="POST" action="{{ route('register') }} " role="form">
            @csrf

            <div class="form-group form-group-icon">
              <input type="text" class="form-control border" name="name" placeholder="Name" required="">
            </div>

            <div class="form-group form-group-icon">
              <input type="text" class="form-control border" name="password_confirmation" placeholder="User name" required="">
            </div>

            <div class="form-group form-group-icon">
              <input type="text" class="form-control border" name='phone' placeholder="Phone" required="">
            </div>

            <div class="form-group form-group-icon">
              <input type="password" class="form-control border" name='password' placeholder="Password" required autocomplete="new-password">
            </div>

            <div class="form-group form-group-icon">
              <input type="password" class="form-control border" placeholder="Re-Password" name="password_confirmation" required>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-pink text-uppercase text-white w-100">Register</button>
            </div>

            <div class="form-group text-center text-secondary mb-0">
              <p class="mb-0">Allready have an account? <a class="text-pink" href="javascript:void(0)">Log in</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div> --}}
