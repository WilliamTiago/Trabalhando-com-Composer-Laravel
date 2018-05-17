@extends("layout.principal")
@section("conteudo")
	
	<h1>Detalhes do Produto</h1>
		<ul>
			<li>Nome: {{$p->nome}}</li>
			<li>Valor: {{$p->valor}}</li>
			<li>Descricao: {{$p->descricao}}</li>
			<li>Quantidade: {{$p->quantidade}}</li>
		</ul>

		@stop
	