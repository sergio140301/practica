
<style>
    .custom-title {
        color: #343a40;
        font-weight: bold;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
    }
</style>
<div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="text-center mt-3">
        <h1 class="custom-title">¡Bienvenido a la página de alumnos!</h1>
    </div>
    <div class="text-center mt-3">
        <a href="{{ route('alumnos.create') }}">
            <img src="{{ asset('img/icono-nuevo.png') }}" width="50px">
        </a>
           
        <table class="table table-primary mt-3">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">No. de Control</th>
                    <th scope="col">Nombre Alumno</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Email</th>
                    <th scope="col">Carrera</th>
                    <th scope="col">Creado</th>
                    <th scope="col">Actualizado</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $alumno)
                    <tr>
                        <td scope="row">{{ $alumno->id }}</td>
                        <td>{{ $alumno->noctrl }}</td>
                        <td>{{ $alumno->nombre }}</td>
                        <td>{{ $alumno->apellidop }}</td>
                        <td>{{ $alumno->apellidom }}</td>
                        <td>{{ $alumno->sexo }}</td>
                        <td>{{ $alumno->email }}</td>
                        <td>{{ $alumno->carrera->nombreCarrera ?? 'Sin Carrera' }}</td>
                        <td>{{ $alumno->created_at }}</td>
                        <td>{{ $alumno->updated_at }}</td>
                        <td><a href="{{ route('alumnos.show', $alumno->id) }}"><img src="{{ asset('img/icono-ver.png') }}" width="50px"></a></td>
                        <td><a href="{{ route('alumnos.eliminar', $alumno->id) }}"><img src="{{ asset('img/icono-delete.png') }}" width="50px"></a></td>
                        <td><a href="{{ route('alumnos.edit', $alumno->id) }}"><img src="{{ asset('img/icono-editar.png') }}" width="50px"></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $alumnos->links() }} <!-- Paginación -->
    </div>
</div>
