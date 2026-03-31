@foreach($curso as $cursos)
    <h3>Nome: {{$cursos->nome}}</h3>
    <h3>horario: {{$cursos->horario}}</h3>
    <hr>

@endforeach
