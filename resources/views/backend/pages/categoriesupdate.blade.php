@extends('backend.layout.app')

@section('content')

<div class="main-panel" style="margin-left: 8.0%;">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Kategori Düzenleme</h4><br>
                        <form class="forms-sample" action="{{route('admin.categories.update',$categories->id)}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Kategori Adı</label>
                                <input type="text" class="form-control" id="exampleInputName1" value="{{$categories->name}}" name="name" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <label for="exampleSelectGender">Kategorisi</label>
                                <select class="form-control" id="exampleSelectGender"  name="cat_ust">
                                    @if(!empty($category) && $category->count() > 0)
                                    @foreach($category as $cat)
                                    <option value="{{$cat->id}}" {{$categories->cat_ust == $cat->id ? 'selected' : ''}}>{{$cat->name}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleSelectGender">Kategori Durum (1)</label>
                                <select class="form-control" id="exampleSelectGender" value="{{$categories->status}}" name="status">
                                    <option {{$categories->status == 0 ? 'selected' : ''}}>0</option>
                                    <option {{$categories->status == 1 ? 'selected' : ''}}>1</option>
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