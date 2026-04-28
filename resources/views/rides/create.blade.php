<x-app-layout>

<div class="container">

<h1>Cadastrar Corrida</h1>

<form method="POST" action="{{ route('corridas.store') }}">

@csrf

<label>Plataforma</label>

<select name="platform_id">
@foreach($platforms as $platform)
<option value="{{ $platform->id }}">
{{ $platform->nome }}
</option>
@endforeach
</select>


<label>Valor</label>
<input
type="number"
step="0.01"
name="valor"
required
>


<label>Data</label>
<input
type="date"
name="data_corrida"
required
>


<label>KM</label>
<input
type="number"
step="0.01"
name="quantidade_km"
>


<label>Forma Pagamento</label>

<select name="forma_pagamento">
<option>Pix</option>
<option>Cartão</option>
<option>Dinheiro</option>
</select>


<label>Tempo Online (min)</label>
<input
type="number"
name="tempo_online_minutos"
>


<label>Observações</label>
<textarea name="observacoes"></textarea>

<button type="submit">
Salvar Corrida
</button>

</form>

</div>

</x-app-layout>
