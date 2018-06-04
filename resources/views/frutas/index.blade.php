
<h1>Listado de frutas (Desde el controlador FrutasController)</h1>

<a href="{{ action('FrutasController@getNaranjas')}}" >Ir a naranjas</a>
<a href="{{ action('FrutasController@getPeras')}}" >Ir a peras</a>


<ul>
@foreach($frutas as $fruta)
    <li>{{$fruta}}</li>
@endforeach
</ul>