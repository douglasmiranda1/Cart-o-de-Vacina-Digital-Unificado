<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<!--INICIO DAS CONFIGURAÇÕES DA PAGINA-->

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <!--TITULO DA PÁGINA-->
  <title>Alterar Informação do Cartão</title>
  <!--Icone da aba-->
  <link rel="icon" type="image/x-icon" href="../../favicon.ico" />
  <!-- Fonte Rawline-->
  <link rel="stylesheet" href="https://cdn.dsgovserprodesign.estaleiro.serpro.gov.br/design-system/fonts/rawline/css/rawline.css" />
  <!-- Fonte Raleway-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900&amp;display=swap" />
  <!-- Design System de Governo-->
  <link rel="stylesheet" href="../../dsgov.css" />
  <!-- Fontawesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
</head>
<!--FIM DAS CONFIGURAÇÕES DA PAGINA-->

<body>
  <div class="template-base">
    <!--INICIO DA AREA COMPLETA DO HEADER-->
    <header class="br-header" id="header" data-sticky="data-sticky">
      <div class="container-lg">
        <div class="header-top">
          <!--ICONE DO GOVERNO E NOME NA BARRA SUPERIOR DA TELA-->
          <div class="header-logo">
            <img src="../../../../imagens/1280px-Gov.br_logo.svg.png" alt="logo" />
            <div class="header-sign">Governo Federal</div>
          </div>
          <!--FIM ICONE DO GOVERNO E NOME NA BARRA SUPERIOR DA TELA-->
          <!--INICIO DA PARTE DO HEADER-->
          <div class="header-actions">
            <!--INICIO LINKS BARRA DE MENU SUPERIOR-->
            <div class="header-links dropdown">
              <button class="br-button circle small" type="button" data-toggle="dropdown" aria-label="Abrir Acesso Rápido">
                <i class="fas fa-ellipsis-v" aria-hidden="true"></i>
              </button>
              <div class="br-list">
                <div class="header">
                  <div class="title">Acesso Rápido</div>
                </div>
                <a class="br-item" href="https://www.gov.br/pt-br/orgaos-do-governo">Órgãos do Governo</a>
                <a class="br-item" href="http://www.acessoainformacao.gov.br/">Acesso à Informação</a>
                <a class="br-item" href="http://www4.planalto.gov.br/legislacao">Legislação</a>
                <a class="br-item" href="https://www.gov.br/governodigital/pt-br/acessibilidade-digital">Acessibilidade</a>
              </div>
            </div>
            <!--FIM LINKS BARRA DE MENU SUPERIOR-->
            <span class="br-divider vertical mx-half mx-sm-1"></span>
            <!--INICIO MENU DROPDOWN PARA ICONES-->
            <div class="header-functions dropdown">
              <button class="br-button circle small" type="button" data-toggle="dropdown" aria-label="Abrir Funcionalidades do Sistema">
                <i class="fas fa-th" aria-hidden="true"></i>
              </button>
              <!-- INICIO MENU DE ICONES-->
              <div class="br-list">
                <div class="header">
                  <div class="title">Funcionalidades do Sistema</div>
                </div>
                <div class="align-items-center br-item">
                  <button class="br-button circle small" type="button">
                    <i class="fas fa-adjust" aria-hidden="true"></i>
                    <span class="text">Alterar Cor do Fundo</span>
                  </button>
                </div>
              </div>
              <!-- FIM MENU DE ICONES-->
            </div>
            <!--FIM MENU DROPDOWN PARA ICONES-->
            <span class="br-divider vertical mx-half mx-sm-1"></span>
            <!--INICIO BARRA DE PESQUISA SUPERIOR-->
            <div class="header-search-trigger">
              <button class="br-button circle" type="button" aria-label="Abrir Busca" data-toggle="search" data-target=".header-search">
                <i class="fas fa-search" aria-hidden="true"></i>
              </button>
            </div>
            <!--FIM BARRA DE PESQUISA SUPERIOR-->
            <!--INICIO AREA DE LOGIN USUARIO-->
            <div class="header-login">
              <div class="header-avatar">
                <div class="avatar dropdown"><span class="br-avatar" title="<?php echo $_SESSION["usuarioLogado"]; ?>"><span class="image"><img src="../../../../Imagens/logoProfissionalDaSaude.jpg" alt="Avatar" /></span></span>
                  <button class="br-button circle small" type="button" aria-label="Abrir Menu de usuário" data-toggle="dropdown"><i class="fas fa-angle-down" aria-hidden="true"></i>
                  </button>
                  <div class="br-notification show">
                    <div class="notification-header">
                      <div class="row">
                        <div class="col-10"><span class="text-bold"><?php echo $_SESSION["usuarioLogado"]; ?></span><br /><small><a><?php echo $_SESSION["especialidadeUsuarioLogado"]; ?></a></small></div>
                      </div>
                    </div>
                  </div>
                  <form name="consulta" method="post" action="..\..\..\..\Controller\ControladorLogin.php">
                    <input type="hidden" name="acao" value="sair">
                    <input type="submit" name="sair" class="br-button circle" value="Sair">
                  </form>
                </div>
              </div>
            </div>
            <!--FIM AREA DE LOGIN USUARIO-->
          </div>
          <!--FIM DA PARTE DO HEADER-->
        </div>
        <!--INICIO BARRA DE MENU LATERAL-->
        <div class="header-bottom">
          <div class="header-menu">
            <div class="header-menu-trigger">
              <div class="br-menu" id="main-navigation">
                <div class="menu-trigger">
                  <button class="br-button circle small" type="button" data-toggle="menu" aria-label="Abrir Menu Principal">
                    <i class="fas fa-bars" aria-hidden="true"></i>
                  </button>
                </div>
                <div class="menu-container">
                  <div class="row">
                    <div class="col-sm-4 col-lg-3">
                      <div class="menu-panel">
                        <div class="menu-header">
                          <div class="menu-close">
                            <button class="br-button circle" type="button" arial-label="Fechar o menu" data-dismiss="menu">
                              <i class="fas fa-times" aria-hidden="true"></i>
                            </button>
                          </div>
                          <div class="menu-title"><img src="../../../../imagens/1280px-Gov.br_logo.svg.png" alt="Imagem ilustrativa" />
                          </div>
                        </div>
                        <nav class="menu-body">
                          <div class="menu-folder">
                            <a class="menu-item">
                              <span class="content">
                                <link>Assuntos</link>
                              </span>
                            </a>
                            <ul>
                              <li><a class="menu-item"><span class="content">Atenção Primária</span></a>
                                <ul>
                                  <li><a class="menu-item" href="https://www.gov.br/saude/pt-br/assuntos/atencao-primaria/saude-da-familia"><span class="content">Saúde Da Familia</span></a></li>
                                  <li><a class="menu-item" href="https://www.gov.br/saude/pt-br/assuntos/atencao-primaria/ciclos-da-vida"><span class="content">Ciclos Da Vida</span></a></li>
                                </ul>
                              </li>
                              <li><a class="menu-item"><span class="content">Assistência Farmacêutica</span></a>
                                <ul>
                                  <li><a class="menu-item" href="https://www.gov.br/saude/pt-br/assuntos/assistencia-farmaceutica-no-sus/base-nacional-de-dados-de-acoes-e-servicos-da-assistencia-farmaceutica-do-sistema-unico-de-saude-bnafar"><span class="content">Base Nacional de Dados de Ações e Serviços da Assistência
                                        Farmacêutica do Sistema Único de Saúde - BNAFAR</span></a></li>
                                </ul>
                              </li>
                              <li><a class="menu-item"><span class="content">Boletins Epidemiológicos</span></a>
                                <ul>
                                  <li><a class="menu-item" href="https://www.gov.br/saude/pt-br/assuntos/boletins-epidemiologicos/numeros-anteriores"><span class="content">Números Anteriores</span></a></li>
                                  <li><a class="menu-item" href="https://www.gov.br/saude/pt-br/assuntos/boletins-epidemiologicos/numeros-recentes"><span class="content">Números Recentes</span></a></li>
                                  <li><a class="menu-item" href="https://www.gov.br/saude/pt-br/assuntos/boletins-epidemiologicos/por-assunto"><span class="content">Por Assunto</span></a></li>
                                </ul>
                              </li>
                              <li><a class="menu-item" href="https://localizasus.saude.gov.br/"><span class="content">Localiza SUS</span></a></li>
                              <li><a class="menu-item" href="https://saudeindigena.saude.gov.br/corona"><span class="content">Saúde Indigena</span></a></li>
                            </ul>
                          </div>
                          <div class="menu-folder"><a class="menu-item"><span class="content">Coronavírus</span></a>
                            <ul>
                              <li><a class="menu-item"><span class="content">Vacinas</span></a>
                                <ul>
                                  <li><a class="menu-item" href="https://www.gov.br/saude/pt-br/coronavirus/vacinas/grupos-de-trabalho-gt"><span class="content">Grupo de Trabalho (GT)</span></a></li>
                                </ul>
                              </li>
                              <li><a class="menu-item" href="https://www.gov.br/saude/pt-br/coronavirus/entregas-de-vacinas-covid-19"><span class="content">Entrega de Vacinas Covid-19</span></a></li>
                              <li><a class="menu-item" href="https://www.gov.br/saude/pt-br/coronavirus/boletins-epidemiologicos"><span class="content">Boletins Epidemiológicos</span></a></li>
                            </ul>
                          </div>
                          <div class="menu-folder"><a class="menu-item">
                              <span class="content">Canal de Atendimento</span></a>
                            <ul>
                              <li><a class="menu-item" href="https://www.gov.br/saude/pt-br/canais-de-atendimento/ouvidoria-do-sus"><span class="content">Ouvidoria SUS</span></a></li>
                            </ul>
                          </div>
                          <div class="menu-folder">
                            <a class="menu-item">
                              <span class="content">Campanhas de Saúde</span>
                            </a>
                            <ul>
                              <li><a class="menu-item" href="https://www.gov.br/saude/pt-br/campanhas-da-saude/2019"><span class="content">2019</span></a></li>
                              <li><a class="menu-item" href="https://www.gov.br/saude/pt-br/campanhas-da-saude/2020"><span class="content">2020</span></a></li>
                              <li><a class="menu-item" href="https://www.gov.br/saude/pt-br/campanhas-da-saude/2021"><span class="content">2021</span></a></li>
                            </ul>
                          </div>
                        </nav>
                        <div class="menu-footer">
                          <div class="menu-logos">
                            <img src="../../../../imagens/govbrGY.png" alt="Imagem ilustrativa" />
                          </div>
                          <div class="menu-social">
                            <div class="text-semi-bold mb-1">Redes Sociais</div>
                            <div class="sharegroup">
                              <div class="share">
                                <a class="br-button circle" href="https://www.twitter.com/minsaude" aria-label="Compartilhar por Twitter">
                                  <i class="fab fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a class="br-button circle" href="https://www.youtube.com/minsaudebr" aria-label="Compartilhar por Youtube">
                                  <i class="fab fa-youtube" aria-hidden="true"></i>
                                </a>
                                <a class="br-button circle" href="https://www.facebook.com/minsaude" aria-label="Compartilhar por Facebook">
                                  <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                </a>
                                <a class="br-button circle" href="https://www.instagram.com/minsaude" aria-label="Compartilhar por Instagram">
                                  <i class="fab fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a class="br-button circle" href="https://soundcloud.com/ministeriodasaude" aria-label="Compartilhar por SoundCloud">
                                  <i class="fab fa-soundcloud" aria-hidden="true"></i>
                                </a>
                                <a class="br-button circle" href="https://www.flickr.com/ministeriodasaude" aria-label="Compartilhar por Flickr">
                                  <i class="fab fa-flickr" aria-hidden="true"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="menu-info">
                            <div class="text-center text-down-01">Todo o conteúdo deste site está publicado sob a
                              licença
                              <strong>Creative Commons Atribuição-SemDerivações 3.0</strong>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="menu-scrim" data-dismiss="menu" tabindex="0"></div>
                </div>
              </div>
            </div>
            <div class="header-info">
              <div class="header-title">Cartão de Vacinas Digital Unificado</div>
            </div>
          </div>
          <div class="header-search">
            <div class="br-input has-icon">
              <label for="main-searchbox">Texto da pesquisa</label>
              <input class="has-icon" id="main-searchbox" type="search" placeholder="O que você procura?" />
              <button class="br-button circle small" type="button" aria-label="Pesquisar">
                <i class="fas fa-search" aria-hidden="true"></i>
              </button>
            </div>
            <button class="br-button circle search-close" type="button" aria-label="Fechar Busca" data-dismiss="search">
              <i class="fas fa-times" aria-hidden="true"></i>
            </button>
          </div>
        </div>
        <!--FIM DA BARRA DE MENU LATERAL-->
      </div>
    </header>
    <!--FIM DA AREA COMPLETA DO HEADER-->

    <!--INICIO AREA CENTRAL DA PAGINA (BODY)-->
    <main id="main">
      <div class="container-lg">
        <div class="row" id="container-grid">
          <!--INICIO MENU LATERAL CENTRO DA TELA-->
          <div class="col-sm-4 col-md-3" id="container-navigation">
            <div class="br-menu auxiliary">
              <div class="br-menu auxiliary">
                <div class="menu-trigger">
                  <button class="br-button primary block" type="button" data-toggle="menu">Menu Auxiliar<i class="fas fa-angle-up" aria-hidden="true"></i>
                  </button>
                </div>
                <div class="menu-container">
                  <div class="menu-panel">
                    <nav class="menu-body">
                      <div class="folder">
                        <ul>
                          <li><a class="menu-item active" href="ConsultarPaciente.php"><span class="content">Consultar Paciente</span></a></li>
                          <li><a class="menu-item active" href="CadastrarPaciente.php"><span class="content">Cadastrar Paciente</span></a></li>
                          <li><a class="menu-item active" href="CadastrarVacina.php"><span class="content">Cadastrar Vacina</span></a></li>
                          <li><a class="menu-item active" href="CadastrarFuncionario.php"><span class="content">Cadastrar Funcionário</span></a></li>
                          <li><a class="menu-item active" href="ConsultarPaciente.php"><span class="content">Consulta de Paciente</span></a></li>
                          <li><a class="menu-item " href="#"><span class="content">Alterar Dados do Paciente</span><i class="fas fa-angle-right"></i></a></li>
                          <li><a class="menu-item active" href="ResultadoConsultaPaciente.php"><span class="content">Voltar ao Cartão do Paciente</span></a></li>
                          <li><a class="menu-item active" href="Principal.php"><span class="content">Voltar a tela Principal Gerente</span></a></li>
                        </ul>
                      </div>
                    </nav>
                  </div>
                  <div class="menu-scrim" data-dismiss="menu" tabindex="0"></div>
                </div>
              </div>
            </div>
          </div>
          <!--FIM MENU LATERAL CENTRO DA TELA-->
          <form name="consulta" method="post" action="..\..\..\..\Controller\ControladorAlterarPaciente.php">
            <div class="col" id="container-content">
              <div class="main-content pl-3" id="main-content">
                <div class="br-card" id="card0">

                  <!--INICIO INSERIR DOSE-->
                  <div class="col-12 br-card" style="padding: 25px; padding-bottom: 10px;">
                    <div class="card-content">
                      <h3 class="text-sm-center">Alterar Dados Paciente</h3>
                    </div>
                    <!-- CAMPO DE TEXTO DOSE JÁ FORMATADO -->
                    <div class="row" style="padding: 10px; padding-bottom: 10px;">
                      <div class="col-sm-10">
                        <div class="br-input">
                          <label for="cpf-id1">Nome</label>
                          <input type="hidden" name="codPaciente" value="<?php echo $_SESSION["codPaciente"]; ?>">
                          <input id="cpf-id1" type="text" placeholder="Digite o nome" name="nome" value="<?php echo $_SESSION["nome"]; ?>" class="" style="width: 578px">
                        </div>
                      </div>
                    </div>
                    <!--FIM CAMPO DE TEXTO DOSE-->
                    <!--CAMPO DE TEXTO NOME DO APLICADOR JÁ FORMATADO-->
                    <div class="row" style="padding-left: 10px; padding-bottom: 10px;">
                      <div class="col-sm-10">
                        <div class="br-input">
                          <label for="cpf-id1">RG</label>
                          <input id="cpf-id1" oninput="mascaraRG(this)" type="text" placeholder="Digite o RG" name="rg" value="<?php echo $_SESSION["rg"]; ?>" class="" style="width: 578px">
                        </div>
                      </div>
                    </div>
                    <!--FIM CAMPO DE TEXTO DOSE-->
                    <!-- CAMPO DE TEXTO DOSE JÁ FORMATADO -->
                    <div class="row" style="padding-left: 10px; padding-bottom: 10px;">
                      <div class="col-sm-10">
                        <div class="br-input">
                          <label for="cpf-id1">Data de Nascimento</label>
                          <input id="cpf-id1" oninput="mascaraDATA(this)" type="text" name="dataNascimento" value="<?php echo $_SESSION["dataNascimento"]; ?>" placeholder="Digite somente números" class="" style="width: 578px">
                        </div>
                      </div>
                    </div>
                    <!--FIM CAMPO DE TEXTO DOSE-->
                    <!-- CAMPO DE TEXTO DOSE JÁ FORMATADO -->
                    <div class="row" style="padding-left: 10px; padding-bottom: 10px;">
                      <div class="col-sm-10">
                        <div class="br-input">
                          <label for="cpf-id1">Número SUS</label>
                          <input id="cpf-id1" oninput="mascaraSUS(this)" type="text" name="nSus" value="<?php echo $_SESSION["nSus"]; ?>" placeholder="Digite o numero do cartão do SUS" class="" style="width: 578px">
                        </div>
                      </div>
                    </div>
                    <!--FIM CAMPO DE TEXTO DOSE-->
                    <!--BOTÃO DE INSERIR-->
                    <input type="hidden" name="acao" value="AlterarPaciente">
                    <input class="br-button primary mt-3 mt-sm-0 ml-sm-3" style="margin-bottom: 15px;" type="submit" value="Alterar">
                    <!--FIM BOTÃO DE INSERIR-->
                  </div>
                  <!--FIM INSERIR DOSE-->
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </main>
    <!--FIM AREA CENTRAL DA PAGINA (BODY)-->

    <!--INICIO RODAPÉ DA PAGINA-->
    <footer class="br-footer" id="footer">
      <div class="container-lg">
        <div class="logo ">
          <img src="../../../../imagens/govbr.png" alt="Imagem">
        </div>
        <!--ASSUNTOS-->
        <div class="br-list horizontal" data-toggle="data-toggle" data-unique="data-unique">
          <div class="col-2">
            <a class="br-item header" href="javascript:void(0)">
              <div class="content text-down-01 text-bold text-uppercase">ASSUNTOS</div>
              <div class="support">
                <i class="fas fa-angle-down" aria-hidden="true"></i>
              </div>
            </a>
            <div class="br-list">
              <span class="br-divider d-md-none"></span>
              <a class="br-item" href="https://www.gov.br/saude/pt-br/assuntos/atencao-primaria">
                <div class="content">Atenção Primária</div>
              </a>
              <a class="br-item" href="https://www.gov.br/saude/pt-br/assuntos/assistencia-farmaceutica-no-sus">
                <div class="content">Assistência Farmacêutica</div>
              </a>
              <a class="br-item" href="https://www.gov.br/saude/pt-br/assuntos/boletins-epidemiologicos">
                <div class="content">Boletins Epidemiológicos</div>
              </a>
              <a class="br-item" href="https://localizasus.saude.gov.br/">
                <div class="content">Localiza SUS</div>
              </a>
              <a class="br-item" href="https://saudeindigena.saude.gov.br/corona">
                <div class="content">Saúde Indigena</div>
              </a>
              <span class="br-divider d-md-none"></span>
            </div>
          </div>
          <!--CORONAVÍRUS-->
          <div class="col-2">
            <a class="br-item header" href="javascript:void(0)">
              <div class="content text-down-01 text-bold text-uppercase">CORONAVÍRUS</div>
              <div class="support">
                <i class="fas fa-angle-down" aria-hidden="true"></i>
              </div>
            </a>
            <div class="br-list">
              <span class="br-divider d-md-none"></span>
              <a class="br-item" href="https://www.gov.br/saude/pt-br/coronavirus/vacinas">
                <div class="content">Vacinas</div>
              </a>
              <a class="br-item" href="https://www.gov.br/saude/pt-br/coronavirus/entregas-de-vacinas-covid-19">
                <div class="content">Entrega de Vacinas Covid-19</div>
              </a>
              <a class="br-item" href="https://www.gov.br/saude/pt-br/coronavirus/boletins-epidemiologicos">
                <div class="content">Boletins Epidemiológicos</div>
              </a>
              <span class="br-divider d-md-none"></span>
            </div>
          </div>
          <!--CANAIS DE ATENDIMENTO-->
          <div class="col-2"><a class="br-item header" href="javascript:void(0)">
              <div class="content text-down-01 text-bold text-uppercase">CANAL DE ATENDIMENTO</div>
              <div class="support">
                <i class="fas fa-angle-down" aria-hidden="true"></i>
              </div>
            </a>
            <div class="br-list">
              <span class="br-divider d-md-none"></span>
              <a class="br-item" href="https://www.gov.br/saude/pt-br/canais-de-atendimento/ouvidoria-do-sus">
                <div class="content">Ouvidoria SUS</div>
              </a>
              <span class="br-divider d-md-none"></span>
            </div>
          </div>
          <!--CAMPANHAS DE SAUDE-->
          <div class="col-2"><a class="br-item header" href="javascript:void(0)">
              <div class="content text-down-01 text-bold text-uppercase">CAMPANHAS DE SAÚDE</div>
              <div class="support">
                <i class="fas fa-angle-down" aria-hidden="true"></i>
              </div>
            </a>
            <div class="br-list">
              <span class="br-divider d-md-none"></span>
              <a class="br-item" href="https://www.gov.br/saude/pt-br/campanhas-da-saude/2019">
                <div class="content">2019</div>
              </a>
              <a class="br-item" href="https://www.gov.br/saude/pt-br/campanhas-da-saude/2020">
                <div class="content">2020</div>
              </a>
              <a class="br-item" href="https://www.gov.br/saude/pt-br/campanhas-da-saude/2021">
                <div class="content">2021</div>
              </a>
              <span class="br-divider d-md-none"></span>
            </div>
          </div>

        </div>
        <div class="d-none d-sm-block">
          <div class="row align-items-end justify-content-between py-5">
            <div class="col social-network">
              <p class="text-up-01 text-extra-bold text-uppercase">Redes Sociais</p>
              <div class="sharegroup">
                <div class="share">
                  <a class="br-button circle" href="https://www.twitter.com/minsaude" aria-label="Compartilhar por Twitter">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a class="br-button circle" href="https://www.youtube.com/minsaudebr" aria-label="Compartilhar por Youtube">
                    <i class="fab fa-youtube" aria-hidden="true"></i>
                  </a>
                  <a class="br-button circle" href="https://www.facebook.com/minsaude" aria-label="Compartilhar por Facebook">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                  </a>
                  <a class="br-button circle" href="https://www.instagram.com/minsaude" aria-label="Compartilhar por Instagram">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                  </a>
                  <a class="br-button circle" href="https://soundcloud.com/ministeriodasaude" aria-label="Compartilhar por SoundCloud">
                    <i class="fab fa-soundcloud" aria-hidden="true"></i>
                  </a>
                  <a class="br-button circle" href="https://www.flickr.com/ministeriodasaude" aria-label="Compartilhar por Flickr">
                    <i class="fab fa-flickr" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>

            <div class="col assigns text-right">
              <a href="http://www.acessoainformacao.gov.br/"><img class="ml-4" src="../../../../imagens/ZlptTHB4NzBvRWNVUm55TkNERWpXUTo6bGFpLnBuZw.png" alt="Imagem"> Acesso á
                informação</a>
              <a href="http://www.brasil.gov.br/"><img class="ml-4" src="../../../../imagens/logo-gov.png" alt="Imagem"></a>
            </div>
          </div>
        </div>
      </div>
      <span class="br-divider my-3"></span>
      <div class="container-lg">
        <div class="info">
          <div class="text-down-01 text-medium pb-3 text-center">Todo o conteúdo deste site está publicado sob a
            licença&nbsp;<strong>Creative Commons Atribuição-SemDerivações 3.0 Não Adaptada.</strong></div>
        </div>
      </div>
    </footer>
    <!--FIM DO RODAPÉ DA PAGINA-->

  </div>
  <!--INSERÇÃO DO JAVASCRIPT NA PAGINA-->
  <script src="../../dsgov.js"></script>
</body>

</html>