<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Fapeam</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    <link rel="stylesheet" href='public/css/home.css'>



    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">


    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>



</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">FAPEAM</a>
                <!-- <div class="d-flex"> -->
                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink1" role="button"
                                aria-expanded="false">
                                SISTEMAS
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink1">
                                <li><a class="dropdown-item" href="https://sig.fapeam.am.gov.br/" target="_blank">SIG
                                        Fapeam</a></li>
                                <li><a class="dropdown-item" href="http://www.sproweb.am.gov.br/" target="_blank">SPRO
                                        Web</a></li>
                                <li><a class="dropdown-item" href="https://cfpp.prodam.am.gov.br/index.php/"
                                        target="_blank">PRODAM - RH</a></li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-item dropdown-toggle" href="#" id="dropdownFapeam" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Sistemas FAPEAM
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownFapeam">
                                        <li><a class="dropdown-item" href="http://10.10.2.246/login"
                                                target="_blank">Agendaí</a></li>
                                        <li><a class="dropdown-item" href="http://10.10.3.245/login"
                                                target="_blank">Integra</a></li>
                                        <li><a class="dropdown-item" href="http://10.10.3.253/login"
                                                target="_blank">Monitora</a></li>
                                        <li><a class="dropdown-item" href="http://10.10.3.252/glpi/index.php?noAUTO=1"
                                                target="_blank">Chama GEINF</a></li>
                                        <li><a class="dropdown-item" href="http://172.16.1.33/sgc/"
                                                target="_blank">SGC</a></li>
                                        <li><a class="dropdown-item"
                                                href="https://sistemas.sefaz.am.gov.br/siged/mvc?logica=login.LoginLogica"
                                                target="_blank">SIGED</a></li>
                                        <li><a class="dropdown-item" href="http://172.16.1.33/sistrans/index.php/login"
                                                target="_blank">SISTrans</a></li>
                                        <li><a class="dropdown-item" href="http://172.16.1.33/siscv/"
                                                target="_blank">SISCV</a></li>
                                        <li><a class="dropdown-item" href="http://172.16.1.33/sigrh/"
                                                target="_blank">SIG RH</a></li>
                                        <li><a class="dropdown-item" href="http://172.16.1.33/arqfap/"
                                                target="_blank">Sistema de Arquivamento FAPEAM</a></li>
                                        <li><a class="dropdown-item" href="http://172.16.1.33/patrimonio_agilfap/"
                                                target="_blank">AgilFAP</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-item dropdown-toggle" href="#" id="dropdownSefaz" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Sistemas SEFAZ
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownSefaz">
                                        <li><a class="dropdown-item" href="https://www.e-compras.am.gov.br/publico/"
                                                target="_blank">SEFAZ e-compras</a></li>
                                        <li><a class="dropdown-item"
                                                href="http://sistemas.sefaz.am.gov.br/sgc-am/login.do"
                                                target="_blank">SEFAZ SGC</a></li>
                                        <li><a class="dropdown-item" href="https://www.sefaz.am.gov.br/"
                                                target="_blank">SEFAZ AFI</a></li>
                                        <li><a class="dropdown-item"
                                                href="https://sistemas.sefaz.am.gov.br/cca/login.do"
                                                target="_blank">SEFAZ CCA</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="https://sistemas.sefaz.am.gov.br/sigo/"
                                        target="_blank">SIGO</a></li>
                                <li><a class="dropdown-item" href="http://200.242.37.2/os2pdf/"
                                        target="_blank">Os2PDF</a></li>
                                <li><a class="dropdown-item" href="https://splam.sedecti.am.gov.br/splam/splam"
                                        target="_blank">SPLAM</a></li>
                                <li><a class="dropdown-item"
                                        href="https://www.fapeam.am.gov.br/wp-login.php?redirect_to=https%3A%2F%2Fwww.fapeam.am.gov.br%2Fwp-admin%2F&reauth=1"
                                        target="_blank">Portal de Administração</a></li>
                                <li><a class="dropdown-item" href="http://www.scdp.am.gov.br/" target="_blank">SCDP -
                                        Controle de Diárias e Passagens</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink2" role="button"
                                aria-expanded="false">
                                Central de links
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink2">
                                <li><a class="dropdown-item"
                                        href="https://login.microsoftonline.com/common/oauth2/authorize?client_id=00000002-0000-0ff1-ce00-000000000000&redirect_uri=https%3a%2f%2foutlook.office.com%2fowa%2f&resource=00000002-0000-0ff1-ce00-000000000000&response_mode=form_post&response_type=code+id_token&scope=openid&msafed=1&msaredir=1&client-request-id=081c786d-9e4f-5c91-4d2f-85804d7f8668&protectedtoken=true&claims=%7b%22id_token%22%3a%7b%22xms_cc%22%3a%7b%22values%22%3a%5b%22CP1%22%5d%7d%7d%7d&nonce=638811931497365094.23c16034-29d4-4295-925e-7776868ae5cd&state=Dcu7DoIwGEDhou_iVum9_QfioDEMuKCJhq23AWKDgQbj29vhO9upEEL7YldUpARpxY2hFDgVoLmSBMSRcU8V4QIzCAILBhIDkxFrrZVRxkbpQ1XeSz1_bX1as82xoYclhnGJPj_mxrY98e1NdT_YwqtfHYOlS5CG9J6Gu5wcI5t7Xj_ubP4&sso_reload=true"
                                        target="_blank">Portal Integra</a></li>
                                <li><a class="dropdown-item"
                                        href="https://autoatendimento.bb.com.br/apf-apj-acesso/?0=[&1=o&2=b&3=j&4=e&5=c&6=t&7=%20&8=O&9=b&10=j&11=e&12=c&13=t&14=]&v=2.61.0&t=1"
                                        target="_blank">Portal BB</a></li>
                                <li><a class="dropdown-item" href="https://www.sefaz.am.gov.br/"
                                        target="_blank">SEFAZ</a></li>
                                <li><a class="dropdown-item" href="https://www.sead.am.gov.br/" target="_blank">SEAD</a>
                                </li>
                                <li><a class="dropdown-item" href="https://imprensaoficial.am.gov.br/"
                                        target="_blank">Diário Oficial</a></li>
                                <li><a class="dropdown-item" href="http://www.scdp.am.gov.br/" target="_blank">SCPD</a>
                                </li>
                                <li><a class="dropdown-item" href="http://172.16.1.33/ifapeam/passfap.php"
                                        target="_blank">PASSFAP</a></li>
                                <li><a class="dropdown-item" href="https://www.enap.gov.br/pt/web/pt-br/a-distancia"
                                        target="_blank">Cursos ENAP</a></li>
                                <li><a class="dropdown-item" href="http://172.16.1.33/intranet/pages/contratos.php"
                                        target="_blank">Fiscalização de Contratos</a></li>
                                <li><a class="dropdown-item" href="http://172.16.1.33/cadlista/"
                                        target="_blank">Ajuri</a></li>
                            </ul>
                        </li>
                    </ul>


                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink3" role="button"
                                aria-expanded="false">
                                Política de Segurança da Informação e Comunicação
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink3">
                                <li><a class="dropdown-item" href="#">Resolução 079/2013</a></li>
                                <li><a class="dropdown-item" href="#">Resolução 008/2015</a></li>
                            </ul>
                        </li>
                    </ul>


                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/ramais" target="_blank"
                                id="navbarDarkDropdownMenuLink4" role="button" aria-expanded="false">
                                Relação de Ramais
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink4">
                                <!-- Você pode adicionar mais itens aqui, se necessário -->
                            </ul>
                        </li>
                    </ul>


                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink3" role="button"
                                aria-expanded="false">
                                Treinamentos
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink3">
                                <li><a class="dropdown-item" href="#">Capacitação</a></li>
                                <li><a class="dropdown-item" href="#">Treinamento</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <style>
        .dropdown:hover>.dropdown-menu {
            display: block;
        }
        </style>
        </div>
        </nav>
    </header>