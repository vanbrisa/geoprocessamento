<?php
$page = 'Topico01';
include('layout/header.php');
?>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

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

                        <br><!-- Sub Título -->
                            <p class="SubTitulo">Trabalhando com Sistemas de Referência de Coordenadas – SRC</p>
                            <hr>

                            <p>Sempre que carregamos uma fonte de dados, o QGIS procura por informações SRC utilizáveis, por exemplo, no arquivo .prj do shapefile. Se o QGIS não conseguir encontrar nenhuma informação utilizável, por padrão, ele pedirá que você especifique o CRS manualmente. Esta opção pode ser alterada em <strong>Configurações >> Opções >> CRS</strong> para sempre usar o SRC do projeto ou um SRC padrão.</p>
                            <p>O Seletor do Sistema de Referência de Coordenadas QGIS oferece um filtro que facilita a localização de um CRS. Ele pode filtrar por nome ou ID (por exemplo, o código EPSG). Basta começar a digitar e observar como a lista de possíveis SRC fica mais curta. Na verdade, existem duas listas separadas; a lista superior contém o SRC que usamos recentemente, enquanto a lista inferior é muito mais longa e contém todos os SRC disponíveis. Para o arquivo focos.shp, selecionamos SIRGAS 2000 / UTM zone 24S. Com o SRC correto, a camada de focos será exibida conforme mostrado na <strong>Figura 15</strong>.</p>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 03 - MODAL -->
                            <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 03:</strong> Abertura dos arquivos shapefiles.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Imagem 03 - End -->

                            <br><br><p>Se quisermos verificar o CRS de uma camada, podemos encontrar essas informações na seção Geral das propriedades da camada, que pode ser acessada em <strong>Camada >> Camada Propriedades</strong> ou clicando duas vezes no nome da camada na lista de camadas (mais rápido). Se você acha que o QGIS escolheu o SRC errado ou cometeu um erro ao especificar o SRC, você pode corrigir as configurações do CRS usando a opção Especificar SRC.</p>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura04.png" width="700" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 04 - MODAL -->
                            <div class="modal fade text-center" id="Imagem04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 04:</strong> Propriedade da camada com opção de configuração de SRC.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Imagem 04 - End -->

                            <br><br><p>Clicando no ícone <img src="imagens/icone02.png"> será aberto o seletor de sistema de coordenadas de referência (SRC). Conforme vimos anteriormente, o Seletor do Sistema de Referência de Coordenadas QGIS oferece um filtro que facilita a localização de um CRS. Ele pode filtrar por nome ou ID (por exemplo, o código EPSG). Basta começar a digitar e observar como a lista de possíveis SRC fica mais curta. Na verdade, existem duas listas separadas; a lista superior contém o SRC que usamos recentemente, enquanto a lista inferior é muito mais longa e contém todos os SRC disponíveis (<strong>Figura 17</strong>).</p>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura05.png" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura05.png" width="500" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 05 - MODAL -->
                            <div class="modal fade text-center" id="Imagem05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 05:</strong> Seletor do Sistema de Referência de Coordenadas QGIS</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Imagem 05 - End -->

                            <br><br><p>No Quadro abaixo são elencados os principais Sistemas de referência de Coordenadas utilizados no Brasil. Assim, para localizá-los, basta digitar o seu código no campo FILTRO, na tela mostrada na <strong>Figura 04</strong>.</p>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Tabela01.png" data-bs-toggle="modal" data-bs-target="#Tabela01">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Tabela01.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura">Fonte: <a href="https://spatialreference.org/" target="_blank">https://spatialreference.org/</a></p>
                            </div>

                            <!-- Tabela 01 - MODAL -->
                            <div class="modal fade text-center" id="Tabela01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Tabela01.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Quadro 01:</strong>  Códigos EPSG UTM mais utilizados no Brasil. Em negrito os SRC do Ceará. </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Tabela 01 - End -->

                            <br><br><!-- Saiba Mais -->
                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <p class="SaibaMaisTexto">Clique aqui e acesse o vídeo para acompanhar o procedimento de <strong>trabalho com sistemas de referência de coordenadas no QGIS</strong>.</p>
                            </div>

                            <br><br>
                </div>

                <br><br>
                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico01.3.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- FIM COL MD-10 -->


            <div class="col-md-1"></div>
        </div>
    </div>
</section>
<!--FIM CONTEUDO PARTE 03-->


    <!-- SCRIPT LIGHTBOX -->
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
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