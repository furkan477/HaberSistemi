<nav class="sidebar sidebar-offcanvas bg-dark" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic3">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">User Listele</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic3">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('admin.user.list')}}">User Listele</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">Haber Listele</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic1">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('admin.news.list')}}">Haber Listele</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">İletişim Listele</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic2">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('admin.contact.list')}}">İletişim Listele</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">Kategorileri Listele</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic4">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('admin.categories.list')}}">Kategori Listele</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{route('admin.categories.show')}}">Kategori Ekle</a></li>
        </ul>
      </div>
    </li>
  </ul>
</nav>