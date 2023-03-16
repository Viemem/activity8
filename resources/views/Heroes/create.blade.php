Formulario para la creación de SuperHeroes.
<form action="{{ url('/Heroes') }}" method="post" enctype="multipar/form-data">
@csrf
@include('Heroes.form');




</form>