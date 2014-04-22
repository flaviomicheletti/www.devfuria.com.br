<?php
/**
 * match(), test() e exec()
 * expressões regulares, match(), test(),  exec()
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/regexp/basico/varios-resultados-match-test-exec/");
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
    <head>
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/head.php"; ?>
    </head>
    <body>
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/nav-top.php"; ?>

        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1><?php echo $pagina->titulo ?></h1>
                <p>Dissecando as funções do JS</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/autor-data.php"; ?>

        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <!-- navegação lateral esquerdo -->
                <div class="col-md-3">
                    <div class="bs-sidebar hidden-print" role="complementary">
                        <ul class="nav bs-sidenav">
                            <li>
                                <a href="#intro">Introdução</a>
                            </li>
                            <li>
                                <a href="#match">match()</a>
                            </li>
                            <li>
                                <a href="#exec">exec()</a>
                            </li>
                            <li>
                                <a href="#test">test()</a>
                            </li>
                            <li>
                                <a href="#exercicio">Exercício prático</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="intro">Introdução</h1>
                        </div>

                        <p>Aqui, temos o mesmo problema da matéria anterior:</p>

                        <p><strong>Como trabalhamos com mais de um resultado?</strong></p>

                        <p>Se você caiu de paraquêdas nesta página aconselho a ler atentamente pelo menos as duas matérias anteriores a esta,
                            veja no final desta página na árvore de navegação: "Veja também..."</p>

                        <p>Continuando... vamos utilizar o mesmo exemplo matéria "ponto":</p>

                        <pre><code>assunto: "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo."
regexp: "/ca.a/"
</code></pre>

                        <p>Notamos que a ER casa com mais de um resultado.</p>

                        <p>E aí? Repito a pergunta: como programamos isso? Vamos ao ćodigo...</p>

                        <div class="code">
                            <h6>JS forma1-string-match.js</h6>
                            <pre><code class="language-javascript">var string = "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo.",
    pattern = /ca.a/,
    resultado;

// Executa nossa expressão
resultado = string.match(pattern);

if (resultado) {
    console.log("casou", resultado);
} else {
    console.log("não casou", resultado);
}</code></pre>
                        </div>

                        <p>Se a ER casar com a string então a variável <code>resultado</code> conterá um array com a parte que casou, mas <strong>apenas a primeira
                                ocorrência.</strong> Se você precisar das demais ocorrências terá que fazer uma pequena alteração na ER, veja:</p>

                        <pre><code>pattern = /ca.a/g,
</code></pre>

                        <p>Tivemos que incluir a opção <code>g</code> de "global", veja mais na
                            <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/match?redirectlocale=en-US&redirectslug=JavaScript%2FReference%2FGlobal_Objects%2FString%2Fmatch" title="link-externo">documentação oficial</a>.</p>

                        <p>Vamos aos resultados em cada função....</p>
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="match">match()</h1>
                        </div>

                        <p>Incluí a opção global <code>g</code> como descrito acima e percorri o valor da variável <code>resultado</code> que agora é um array.</p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre><code class="language-javascript">var string = "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo.",
    pattern = /ca.a/g,
    resultado,
    i;

// Executa nossa expressão
resultado = string.match(pattern)

for(i = 0; i < resultado.length; i++){
    console.log(resultado[i]);
}</code></pre>
                        </div>
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="exec">exec()</h1>
                        </div>

                        <p>Repare apenas que a opção global <code>g</code> teve que ser utilizada, sem ela o navegador (FireFox 19) entra em um loop infinito.</p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre><code class="language-javascript">var string = "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo.",
    pattern = /ca.a/g,
    resultado;

// Executa nossa expressão
while(resultado = pattern.exec(string)){
    console.log("casou", resultado);
}</code></pre>
                        </div>
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="test">test()</h1>
                        </div>

                        <p>Diferentemente da primeira função (<code>string.match</code>), o valor da variável <code>resultado</code> será true ou false e a opção global
                            <code>g</code> não funcionou, sou seja, não descobri uma forma de olhar as demais ocorrência, apenas a primeira.</p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre><code class="language-javascript">var string = "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo.",
    pattern = /ca.a/,
    resultado;

// Executa nossa expressão
resultado = pattern.test(string);

if (resultado) {
    console.log("casou", resultado);
} else {
    console.log("não casou", resultado);
}</code></pre>
                        </div>

                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="exercicio">Exercício prático</h1>
                        </div>

                        <p>Dúvido muito que você conseguirá absorver o conteúdo desta matéria apenas lendo, então ponha a <strong>mão na massa</strong>. </p>

                        <p>Só assim você terá a garantida de que realmente incorporou os conceitos.</p>

                        <p>Execute o códigos dessa matéria em sua máquina e <strong>observe os resultado no console do Firebug.</strong></p>

                        <p>Para facilitar a sua vida, eu criei um Gist com os código fontes, assim você não precisará criar os arquivos.</p>

                        <p>Acesse o link <a href="https://gist.github.com/flaviomicheletti/cbb755999ceb4f2a6806" title="link-externo">https://gist.github.com/flaviomicheletti/cbb755999ceb4f2a6806</a>
                            e clique no botão "Download Gist", descompacte o arquivo e boa diversão.</p>
                    </div>
                    <?php include BASE_PATH . VIEWS_PATH . "/paginacao.php"; ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>