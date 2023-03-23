<div class="form-group">
<label for="NombreHeroe"> NombreHeroe</label>
<input type="text" class="form-control" name="NombreHeroe" value="{{ isset($heroes->NombreHeroe)? $heroes->NombreHeroe:'' }}" id="NombreHeroe">
<br>
</div>


<div class="form-group">
<label for="NombreReal"> NombreReal</label>
<input type="text" class="form-control" name="NombreReal" value="{{ isset($heroes->NombreReal)? $heroes->NombreReal:'' }}" id="NombreReal">
<br>
</div>

<div class="form-group">
<label for="Vestimenta"> Vestimenta</label>
<input type="text" class="form-control" name="Vestimenta" value="{{ isset($heroes->Vestimenta)? $heroes->Vestimenta:'' }}" id="Vestimenta">
<br>
</div>

<div class="form-group">
<label for="Foto"> Foto</label>
@if (isset($heroes->Foto))
<img src="{{ asset('storage').'/'.$heroes->Foto }}" alt="">
@endif
<input type="file" class="form-control" name="Foto" value="" id="Foto">
<br>
</div>

<input class="btn btn-success" type="submit" value="Guardar datos creados">

<a href="{{ url('Heroes/') }}">Regresar</a>


<br>

