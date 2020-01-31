<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_cliente = "SELECT * FROM Cliente WHERE id = '$id'";
$resultado_cliente = mysqli_query($conn, $result_cliente);
$row_cliente = mysqli_fetch_assoc($resultado_cliente);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>ETAPA 1 - TESTE<</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-dark fixed bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="listar.php">Minha empresa</a>

        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="index.php">Sair</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="dashboard.php">
                                <span data-feather="home"></span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" 
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listar.php">
                                <span data-feather="file"></span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" 
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                    <polyline points="13 2 13 9 20 9"></polyline>
                                </svg>
                                Cliente
                            </a>
                        </li>
                    </ul>

                    </a>
                    </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

                <H1>Editar cliente</H1>

                <form method="POST" action="edit.php">
                    ID:
                    <br/>
                    <input type="text" size="2" value="<?php echo $row_cliente['id']; ?>" name="id" readonly/>
                    <br/>
                    <br/> Nome: *
                    <br/>
                    <input type="text" name="nome" size="40" placeholder="Nome" value="<?php echo $row_cliente['nome'];  ?>" required />
                    <br/>
                    <br/> Endereço:
                    <br/>
                    <input type="text" name="endereco" size="40" placeholder="Endereço" id = "endereco" value="<?php echo $row_cliente['endereco'];  ?>"> nº:
                    <input type="text" name="numero" size="2" placeholder="Nº" value="<?php echo $row_cliente['numero'];  ?>">
                    <br/>
                    <br/> Bairro:
                    <br />
                    <input type="text" name="bairro" placeholder="Bairro" id="bairro" value="<?php echo $row_cliente['bairro'];  ?>">
                    <br/>
                    <br/> Cidade:
                    <br/>
                    <input type="text" name="cidade" placeholder="Cidade" id= "cidade" value="<?php echo $row_cliente['cidade'];  ?>">
                    <br/>
                    <br/> CEP:
                    <br/>
                    <input type="text" name="cep" placeholder="CEP" id="cep" value="<?php echo $row_cliente['cep'];  ?>">
                    <br/>
                    <br/> UF:
                    <br/>
                    <select name="uf" id="uf">
                        <option value=""   <?=($row_cliente[ 'uf']=='Selecione' )? 'selected': ''?>>Selecione</option>
                        <option value="AC" <?=($row_cliente[ 'uf']=='AC' )? 'selected': ''?>>AC</option>
                        <option value="AL" <?=($row_cliente[ 'uf']=='AL' )? 'selected': ''?>>AL</option>
                        <option value="AM" <?=($row_cliente[ 'uf']=='AM' )? 'selected': ''?>>AM</option>
                        <option value="AP" <?=($row_cliente[ 'uf']=='AP' )? 'selected': ''?>>AP</option>
                        <option value="BA" <?=($row_cliente[ 'uf']=='BA' )? 'selected': ''?>>BA</option>
                        <option value="CE" <?=($row_cliente[ 'uf']=='CE' )? 'selected': ''?>>CE</option>
                        <option value="DF" <?=($row_cliente[ 'uf']=='DF' )? 'selected': ''?>>DF</option>
                        <option value="ES" <?=($row_cliente[ 'uf']=='ES' )? 'selected': ''?>>ES</option>
                        <option value="GO" <?=($row_cliente[ 'uf']=='GO' )? 'selected': ''?>>GO</option>
                        <option value="MA" <?=($row_cliente[ 'uf']=='MA' )? 'selected': ''?>>MA</option>
                        <option value="MG" <?=($row_cliente[ 'uf']=='MG' )? 'selected': ''?>>MG</option>
                        <option value="MS" <?=($row_cliente[ 'uf']=='MS' )? 'selected': ''?>>MS</option>
                        <option value="MT" <?=($row_cliente[ 'uf']=='MT' )? 'selected': ''?>>MT</option>
                        <option value="PA" <?=($row_cliente[ 'uf']=='PA' )? 'selected': ''?>>PA</option>
                        <option value="PB" <?=($row_cliente[ 'uf']=='PB' )? 'selected': ''?>>PB</option>
                        <option value="PE" <?=($row_cliente[ 'uf']=='PE' )? 'selected': ''?>>PE</option>
                        <option value="PI" <?=($row_cliente[ 'uf']=='PI' )? 'selected': ''?>>PI</option>
                        <option value="PR" <?=($row_cliente[ 'uf']=='PR' )? 'selected': ''?>>PR</option>
                        <option value="RJ" <?=($row_cliente[ 'uf']=='RJ' )? 'selected': ''?>>RJ</option>
                        <option value="RN" <?=($row_cliente[ 'uf']=='RN' )? 'selected': ''?>>RN</option>
                        <option value="RS" <?=($row_cliente[ 'uf']=='RS' )? 'selected': ''?>>RS</option>
                        <option value="RO" <?=($row_cliente[ 'uf']=='RO' )? 'selected': ''?>>RO</option>
                        <option value="RR" <?=($row_cliente[ 'uf']=='RR' )? 'selected': ''?>>RR</option>
                        <option value="SC" <?=($row_cliente[ 'uf']=='SC' )? 'selected': ''?>>SC</option>
                        <option value="SE" <?=($row_cliente[ 'uf']=='SE' )? 'selected': ''?>>SE</option>
                        <option value="SP  <?=($row_cliente['uf'] == 'SP')?'selected':''?>">SP</option>
                        <option value="TO" <?=($row_cliente[ 'uf']=='TO' )? 'selected': ''?>>TO</option>
                    </select>
                    <br/>
                    <br/> E-mail:
                    <br/>
                    <input type="email" name="email" placeholder="E-mail" size="30" value="<?php echo $row_cliente['email'];  ?>">
                    <br/>
                    <br/> CPF: *
                    <br/>
                    <input type="text" name="cpf" placeholder="CPF" onblur="pesquisacep(this.value): " onkeypress="$(this).mask('000.000.000-00');" value="<?php echo $row_cliente['cpf'];?>" required />
                    <br/>
                    <br/>
                    <br/>
                    <span>*Campo obrigatório</span>
                    <br/>
                    <br/>
                    <button type="submit" class="btn btn-primary" name="editar">Editar</button>
                </form>
                <?php
        if(isset($_SESSION['msg']))
        {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>

            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" 
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/correio.js"></script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

</html>