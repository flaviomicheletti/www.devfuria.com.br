<?php
/**
 *
 */
/**
 * Includes
 */
require "../../../core/boot.php";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $core->head->setTitle('');
        $core->head->setDescription('');
        $core->head->setkeywords('');
        $core->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $core->navtop->secao_ativa = Core::SECAO_HTML;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>

        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1></h1>
                <p></p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">06/01/2014</span>, escrito em <span class="label label-info">06/01/2014</span>.
            </div>
        </div>

        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <!-- navegação lateral esquerdo -->
                <div class="col-md-3">
                    <div class="bs-sidebar hidden-print" role="complementary">
                        <ul class="nav bs-sidenav">
                            <li><a href="#">Título 01</a></li>
                            <li>
                                <a href="#">Título 02</a>
                            </li>
                            <li>
                                <a href="#">Título 03</a>
                            </li>
                            <li>
                                <a href="#">Título 04</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="">Estilo</h1>
                        </div>


                        <div class="bs-example">
                            <img class="img-rounded" alt="### 1 exemplo de formulário web" src="form01.png">
                            <p><a href="http://blog.alexandremagno.net/2012/06/twitter-bootstrap-em-portugues" title="link-externo" class="img-responsive">Fonte da imagem</a></p>
                        </div>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### 2 exemplo de formulário web " src="form02.png">
                            <p><a href="http://www.weblovers.com.br/2011/11/25/formee-um-framework-flexivel-para-formularios-web/" title="link-externo" class="img-responsive">Fonte da imagem</a></p>
                        </div>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### 3 exemplo de formulário web" src="form03.jpg">
                            <p><a href="http://wbraganca.com/2010/07/criando-formularios-elegantes-com-ajax-jquery-e-css/" title="link-externo" class="img-responsive">Fonte da imagem</a></p>
                        </div>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### 4 exemplo de formulário web" src="form04.png">
                            <p><a href="http://www.emissornfeweb.com.br/" title="link-externo" class="img-responsive">Fonte da imagem</a></p>
                        </div>




                        <a href="<?php echo LINKS_PATH; ?>/logica-de-programacao/basico/code-triangulo/">Code - Triângulo</a>.</p>



                        <pre><code class="no-highlight">código</code></pre>

                        <div class="code">
                            <h6>pet.txt</h6>
                            <pre><code class="no-highlight">código
</code></pre></div>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="">Título 02</h1>
                        </div>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="">Título 03</h1>
                        </div>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="">Título 04</h1>
                        </div>

                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="leituras">Leituras adicionais sugeridas <small>(Referências)</small></h1>
                        </div>

                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Livros</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item" title="">
                                        <h4 class="list-group-item-heading"></h4>
                                        <p class="list-group-item-text"></p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Internet</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="l" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading"></h4>
                                        <span class="label label-default"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $core->paginacao->link_ativo = "/";
                    $core->paginacao->descobrirAnteriorProxima($core->links[Core::SECAO_HTML]);
                    include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                    ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->

        <footer class="bs-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1></h1>
                        <?php
                        $core->lista->setLinks($core->links, Core::SECAO_HTML);
                        $core->lista->link_ativo = "/";
                        include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                        ?>
                    </div>
                </div>
            </div>
        </footer>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
