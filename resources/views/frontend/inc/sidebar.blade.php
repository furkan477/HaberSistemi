<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{route('index')}}" class="brand-link">
      <img src="http://demo.webklavuzu.com/img/favicon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Blog Haber Sitesi | 7/24 Haber</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <i class="fas fa-user"></i>
        </div>
        <div class="info">
          <a href="{{route('user.profil')}}" class="d-block">{{$user->name}}</a>
        </div>
      </div>

      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-phone"></i>
              <p>
                Blog Haber 7/24 Haber
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('news.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Güncel Haberler</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('user.news')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Yayınladığım Haberler</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('add.news')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Yeni Haber Yayınla</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('contact.message.see')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>İletişim Mesajlarınız</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>