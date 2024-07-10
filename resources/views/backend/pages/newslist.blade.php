@extends('backend.layout.app')

@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10">
                    <h3 class="card-title text-center">Kullanıcı Haberleri</h3><br>
                    <div class="callout callout-info">
                        <h5><i class="fas fa-info"></i> Bilgi :</h5>
                        Toplam Haber Sayısı : {{$newsCount}}
                    </div><br><br>
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Ad Soyad</th>
                                        <th>Meslek</th>
                                        <th>Haber Adı</th>
                                        <th>Haber Konusu</th>
                                        <th>Haber İçeriği</th>
                                        <th>Tarihi</th>
                                        <th>İşlem</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($news) && $news->count() > 0)
                                        @foreach($news as $nw)
                                            <tr>
                                                <td>{{$nw->id}}</td>
                                                <td>{{$nw->user_name}}</td>
                                                <td>{{$nw->user_job}}</td>
                                                <td>{{$nw->created_at}}</td>
                                                <td>{{$nw->name}}</td>
                                                <td>{{$nw->subject}}</td>
                                                <td>{{$nw->news}}</td>
                                                <td>
                                                    <a href="{{route('admin.user.info',$nw->user_id)}}" type="submit" class="btn btn-success">Profili</a>
                                                    <a href="{{route('admin.news.info',$nw->id)}}" type="submit" class="btn btn-info">İncele</a>
                                                    <a href="{{route('admin.news.delete',$nw->id)}}" type="submit" class="btn btn-danger">Sil</a>
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

@endsection