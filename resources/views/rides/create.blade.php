<x-app-layout>

<div class="container">

<h1>Registrar Ganhos do Dia</h1>

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


<label>Ganho do Dia (R$)</label>
<input
type="number"
step="0.01"
name="valor"
required
>


<label>Data do Fechamento</label>
<input
type="date"
name="data_corrida"
required
>


<label>Quilometragem do Dia</label>
<input
type="number"
step="0.01"
name="quantidade_km"
>


<label>Horas Trabalhadas (min)</label>
<input
type="number"
name="tempo_online_minutos"
>


<label>Observações</label>
<textarea
name="observacoes"
placeholder="Ex: dia fraco, muita dinâmica, chuva..."
></textarea>

<button type="submit">
Salvar Fechamento
</button>

</form>

</div>

</x-app-layout>
