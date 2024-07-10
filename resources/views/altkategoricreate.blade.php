    <option value="{{ $cat->id }}" {{ $selectCatId == $cat->id ? 'selected' : ''}} >{{$prefix}}{{$cat->name}}</option>
    @if ($cat->altKategori->isNotEmpty())
        @foreach ($cat->altKategori as $altcat)
            @include('altkategoricreate', ['cat' => $altcat, 'prefix' => $prefix . '-'])
        @endforeach
    @endif