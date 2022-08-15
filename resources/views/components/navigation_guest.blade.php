@include('components.header-navibar')

    <!-- Navbar -->
    <div id="nav-content">
      <nav class="navbar navbar-expand-md navbar-scrollUp navbar-sticky navbar-white">
        
      {{-- <nav class="navbar navbar-expand-md navbar-scrollUp navbar-sticky navbar-white"> --}}
        
          <button class="navbar-toggler py-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarContent">
            <a class="navbar-brand" href="{{ route('index') }}">
              {{-- <img class="d-inline-block" src="{{ asset('img/logo-school.png') }}" alt="Kidz School"> --}}
              <img class="d-inline-block" src="{{ asset('img/logos/header-logo1.png') }}" alt="Fukuda-printing">
            </a>
            <ul class="navbar-nav ms-lg-auto ms-sm-auto">
              <li class="nav-item dropdown mega-dropdown bg-purple">
                <a class="nav-link dropdown-toggle " href="{{ route('index') }}">
                {{-- <a class="nav-link dropdown-toggle " href="{{ route('index') }}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> --}}
                  <i class="far fa-file-alt nav-icon" aria-hidden="true"></i>
                  <span>ホーム</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                  <li>
                    <a class="dropdown-item" href="{{ route('index') }}">ホーム</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">お知らせ</a>
                  </li>
                </ul>
              </li>

              <li class="nav-item dropdown bg-danger">
                <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown">
                  <i class="fas fa-list-ul nav-icon" aria-hidden="true"></i>
                  <span>商品一覧</span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item " href="#">オリジナルノートとは</a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="#">
                      商品例<i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <ul class="sub-menu">
                      <li><a class="" href="#">書籍</a></li>
                      <li><a class="" href="#">カタログ・パンフレット</a></li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li class="nav-item dropdown bg-info">
                <a class="nav-link dropdown-toggle " href="#" id="stores"
                  role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-edit nav-icon" aria-hidden="true"></i>
                  <span>利用案内</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="stores">
                  <li>
                    <a class="dropdown-item" href="#">注文方法</a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="#">送料</a>
                  </li>
                </ul>
              </li>

              <li class="nav-item dropdown mega-dropdown bg-purple">
                @auth
                  <a class="nav-link dropdown-toggle" href="{{ route('order_note_auth') }}">
                @else
                  <a class="nav-link dropdown-toggle" href="{{ route('order_note') }}">
                @endauth
                  <i class="far fa-file-alt nav-icon" aria-hidden="true"></i>
                  <span>お見積り</span>
                  </a>
                <ul class="dropdown-menu">
                  <li>
                    @auth
                      <a class="dropdown-item" href="{{ route('order_note_auth') }}">オリジナルノート</a>
                    @else
                      <a class="dropdown-item" href="{{ route('order_note') }}">オリジナルノート</a>
                    @endauth
                  </li>
                </ul>
              </li>

              <li class="nav-item dropdown bg-pink">
                @auth
                  <a class="nav-link dropdown-toggle " href="{{ route('inquiry_auth') }}">
                @else   
                  <a class="nav-link dropdown-toggle " href="{{ route('inquiry') }}">
                @endauth
                  <i class="fas fa-envelope nav-icon" aria-hidden="true"></i>
                  <span>お問い合わせ</span>
                </a>
              </li>
            </ul>
          </div>
      </nav>

  </header>
  {{-- <div class="main-wrapper home"> --}}