
    Lista de Gerentes<br>
    
    <table border="1">
        <thead>
            <th>#</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Correo</th>
            {{--<th>Foto</th> --}}
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($todos as $uno)
            <tr>
                <td>{{$uno->id}}</td>
                <td>{{$uno->nombre}}</td>
                <td>{{$uno->telefono}}</td>
                <td>{{$uno->correo}}</td>
                {{--<td><img src="{{asset("imagenes/$uno->imagen")}}" alt=""></td> --}}
                <td>
                    {{-- <a href="{{route('gerente.experiencias.index',$uno->id)}}">EXPERIENCIA</a> --}}
                    
                    <a href="{{route('contactos.edit',$uno->id)}}">ACTUALIZAR</a>
                    <form action="{{route('contactos.destroy', $uno->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="BORRAR">
                    </form>
            </td>
            </tr>
            
            @endforeach
    
        </tbody>

    </table>

