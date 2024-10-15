@extends('inicio2')

@section('contenido2')
    @include('catalogos.plazas.index') 
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
                            Detalles de la Plaza
                        @endif
                    </h4>
                </div>

                <div class="card-body">
                    <form method="POST" 
                    action="@if ($accion == 'crear') 
                                {{ route('plazas.store') }} 
                            @elseif ($accion == 'actualizar') 
                                {{ route('plazas.update', $plaza->id) }} 
                            @endif">
              
                        @csrf
                        @if ($accion == 'eliminar')
                            @method('DELETE')
                        @endif

                        <div class="mb-3">
                            <label for="idplaza" class="form-label">ID Plaza</label>
                            <input type="text" name="idplaza" class="form-control" id="idplaza" maxlength="7"
                                value="{{ old('idplaza', $plaza->idplaza ?? '') }}" {{ $accion == 'mostrar' ? 'disabled' : '' }}>
                            @error('idplaza')
                                <ul class="list-unstyled text-danger">
                                    <p>error en el ID Plaza {{ $message }}</p>
                                </ul>
                            @enderror
                            <div class="form-text">Escribe el ID de la Plaza con 3 letras y 4 numeros</div>
                        </div>

                        <div class="mb-3">
                            <label for="nombreplaza" class="form-label">Nombre de la Plaza</label>
                            <input type="text" name="nombreplaza" class="form-control" id="nombreplaza" maxlength="150"
                                value="{{ old('nombreplaza', $plaza->nombreplaza ?? '') }}" {{ $accion == 'mostrar' ? 'disabled' : '' }}>
                            @error('nombreplaza')
                                <ul class="list-unstyled text-danger">
                                    <p>error en el nombre de la Plaza {{ $message }}</p>
                                </ul>
                            @enderror
                            <div class="form-text">Escribe el nombre de la Plaza</div>
                        </div>

                        @if ($accion != 'mostrar')
                            <button type="submit" class="btn btn-primary">{{ $txtbtn }}</button>
                        @endif
                    </form>

                    @if ($accion == 'mostrar')
                        <a href="{{ route('plazas.index') }}" class="btn btn-primary">Regresar</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
