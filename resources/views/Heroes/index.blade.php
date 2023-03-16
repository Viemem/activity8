Mostrar la lista de heroes con sus datos.

<a href="{{ url('Heroes/create') }}"> Registrar nuevo heroe</a>

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
                    
                <a href="{{ url('/Heroes/'.$Heroes->id.'/edit') }}">
                Editar
                </a>
                 | 

                <form action="{{ url('/Heroes/'.$Heroes->id ) }}" method="post">
                @csrf 
                {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm('¿Deseas borrar la informacion?')" 
                value="Borrar">

                </form>

                </td>


            </td>
        </tr>
        @endforeach

    </tbody>

</table>