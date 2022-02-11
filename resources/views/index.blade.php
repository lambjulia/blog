<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    
    
    <title>Pessoas Cadastradas</title>
</head>

<body>
    <header>
        <nav >
            <a class="logo" href="home">Prefeitura</a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a href="home">Inicio</a></li>
                <li><a href="cadastro">Cadastrar nova Pessoa</a></li>
                <li><a href="cadastroprot">Cadastrar novo Protocolo</a></li>
                <li><a href="index">Pessoas Cadastradas</a></li>
                <li><a href="lista">Protocolos Cadastrados</a></li>
            </ul>
        </nav>
    </header>      
    <main></main>

</body>


<div class ="container">
    <h1> Listagem de Pessoas</h1>    





<table class ="table table-condensed">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>CPF</td>
            
        </tr>    
    </thead>
   
    <tbody>
        @foreach($pessoa as $pessoa)
        <tr>
            <td>{{ $pessoa->id }}</td>
            <td>{{ $pessoa->nome }}</td>
            <td>{{ $pessoa->cpf }} </td>
            <td>
              
                    
               <a href="{{ route('show', $pessoa->id) }}" class="btn btn-primary">Ver</a>
                <a href="{{ route('edit', $pessoa->id) }}" class="btn btn-success">Editar</a>
                <form action="/delete/{{ $pessoa->id }}" method="POST">
                    @csrf 
                    @method('DELETE')
                    <button type="submit"  class="btn btn-danger"><i class='fa fa-trash'></i>Delete</a></button>
                </div>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>


<script src="{{asset('js/validation/validation-pessoas/validation-pessoas-create.js')}}"></script>
<script src="{{asset('js/messages_pt_BR.js')}}"></script>
<script src='jquery.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



</html>