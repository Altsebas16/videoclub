<form action="{{action([App\Http\Controllers\CatalogController::class, 'putReturn'], ['id' => $pelicula->id])}}" 
    method="POST" style="display:inline">
    @method('PUT')
    @csrf
    <button type="submit" class="btn btn-danger" style="display:inline">
        Devolver película
    </button>
</form>