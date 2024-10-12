<?php

use App\Controllers\AuthenticationController;
use App\Controllers\JanrController;
use App\Controllers\MuallifController;
use App\Controllers\KitoblarController;
use App\Routes\Route;

#Janr aloqador linklar
Route::get('/', [JanrController::class, 'index']);
Route::get('/notfound404', [JanrController::class, 'notfound']);
Route::get('/notfound403', [JanrController::class, 'notAllowed']);

Route::post('/jcreate', [JanrController::class, 'createJanr']);
Route::post('/jncreate', [JanrController::class, 'create']);
Route::post('/jdelete', [JanrController::class, 'delete']);
// Route::post('/jshow',[JanrController::class,'show']);
Route::post('/jedit', [JanrController::class, 'edit']);
Route::post('/jupdate', [JanrController::class, 'update']);



#Muallif aloqador linklar
Route::get('/muallif', [MuallifController::class, 'index']);

Route::post('/mcreate', [MuallifController::class, 'createMuallif']);
Route::post('/mncreate', [MuallifController::class, 'create']);
Route::post('/mdelete', [MuallifController::class, 'delete']);
Route::post('/mshow', [MuallifController::class, 'show']);
Route::post('/medit', [MuallifController::class, 'edit']);
Route::post('/mupdate', [MuallifController::class, 'update']);



#kitoblar aloqador linklar
Route::get('/kitob', [KitoblarController::class, 'index']);

Route::post('/kcreate', [KitoblarController::class, 'create']);
Route::post('/kcreate', [KitoblarController::class, 'create']);
Route::post('/kdelete', [KitoblarController::class, 'delete']);
Route::post('/kshow', [KitoblarController::class, 'show']);
Route::post('/kedit', [KitoblarController::class, 'editStudent']);
Route::post('/kupdate', [KitoblarController::class, 'update']);




#Authentication'ga aloqador linklar
Route::get('/login', [AuthenticationController::class, 'loginPage']);
Route::get('/register', [AuthenticationController::class, 'RegisterPage']);
Route::get('/logout', [AuthenticationController::class, 'logout']);

Route::post('/login', [AuthenticationController::class, 'login']);
