@extends('backend.layout.app')

@section('content')

    <div class="main-panel" style="margin-left: 8.0%;">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Blog Admin Profil Düzenleme</h4><br>
                  <form class="forms-sample" action="{{route('admin.user.profil.update',$user->id)}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Ad Soyad</label>
                      <input type="text" class="form-control" id="exampleInputName1" value="{{$user->name}}" name="name" placeholder="Name">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">E-posta</label>
                      <input type="text" class="form-control" id="exampleInputName1" value="{{$user->email}}" name="email" placeholder="Name">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Telefon</label>
                      <input type="text" class="form-control" id="exampleInputName1" value="{{$user->phone}}" name="phone" placeholder="Name">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Meslek</label>
                      <input type="text" class="form-control" id="exampleInputName1" value="{{$user->job}}" name="job" placeholder="Name">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Şirket</label>
                      <input type="text" class="form-control" id="exampleInputName1" value="{{$user->company}}" name="company" placeholder="Name">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Okul</label>
                      <input type="text" class="form-control" id="exampleInputName1" value="{{$user->school}}" name="school" placeholder="Name">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputCity1">Ülke</label>
                      <input type="text" class="form-control" id="exampleInputCity1" value="{{$user->country}}" name="country" placeholder="Location">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputCity1">Şehir</label>
                      <input type="text" class="form-control" id="exampleInputCity1" value="{{$user->city}}" name="city" placeholder="Location">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputCity1">Yaş</label>
                      <input type="number" class="form-control" id="exampleInputCity1" value="{{$user->age}}" name="age" placeholder="Location">
                    </div>

                    <div class="form-group">
                      <label for="exampleSelectGender">Admin İzni (1)</label>
                        <select class="form-control" id="exampleSelectGender" value="{{$user->is_admin}}" name="is_admin">
                          <option {{$user->is_admin == 0 ? 'selected' : ''}}>0</option>
                          <option {{$user->is_admin == 1 ? 'selected' : ''}}>1</option>
                        </select>
                      </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

@endsection