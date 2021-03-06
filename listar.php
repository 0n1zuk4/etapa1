<?php
session_start();
include_once("conexao.php");
$result_cliente = "SELECT * FROM Cliente";
$resultado_cliente = mysqli_query($conn, $result_cliente);
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

            
}
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <script type="text/javascript" src="js/meu-correio.js"></script>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listar.php">
                                <span data-feather="file"></span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
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
                <h2>Clientes</h2>
                <caption>
                    <div class="float-right">
                    <a href="criar.php">
                    <button> Cadastrar + </button>
                    </a>
                    </div>
                </caption>
                <br />
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>E-Mail</th>
                                <th>Endereco</th>
                                <th>CPF</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row_cliente = mysqli_fetch_assoc($resultado_cliente)) { ?>
                                <tr>
                                    <td>
                                        <?php echo $row_cliente['id'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row_cliente['nome'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row_cliente['email'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row_cliente['endereco'] ?>, nº
                                            <?php echo $row_cliente['numero'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row_cliente['cpf'] ?>
                                    </td>
                                    <td>
                                        <a href="editar.php?id=<?php echo $row_cliente['id'] ?>">
                                            <button type="button" class="btn btn-primary">Editar </button>
                                        </a>
                                        <a href="delete.php?id=<?php echo $row_cliente['id'] ?>">
                                            <button type="button" class="btn btn-danger">Excluir </button>
                                        </a>
                                    </td>

                                </tr>
                                <?php } ?>

                        </tbody>
                    </table>
                    <?php
                    if(isset($_SESSION['msg']))
                    {
                         echo $_SESSION['msg'];
                         unset($_SESSION['msg']);
                    }
                    ?>
                </div>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
     crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o"
     crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="dashboard.js"></script>
</body>

</html>