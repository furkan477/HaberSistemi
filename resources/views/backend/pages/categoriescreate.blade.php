@extends('backend.layout.app')

@section('content')



    <div class="container" style="margin-left: 10.5%;">
        <br><br><h2 class="text-center">Kategori Ekle</h2><br><br><br>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">yeni bir kategori</h3>
                    <form class="form-horizontal" method="post" role="form" action="{{route('admin.categories.create')}}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="category">Kategori</label>
                                <select name="cat_ust" id="cat_ust" class="form-control">
                                    <option value="0">Ana kategori</option>
                                    @foreach ($category as $cat)
                                        @include('altkategoricreate', ['cat' => $cat,'prefix' => ''])
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Kategori Adı</label>
                                <input type="text" id="inputName" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Kategori Durumu (1)</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                </select>
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
        </div>
    </div><br><br><br>


@endsection