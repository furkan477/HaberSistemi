@extends('backend.layout.app')

@section('content')

        <section class="content">
          <div class="container-fluid"><br><br>
            <h2 class="text-center"><strong><i class="fas fa-address-card mr-1"></i>{{$user->name}} -Hakkında- </strong></h2><br>
            <br><br>
            <p class="card-description">
                    {{$user->name}}  Toplam Haber Sayısı : {{$newsCount}},<br>
                    {{$user->name}}  Dilekçe Ve Şikayet Sayısı : {{$contactCount}}
            </p><br>
            <div class="row">
                <div class="col-md-6"> 

                    <div class="card card-primary text-center bg-secondary">
                    <div class="card-header">
                        <h3 class="card-title ">{{$user->name}} Hakkında</h3>
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
                            <a href="{{route('admin.user.list')}}" class="btn btn-info">Profil Listesi</a>
                            <a href="{{route('admin.user.settings',$user->id)}}" class="btn btn-primary">Profil Düzenle</a><br>

                    </div>
                    </div>
                </div><br>
                <div class="col-md-6 stretch-card">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title text-center">{{$user->name}} Haberleri</h4>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                    ID_cat
                                </th>
                                <th>
                                    Haber Konusu
                                </th>
                                <th>
                                    Haber incele
                                </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($news) && $news->count() > 0)
                                    @foreach($news as $new)
                                        <tr class="table-info">
                                        <td>
                                            {{$new->id}}
                                        </td>
                                        <td>
                                            {{$new->category_id}}
                                        </td>
                                        <td>
                                            {{$new->subject}}
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.news.info',$new->id)}}" class="btn btn-primary">İncele</a>
                                            <a href="{{ route('admin.news.delete',$new->id)}}" class="btn btn-danger">Sil</a>
                                        </td>
                                        </tr>
                                    @endforeach
                                @endif
                             </tbody>
                            </table><br><br><hr>
                            <h4 class="card-title text-center">{{$user->name}} Şikayetleri</h4><br>
                            <table class="table table-bordered table-mt-3">
                                <thead>
                                    <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        İleişim Adı
                                    </th>
                                    <th>
                                        İleişim Konusu
                                    </th>
                                    <th class="text-center">
                                        İleişim İncele
                                    </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($contact) && $contact->count() > 0)
                                        @foreach($contact as $cont)
                                            <tr class="table-info">
                                            <td>
                                                {{$cont->id}}
                                            </td>
                                            <td>
                                                {{$cont->name}}
                                            </td>
                                            <td>
                                                {{$cont->subject}}
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('admin.contact.info',$cont->id)}}" class="btn btn-primary">İncele</a>
                                                <a href="{{ route('admin.contact.delete',$cont->id)}}" class="btn btn-danger">Sil</a>
                                            </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        </section>


@endsection