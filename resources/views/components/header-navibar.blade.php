<body id="body" class="up-scroll">
  <!-- ====================================
  ——— PRELOADER
  ===================================== -->
  <div id="preloader" class="smooth-loader-wrapper">
    <div class="smooth-loader">
      <div class="loader">
        <span class="dot dot-1"></span>
        <span class="dot dot-2"></span>
        <span class="dot dot-3"></span>
        <span class="dot dot-4"></span>
      </div>
    </div>
  </div>

  <!-- ====================================
  ——— HEADER
  ===================================== -->
  <header class="header" id="pageTop">
    <!-- Top Color Bar -->
    <div class="color-bars">
      <div class="container-fluid">
        <div class="row">
          <div class="col color-bar bg-warning d-none d-md-block"></div>
          <div class="col color-bar bg-success d-none d-md-block"></div>
          <div class="col color-bar bg-danger d-none d-md-block"></div>
          <div class="col color-bar bg-info d-none d-md-block"></div>
          <div class="col color-bar bg-purple d-none d-md-block"></div>
          <div class="col color-bar bg-pink d-none d-md-block"></div>
          <div class="col color-bar bg-warning"></div>
          <div class="col color-bar bg-success"></div>
          <div class="col color-bar bg-danger"></div>
          <div class="col color-bar bg-info"></div>
          <div class="col color-bar bg-purple"></div>
          <div class="col color-bar bg-pink"></div>
        </div>
      </div>
    </div>

            <!-- Top Bar-->
        <!-- d-none d-md-block -->
        <div class=" bg-stone  top-bar">
          <div class="container">
            <div class="row">
              <div class="col-lg-7 d-none d-lg-block">
                <ul class="list-inline d-flex justify-content-xl-start align-items-center h-100 mb-0">
                  <li>
                    <span class="bg-primary icon-header me-xl-2">
                      <i class="fas fa-envelope" aria-hidden="true"></i>
                    </span>
                    <a href="mailto:jf@jf1.co.jp" class="me-lg-4 me-xl-6 text-white opacity-80">jf@jf1.co.jp</a>
                    {{-- <a href="yujician.sumi@gmail.com" class="me-lg-4 me-xl-6 text-white opacity-80">yujician.sumi@gmail.com</a> --}}
                  </li>
                  <li>
                    <span class="bg-success icon-header me-xl-2">
                      <i class="fas fa-phone-alt" aria-hidden="true"></i>
                    </span>
                    <a href="tel:+1 234 567 8900" class="me-lg-4 me-xl-6 text-white opacity-80"> 093-371-3231 </a>
                  </li>
                  <li class="text-white">
                    <span class="bg-pink icon-header">
                      <i class="far fa-clock" aria-hidden="true"></i>
                    </span>
                    <span class="opacity-80">Open: 9:00 - 17:30（平日）</span>
                  </li>
                </ul>
              </div>

              <div class="col-lg-5">
                <ul class="list-inline d-flex mb-0 justify-content-xl-end justify-content-center align-items-center me-xl-2">
                  {{-- <li>
                    <span class="bg-info icon-header me-lg-0 me-xl-1">
                      <i class="fas fa-globe" aria-hidden="true"></i>
                    </span>
                  </li>
                  <li class="me-3 me-md-4 me-lg-3 me-xl-5 dropdown dropdown-sm">
                    <button class="btn btn-link " type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false"></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="javascript:void(0)">English</a>
                      <a class="dropdown-item" href="javascript:void(0)">Spanish</a>
                      <a class="dropdown-item" href="javascript:void(0)">Hindi</a>
                    </div>
                  </li> --}}
                 
              @if (Route::has('login'))
                  <li class="text-white me-md-3 me-lg-2 me-xl-5">
                      @auth
                      <li class="nav-item dropdown bg-primary">
                        <a class="nav-link dropdown-toggle  active " href="javascript:void(0)"
                          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span>{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                          <form method="POST" action="{{ route('profile') }}">
                            @csrf
                            <input type="hidden" name="u_id" value="{{ Auth::user()->id }}">
                            <x-dropdown-link href="{ route('profile') }"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                          </form>
                          <li>
                            <form method="POST" action="{{ route('logout') }}">
                              @csrf
                              <x-dropdown-link :href="route('logout')"
                                      onclick="event.preventDefault();
                                                  this.closest('form').submit();">
                                  {{ __('ログアウト') }}
                              </x-dropdown-link>
                            </form>
                          </li>
                        </ul>
                      </li>
                      @else
                          <span class="bg-purple icon-header me-1 me-md-2 me-lg-1 me-xl-2">
                              <i class="fas fa-unlock-alt text-white font-size-13" aria-hidden="true"></i>
                          </span>
                          <a class="ml-4 text-sm text-white-700 font-weight-medium opacity-80" href="{{ route('login') }}" class="text-sm">ログイン</a>
                          <span class="text-white opacity-80">or</span> 
                       
                          @if (Route::has('register'))
                          <a class="ml-4 text-sm text-white-700 font-weight-medium opacity-80" href="{{ route('register') }}" class="text-sm">新規登録</a>
                        @endif
                      @endauth
                  </li>
              @endif

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

