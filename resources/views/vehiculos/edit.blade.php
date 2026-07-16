<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Vehículo</title>
</head>
<body>
    <h1>Editar Vehículo</h1>

    <form action="{{ route('vehiculos.update', $vehiculo) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div>
            <label>Marca:</label>
            <input type="text" name="marca" value="{{ old('marca', $vehiculo->marca) }}">
            @error('marca')<span style="color:red;">{{ $message }}</span>@enderror
        </div>
        <br>

        <div>
            <label>Modelo:</label>
            <input type="text" name="modelo" value="{{ old('modelo', $vehiculo->modelo) }}">
            @error('modelo')<span style="color:red;">{{ $message }}</span>@enderror
        </div>
        <br>

        <div>
            <label>Placa:</label>
            <input type="text" name="placa" value="{{ old('placa', $vehiculo->placa) }}">
            @error('placa')<span style="color:red;">{{ $message }}</span>@enderror
        </div>
        <br>

        <div>
            <label>Color:</label>
            <input type="text" name="color" value="{{ old('color', $vehiculo->color) }}">
            @error('color')<span style="color:red;">{{ $message }}</span>@enderror
        </div>
        <br>

        <div>
            <label>Año:</label>
            <input type="number" name="anio" value="{{ old('anio', $vehiculo->anio) }}">
            @error('anio')<span style="color:red;">{{ $message }}</span>@enderror
        </div>
        <br>

        <a href="{{ route('vehiculos.index') }}">Cancelar</a>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
