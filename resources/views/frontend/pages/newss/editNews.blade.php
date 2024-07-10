@extends('frontend.layout.layout')

@section('content')
<br><br><br>
        <div class="container" style="margin-left: 15.5%;">
            <h2 style="margin-left: 13.0%;">Blog Haber | 7/24 Güncel Haber | Haber Güncelleme</h2><br><br><br>
            <div class="col-md-10">
            @if ($errors)
                    @foreach ($errors->all() as $error)
                      <div class="alert alert-danger">
                          {{$error}}
                      </div>
                    @endforeach
                @endif
                @if (session()->get('success'))
                  <div class="alert alert-success">
                      {{session()->get('success')}}
                  </div>
                @endif

                @if (session()->get('error'))
                  <div class="alert alert-danger">
                      {{session()->get('error')}}
                  </div>
                @endif
            <div class="card card-primary">
                <div class="card-header">
                <h3 class="card-title">Blog Haber</h3>
                <form class="form-horizontal" method="post" role="form" action="{{route('news.update', $news->id)}}">
                    @csrf
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Haberinizin Adı</label>
                            <input type="text" id="inputName" value=" {{$news->name}} " name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputName">Haberinizin Konusu</label>
                            <input type="text" id="inputName" value=" {{$news->subject}} " name="subject" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Haberinizin İçeriği</label>
                            <textarea id="inputDescription" name="news" class="form-control" rows="4">{{$news->news}}</textarea>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-primary btn-m"> Haberi Yayınla </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><br><br><br>

@endsection