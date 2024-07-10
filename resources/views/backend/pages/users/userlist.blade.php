@extends('backend.layout.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12 justify-content-center">
            <div class="card justify-content-center" >
              <div class="card-header">
                <br><h6 class="card-title text-center">Blog Haber Kullanıcı Listesi</h6><br>

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
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>IS_admin</th>
                      <th>Ad Soyad</th>
                      <th>Katılma Tarihi</th>
                      <th>Meslek</th>
                      <th>Telefon</th>
                      <th class="text-center">Tüm Bilgileri</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(!empty($users) && $users->count() > 0)
                      @foreach($users as $user)
                        <tr>
                          <td>{{$user->id}}</td>
                          <td>{{$user->is_admin}}</td>
                          <td>{{$user->name}}</td>
                          <td>{{$user->created_at}}</td>
                          <td><span class="tag tag-success">{{$user->job}}</span></td>
                          <td>{{$user->phone}}</td>
                          <td class="text-center">
                            <a href="{{ route('admin.user.info', $user->id)}}" class="btn btn-success">Profil Bilgisi</a>
                            <a href="{{ route('admin.user.delete', $user->id)}}" type="submit" class="btn btn-danger">Profil Sil</a>
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
</section>

@endsection