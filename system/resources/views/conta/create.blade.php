@extends('conta.layout.app')
@section('title', 'Registro')
@section('content')

<h1>Create - Index</h1>

<div class="container">
    <a href="{{ route('conta.index') }}" class="btn btn-info">VOLTAR</a>

    @if($errors->any())
        
            @foreach ($errors->all() as $error)
                <div class="bg-danger">{{ $error }}</div>
            @endforeach
        
    @endif
    
    <form action="{{ route('conta.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" name="nome" placeholder="Digite o seu nome:" id="" value="{{old('nome')}}">
        </div>
        <div class="form-group">
            <label for="">Valor</label>
            <input type="text" name="valor" placeholder="Digite o seu valor:" id="" value="{{ old('valor') }}">
        </div>
        <div class="form-group">
            <label for="">Vencimento</label>
            <input type="text" name="vencimento" placeholder="Digite o seu vencimento:" id="" value="{{ old('vencimento') }}">
        </div>
        <input type="submit" value="GO" class="btn btn-info">
    </form>
</div>

@endsection