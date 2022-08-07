<!-- ====================================
———	FOOTER
===================================== -->
<footer class="footer-bg-img">
  <!-- Footer Color Bar -->
  <div class="color-bar">
    <div class="container-fluid">
      <div class="row">
        <div class="col color-bar bg-warning"></div>
        <div class="col color-bar bg-danger"></div>
        <div class="col color-bar bg-success"></div>
        <div class="col color-bar bg-info"></div>
        <div class="col color-bar bg-purple"></div>
        <div class="col color-bar bg-pink"></div>
        <div class="col color-bar bg-warning d-none d-md-block"></div>
        <div class="col color-bar bg-danger d-none d-md-block"></div>
        <div class="col color-bar bg-success d-none d-md-block"></div>
        <div class="col color-bar bg-info d-none d-md-block"></div>
        <div class="col color-bar bg-purple d-none d-md-block"></div>
        <div class="col color-bar bg-pink d-none d-md-block"></div>
      </div>
    </div>
  </div>

  {{-- <div class="pt-8 pb-7  bg-repeat" style="background-image: url(pligins/img/background/footer-bg-img-1.png);"> --}}
  <div class="pt-8 pb-7  bg-repeat" style="background-image: url({{ asset('img/background/footer-bg-sm-img2.png') }});">
    
    <div class="container">
      
      <div class="row">
        <div class="col-sm-6 col-lg-3 col-xs-12">
          <h5 class="section-title-sm font-weight-bold text-white mb-6">ジャスミン舎株式会社</h5>
          {{-- <h5 class="section-title-sm font-weight-bold text-white mb-6">ジャスミン舎</h5> --}}
          <p class="mb-4">〒000-0000<br>愛知県一宮市<br>
            mail : yujician.sumi@gmail.com
          </p>
        </div>

        <div class="col-sm-6 col-lg-3 col-xs-12">
          <h5 class="section-title-sm font-weight-bold text-white mb-6">
            <a href="#">特定商取引法表示</a>
          </h5>
        </div>

        <div class="col-sm-6 col-lg-3 col-xs-12">
          <h5 class="section-title-sm font-weight-bold text-white mb-6">
            <a href="#">ご利用案内</a>
          </h5>
        </div>

        <div class="col-sm-6 col-lg-3 col-xs-12">
          <h5 class="section-title-sm font-weight-bold text-white mb-6">
            <a href="#">よくある質問</a>
          </h5>
        </div>
      </div>
      <div class="col-sm-12 col-xs-12">
        <ul class="list-inline d-flex align-items-center justify-content-md-center justify-content-center mb-md-0">
          <li class="me-6">
            {{-- <a href="https://www.instagram.com/insatsushop/" target="_blank"> --}}
            <a href="https://www.instagram.com/" target="_blank">
              <img src="https://gigaplus.makeshop.jp/insatsushop/img/pc/f_insta.png" alt="instagram">
            </a>
          </li>
          <li class="me-6">
            {{-- <a href="https://www.facebook.com/insatsushop/" target="_blank"> --}}
            <a href="https://www.facebook.com/" target="_blank">
              <img src="https://gigaplus.makeshop.jp/insatsushop/img/pc/f_fb.png" alt="facebook">
            </a>
          </li>
          <li class="me-6">
            {{-- <a href="https://twitter.com/insatsu_shop" target="_blank"> --}}
            <a href="https://twitter.com" target="_blank">
              <img src="https://gigaplus.makeshop.jp/insatsushop/img/pc/f_tw.png" alt="instagram">
            </a>
          </li>
          <li class="me-6">
            {{-- <a href="https://page.line.me/insatsushop" target="_blank"> --}}
            <a href="https://page.line.me" target="_blank">
              <img src="https://gigaplus.makeshop.jp/insatsushop/img/pc/f_line.png" alt="facebook">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  

  <!-- Copy Right -->
  <div class="copyright">
    <div class="container">
      <div class="row py-4 align-items-center">
        <div class="col-sm-12 col-xs-12 order-1 order-md-0">
          <p class="copyright-text"> © <span id="copy-year"></span> <a href="http://www.jf1.co.jp/" target="_blank">Copyright Jasmine-sya Co., Ltd.</a></p>
          {{-- <p class="copyright-text"> © <span id="copy-year"></span> <a href="#" target="_blank">Copyright Jasmine-sya Co., Ltd.</a></p> --}}
        </div>
      </div>
    </div>
  </div>
</footer>

<!--scrolling-->
<div class="">
  <a href="#pageTop" class="back-to-top" id="back-to-top" style="opacity: 1;">
    <i class="fas fa-arrow-up" aria-hidden="true"></i>
  </a>
</div>

<!-- Javascript -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('plugins/fancybox/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('plugins/isotope/isotope.min.js') }}"></script>
<script src="{{ asset('plugins/images-loaded/js/imagesloaded.pkgd.min.js') }}"></script>

<script src="{{ asset('plugins/lazyestload/lazyestload.js') }}"></script>
<script src="{{ asset('plugins/velocity/velocity.min.js') }}"></script>
<script src="{{ asset('plugins/smoothscroll/SmoothScroll.js') }}"></script>


<script src="{{ asset('plugins/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

<!-- Load revolution slider only on Local File Systems. The following part can be removed on Server -->

<script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script> 


<script src="{{ asset('plugins/wow/wow.min.js') }}"></script>

<script>
  var d = new Date();
  var year = d.getFullYear();
  document.getElementById("copy-year").innerHTML = year;
</script>
<script src="{{ asset('js/kidz.js') }}"></script>
</body>

</html>