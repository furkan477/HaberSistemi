@extends('frontend.layout.layout')

@section('content')<br><br><br>
        <div class="container" style="margin-left: 5.0%;">
            <h2 style="margin-left: 18.0%;">Blog Haber | 7/24 Güncel Haber | Güncel Haberler</h2><br><br><br>
                    <form action="{{route('filter.news')}}" method="post">
                        @csrf
                            <div class="form-group">
                                <label for="inputStatus"> Haber Kategorisi : </label>
                                <select type="submit" name="category_id" id="category" class="form-control">
                                    @foreach ($category as $cat)
                                        @include('altkategoricreate', ['cat' => $cat,'prefix' => ''])
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"> Haberleri Getir </button>
                            </div>
                    </form>     
            <div class="card card-solid">
                @if(!empty($news) && $news->count() > 0)
                    @foreach($news as $nw)
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-12 d-flex align-items-stretch flex-column">
                                    <div class="card bg-light d-flex flex-fill">
                                        <div class="card-header text-muted border-bottom-0">
                                        
                                        </div>
                                        <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-2 text-center">
                                            {{$nw->user_job}}
                                            <img src="{{ asset('dist/img/user1-128x128.jpg') }}" alt="user-avatar" class="img-circle img-fluid">
                                            </div>
                                            <div class="col-5">
                                            <h2 class="lead"><b>{{$nw->user_name}}</b></h2>
                                            <p class="text-muted text-sm"><b>Eğitim: </b>{{$nw->user_school}} Mezunu</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-map-marker-alt"></i></span> Lokasyon: {{$nw->user_country}} / {{$nw->user_city}}</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefon : {{$nw->user_phone}}</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-envelope"></i></span> E-Posta : {{$nw->user_email}}</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Şirket : {{$nw->user_company}}</li>
                                            </ul>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="lead" style="margin-left: 32.0%;"><b>{{$nw->name}}</b></h2><br>
                                                <h4 class="lead" style="margin-left: 18.0%;"><b>{{$nw->subject}}</b></h4>
                                                <p class="text-muted text-sm">                        
                                                    <p>{{$nw->news}}</p>
                                                </p> 
                                            </div>
                                        </div>
                                        </div>
                                        <div class="card-footer">
                                        <div class="text-right">
                                            <a href="#" class="btn btn-sm bg-teal">
                                            <i class="fas fa-comments"></i>
                                            </a>
                                            <a href="{{route('users.profil', $nw->user_id)}}" class="btn btn-sm btn-primary">
                                            <i class="fas fa-user"></i> View Profile
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                    @endforeach
                @endif

            </div>
        </div><br><br>

@endsection