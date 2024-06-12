<?php
use App\Http\Controllers\CursosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CopieUseerController;



use App\Http\Controllers\Cursos;
use App\Http\Controllers\EscuelaController ;

//Route:: get ('cursos', function(){
   // return('bienvenido a la pagina cursos');
//});


// Route::get('Cursos',[CursosController::class,'week']);
// Route::get('/escuela', [EscuelaController ::class,'create']);
// Route::post('/escuela',[EscuelaController ::class,'escuelitas'])->name('escuela');



 Route::get('asociar',[CopieUseerController::class,'asociar']);                                           
 Route::post('asociar/copie_useer',[CopieUseerController ::class,'store'])->name('copie_useer.asociar');
