@extends('inicio2')

@section('contenido2')
    @include('catalogos.puestos.index') 
@endsection

@section('contenido4000')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">
                        @if ($accion == 'crear')
                            Insertando datos nuevos
                        @elseif ($accion == 'actualizar')
                            Actualizando datos
                        @elseif ($accion == 'mostrar')
                            Detalles del Puesto
                        @endif
                    </h4>
                </div>

                <div class="card-body">
                    <form method="POST" 
                    action="@if ($accion == 'crear') 
                                {{ route('puestos.store') }} 
                            @elseif ($accion == 'actualizar') 
                                {{ route('puestos.update', $puesto->id) }} 
                            @endif">
              
                        @csrf
                        @if ($accion == 'eliminar')
                            @method('DELETE')
                        @endif

                        <div class="mb-3">
                            <label for="idpuesto" class="form-label">ID Puesto</label>
                            <input type="text" name="idpuesto" class="form-control" maxlength="10" id="idpuesto"
                                value="{{ old('idpuesto', $puesto->idpuesto ?? '') }}" {{ $accion == 'mostrar' ? 'disabled' : '' }}>
                            @error('idpuesto')
                                <ul class="list-unstyled text-danger">
                                    <p>error en el ID Puesto {{ $message }}</p>
                                </ul>
                            @enderror
                            <div class="form-text">Escribe el ID del puesto</div>
                        </div>

                        <div class="mb-3">
                            <label for="nombrepuesto" class="form-label">Nombre del Puesto</label>
                            <input type="text" name="nombrepuesto" class="form-control" id="nombrepuesto"
                                value="{{ old('nombrepuesto', $puesto->nombrepuesto ?? '') }}" {{ $accion == 'mostrar' ? 'disabled' : '' }}>
                            @error('nombrepuesto')
                                <ul class="list-unstyled text-danger">
                                    <p>error en el nombre del puesto {{ $message }}</p>
                                </ul>
                            @enderror
                            <div class="form-text">Escribe el nombre del puesto</div>
                        </div>

                        <div class="mb-3">
                            <label for="tipo" class="form-label">Tipo</label>
                            <select name="tipo" class="form-control" id="tipo" {{ $accion == 'mostrar' ? 'disabled' : '' }}>
                                <option value="Docente" {{ old('tipo', $puesto->tipo ?? '') == 'Docente' ? 'selected' : '' }}>Docente</option>
                                <option value="No Docente" {{ old('tipo', $puesto->tipo ?? '') == 'No Docente' ? 'selected' : '' }}>No Docente</option>
                                <option value="Administrativo" {{ old('tipo', $puesto->tipo ?? '') == 'Administrativo' ? 'selected' : '' }}>Administrativo</option>
                                <option value="Director" {{ old('tipo', $puesto->tipo ?? '') == 'Director' ? 'selected' : '' }}>Director</option>
                            </select>
                            @error('tipo')
                                <ul class="list-unstyled text-danger">
                                    <p>error en el tipo {{ $message }}</p>
                                </ul>
                            @enderror
                            <div class="form-text">Selecciona el tipo de puesto</div>
                        </div>

                        @if ($accion != 'mostrar')
                            <button type="submit" class="btn btn-primary">{{ $txtbtn }}</button>
                        @endif
                    </form>

                    @if ($accion == 'mostrar')
                        <a href="{{ route('puestos.index') }}" class="btn btn-primary">Regresar</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
