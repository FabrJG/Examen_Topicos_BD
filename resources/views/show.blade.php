@extends('layout')

@section('title', $alumno->nombre)

@section('content')
<table>
    <tr>
        <td>Nombre: </td>
        <td colspan="4">{{ $alumno->nombre }}</td>
    </tr>
    <tr>
        <td>Curso: </td>
        <td colspan="4">{{ $alumno->curso }}</td>
    </tr>
    <tr>
        <td>Nota 01: </td>
        <td colspan="4">{{ $alumno->nota_1 }}</td>
    </tr>
    <tr>
        <td>Nota 02: </td>
        <td colspan="4">{{ $alumno->nota_2 }}</td>
    </tr>
    <tr>
        <td>Promedio: </td>
        <td colspan="4">{{ $alumno->promedio }}</td>
    </tr>
    <tr>
        <td>Condición: </td>
        <td colspan="4">{{ $alumno->condicion }}</td>
    </tr>
    <tr>
        <td>Fecha Registro: </td>
        <td colspan="4">{{ $alumno->created_at->diffForHumans() }}</td>
    </tr>
</table>
@endsection