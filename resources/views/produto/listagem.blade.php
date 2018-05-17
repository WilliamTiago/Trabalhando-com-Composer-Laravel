@extends("layout.principal")
@section("conteudo")



    <h1>Listagem Produtos</h1>
	<table class="table table-border tabke-striped">
		@foreach($produtos as $p)
		<tr class="{{$p->quantidade">
			<td>{{$p->nome}}</td>
			<td>{{$p->valor}}</td>
			<td>{{$p->descricao}}</td>
			<td>{{$p->quantidade}}</td>
			<td>
				<a href="/produto/mostra/{{$p->id}}">
					<span class="glyphicon glyphicon-search">B</span>
				</a>
			</td>
		</tr>
			
		@endforeach
	</table>
	@stop
