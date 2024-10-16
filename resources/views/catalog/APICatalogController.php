public function index() {
    return response()->json( Movie::all() );
}

public function putRent($id) {
    $m = Movie::findOrFail( $id );
    $m->rented = true;
    $m->save();
    return response()->json( ['error' => false,
                          'msg' => 'La película se ha marcado como alquilada' ] );
}