<h1>Aquí vamos a pasarle datos desde routes: </h1> <br>
<p>El nombre es {{$nombre}} y la edad {{--isset($edad) && !is_null($edad) ? $edad : 'No existe la edad'--}} años</p>

@include ('contacto.cabecera', array('nombre' => $nombre))


@if (is_null($edad))
    No existe la edad 
@else
    La edad es: {{$edad}}
@endif

<br>
Tabla del 2
@for($i=0; $i<=10; $i++)
     {{$i . 'x 2 = ' . ($i*2)}} <br>
@endfor

