<?php
    include 'init.php';
    include 'dados.php';

    $action = $_GET["action"];
?>

<? 
    if(isset($action) && $action == "print") {        
?>

        <!DOCTYPE html>

        <html>
        <head>
            <? include_once 'bundles.php'; ?>

            <script type="text/javascript">
                $(function() {
                    $('body').css({ 'overflow-y': 'auto' });
                });
            </script>
        </head>
        <body>
<?
    } 
?>

<h1 class="curriculo-data-nome"> <?= $dados->nome ?> </h1>
<h3 class="sub-section center-align"> <?= $dados->subtitulo ?> </h3>

<section id="dados-pessoais" class="curriculo-data-sessao">
    <header class="curriculo-data-titulo-sessao">
        <i class="fa fa-user-circle"></i> <?= $titulos['dados-pessoais'] ?>
    </header>

    <p> 
        <?= $dados->nacionalidade ?>, <?= $dados->estadoCivil ?>, <?= $dados->idade ?> <?= $titulos['anos'] ?> <br>
        <?= $dados->endereco ?> <br>
        <?= $dados->bairro ?> - <?= $dados->cidade ?> - <?= $dados->uf ?>, <?= $dados->pais ?> <br>

        <br>

        <i class="fa fa-phone-square" style="color:green"></i> &nbsp; <?= $titulos['telefones'] ?> : 

        <? 
            for($i = 0; $i < count($dados->telefones); $i++) {
                if($i < count($dados->telefones) - 1) {
        ?>
                    <?= $dados->telefones[$i] ?> / 

        <?
              } else {
        ?>
                    <?= $dados->telefones[$i] ?> 
        <?
              }
        
            }
        ?> <br>

        <i class="fa fa-envelope"></i> &nbsp; E-mail: <?= $dados->email ?> <br>
        <i class="fa fa-linkedin-square" style="color:blue;"></i> &nbsp; LinkedIn: <a id="linkedin" href="<?= $dados->linkedIn ?>" target="_blank"> <?= $titulos['linkedin'] ?> </a> <br>
        
        <span id="site"> 
            <i class="fa fa-link"></i> &nbsp; Site: <a id="site" href="<?= $_GLOBAL_ROOT_URL ?>" target="_blank"> <?= $_GLOBAL_ROOT_URL ?> </a> 
        </span>
    </p>
</section>

<section id="resumo-profissional" class="curriculo-data-sessao">
    <header class="curriculo-data-titulo-sessao">
        <i class="fa fa-file-text"></i> <?= $titulos['resumo-profissional'] ?>
    </header>

    <p>
        <?= $dados->resumoProfissional ?>
    </p>
</section>

<section id="competencias" class="curriculo-data-sessao">
    <header class="curriculo-data-titulo-sessao">
        <i class="fa fa-address-book"></i> <?= $titulos['competencias'] ?>
    </header>
     
    <?  
        foreach($dados->competencias as $comp) {                
    ?>  
                
            <div class="curriculo-data-competencia"> 
                <?= $comp ?> 
            </div>            
    <?
        }
    ?>
</section>

<div class="break-page"></div>

<section id="experiencia-profissional" class="curriculo-data-sessao">
    <header class="curriculo-data-titulo-sessao">
        <i class="fa fa-address-card"></i> <?= $titulos['experiencia-profissional'] ?>        
    </header>

    <?
        foreach($dados->experienciaProfissional as $exp) {
    ?>
            <div class="curriculo-data-exp-prof">
                <div class="curriculo-data-exp-prof-endorse">
                    <? if (isset($exp->imagemEmpresa)) { ?>
                        <img src="<?= $exp->imagemEmpresa ?>" style="width:50px;" />
                    <? } else { ?>
                        <i class="fa fa-wrench"></i>  
                    <? }?>
                </div>

                <div class="curriculo-data-exp-prof-content">
                    <div class="curriculo-data-exp-prof-header">
                        <?= $exp->empresa ?> &nbsp;

                        <? if(isset($exp->siteEmpresa)) { ?>
                            <a href="<?= $exp->siteEmpresa ?>" target="_blank"> <?= $titulos['site-empresa'] ?> </a>
                        <? } ?>

                        <div class="curriculo-data-exp-prof-sub-header sub-section">
                            <p>
                                <i class="fa fa-id-badge"></i>   &nbsp; <?= $exp->cargo ?> <br>
                                <i class="fa fa-map-marker"></i> &nbsp; <?= $exp->cidade ?> <br>
                                <i class="fa fa-calendar"></i>   &nbsp; <?= $exp->anoInicio ?> - <?= $exp->anoFim ?>
                            </p>
                        </div>
                    </div>

                    <br>

                    <p>
                        <b> <?= $titulos['principais-atividades'] ?> </b> <br><br> 
                        <?= $exp->principaisAtividades ?> 
                    </p>

                    <br>
                </div>
            </div>
    <?
        }
    ?>
</section>

<section id="qualificacoes" class="curriculo-data-sessao">
    <header class="curriculo-data-titulo-sessao">
        <i class="fa fa-university"></i> <?= $titulos['qualificacoes'] ?>
    </header>

    <? foreach($dados->qualificacaoProfissional as $qualif) { ?>
        <ul>
            <li>
                <?= $qualif->nome ?> <br>
                <span class="sub-section"> <i class="fa fa-hourglass-o"></i> <?= $titulos['carga-horaria'] . ' ' . $qualif->cargaHoraria . ' ' . $titulos['horas'] ?> </span> <br>
                <span class="sub-section"> <i class="fa fa-building-o"></i> <?= $qualif->local ?> </span> <br>
            </li>
        </ul>
    <? } ?>
</section>

<br>
<br>

<?
    $dados = null;
    array_splice($titulos, 0, count($titulos));    
?>

<?
    if(isset($action) && $action == 'print') {
?>
        </body>
        </html>        
<?
    }
?>