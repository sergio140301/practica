@extends('inicio2')

@section('contenido2')


<div class="row">
    <div class="col-6">
        <h1 class="fw-bold">Selecciona uno</h1>
        <ol class="list-group list-group-numbered">
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Periodos</div>
                    <a href="#"><button class="badge text-bg-dark rounded-pill" disabled>Ver Periodos</button></a>
                </div>
                <span class="badge text-bg-danger rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Plazas</div>
                    <a href="{{route('plazas.index')}}"><button class="badge text-bg-primary rounded-pill">Ver Plazas</button></a>
                </div>
                <span class="badge text-bg-primary rounded-pill">10</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Puestos</div>
                    <a href="{{route('puestos.index')}}"><button class="badge text-bg-primary rounded-pill">Ver Puestos</button></a>
                </div>
                <span class="badge text-bg-primary rounded-pill">10</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Personal</div>
                    <a href="#"><button class="badge text-bg-dark rounded-pill" disabled>Ver Personal</button></a>
                </div>
                <span class="badge text-bg-danger rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Deptos</div>
                    <a href="#"><button class="badge text-bg-dark rounded-pill" disabled>Ver Departamentos</button></a>
                </div>
                <span class="badge text-bg-danger rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Carreras</div>
                    <a href="#"><button class="badge text-bg-dark rounded-pill" disabled>Ver Carreras</button></a>
                </div>
                <span class="badge text-bg-danger rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Reticulas</div>
                    <a href="#"><button class="badge text-bg-dark rounded-pill" disabled>Ver Reticulas</button></a>
                </div>
                <span class="badge text-bg-danger rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Materias</div>
                    <a href="#"><button class="badge text-bg-dark rounded-pill" disabled>Ver Materias</button></a>
                </div>
                <span class="badge text-bg-danger rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Alumnos</div>
                    <a href="{{ route('alumnos.index') }}"><button class="badge text-bg-primary rounded-pill">Ver alumnos</button></a>
                </div>
                <span class="badge text-bg-primary rounded-pill">12</span>
            </li>
        </ol>
    </div>
</div>
@endsection


