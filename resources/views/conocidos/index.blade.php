
    Conocidos<br>
    
    <table border="1">
        <thead>
            <th>#Id</th>
            <th>Nombre</th>
            <th>Nombre de Usuario</th>
            <th>Clave</th>
            {{--<th>Foto</th> --}}
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($todos as $uno)
            <tr>
                <td>{{$uno->id}}</td>
                <td>{{$uno->nombre}}</td>
                <td>{{$uno->usuario}}</td>
                <td>{{$uno->clave}}</td>
                {{--<td><img src="{{asset("imagenes/$uno->imagen")}}" alt=""></td> --}}
                <td>
                    {{-- <a href="{{route('gerente.experiencias.index',$uno->id)}}">EXPERIENCIA</a> --}}
                    
                    <a href="{{route('conocidos.edit',$uno->id)}}">ACTUALIZAR</a>
                    <form action="{{route('conocidos.destroy', $uno->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="BORRAR">
                    </form>
            </td>
            </tr>
            
            @endforeach
    
        </tbody>

    </table>
