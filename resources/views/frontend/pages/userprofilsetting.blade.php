@extends('frontend.layout.layout')

@section('content')<br>
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
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
                <h3 class="text-center">Profil Güncelleme</h3><br>
                    <form action="{{route('user.profil.update')}}" method="post" class="form-horizontal">
                        @csrf                    
                            <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" value="{{$user->name}}" placeholder="Full name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-user"></span>
                                </div>
                            </div>
                            </div>
                            <div class="input-group mb-3">
                            <input type="number" name="phone" class="form-control" value="{{$user->phone}}" placeholder="phone">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-user"></span>
                                </div>
                            </div>
                            </div>
                            <div class="input-group mb-3">
                            <input type="number" name="age" class="form-control" value="{{$user->age}}" placeholder="age">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-user"></span>
                                </div>
                            </div>
                            </div>
                            <div class="input-group mb-3">
                            <input type="text" name="job" class="form-control" value="{{$user->job}}" placeholder="job">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-user"></span>
                                </div>
                            </div>
                            </div>
                            <div class="input-group mb-3">
                            <input type="text" name="country" class="form-control" value="{{$user->country}}" placeholder="country">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-user"></span>
                                </div>
                            </div>
                            </div>
                            <div class="input-group mb-3">
                            <input type="text" name="city" class="form-control" value="{{$user->city}}" placeholder="city">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-user"></span>
                                </div>
                            </div>
                            </div>
                            <div class="input-group mb-3">
                            <input type="text" name="company" class="form-control" value="{{$user->company}}" placeholder="company">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-user"></span>
                                </div>
                            </div>
                            </div>
                            <div class="input-group mb-3">
                            <input type="text" name="school" class="form-control" value="{{$user->school}}" placeholder="school">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-user"></span>
                                </div>
                            </div>
                            </div>
                            <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" value="{{$user->email}}" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            </div>
                                        <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Kaydet ve Güncelle</button>
                        </div>
                      </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection