Formulario de edición para la creacion de Super Heroes.

<form action=" {{ url('/Heroes/'.$heroes->id) }} " method="post" enctype="multipar/form-data">
@csrf
{{ method_field('PATCH') }}

@include('Heroes.form');

</form>