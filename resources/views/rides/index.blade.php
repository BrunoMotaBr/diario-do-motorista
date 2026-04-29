<x-app-layout>

<div class="container">

<h1>Ganhos Registrados</h1>

<a href="{{ route('corridas.create') }}">
+ Novo Fechamento
</a>

<table>

<tr>
<th>Data</th>
<th>Plataforma</th>
<th>Ganho</th>
<th>KM</th>
</tr>

@foreach($rides as $ride)

<tr>
<td>{{ $ride->data_corrida }}</td>

<td>
{{ $ride->platform->nome }}
</td>

<td>
R$ {{ $ride->valor }}
</td>

<td>
{{ $ride->quantidade_km }}
</td>

</tr>

@endforeach

</table>

</div>

</x-app-layout>
