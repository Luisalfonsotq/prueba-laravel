@extends('layouts.landing')

@section('title', 'Suma de Números')

@section('content')
<div class="container mt-5">
  <h1>Suma de Dos Números</h1>
  <form method="POST" action="{{ route('suma.post') }}">
    @csrf
    <div class="mb-3">
      <label for="num1" class="form-label">Primer número</label>
      <input type="number" class="form-control" id="num1" name="num1" value="{{ old('num1', $num1 ?? '') }}" placeholder="ej: 120" required>
    </div>
    <div class="mb-3">
      <label for="num2" class="form-label">Segundo número</label>
      <input type="number" class="form-control" id="num2" name="num2" value="{{ old('num2', $num2 ?? '') }}" placeholder="ej: 50" required>
    </div>
    <button type="submit" class="btn btn-primary">Sumar</button>
  </form>
  @if(isset($suma))
    <div class="mt-3 alert alert-success">
      <h3>Resultado: {{ $suma }}</h3>
    </div>
  @endif
</div>
@endsection