@extends('layout')

@section('title', 'Ingreso Alumno')

@section('content')
    <table border="1">
        <tr>
            <th colspan="4">Agregar Alumno</th>
        </tr>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>                
                @endforeach
            </ul>
        @endif
        <form action="{{ route('listado.store') }}" method="post">
        @csrf
            <tr>
                <th>Nombre: </th>
                <td><input type="text" name="nombre"><br>{{ $errors->first('nombre') }}</td>
            </tr>
            <tr>
                <th>Curso: </th>
                <td><input type="text" name="curso"><br>{{ $errors->first('curso') }}</td>
            </tr>
            <tr>
                <th>Nota 01: </th>
                <td><input type="number" name="nota_1"><br>{{ $errors->first('nota_1') }}</td>
            </tr>
            <tr>
                <th>Nota 02: </th>
                <td><input type="number" name="nota_2"><br>{{ $errors->first('nota_2') }}</td>
            </tr>
            <tr>
                <td colspan="2" align="center"><button>Guardar</button></td>
            </tr>
        </form>
    </table>
@endsection