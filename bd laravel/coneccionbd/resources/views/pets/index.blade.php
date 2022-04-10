<h1>Listado de mascotas</h1>
<a href="{{url('/pet/create/')}}">Crear</a>
<table>
<thead>
    <tr>
        <td>#</td>
        <td>nombre</td>
        <td>edad</td>
        <td></td>
    </tr>
</thead>
<tbody>
    @foreach($pets as $pet)
    <tr>
        <td>{{$pet->id}}</td>
        <td>{{$pet->name}}</td>
        <td>{{$pet->age}}</td>
        <td>
            <a href="{{url('/pet/'.$pet->id.'/edit')}}">editar</a>
        
        </td>

        <td>
            <form action="{{url('/pet/'.$pet->id)}}" method="POST">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" value="eliminar"
                onclick="return confirm('desea eliminar el registro?')">
            </form>
        </td>
    </tr>
    @endforeach
</tbody>

</table>