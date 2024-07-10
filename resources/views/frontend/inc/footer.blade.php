<footer class="main-footer site-footer border-top">
    <div class="container">
    <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-6">
          <div class="row">
            <div class="col-md-12">
              <h3 class="footer-heading mb-4">Menü</h3>
            </div>
            <div class="col-md-6 col-lg-4">
              <ul class="list-unstyled">
                <li><a href="{{route('index')}}">Anasayfa</a></li>
                <li><a href="{{route('about')}}">Hakkımzda</a></li>
                <li><a href="{{route('news.index')}}">Haberler</a></li>
                <li><a href="{{route('contact')}}">İletişim</a></li>
              </ul>

            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="block-5 mb-5">
            <h3 class="footer-heading mb-4">İletişim</h3>
            <ul class="list-unstyled">
              <li class="address">İstanbul | Etiler Blog Haber 7/24 Haber</li>
              <li class="phone"><a href="#">+90 850 000 0000</a></li>
              <li class="email">blog@blog.com.tr</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row pt-5 mt-1 text-center">
        <div class="col-md-12">
          <p>
          Copyright &copy; {{date('d/m/Y')}} Tüm haklar saklıdır.
          </p>
        </div>

      </div>
    </div>
</footer>