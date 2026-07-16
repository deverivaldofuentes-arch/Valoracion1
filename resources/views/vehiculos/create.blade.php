<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo Vehículo</title>
</head>
<body>
    <h1>Registrar Nuevo Vehículo</h1>

    <form action="{{ route('vehiculos.store') }}" method="POST">
        @csrf
        
        <div>
            <label>Marca:</label>
            <input type="text" name="marca" value="{{ old('marca') }}">
            @error('marca')<span style="color:red;">{{ $message }}</span>@enderror
        </div>
        <br>

        <div>
            <label>Modelo:</label>
            <input type="text" name="modelo" value="{{ old('modelo') }}">
            @error('modelo')<span style="color:red;">{{ $message }}</span>@enderror
        </div>
        <br>

        <div>
            <label>Placa:</label>
            <input type="text" name="placa" value="{{ old('placa') }}">
            @error('placa')<span style="color:red;">{{ $message }}</span>@enderror
        </div>
        <br>

        <div>
            <label>Color:</label>
            <input type="text" name="color" value="{{ old('color') }}">
            @error('color')<span style="color:red;">{{ $message }}</span>@enderror
        </div>
        <br>

        <div>
            <label>Año:</label>
            <input type="number" name="anio" value="{{ old('anio') }}">
            @error('anio')<span style="color:red;">{{ $message }}</span>@enderror
        </div>
        <br>

        <a href="{{ route('vehiculos.index') }}">Cancelar</a>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
