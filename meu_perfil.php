<?php require_once('includes/valida_login.php');//?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Usuário</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> <!-- Adicione o link para o Font Awesome -->
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color: #33752a; /* Cor de fundo verde */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 5px;
            padding: 40px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            text-align: center;
        }

        .user-icon {
            text-align: center;
            margin-top: 10px; /* Ajuste a margem superior para 10px */
            margin-bottom: 20px; /* Espaçamento inferior para o ícone */
        }

        .user-icon i {
            font-size: 100px;
            border: 3px solid #33752a; /* Cor da borda verde */
            border-radius: 50%; /* Bordas arredondadas para criar um círculo */
            padding: 20px;
            color: #33752a; /* Cor do ícone */
        }

        .form-group {
            margin-bottom: 20px; /* Ajuste o espaçamento inferior para 20px */
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px; /* Espaçamento inferior para etiquetas */
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #4CAF50; /* Cor da borda verde */
            border-radius: 5px;
        }

        .form-group button {
            background-color: #33752a; /* Cor do botão verde */
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 20px; /* Adicione uma margem inferior ao botão */
        }

        .form-group button:hover {
            background-color: #45a049; /* Cor do botão verde escuro no hover */
        }

        /* Estilos para telas menores (máximo de 600px) */
        @media screen and (max-width: 600px) {
            .container {
                width: 100%;
            }

            .form-group input,
            .form-group select,
            .form-group button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="user-icon"><i class="fas fa-user"></i></h2> <!-- Ícone de usuário -->
        <h2>Perfil</h2>
        <?php
                require_once 'includes/funcoes.php';
                require_once 'core/conexao_mysql.php';
                require_once 'core/sql.php';
                require_once 'core/mysql.php';

                if (isset($_SESSION['login'])) {
                    // verifica se está logado
                    $id = (int) $_SESSION['login']['usuario']['id'];

                    $criterio = [
                        ['id', '=', $id]
                    ];

                    $retorno = buscar(
                        // busca dados do usuário 
                        'usuario',
                        ['id', 'nome', 'email'],
                        $criterio
                    );

                    $entidade = $retorno[0];
                }
                ?>
        <?php if (isset($_GET['erro']) && $_GET['erro']=='email_duplicado'): ?>
            <p>O email preenchido já está cadastrado</p>
        <?php endif; ?>
        <form method="post" action="core/post_meu_perfil.php" enctype="multipart/form-data">
            <input type="hidden" name="acao" value="<?php echo 'update' ?>">
            <input type="hidden" name="id" value="<?php echo $entidade['id'] ?? '' ?>">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" value="<?php echo $entidade['nome'] ?? '' ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $entidade['email'] ?? '' ?>" required>
            </div>
            <div class="form-group">
                <label for="foto">Foto:</label>
                <input type="file" id="foto" name="foto" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="senha" id="senha" name="senha" required>
            </div>
            
            <div class="form-group">
                <button type="submit">Atualizar</button>
                <a href="pagina_principal.php" class="btn">Voltar</a>
            </div>
        </form>
    </div>
</body>
</html>