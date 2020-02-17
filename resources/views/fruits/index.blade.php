@extends('layout.main')

@section('page-title','Index Fruits')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left"> Lista della frutta </h1>
                <a class="btn btn-success pull-right" href="{{ route('fruits.create')}}">Inserici frutta</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Peso</th>
                            <th>Varieta</th>
                            <th>Azioni</th>
                        </tr>
                    </thead>
                    @forelse ($fruits as $fruit)
                        <tr>
                            <td>
                                {{ $fruit->id }}
                            </td>
                            <td>
                                {{ $fruit->name }}
                            </td>
                            <td>
                                {{ $fruit->peso }}
                            </td>
                            <td>
                                {{ $fruit->varieta }}
                            </td>
                            <td>
                                <a class="btn btn-info" href="{{ route('fruits.show',['fruit'=> $fruit->id ])}}">Visualizza</a>
                                <a class="btn btn-warning" href="{{ route('fruits.edit',['fruit'=> $fruit->id ])}}">Modifica</a>
                                <form class="form-inline" action="{{ route('fruits.destroy',['fruit'=> $fruit->id ])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger" type="submit" value="Cancella">
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan='5'>Non c'è alcun frutto!</td>
                        </tr>
                    @endforelse
                </table>


            </div>

        </div>

    </div>

@endsection
