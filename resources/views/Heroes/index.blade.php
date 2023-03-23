@extends('layouts.app')
@section('content')
<div class="container">

<a href="{{ url('Heroes/create') }}" class="btn btn-primary" > Crear nuevo heroe</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>NombreHeroe</th>
            <th>NombreReal</th>
            <th>Vestimenta</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $heroes as $Heroes)
        <tr>
            <td>
                <td>{{$Heroes->id}}</td>
                
                <td>   
                     
                </td>


                <td>{{$Heroes->NombreHeroe}}</td>
                <td>{{$Heroes->NombreReal}}</td>
                <td>{{$Heroes->Vestimenta}}</td>
                <td>
                    
                <a href="{{ url('/Heroes/'.$Heroes->id.'/edit') }}" class="btn btn-dark">
                Editar
                </a>
                 | 

                <form action="{{ url('/Heroes/'.$Heroes->id ) }}" class="d-inline" method="post">
                @csrf 
                {{ method_field('DELETE') }}
                <input class="btn btn-danger" type="submit" onclick="return confirm('¿Deseas borrar la informacion?')" 
                value="Borrar">

                </form>

                </td>


            </td>
        </tr>
        @endforeach

    </tbody>

</table>
</div>
@endsection
