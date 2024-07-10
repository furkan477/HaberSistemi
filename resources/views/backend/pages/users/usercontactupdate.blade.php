@extends('backend.layout.app')

@section('content')

    <div class="main-panel" style="margin-left: 8.0%;">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Blog Admin Profil Düzenleme</h4><br>
                  <form class="forms-sample" action="{{route('admin.contact.update',$contact->id)}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Haber Adı</label>
                      <input type="text" class="form-control" id="exampleInputName1" value="{{$contact->name}}" name="name" placeholder="Name">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Haberin Konusu</label>
                      <input type="text" class="form-control" id="exampleInputName1" value="{{$contact->subject}}" name="subject" placeholder="Name">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Haber</label>
                      <textarea type="text" class="form-control" id="exampleInputName1" name="message" placeholder="Name">{{$contact->message}}</textarea>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">User ID</label>
                      <input disabled type="text" class="form-control" id="exampleInputName1" value="{{$contact->user_id}}" name="user_id" placeholder="Name">
                    </div>

                    <div class="form-group">
                      <label for="exampleSelectGender">Durum (1)</label>
                        <select class="form-control" id="exampleSelectGender" value="{{$contact->status}}" name="status">
                          <option {{$contact->status == 0 ? 'selected' : ''}}>0</option>
                          <option {{$contact->status == 1 ? 'selected' : ''}}>1</option>
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