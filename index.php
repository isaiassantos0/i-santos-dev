<?php require('header.php') ?>

    <div class='container-fluid logo'><br/>
        <article class='container'>
            <div class='row'>
                
            </div>
        </article><br/>
    </div>

    <div class='container-fluid' style='background-color:#454A41;color:white'><br/>
        <article class='container' style='background-color:#454A41;'>
            <div class='row'>
                <h1>O que faz os nossos sites serem especiais?</h1>
            <div class='col-sm-7 my-4'>
                <h2>Design Responsivo</h2>
                <h6>Com a tecnologia Bootstrap, fazemos sites incriveis e sobretudo responsivos!</h6>
                <p> A demanda por sites responsivos vem crescendo atualmente. Cada vez mais, as pessoas vão acessando sites com dispositivos diferentes, com as dimensões das mais variadas.
                    O design responsivo veio para transformar o desenvolvimento web, pois não há mais necessidade da criação de diversas folhas de estilo para cada resolução!
                </p>
            </div>
            <div class='col-sm-5 mt-4'>
                <img src='assets/images/laptop.png' style="width:165px;height:165px;border:0;" class='img-fluid' alt='Responsividade' />
                <img src='assets/images/tablet.png' style="width:60px;height:100px;border:0;" class='img-fluid' alt='Responsividade' />
                <img src='assets/images/phone.png' style="width:65px;height:65px;border:0;" class='img-fluid' alt='Responsividade' />
            </div>

            <div class='row'>
            <div class='col-sm-7'>
                <h2>Segurança</h2>
                <p> Diversos sites da internet tem sido invadidos com facilidade atualmente. Ao se fazer um site, deve-se ter cuidado pois não estão sendo tratadas informações somente suas,
                    pensando nisso, eu tenho estudado segurança da informação para que ao longo dos anos pudesse oferecer serviços mais seguros e com padrão de qualidade elevado.
                </p>
            </div>
            <div class='col-sm-5'>
                <img src='assets/images/seguranca.png' style="width:165px;height:165px;border:0;" alt='Responsividade' />
            </div>
            </div>

            <div class='row'>
                <h2></h2>
            </div>
        </article>
    </div>

    <div class='container-fluid background' id='sobre'><br/>
        <aside class='container'>
            <div class='row'>
                <?php require('card.php'); ?>
            </div>  
        </aside>
    </div>

    <div class='container-fluid' style='background-color:#454a41;color:white;'><br/>
        <div class='container' id='contato' style='background-color:#454a41;'>
            <div class='row'>
            <div class='col-md-6 mb-4 mt-2' style='border-right:1px solid;border-left:1px solid;'>
                <h3> Mandem aqui sugestões, projetos ou propostas!</h3>
                <form method='POST' action='formulario.php'>
                <div class='form-group align-items-center'>
                    Nome:<br/>
                    <input type='text' name='nome' class='form-control mb-2'/>
                    E-mail:<br/>
                    <input type='email' name='email' class='form-control mb-2' required />
                    Comentário:<br/>
                    <textarea type='textarea' required name='coments' class='form-control mb-3' style='resize:none;'></textarea>
                    <input type='submit' class='btn btn-primary ml-4' value='Enviar!'/>
                </div>
                </form>
            </div>
            <div class='col-md-6 mt-3'>
                
            </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
<?php require('footer.php') ?>