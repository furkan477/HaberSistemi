@extends('backend.layout.app')

@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="card-title text-center">İletişim Listeleme</h3><br>
                <div class="callout callout-info">
                        <h5><i class="fas fa-info"></i> Bilgi :</h5>
                        Toplam İletişim Sayısı : {{$contactCount}}
                    </div><br><br>
                <div class="card card-info">
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>US_ID</th>
                                    <th>Tarihi</th>
                                    <th>Ad Soyad</th>
                                    <th>Konu</th>
                                    <th>Mesaj</th>
                                    <th>E-posta</th>
                                    <th>İşlem</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @if(!empty($contact) && $contact->count() > 0)
                                    @foreach($contact as $cont)
                                    <td>{{$cont->id}}</td>
                                    <td>{{$cont->user_id} }</td>
                                    <td>{{$cont->created_at}}</td>
                                    <td>{{$cont->name}}</td>
                                    <td>{{$cont->subject}}</td>
                                    <td>{{$cont->message}}</td>
                                    <td>{{$cont->email}}</td>
                                    <td>
                                        <a href="{{route('admin.user.info',$cont->user_id)}}" type="submit" class="btn btn-success">Profili</a>
                                        <a href="{{route('admin.contact.info',$cont->id)}}" type="submit" class="btn btn-info">İncele</a>
                                        <a href="{{route('admin.contact.delete',$cont->id)}}" type="submit" class="btn btn-danger">Sil</a>
                                    </td>
                                    @endforeach
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection