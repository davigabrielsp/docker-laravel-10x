@extends('conta.layout.app')
@section('title', 'Editar')
@section('content')

<h1>Create - Index</h1>

<div class="container">
    <a href="{{ route('conta.index') }}" class="btn btn-info">VOLTAR</a>

    @if($errors->any())
        
            @foreach ($errors->all() as $error)
                <div class="bg-danger">{{ $error }}</div>
            @endforeach
        
    @endif
     
    <form action="{{ route('conta.update', ['id'=> $conta->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" name="nome" placeholder="Digite o seu nome:" id="" value="{{ old('nome', $conta->nome) }}">
        </div>
        <div class="form-group">
            <label for="">Valor</label>
            <input type="text" name="valor" placeholder="Digite o seu valor:" id=""  value="{{ old('valor', $conta->valor) }}">
        </div>
        <div class="form-group">
            <label for="">Vencimento</label>
            <input type="text" name="vencimento" placeholder="Digite o seu vencimento:" id=""  value="{{ old('vencimento', $conta->vencimento) }}">
        </div>
        <input type="submit" value="GO" class="btn btn-info">
    </form>
</div>

@endsection