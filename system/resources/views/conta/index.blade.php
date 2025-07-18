@extends('conta.layout.app')
@section('title', 'Home')
@section('content')

<h1>Home - Index</h1>
<a href="{{ route('conta.create') }}" class="btn btn-info">Novo</a>
<hr>
 @if(session('success'))
       <div class="bg-success text-white p-2">
         {{ session('success') }}
       </div>
    @endif
<div class="container">
    <table class="table table-stripled">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Valor</th>
                <th>Vencimento</th>
                <th></th>
            </tr>
        </thead>
        

        
        @forelse ($contas as $conta)
        <tbody>
            <tr>
                <td>{{ $conta->id }}</td>
                <td>{{ $conta->nome }}</td>
                <td> {{'R$ '. number_format($conta->valor, 2,',', '.') }}</td>
                <td>{{ \Carbon\Carbon::parse($conta->vencimento)->tz('America/Sao_Paulo')->format('d/m/Y') }}</td>
                <td>
                    <a href="{{ route('conta.show', ['id'=> $conta->id]) }}" class="btn btn-info btn-sm">Visualizar</a>
                    <a href="{{ route('conta.edit', ['id'=> $conta->id]) }}" class="btn btn-info btn-sm">Editar</a>
                    <form action="{{ route('conta.destroy', ['id' => $conta->id]) }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="REMOVER" class="btn btn-danger" onclick="return  confirm('Tem certeza que deseja apagar?')">
                    </form>
                </td>
            </tr>
        </tbody>
        @empty
        <span class="text-danger">Nenhum dado encontrado..</span>
        @endforelse
        
    </table>
</div>

@endsection