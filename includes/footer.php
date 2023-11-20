
<!-- review section starts  -->

<section class="review" id="review">

<h1 class="heading"> Comentários dos<span> usuarios</span> </h1>

<center> <a href="cadastro_comentario.php" class="my-btn">Comentar</a></center>
<br>
<br>

<div class="box-container">

<?php
                date_default_timezone_set('America/Sao_Paulo');
                require_once 'includes/funcoes.php';
                require_once 'core/conexao_mysql.php';
                require_once 'core/sql.php';
                require_once 'core/mysql.php';

                foreach ($_GET as $indice => $dado) {
                    $$indice = limparDados($dado);
                }

                $data_atual = date('Y-m-d H:i:s');
                // é a forma mais fácil de ordenar uma data, pois em caso de ordenação, 
                // o ano é o primeiro parametro a ser verificado, assim, ano>mes>dia 

                // busca o horário do servidor

                $criterio = [
                  ['data_criacao', '<=', $data_atual]
                ];

                $comentarios = buscar(
                    'comentario',
                    [
                        'texto',
                        'nota', 
                        'data_criacao',
                        'id',
                        ' (select nome 
                                from usuario
                                where usuario.id = comentario.usuario_id) as nome'
                    ],
                    $criterio,
                    'data_criacao DESC'
                );
                ?>

<?php
        foreach ($comentarios as $comentario) :
            $data = date_create($comentario['data_criacao']);
            $data = date_format($data, 'd/m/Y H:i:s');
?>
    <div class="box">
        <div class="stars">
            <?php for($i=0; $i < $comentario['nota']; $i++): ?>
                <i class="fas fa-star"></i>
            <?php endfor;?>
        </div>
        <p><?=$comentario['texto'];?></p>
        <div class="user">
            <img src="images/pic-1.png" alt="">
            <div class="user-info">
                <h3><?=$comentario['nome'];?></h3>
                <!--<span>happy customer</span>-->
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>
<?php endforeach;?> 
   

</div>
    
</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span> Enviar </span>Mensagem</h1>

    <div class="row">

        <form action="">
            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="number" placeholder="number" class="box">
            <textarea name="" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="Mande uma mensagem" class="my-btn">
        </form>

        <div class="image">
            <img src="images/contatos.png" alt="">
        </div>

    </div>

</section>

<!-- contact section ends -->
<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Links rápidos</h3>
            <a href="#">Inicio</a>
            <a href="#">Sobre</a>
            <a href="#">Livros</a>
            <a href="#">Comentários</a>
            <a href="#">Contatos</a>
        </div>

        <!--<div class="box">
            <h3>extra links</h3>
            <a href="#">my account</a>
            <a href="#">my order</a>
            <a href="#">my favorite</a>
        </div>-->

        <!--<div class="box">
            <h3>locations</h3>
            <a href="#">india</a>
            <a href="#">USA</a>
            <a href="#">japan</a>
            <a href="#">france</a>
        </div>-->

        <div class="box">
            <h3>Informações de contato</h3>
            <a href="#">+55 18981247130</a>
            <a href="#">carolina.guimaraes@aluno.ifsp.edu.br</a>
            <a href="#"></a>
            <!--<img src="images/payment.png" alt="">-->
        </div>

    </div>

    <div class="credit"> IFSP-Birigui <span> Biblioteca Portátil </span> </div>

</section>

<!-- footer section ends -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>