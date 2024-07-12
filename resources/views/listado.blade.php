@extends('layout')

@section('title', 'Listado')

@section('content')
    <table border="1">
        <th>Listado</th>
            @if ($listado)
                @foreach ($listado as $alumno)
                    <tr>
                        <td>
                            <a href="{{ route('listado.show',$alumno) }}">{{ $alumno->nombre }}</a>
                        </td>
                    </tr>
                @endforeach        
            @endif
    </table>
@endsection