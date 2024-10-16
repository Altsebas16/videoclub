<div class="row">

    @foreach( $arrayPeliculas as $key => $pelicula )
    <div class="col-xs-6 col-sm-4 col-md-3 text-center">

        <a href="{{ url('/catalog/show/' . $key ) }}">
            <img src="{{$pelicula['poster']}}" style="height:200px"/>
            <h4 style="min-height:45px;margin:5px 0 10px 0">
                {{$pelicula['title']}}
            </h4>
        </a>

    </div>
    @endforeach

</div>

<div class="row">

    <div class="col-sm-4">

        {{-- TODO: Imagen de la película --}}

    </div>
    <div class="col-sm-8">

        {{-- TODO: Datos de la película --}}

    </div>
</div>