@extends('frontend.layout.layout')

@section('content')

    <br><br>
    <div class="container" style="margin-left: 5.0%;">
            <h2 style="margin-left: 28.0%;">Şikayet ve Dilekçeleriniz</h2><br><br><br>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Listedekiler {{$user->name}} kişinin şikayetleri</h3>

                        <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr class="text-center">
                                    <th>Gönderilme Tarihi</th>
                                    <th>Gönderen İsim</th>
                                    <th>Gönderen Email</th>
                                    <th>Gönderinin Konu</th>
                                    <th>Gönderinin Mesajı</th>
                                </tr>
                            </thead>
                            @if(!empty($contactmessage) && $contactmessage->count() > 0)
                                @foreach($contactmessage as $msg)
                                    <tbody>
                                        <tr>
                                        <td>{{$msg->created_at}}</td>
                                        <td>{{$msg->name}}</td>
                                        <td>{{$msg->email}}</td>
                                        <td><span class="tag tag-success">{{$msg->subject}}</span></td>
                                        <td>{{$msg->message}}</td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            @endif
                        </table>
                    </div>
                    </div>
                </div>
            </div><br><br>
    </div>
@endsection