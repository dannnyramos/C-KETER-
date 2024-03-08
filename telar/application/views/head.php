<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="gif">
    <meta name="generator" content="CI4">
    <title>Telar</title>
    <?php foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
    
    <!-- Favicons -->
    <script src="https://kit.fontawesome.com/dd4396edd6.js" crossorigin="anonymous"></script>



    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- <link href="<?=base_url('css/') ?>dashboard.css" rel="stylesheet"> -->
    <link rel="icon" href="<?= base_url('img/') ?>favicon.png" type="image/png" width="5px">

    <style>
        .panel-heading{
            background:transparent;
            font-size:1.5em;
            margin:20px;
            color:#13a2b8;
            border-left:4px solid #13a2b8;
        }

        .gc-grid-container ,.panel ,.panel-default ,.card{
            border:0px;
        }

        .gc-datagrid, .gc-container{
            border:0px;
            background:transparent;
        }


        th{
            height:20px;

        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }

            @media print {
                .noprint {
                    visibility: hidden;
                }

                .sidebar{
                    width:20px;
                }

                .col-print-1 {width:8%;  float:left;}
                .col-print-2 {width:16%; float:left;}
                .col-print-3 {width:25%; float:left;}
                .col-print-4 {width:33%; float:left;}
                .col-print-5 {width:42%; float:left;}
                .col-print-6 {width:50%; float:left;}
                .col-print-7 {width:58%; float:left;}
                .col-print-8 {width:66%; float:left;}
                .col-print-9 {width:75%; float:left;}
                .col-print-10{width:83%; float:left;}
                .col-print-11{width:92%; float:left;}
                .col-print-12{width:100%; float:left;}


                .table th {
                    background-color: #a3a3a3 !important;
                }
            }

        }
    </style>
</head>
<body>


<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark text-white noprint col-print-1">
    <a class="navbar-brand" href="#"><img src="<?=base_url('/uploader/image/logoketer.png')?>" height="20px" alt="Logo"></a>

    <div class="btn-group-vertical">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-users-cog"></i> Recursos Humanos 
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?=base_url('index.php/Personal') ?>"> <i class="fas fa-user-friends"></i> Personal</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?=base_url('index.php/Personal/horarios') ?>"><i class="fa-solid fa-business-time"></i> Horarios</a>
                </div>
            </li>
        </div>
    </div>
</nav>

<div class="container-fluid d-print-none">
    <div class="row d-print-none">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark text-white sidebar collapse hidden-print">
            <div class="sidebar-sticky pt-3 ">
                <ul class="nav  flex-column">

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Tejido</span>
                        <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?=base_url('index.php/Welcome') ?>">
                            <i class="fa-solid fa-house"></i>
                            Inicio
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?=base_url('index.php/Cliente') ?>">
                            <i class="fa-solid fa-handshake"></i>
                            Clientes
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?=base_url('index.php/Proveedor') ?>">
                           <i class="fa-solid fa-truck-field"></i>
                            Proveedores
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?=base_url('index.php/Proveedorinterno') ?>">
                            <i class="fa-solid fa-users"></i>
                            Proveedores internos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?=base_url('index.php/Proveedorexterno') ?>">
                            <i class="fa-solid fa-users"></i>
                            Proveedores externos
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?=base_url('index.php/Hilo') ?>">
                            <i class="fa-solid fa-circle-dot"></i>
                            Hilo
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?=base_url('index.php/Pedido') ?>">
                            <i class="fa-solid fa-file-pen"></i>
                            Pedidos
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?=base_url('index.php/Asignacion') ?>">
                            <i class="fa-solid fa-list-check"></i>
                            Asignación
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?=base_url('index.php/Partida') ?>">
                            <i class="fa-solid fa-sheet-plastic"></i>
                            Partida
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?=base_url('index.php/Tono') ?>">
                            <i class="fa-solid fa-palette"></i>
                            Tono
                        </a>
                    </li>
                    

                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?=base_url('index.php/Autorizaciontono') ?>">
                            <i class="fa-solid fa-circle-check"></i>
                            Autorización tonos
                        </a>
                    </li>
                    

                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?=base_url('index.php/Recepciontela') ?>">
                           <i class="fa-solid fa-calendar-check"></i>
                            Recepción de telas
                        </a>
                    </li> 

                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?=base_url('index.php/Lote') ?>">
                            <i class="fa-solid fa-warehouse"></i>
                            Lote
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?=base_url('index.php/Programa') ?>">
                            <i class="fa-solid fa-calendar-days"></i>
                            Programación teñido
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?=base_url('index.php/Maquina') ?>">                            
                            Maquina
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?=base_url('index.php/Rollo') ?>">
                            <i class="fa-solid fa-tape"></i>
                            Rollo
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?=base_url('index.php/Tela') ?>">
                            <i class="fa-solid fa-calendar-days"></i>
                            Tela
                        </a>
                    </li>

                     <li class="nav-item">
                        <a class="nav-link text-white" href="<?=base_url('index.php/Estatus') ?>">
                            <i class="fa-solid fa-bell"></i>
                            Estatus

                        </a>
                    </li>

                              
                </ul>
            </div>
        </nav>
  


