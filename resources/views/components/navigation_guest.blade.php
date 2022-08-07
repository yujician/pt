@include('components.header-navibar')

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-scrollUp navbar-sticky navbar-white">
    {{-- <nav class="navbar navbar-expand-md navbar-scrollUp navbar-sticky navbar-white"> --}}
      <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">
          {{-- <img class="d-inline-block" src="{{ asset('img/logo-school.png') }}" alt="Kidz School"> --}}
          <img class="d-inline-block" src="{{ asset('img/logos/header-logo1.png') }}" alt="Fukuda-printing">
        </a>
        <button class="navbar-toggler py-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
          aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
          <ul class="navbar-nav ms-lg-auto">
            <li class="nav-item dropdown bg-primary">
              <a class="nav-link dropdown-toggle  active " href="javascript:void(0)"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-home nav-icon" aria-hidden="true"></i>
                <span>ホーム</span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                <li>
                  <a class="dropdown-item  active " href="{{ route('index') }}">ホーム</a>
                </li>
                <li>
                  <a class="dropdown-item " href="#">お知らせ</a>
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown bg-danger">
              <a class="nav-link dropdown-toggle " href="javascript:void(0)" role="button"
                data-bs-toggle="dropdown">
                <i class="fas fa-list-ul nav-icon" aria-hidden="true"></i>
                <span>商品一覧</span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item " href="#explain-note">オリジナルノートとは</a>
                </li>
                <li>
                  <a class="dropdown-item " href="javascript:void(0)">
                    商品例<i class="fa fa-chevron-right" aria-hidden="true"></i>
                  </a>
                  <ul class="sub-menu">
                    <li><a class="" href="#">書籍</a></li>
                    <li><a class="" href="#">カタログ・パンフレット</a></li>
                  </ul>
                </li>
                {{-- <li>
                  <a class="dropdown-item
                   ||
                   ||
                  
                  "
                    href="javascript:void(0)">キャンペーン<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                  <ul class="sub-menu">
                    <li><a class=" " href="events.html">キャンペーン1</a></li>
                    <li>
                      <a class="" href="event-single-left-sidebar.html">キャンペーン2</a>
                    </li>
                    <li>
                      <a class="" href="event-single-right-sidebar.html">Events
                        Right Sidebar</a>
                    </li>
                  </ul>
                </li> --}}
              </ul>
            </li>

            {{-- <li class="nav-item dropdown mega-dropdown bg-success">
              <a class="nav-link dropdown-toggle " href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-file-alt nav-icon" aria-hidden="true"></i>
                <span>ショップ</span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item " href="#">このショップについて</a>
                </li> --}}
                {{-- <li>
                  <a class="dropdown-item " href="javascript:void(0)">
                    Team <i class="fa fa-chevron-right" aria-hidden="true"></i>
                  </a>
                  <ul class="sub-menu">
                    <li><a class="" href="teachers.html">Teachers</a></li>
                    <li><a class="" href="teachers-details.html">Teachers
                        Details</a></li>
                  </ul>
                </li>
                <li>
                  <a class="dropdown-item " href="testimonial.html">Testimonial</a>
                </li>
                <li>
                  <a class="dropdown-item
                   ||
                   ||
                  
                  "
                    href="javascript:void(0)">Events<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                  <ul class="sub-menu">
                    <li><a class=" " href="events.html">All Events</a></li>
                    <li>
                      <a class="" href="event-single-left-sidebar.html">Events
                        Left Sidebar</a>
                    </li>
                    <li>
                      <a class="" href="event-single-right-sidebar.html">Events
                        Right Sidebar</a>
                    </li>
                  </ul>
                </li> --}}
              {{-- </ul>
            </li> --}}

            {{-- <li class="nav-item dropdown bg-info">
              <a class="nav-link dropdown-toggle " href="javascript:void(0)" id="stores"
                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-edit nav-icon" aria-hidden="true"></i>
                <span>利用案内</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="stores">
                <li>
                  <a class="dropdown-item" href="javascript:void(0)">注文方法</a> --}}
                  {{-- <ul class="sub-menu">
                    <li><a class="" href="products.html">Products Fullwidth</a></li>
                    <li><a class="" href="product-left-sidebar.html">Products
                        Left Sidebar</a></li>
                    <li><a class="" href="product-right-sidebar.html">Products
                        Right Sidebar</a></li>
                  </ul> --}}
                {{-- </li>
                <li>
                  <a class="dropdown-item " href="javascript:void(0)">送料</a>
                </li> --}}
                {{-- <li>
                  <a class="dropdown-item " href="product-category.html">Product
                    Categories</a>
                </li> --}}
                {{-- <li>
                  <a class="dropdown-item " href="product-cart.html">Cart</a>
                </li>
                <li>
                  <a class="dropdown-item
                     ||
                     ||
                    
                    "
                    href="javascript:void(0)">Checkout<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                  <ul class="sub-menu">
                    <li>
                      <a class="" href="product-checkout-step-1.html">Personal
                        Info</a>
                    </li>
                    <li>
                      <a class="" href="product-checkout-step-2.html">Payment
                        Info</a>
                    </li>
                    <li>
                      <a class="" href="product-checkout-step-3.html">Confirmation</a>
                    </li>
                  </ul>
                </li> --}}
              {{-- </ul>
            </li> --}}

            <li class="nav-item dropdown mega-dropdown bg-purple">
              <a class="nav-link dropdown-toggle " href="javascript:void(0)" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-file-alt nav-icon" aria-hidden="true"></i>
                <span>お見積り</span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  @auth
                  <a class="dropdown-item " href="{{ route('order_note_auth') }}">オリジナルノート</a>
                  @else
                  <a class="dropdown-item " href="{{ route('order_note') }}">オリジナルノート</a>
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
      </div>
    </nav>
  </header>
  <div class="main-wrapper home">