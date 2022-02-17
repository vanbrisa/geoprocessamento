<?php
$page = 'Topico01';
include('layout/header.php');
?>

<html>
<meta charset="utf-8">
<!-- PLUGIN DO FADE IN -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<body>


    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>

        <!--INÍCIO CONTEUDO PARTE 01-->
        <section id="pt01">
            <div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <!-- LINHA pt01 -->
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <!-- INICIO colunas 10 de 12-->


                            <h2 class="Titulo">Visualização e Definição do Estilo dos Dados</h2>
                            <hr>

                            <br>

                            <!-- Sub Título -->
                            <p class="SubTitulo">Carregando Arquivos Vetoriais</p>
                            <hr>

                            <p>Nesta seção, falaremos sobre o carregamento de dados vetoriais de formatos de arquivo SIG, como shapefiles, bem como de arquivos de texto. Os procedimentos para importação desses dados já foram abordados no módulo anterior, mas recapitularemos. Podemos carregar arquivos vetoriais indo para <strong>Camada >> Adicionar camada >> Adicionar Camada Vetorial</strong>. Podemos também usar o botão da barra de ferramentas <strong>Adicionar Camada Vetorial</strong>. Na caixa de diálogo <strong>Adicionar camada vetorial</strong>, que é mostrado na Figura 13, encontramos uma lista suspensa que nos permite especificar a codificação do arquivo de entrada. Esta opção é importante se estivermos lidando com arquivos que contêm caracteres especiais, como cedilhas, acentos gráficos ou letras de alfabetos diferentes dos latinos padrão. Mantenha a codificação UTF-8.</p>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 01:</strong> Tela de união de informações de tabela na tabela de atributos de um shapefile.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Imagem 01 - End -->

                            <br><p>O que mais nos interessa agora é o botão Fonte – Base(s) de Vetores <img src="imagens/icone01.png">, que abre a caixa de diálogo de abertura de arquivo. Observe a lista suspensa de filtros de tipo de arquivo no canto inferior direito da caixa de diálogo. Podemos abri-lo para ver uma lista de tipos de arquivos vetoriais suportados. Este filtro é útil para encontrar arquivos específicos mais rapidamente ocultando todos os arquivos de um tipo diferente, mas esteja ciente de que as configurações do filtro são armazenadas e serão aplicadas novamente na próxima vez que você abrir a caixa de diálogo de abertura de arquivo. Isso pode ser uma fonte de confusão se você tentar encontrar um arquivo diferente posteriormente e ele estiver oculto pelo filtro, portanto, lembre-se de verificar as configurações do filtro se tiver problemas para localizar um arquivo.</p>
                            <p>Podemos carregar mais de um arquivo de uma vez, selecionando vários arquivos de uma vez (mantendo pressionada a tecla Ctrl e clicando com o mouse nos arquivos. </p>

                            <ol>
                                <li class="wow fadeInRight" data-wow-delay="0.3s">Na pasta <strong>CURSO_QGIS >> Modulo2 >> Dados</strong>, primeiro, selecionamos centro_sul.shp e focos.shp nos shapefiles contidos na referida pasta;</li>
                                <li class="wow fadeInRight" data-wow-delay="0.6s">Em seguida, confirmamos nossa seleção clicando em Abrir e somos levados de volta à caixa de diálogo Adicionar camada vetorial;</li>
                                <li class="wow fadeInRight" data-wow-delay="0.9s">Depois de clicarmos em Abrir mais uma vez, os arquivos selecionados são carregados.</li>
                            </ol>

                            <p>Você notará que cada camada vetorial é exibida em uma cor aleatória, que provavelmente é diferente da cor que você vê na Figura 14. Não se preocupe com isso agora, pois lidaremos com estilos de camada posteriormente neste módulo.</p>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 02 - MODAL -->
                            <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 02:</strong> Abertura dos arquivos shapefiles.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Imagem 02 - End -->

                            <br><p>Mesmo sem usarmos nenhuma ferramenta de análise espacial, essas etapas simples de visualização de conjuntos de dados espaciais nos permitem encontrar, por exemplo, os focos de calor mais ao sul do estado do Ceará. </p>

                            <!-- Importante -->
                            <div class="ImportanteCaixa">
                                <p class="ImportanteTitulo"> Importante</p>
                                <p class="ImportanteTexto">Existem vários truques que tornam o carregamento de dados ainda mais rápido; por exemplo, você pode simplesmente arrastar e soltar arquivos a partir da pasta de arquivos do sistema operacional para o QGIS.
                                <br><br>Outra maneira de acessar rapidamente seus dados espaciais é usando o navegador de arquivos embutido do QGIS (<strong>Figura 04</strong>, item 01.4.1). Se você configurou o QGIS conforme mostrado no Módulo 01, você encontrará o navegador no lado esquerdo, logo abaixo da lista de camadas. Navegue até sua pasta de dados e você pode novamente arrastar e soltar arquivos do navegador para o mapa (veja a <strong>Figura 14</strong>).
                                <br><br>Além disso, você pode marcar uma pasta como favorita clicando nela com o botão direito e selecionando Adicionar como favorita. Desta forma, você pode acessar suas pastas de dados ainda mais rápido, pois elas são adicionadas na seção Favoritos logo no topo da lista do navegador.</p>
                            </div>

                            <br><p>Outra fonte popular de dados espaciais são os arquivos de texto delimitado (CSV), conforme já visto no item 01.4.3. O QGIS pode carregar arquivos CSV usando a opção <strong>Adicionar Camada de Texto Delimitado</strong> disponível através da entrada do menu indo para <strong>Camada >> Adicionar camada >> Adicionar Camada de Texto Delimitado</strong> ou o botão da barra de ferramentas correspondente. Os arquivos CSV vêm com todos os tipos de delimitadores. O plugin permite que você escolha entre os mais comuns (vírgula, tabulação e assim por diante), mas você também pode especificar qualquer outro delimitador de expressão simples ou regular.</p>

                            

                            

                            


                        

                        

                <br><br>
                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="Topico01.2.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- FIM COL MD-10 -->
        
        <!--FIM CONTEUDO PARTE 03-->


        <!-- SCRIPT LIGHTBOX -->
        <script>

        </script>

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

    <!-- BOTÃO BACK TO TOP -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

</body>

</html>