@extends('layouts.landing')
@section('content')

<table>
    <thead>
        <tr><th></th></tr>
    </thead>
    <tbody>
        @foreach ( $usuarios as $usuario)
        <tr>
            <td>{{ $usuario ->id }}</td>
            <td>{{ $usuario ->nombre }}</td>
            <td>{{ $usuario ->email }}</td>
            <td>{{ $usuario ->telefono }}</td>
            <td>{{ $usuario ->password }}</td>
            <td>{{ $usuario ->rol }}</td>
        </tr>
            
        @endforeach
    </tbody>
</table>

@endsection