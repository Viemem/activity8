<label for="NombreHeroe"> NombreHeroe</label>
<input type="text" name="NombreHeroe" value="{{ isset($heroes->NombreHeroe)? $heroes->NombreHeroe:'' }}" id="NombreHeroe">
<br>
<label for="NombreReal"> NombreReal</label>
<input type="text" name="NombreReal" value="{{ isset($heroes->NombreReal)? $heroes->NombreReal:'' }}" id="NombreReal">
<br>
<label for="Vestimenta"> Vestimenta</label>
<input type="text" name="Vestimenta" value="{{ isset($heroes->Vestimenta)? $heroes->Vestimenta:'' }}" id="Vestimenta">
<br>
<label for="Foto"> Foto</label>
@if (isset($heroes->Foto))
<img src="{{ asset('storage').'/'.$heroes->Foto }}" alt="">
@endif
<input type="file" name="Foto" value="" id="Foto">
<br>
<input type="submit" value="Guardar datos creados">

<a href="{{ url('Heroes/') }}">Regresar</a>

<br>