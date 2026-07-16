<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Vehículos</title>
</head>
<body>
    <h1>Listado de Vehículos</h1>
    <a href="{{ route('vehiculos.create') }}">Nuevo Vehículo</a>
    <br><br>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Placa</th>
                <th>Color</th>
                <th>Año</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($vehiculos as $vehiculo)
            <tr>
                <td>{{ $vehiculo->id }}</td>
                <td>{{ $vehiculo->marca }}</td>
                <td>{{ $vehiculo->modelo }}</td>
                <td>{{ $vehiculo->placa }}</td>
                <td>{{ $vehiculo->color }}</td>
                <td>{{ $vehiculo->anio }}</td>
                <td>
                    <a href="{{ route('vehiculos.edit', $vehiculo) }}">Editar</a>
                    <form action="{{ route('vehiculos.destroy', $vehiculo) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7">No hay vehículos registrados.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
