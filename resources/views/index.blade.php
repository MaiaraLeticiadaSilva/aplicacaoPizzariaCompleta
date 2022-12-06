<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <!-- Bosstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Inicio</title>
</head>

<body>
    <header>
        <div class="container" id="nav">
            <nav class=" navbar navbar-expand-lg">

                <a class="navbar-brand">
                    <!-- imagem do logo e o titulo do site-->
                    <img src="/imagens/fatiasCabecalho.png" id="logoJoao" styles="font-faily= Courgette;"
                        alt="">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbar-links"
                    aria-controls="navbar-links"aria-expended="false" aria label="toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="#inicio" id="inicio">Inicio</a>
                        @if (isset($logado) && $logado == false)
                            <a class="nav-item nav-link" href="./login" id="login">Login</a>
                        @else
                            @if (isset($username))
                                <a href="/" class="nav-item nav-link">{{ $username }}</a>
                            @endif
                        @endif
                        <a class="nav-item nav-link" href="#cardapio">Cardápio</a>
                        <a class="nav-item nav-link" href="#pedido">Pedido</a>
                    </div>
                </div>
            </nav>
        </div>

    </header>
    <main>
        <div id="inicio">
            <div class="m-0 p-0">

                <div id="mainSlider" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="mainSlider" data-slide-to="0" clas="active"></li>
                        <li data-target="mainSlider" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img src="/imagens/pizza1.jpg" class="d-block col-12" alt="Fome de pizza? ">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Fome de pizza?</h2>
                                <p>Mais de 10 pizzarias na região!</p>
                                <a href="#cardapio" class="main-btn">Ver cardápio</a>
                            </div>
                        </div>

                        <div class="carousel-item ">
                            <img src="/imagens/pizza2.jpg" class="d-block " alt="Diversos sabores para você!">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Escolha já</h2>
                                <p>Retire rapidamente no balcão!</p>
                                <a href="a" class="main-btn">Ver cardápio</a>
                            </div>
                        </div>

                    </div>
                    <a href="mainSlider"class="carousel-control-prev" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a href="mainSlider"class="carousel-control-next" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
            </div>
        </div>

    </main>


    <!--Parte Cardápio-->

    <diV id="cardapio" class="col-12">

        <!-- Columns are always 50% wide, on mobile and desktop -->

        <div class="linhas">
            <div class="container1">
            </div>
            <div class="container2">
            </div>
            <div class="container3">
            </div>
        </div>

        <div>
            <h2 class="titulo m-0">Cardápio</h2>
            <hr class="hr--small">
        </div>
        <div class="d-flex justify-content-center">
            <div class="d-flex flex-column col-8">


                <div class="d-flex flex-row justify-content-evenly">
                    <div class="col-6 ">
                        <h1>Sabores Salgados</h1>

                        <p>1. Quatro Queijos.......... R$ 45,00<br>Mussarela, parmesão, gorgonzola, cheedar</p>
                        <p>2. Frango com Catupiry.......... R$ 47, 00<br>Mussarela, frango, catupiry, tomate</p>
                        <p>3. Calabresa.......... R$ 33,00<br>Mussarela, calabresa, cebola, tomate</p>
                        <p>4. Lombinho.......... R$ 49,00<br>Mussarela, lombo, catupiry, tomate</p>
                        <p>5. Filé com Cheddar.......... R$ 55, 00<br>Mussarela, cheddar, catupiry, filé</p>
                        <p>6. Portuguesa.......... R$ 50,00<br>Mussarela, presunto, ovo, cebola, tomate, milho</p>
                        <p>7. Marguerita.......... R$ 48,00<br>Mussarela, parmesão, tomate, manjericão</p>
                    </div>

                    <div class="col-4">
                        <h1>Pizzas Doce</h1>

                        <p>Chocolate preto.......... R$ 35,00</p>
                        <p>Chocolate branco.......... R$ 35,00</p>
                        <p>Chocolate e morango.......... R$ 37,00</p>
                        <p>Chocolate e m&ms.......... R$ 38,00</p>
                        <p>Romeu e Julieta.......... R$ 34,00</p>
                        <p>Sorvete.......... R$ 35,00</p>
                        <p>Chocolate branco.......... R$ 35,00</p>
                        <p>Chocolate e morango.......... R$ 37,00</p>
                        <p>Chocolate e m&ms.......... R$ 38,00</p>
                        <p>Romeu e Julieta.......... R$ 34,00</p>
                    </div>
                </div>

                <div class="d-flex flex-row justify-content-evenly">
                    <div class="col-6">
                        <h1>Bordas Recheadas</h1>

                        <p>Cheddar.......... R$ 6,00</p>
                        <p>Catupiry.......... R$ 5,00</p>
                        <p>Chocolate.......... R$ 7,00</p>
                    </div>

                    <div class="col-4">
                        <h1>Massas</h1>

                        <p>1. Massa comum.......... R$ 0,00 <br>Farinha de trigo, leite, ovo, óleo</p>
                        <p>2. Massa integral.......... R$ 6, 00<br>Farinha de trigo integral, água, manteiga</p>
                        <p>3. Massa temperada.......... R$ 9,00<br>Farinha de trigo, leite, ovo, óleo </p>

                    </div>
                </div>
            </div>
        </div>

        <div class="linhas">
            <div class="container1">
            </div>
            <div class="container2">
            </div>
            <div class="container3">
            </div>

        </div>
    </div>

    <!--Parte Pedido-->

    <div id="pedido" class="">
        <!--
    <div class="container-fluid flex border-dark  p-3 my-3">
    <img src="https://img.freepik.com/fotos-premium/fatia-de-deliciosa-pizza-com-ingredientes-no-plano-de-fundo-texturizado-de-madeira_23-2147926094.jpg"  alt="Imagem responsiva">
    </div>
    -->

        <h1 class="col-12" id="titulo">Faça seu pedido aqui</h1>
        <hr class="hr--small">
        @if (isset($username))
            @if ($username != 'Admin')
                <form action="/pedido" method="POST" class="formulario pb-5 px-5">
                    @csrf
                    <input type="hidden" name="estado" value="0">
                    <div class='d-flex flex-column flex-sm-row'>
                        <div class="col-sm-4 d-flex flex-row justify-content-center">
                            <label for="sabor">Sabor: </label>
                            <select name="sabor" id="saborInput">
                                <option class="optionSabor" preco="0" value="">selecione uma opção
                                </option>
                                @foreach ($sabores as $sabor)
                                    <option preco="{{ $sabor->preco }}" class="optionSabor"
                                        value="{{ $sabor->id }}">
                                        {{ $sabor->tipo }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-4 d-flex flex-row justify-content-center">
                            <label for="borda">Bordas: </label>
                            <select name="borda" id="bordaInput">
                                <option class="optionBorda" preco="0" value="">selecione uma opção
                                </option>

                                @foreach ($bordas as $borda)
                                    <option preco="{{ $borda->preco }}" class="optionBorda"
                                        value="{{ $borda->id }}">
                                        {{ $borda->tipo }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-sm-4 d-flex flex-row justify-content-center">
                            <label for="massa">Massas: </label>
                            <select name="massa" id="massaInput">
                                <option class="optionMassa" preco="0" value="">selecione uma opção
                                </option>

                                @foreach ($massas as $massa)
                                    <option preco="{{ $massa->preco }}" class="optionMassa"
                                        value="{{ $massa->id }}">
                                        {{ $massa->tipo }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div>
                        <p>total:</p>
                        <p class="fs-1" id="precoFinal"></p>
                    </div>
                    <div>
                        <input type="submit" value="enviar pedido">
                    </div>
                    <div class="col-12 py-5"></div>
                </form>
            @else
                <table>
                    <tr>
                        <th>id</th>
                        <th>descrição</th>
                        <th>estado</th>
                        <th>ação</th>
                    </tr>
                    @foreach ($pedidos as $pedido)
                        <tr>
                            <td>{{ $pedido->id }}</td>
                            <td>{{ $sabores[$pedido->sabor_id-1]->tipo }}, {{ $bordas[$pedido->borda_id]->tipo }},
                                {{ $massas[$pedido->massa_id]->tipo }}</td>
                            <td>{{ $estados[$pedido->estado_id-1]->tipo }}</td>
                            <td>
                                <form id="formDelete" action="/remove/{{ $pedido->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input onclick="this.preventDefault()" type="submit" class="btn btn-danger" value="remover">
                                </form>
                                <a href="/editar/{{ $pedido->id }}" class="btn btn-success">editar</a>
                            </td>

                        </tr>
                    @endforeach
                </table>
            @endif
        @else
            <form action="/pedido" method="POST" class="formulario pb-5 px-5">
                @csrf
                <input type="hidden" name="estado" value="1">
                <div class='d-flex flex-column flex-sm-row'>
                    <div class="col-sm-4 d-flex flex-row justify-content-center">
                        <label for="sabor">Sabor: </label>
                        <select name="sabor" id="saborInput">
                            <option class="optionSabor" preco="0" value="">selecione uma opção
                            </option>
                            @foreach ($sabores as $sabor)
                                <option preco="{{ $sabor->preco }}" class="optionSabor"
                                    value="{{ $sabor->id }}">
                                    {{ $sabor->tipo }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-4 d-flex flex-row justify-content-center">
                        <label for="borda">Bordas: </label>
                        <select name="borda" id="bordaInput">
                            <option class="optionBorda" preco="0" value="">selecione uma opção
                            </option>

                            @foreach ($bordas as $borda)
                                <option preco="{{ $borda->preco }}" class="optionBorda"
                                    value="{{ $borda->id }}">
                                    {{ $borda->tipo }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-sm-4 d-flex flex-row justify-content-center">
                        <label for="massa">Massas: </label>
                        <select name="massa" id="massaInput">
                            <option class="optionMassa" preco="0" value="">selecione uma opção
                            </option>

                            @foreach ($massas as $massa)
                                <option preco="{{ $massa->preco }}" class="optionMassa"
                                    value="{{ $massa->id }}">
                                    {{ $massa->tipo }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    <p>total:</p>
                    <p class="fs-1" id="precoFinal"></p>
                </div>
                <div>
                    <input type="submit" value="enviar pedido">
                </div>
                <div class="col-12 py-5"></div>
            </form>

        @endif
        <!--<div class="row">
        <div class="col-md-6">
      <div class="text-left">
        <img src="https://media.istockphoto.com/id/666718440/photo/delicious-classic-italian-pizza-carbonara-with-ham-sausages-tomatoes-mushrooms-and-cheese.jpg?s=612x612&w=0&k=20&c=G-NMe4-5360VqSVuZ1Xl5hrD-WVfIhO4nORcM0k0MoI=" class="rounded" alt="...">
      </div></div></div>
      -->


    </div>
    </div>
    @if (isset($pedido) && $pedido != '')
        <footer class="bg-success bg-opacity-25  text-center fixed-bottom ">
        @else
            <footer class="bg-secondary bg-opacity-25  text-center fixed-bottom ">
    @endif
    <div class="col-md-12">
        <p>Pizzaria do João, 2022 <span>Entre em contato por: pizzariadojoao@gmail.com</span></p>
    </div>
    </div>
    </div>
    </footer>


    <script>
        function remove(id) {
            fetch('/remove/' + id, {
                method: 'POST'
            })
        }




        const precoFinal = document.getElementById('precoFinal')
        const precoSabor = document.getElementById('saborInput')
        const precoBorda = document.getElementById('bordaInput')
        const precoMassa = document.getElementById('massaInput')

        precoSabor.onchange = () => {
            precoFinal.innerText = (((document.getElementsByClassName('optionSabor')[precoSabor.selectedIndex]
                .attributes.preco.value * 1) + (document.getElementsByClassName('optionBorda')[precoBorda
                .selectedIndex].attributes.preco.value * 1) + (document.getElementsByClassName(
                'optionMassa')[precoMassa.selectedIndex].attributes.preco.value * 1)) / 100).toFixed(2)

        }
        precoBorda.onchange = () => {
            precoFinal.innerText = (((document.getElementsByClassName('optionSabor')[precoSabor.selectedIndex]
                .attributes.preco.value * 1) + (document.getElementsByClassName('optionBorda')[precoBorda
                .selectedIndex].attributes.preco.value * 1) + (document.getElementsByClassName(
                'optionMassa')[precoMassa.selectedIndex].attributes.preco.value * 1)) / 100).toFixed(2)
        }
        precoMassa.onchange = () => {
            precoFinal.innerText = (((document.getElementsByClassName('optionSabor')[precoSabor.selectedIndex]
                .attributes.preco.value * 1) + (document.getElementsByClassName('optionBorda')[precoBorda
                .selectedIndex].attributes.preco.value * 1) + (document.getElementsByClassName(
                'optionMassa')[precoMassa.selectedIndex].attributes.preco.value * 1)) / 100).toFixed(2)
        }

        document.getElementById('formDelete').onsubmit = (event)=>{event.preventDefault();}
    </script>
</body>
