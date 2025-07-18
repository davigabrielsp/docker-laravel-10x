@extends('conta.layout.app')
@section('title', 'Registro')
@section('content')

<h1>Show - Index</h1>

<div class="container">
    <a href="{{ route('conta.index') }}" class="btn btn-info">VOLTAR</a>

    @if(session('success'))
       <div class="bg-success text-white p-2">
         {{ session('success') }}
       </div>
    @endif
<hr>
    {{ $conta->nome . '<br>' . $conta->valor . '<br>' . $conta->vencimento }}
</div>

@endsection