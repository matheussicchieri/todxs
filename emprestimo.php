<!DOCTYPE html>
<?php
require_once('class/emprestimo.php');

$emprestimo = new emprestimo();
$emprestimo_menu = $emprestimo->emprestimo_menu();
$emprestimo_selecionado = $emprestimo->emprestimo($_REQUEST['id']);

?>
<html>

    <head>
        <meta charset="utf-8">
        <title>Serasa Ecred</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Your page description here" />
        <meta name="author" content="" />

        <!-- css -->
        <link href="css/bootstrap.css" rel="stylesheet" />
        <link href="css/bootstrap-responsive.css" rel="stylesheet" />
        <link href="css/prettyPhoto.css" rel="stylesheet" />
        <link href="css/jquery-ui.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <!-- Theme skin -->
        <link id="t-colors" href="color/default.css" rel="stylesheet" />

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
        <link rel="shortcut icon" href="ico/favicon.png" />

    </head>

    <body>

        <div id="wrapper">
            <!-- start header -->
            <header>
                <div class="top">
                    <div class="container">
                        <div class="row">
                            <div class="span6">
                                <ul class="topmenu">
                                    <li><a href="#">Area Administrativa</a></li>
                                </ul>
                            </div>
                            <div class="span6">

                                <ul class="social-network">
                                    <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-circled icon-bglight icon-facebook"></i></a></li>
                                    <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-circled icon-bglight icon-twitter"></i></a></li>
                                    <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-circled icon-linkedin icon-bglight"></i></a></li>
                                    <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-circled icon-pinterest  icon-bglight"></i></a></li>
                                    <li><a href="#" data-placement="bottom" title="Google +"><i class="icon-circled icon-google-plus icon-bglight"></i></a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">


                    <div class="row nomargin">
                        <div class="span4">
                            <div class="logo">
                                <h1><a href="index.php"><i class="icon-tint__"><img src="ico/favicon.png"></i> Serasa Ecred</a></h1>
                            </div>
                        </div>
                        <div class="span8">
                            <div class="navbar navbar-static-top">
                                <div class="navigation">
                                    <nav>
                                        <ul class="nav topnav">
                                            <li>
                                                <a href="index.php">Home</a>
                                            </li>
                                            <li class="dropdown active">
                                                <a href="#">Empréstimos <i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <?php echo $emprestimo_menu; ?>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Cartão <i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#"> Cartão de crédito</a></li>
                                                    <li><a href="#">Cartão de crédito consignado</a></li>
                                                    <li><a href="#">Cartão pré-pago</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Como Funciona</a>
                                            </li>
                                            <li>
                                                <a href="#">Contato </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- end navigation -->
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- end header -->

            <section id="inner-headline">
                <div class="container">
                    <div class="row">
                        <div class="span4">
                            <div class="inner-heading">
                                <h2><?php echo $emprestimo_selecionado[1] ?></h2>
                            </div>
                        </div>
                        <div class="span8">
                            <ul class="breadcrumb">
                                <li><a href="index.php">Home</a> <i class="icon-angle-right"></i></li>
                                <li><a href="#">Pages</a> <i class="icon-angle-right"></i></li>
                                <li class="active"><?php echo $emprestimo_selecionado[1] ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section id="content">
                <div class="container">
                    <div class="row">

                        <div class="span6">
                            <?php echo $emprestimo_selecionado[2]; ?>
                        </div>

                        <div class="span6">
                            <p>
                                <label for="valor">De quanto você precisa?</label>
                                <input type="text" id="valor" readonly style="border:0; color:#f6931f; font-weight:bold;">
                            </p>
                            <div id="slider_valor"></div>
                            <p>
                                <label for="tempo">Em quantos meses quer pagar??</label>
                                <input type="text" id="tempo" readonly style="border:0; color:#f6931f; font-weight:bold;">
                            </p>
                            <div id="slider_tempo"></div>
                            <p>
                                <br />
                                <input type="text" id="mensal" disabled="" > <a href="#works" class="btn-get-started scrollto" onclick="confirmaSolicitacao()">Solicitar</a>
                            </p>
                            
                        </div>
                            
                    </div>

                    <!-- divider -->
                    <div class="row">
                        <div class="span12">
                            <div class="solidline"></div>
                        </div>
                    </div>
                    <!-- end divider -->



                </div>
            </section>


            <footer>
                <div class="container">
                    <div class="row">
                        <div class="span4">
                            <div class="widget">
                                <h5 class="widgetheading">O que você precisa?</h5>
                                <ul class="link-list">
                                    <li><a href="#">Consultar meu CPF</a></li>
                                    <li><a href="#">Pedir empréstimo online</a></li>
                                    <li><a href="#">Limpar meu nome</a></li>
                                    <li><a href="#">Consultar pontuação do Score</a></li>
                                    <li><a href="#">Negociar minhas dívidas</a></li>
                                    <li><a href="#">Monitorar meu CPF</a></li>
                                    <li><a href="#">Falar com a Serasa</a></li>
                                    <li><a href="#">Atualizar meus dados</a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="span4">
                            <div class="widget">
                                <h5 class="widgetheading">Todos os sites</h5>
                                <ul class="link-list">
                                    <li><a href="#">Serasa eCred</a></li>
                                    <li><a href="#">Serasa AntiFraude</a></li>
                                    <li><a href="#">Serasa Score</a></li>
                                    <li><a href="#">Serasa Limpa Nome</a></li>
                                    <li><a href="#">Serasa Cadastro Positivo</a></li>
                                    <li><a href="#">Serasa Ensina</a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="span4">
                            <div class="widget">
                                <h5 class="widgetheading">Atendimento</h5>
                                <ul class="link-list">
                                    <li><a href="#">Pontos de Atendimento</a></li>
                                    <li><a href="#">Telefones</a></li>
                                    <li><a href="#">Central de Ajuda</a></li>
                                </ul>

                            </div>
                        </div>

                    </div>
                </div>
                <div id="sub-footer">
                    <div class="container">
                        <div class="row">
                            <div class="span6">
                                <div class="copyright">
                                    <p><span>&copy; Serasa Inc. All right reserved</span></p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <a href="#" class="scrollup"><i class="icon-angle-up icon-rounded icon-bglight icon-2x"></i></a>

        <!-- javascript
          ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/toucheffects.js"></script>
        <script src="js/google-code-prettify/prettify.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/portfolio/jquery.quicksand.js"></script>
        <script src="js/portfolio/setting.js"></script>
        <script src="js/animate.js"></script>
        <script src="js/jquery-ui.min.js"></script>

        <!-- Template Custom JavaScript File -->
        <script src="js/custom.js"></script>
        <script>
            $(function () {
                $("#slider_valor").slider({
                    value: <?php echo $emprestimo_selecionado[4] ?>,
                    min: <?php echo $emprestimo_selecionado[4] ?>,
                    max: <?php echo $emprestimo_selecionado[5] ?>,
                    step: 100,
                    slide: function (event, ui) {
                        $("#valor").val( ui.value.toLocaleString("pt-BR", { style: "currency" , currency:"BRL"}));
                        calculaJuros();
                    }
                });
                $("#valor").val(  $("#slider_valor").slider("value").toLocaleString("pt-BR", { style: "currency" , currency:"BRL"}));
                
            });
            $(function () {
                $("#slider_tempo").slider({
                    value: <?php echo $emprestimo_selecionado[6] ?>,
                    min: <?php echo $emprestimo_selecionado[6] ?>,
                    max: <?php echo $emprestimo_selecionado[7] ?>,
                    step: 6,
                    slide: function (event, ui) {
                        $("#tempo").val(ui.value + " Meses ");
                        calculaJuros();
                        
                    }
                });
                $("#tempo").val($("#slider_tempo").slider("value") + " Meses ");
                
            });

            function calculaJuros() {

                //Captura dos valores dos inputs e declaração de variáveis
                var capital = $("#slider_valor").slider("value");
                var taxaJuros = <?php echo $emprestimo_selecionado[3] ?>;
                var tempoAplicacao = $("#slider_tempo").slider("value");

                //Vamos dividir a taxa de juros por 100
                var taxaJuros = taxaJuros / 100;

                //Com as variáveis criadas e definidas, tá na hora da gente definer o montante, usando as variáveis acima
                var montante = capital * Math.pow((1 + taxaJuros), tempoAplicacao);

                //Agora é mamão com açúcar! Basta definir o valor total, na var tot e o valor mensal na var men.
                var tot = montante.toString(); //Converte o total para string
                var men = tot / tempoAplicacao; //Quanto pago mensalmente?

                //Bora exibir isso em alguns inputs na página
                
                $('#mensal').val(tempoAplicacao + " X de " + men.toLocaleString("pt-BR", { style: "currency" , currency:"BRL"}));

            }
            
            function confirmaSolicitacao(){
                var result = confirm("Deseja solicitar o emprestimo de "+$('#mensal').val()+ "?");
                if(result){
                    alert("Muito Obrigado pela solicitação, em breve nossa equipe entrara em contato!")
                }
                    
            }

        </script>
    </body>

</html>      