
@if ($errors->any())
    errores
@endif

<form action="{{route('conocidos.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    
    @error('nombre')
        **
    @enderror
    <label for='nombre'>Nombre</label>
    <input type='text' name='nombre' id='nombre' value={{old('nombre')}}>

    @error('nombre_de_usuario')
        **
    @enderror
    <label for='NombreDeUsuario'>Nombre de Usuario</label>
    <input type='text' name='usuario' id='NombreDeUsuario' value={{old('usuario')}}>
    
    <label for='clave'>Clave del usuario</label>
    <input type='password' name='clave' id='clave'>
    
    @error('clave')
    {{ $message }}
    @enderror
    <label for='pwd'>Repita la clave</label>
    <input type='password' name='clave_confirmation' id='pwd'>
    

    
    <br>
    <input type="submit" value="GUARDAR">
</form>

