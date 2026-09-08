<h1>Id: {{ $id }} </h1>
<h1>Nome: {{ $nome }} </h1>

<a href="{{ route('produtos', ['id'=>333,'nome'=>'Carro']) }}">Produto 1</a>
<br>
<a href="{{ route('produtos', ['id'=>777,'nome'=>'Moto']) }}">Produto 2</a>
<br>
<a href="{{ route('produtos', ['id'=>999,'nome'=>'Jato']) }}">Produto 3</a>