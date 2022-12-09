<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SystemController;

Route::get('/', [SystemController::class, "index"]);

Route::get('/register/create', [SystemController::class, 'create']);

//rota que servirá para registro das fichas individuais:
//por convenção sempre adicionamos ao store
//Route::post("site/registrar-individuo", [SystemController::class, "ficha"])
?>