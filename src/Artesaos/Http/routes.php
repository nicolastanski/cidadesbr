<?php

Route::get('/ufs/', function () {
    return response()->json(\Artesaos\Estado::all());
});

Route::get('/cidades/{uf}', function ($uf = null) {
    return response()->json(\Artesaos\Cidade::getByEstado($uf)->get());
});