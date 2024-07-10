@extends('frontend.layout.layout')

@section('content')

        <section class="content">
          <div class="container-fluid"><br>
            <h2 class="text-center"><strong><i class="fas fa-address-card mr-1"></i> -Hakkımda- </strong></h2><br>
            <div class="row">
              <div class="col-md-7"> 

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <img class="profile-user-img img-fluid img-circle"
                          src="../../dist/img/user4-128x128.jpg"
                          alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">{{ $user->name }}</h3>

                    <p class="text-muted text-center">{{ $user->job }}</p>
                  </div>
                </div>

                <div class="card card-primary text-center">
                  <div class="card-header">
                    <h3 class="card-title">Hakkımda</h3>
                  </div>
                  <div class="card-body">
                    <strong><i class="fas fa-phone mr-1"></i> Telefon</strong>
                    <p class="text-muted">{{$user->phone}}</p>
                    <hr>

                    <strong><i class="fas fa-envelope mr-1"></i> E-Posta</strong>
                    <p class="text-muted">{{$user->email}}</p>
                    <hr>

                    <strong><i class="fas fa-mug-hot mr-1"></i> Meslek</strong>
                    <p class="text-muted">{{$user->job}}</p>
                    <hr>

                    <strong><i class="fas fa-school mr-1"></i> Okul</strong>
                    <p class="text-muted">{{$user->school}}</p>
                    <hr>

                    <strong><i class="fas fa-user mr-1"></i> Yaş</strong>
                    <p class="text-muted">{{$user->age}}</p>
                    <hr>

                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Yaşadığım Ülke / Şehir</strong>
                    <p class="text-muted">{{$user->country}}, {{$user->city}}</p>
                    <hr>

                    <strong><i class="fas fa-city mr-1"></i> Şirket Adı</strong>
                    <p class="text-muted">{{$user->company}}</p>

                    <strong><i class="fas fa-code mr-1"></i> İşlem </strong><br><br>
                    <a href="{{route('user.profil.settings')}}" class="btn btn-primary">Profil Düzenle</a><br>

                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="card">
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="active tab-pane" id="activity">
                        <div class="post">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                            <span class="username">
                              <a href="#">{{$user->name}} Hakkında</a>
                            </span>
                          </div>
                          <p>
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like. Some people hate it and argue for
                            its demise, but others ignore the hate as they create awesome
                            tools to help create filler text for everyone from bacon lovers
                            to Charlie Sheen fans.
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like. Some people hate it and argue for
                            its demise, but others ignore the hate as they create awesome
                            tools to help create filler text for everyone from bacon lovers
                            to Charlie Sheen fans.
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like. Some people hate it and argue for
                            its demise, but others ignore the hate as they create awesome
                            tools to help create filler text for everyone from bacon lovers
                            to Charlie Sheen fans.
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like. Some people hate it and argue for
                            its demise, but others ignore the hate as they create awesome
                            tools to help create filler text for everyone from bacon lovers
                            to Charlie Sheen fans.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </section>


@endsection