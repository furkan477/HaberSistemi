@extends('backend.layout.app')

@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="card-title text-center">Kategori Listeleme</h3><br>
                <div class="callout callout-info">
                    <h5><i class="fas fa-info"></i> Bilgi :</h5>
                    Toplam Ana Kategori Sayısı : {{$anaCount}},<br>
                    Toplam Alt Kategori Sayısı : {{$altCount}},
                </div><br><br>
                <div class="card card-info">
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>CAT_UST</th>
                                    <th>Kategori Adı</th>
                                    <th>Durumu (1)</th>
                                    <th>Tarihi</th>
                                    <th>İşlem</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($categories) && $categories->count() > 0)
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->cat_ust}}</td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->status}}</td>
                                            <td>{{$category->created_at}}</td>
                                            <td>
                                                <a href="{{route('admin.categories.info',$category->id)}}" type="submit" class="btn btn-info">İncele</a>
                                                <a href="{{route('admin.categories.delete',$category->id)}}" type="submit" class="btn btn-danger">Sil</a>
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
    </section>
</div>

@endsection