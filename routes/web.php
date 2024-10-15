<?php

use App\Models\Personal;
use App\Models\ProyectoPersonale;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeptoController;
use App\Http\Controllers\PlazaController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\ProyectoPersonaleController;

//RUTA DE ALUMNOS + AUTH
Route::middleware('auth')->group(function () {
    Route::resource('alumnos', AlumnoController::class);
    Route::get('/alumnos.index', [AlumnoController::class, 'index'])->name('alumnos.index');

    Route::get('/alumnos.create', [AlumnoController::class, 'create'])->name('alumnos.create');
    Route::post('/alumnos.store', [AlumnoController::class, 'store'])->name('alumnos.store');

    Route::get('/alumnos.show/{alumno}', [AlumnoController::class, 'show'])->name('alumnos.show');
    Route::get('/alumnos.edit/{alumno}', [AlumnoController::class, 'edit'])->name('alumnos.edit');
    Route::post('/alumnos.update/{alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');


    Route::get('/alumnos/eliminar/{alumno}', [AlumnoController::class, 'eliminar'])->name('alumnos.eliminar');
    Route::delete('/alumnos/{alumno}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');


});

// RUTA DE DEPARTAMENTOS + AUTH
Route::middleware('auth')->group(function () {

    Route::resource('deptos', DeptoController::class);
    Route::get('/deptos.index', [DeptoController::class, 'index'])->name('deptos.index');

    Route::get('/deptos.create', [DeptoController::class, 'create'])->name('deptos.create');
    Route::post('/deptos.store', [DeptoController::class, 'store'])->name('deptos.store');

    Route::get('/deptos.show/{depto}', [DeptoController::class, 'show'])->name('deptos.show');
    Route::get('/deptos.edit/{depto}', [DeptoController::class, 'edit'])->name('deptos.edit');
    Route::post('/deptos.update/{depto}', [DeptoController::class, 'update'])->name('deptos.update');

    Route::get('/deptos/eliminar/{depto}', [DeptoController::class, 'eliminar'])->name('deptos.eliminar');
    Route::delete('/deptos/{depto}', [DeptoController::class, 'destroy'])->name('deptos.destroy');
});

// RUTA DE CARRERAS + AUTH
Route::middleware('auth')->group(function () {

    Route::resource('carreras', CarreraController::class);
    
    Route::get('/carreras.index', [CarreraController::class, 'index'])->name('carreras.index');

    Route::get('/carreras.create', [CarreraController::class, 'create'])->name('carreras.create');
    Route::post('/carreras.store', [CarreraController::class, 'store'])->name('carreras.store');

    Route::get('/carreras.show/{carrera}', [CarreraController::class, 'show'])->name('carreras.show');
    Route::get('/carreras.edit/{carrera}', [CarreraController::class, 'edit'])->name('carreras.edit');
    Route::post('/carreras.update/{carrera}', [CarreraController::class, 'update'])->name('carreras.update');

    Route::get('/carreras/eliminar/{carrera}', [CarreraController::class, 'eliminar'])->name('carreras.eliminar');
    Route::delete('/carreras/{carrera}', [CarreraController::class, 'destroy'])->name('carreras.destroy');
});


//RUTA DE PUESTOS + AUTH 
Route::middleware('auth')->group(function () {
    Route::get('/puestos.index', [PuestoController::class, 'index'])->name('puestos.index');

    Route::get('/puestos.create', [PuestoController::class, 'create'])->name('puestos.create');
    Route::post('/puestos.store', [PuestoController::class, 'store'])->name('puestos.store');

    Route::get('/puestos.show/{puesto}', [PuestoController::class, 'show'])->name('puestos.show');
    Route::get('/puestos.edit/{puesto}', [PuestoController::class, 'edit'])->name('puestos.edit');
    Route::post('/puestos.update/{puesto}', [PuestoController::class, 'update'])->name('puestos.update');

    Route::get('/puestos/eliminar/{puesto}', [PuestoController::class, 'eliminar'])->name('puestos.eliminar');
    Route::delete('/puestos/{puesto}', [PuestoController::class, 'destroy'])->name('puestos.destroy');
    Route::delete('/puestos/destroy/{puesto}', [PuestoController::class, 'destroy'])->name('puestos.destroy');
});

//RUTA DE PLAZAS + AUTH
Route::middleware('auth')->group(function () {
    Route::get('/plazas.index', [PlazaController::class, 'index'])->name('plazas.index');

    Route::get('/plazas.create', [PlazaController::class, 'create'])->name('plazas.create');
    Route::post('/plazas.store', [PlazaController::class, 'store'])->name('plazas.store');

    Route::get('/plazas.show/{plaza}', [PlazaController::class, 'show'])->name('plazas.show');
    Route::get('/plazas.edit/{plaza}', [PlazaController::class, 'edit'])->name('plazas.edit');
    Route::post('/plazas.update/{plaza}', [PlazaController::class, 'update'])->name('plazas.update');

    Route::get('/plazas.eliminar/{plaza}', [PlazaController::class, 'eliminar'])->name('plazas.eliminar');
    Route::delete('/plazas.destroy/{plaza}', [PlazaController::class, 'destroy'])->name('plazas.destroy');



});

//rutas de catalogos

Route::middleware('auth')->group(function () {

Route::get('/catalogos.otraVista', [CatalogoController::class, 'otraVista'])->name('catalogos.otraVista');

});

//rutas de hoararios
Route::get('/horarios', [HorarioController::class, 'index'])->name('horarios.index');


Route::get('/horarios.index', function () {
    return view('horarios.index');
})->middleware("auth")->name("horarios.index");

Route::get('/horarios.submenuhorarios', function () {
    return view('horarios.submenuhorarios');
})->middleware("auth")->name("horarios.submenuhorarios");


//rutas de Proyectos personales

Route::get('/proyectoPersonales', [ProyectoPersonaleController::class, 'index'])->name('proyectosPersonales.index');



Route::get('/proyectoPersonales.index', function () {
    return view('proyectoPersonales.index');
})->middleware("auth")->name("proyectoPersonales.index");

Route::get('/proyectoPersonales.submenuproyectos', function () {
    return view('proyectoPersonales.submenuproyectos');
})->middleware("auth")->name("proyectoPersonales.submenuproyectos");




Route::get('/catalogos.index', function () {
    return view('catalogos.index');
})->middleware("auth")->name("catalogos.index");

Route::get('/catalogos.submenu', function () {
    return view('catalogos.submenu');
})->middleware("auth")->name("catalogos.submenu");



 //ruta principal de bienvenida.

Route::get('/', function () {
    return view('inicio');
})->name("inicio");



Route::middleware(['auth'])->group(function () {
    Route::get('/inicio2', function () {
        return view('inicio2'); // Vista para usuarios identificados
    })->name('inicio2');
});

Route::get('/catalogos/otraVista', function () {
    return view('catalogos.otraVista'); // Vista de bienvenida
})->name('catalogos.bienvenida')->middleware('auth'); // Solo accesible para usuarios autenticados

Route::get('/inicio', function () {
    return view('inicio');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
