<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIFA World Cup - Gestão de Dados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        :root {
            --fifa-primary: #0f1d3a;  /* Azul Escuro */
            --fifa-secondary: #c9923e; /* Dourado da Taça */
            --fifa-accent: #198754; /* Verde Gramado */ 
        }

        body {
            background-color: #f4f6f9;
        }

        .bg-fifa {
            background-color: var(--fifa-primary);
        }

        .navbar-dark .navbar-nav .nav-link.active {
            color: var(--fifa-secondary) !important;
            border-bottom: 2px solid var(--fifa-secondary);
        }

        .card-fifa-header {
            background-color: var(--fifa-primary);
            color: #ffffff;
            border-bottom: 3px solid var(--fifa-secondary);
        }

        .badge-gold {
            background-color: var(--fifa-secondary);
            color: var(--fifa-primary);
            font-weight: bold;
        }
    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-fifa shadow mb-4">
        <div class="container">
            <a href="?url=dashboard/index" class="navbar-brand d-flex aling-items-center">
                <span class="fs-4 fw-bold text-white">FIFA <span style="color:var(--fifa-secondary)">2026</span></span>
                <span class="badge ms-2 bg-success">TMS</span>
            </a>

            <button class="navbar-expand" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link px-3" href="?url=dashboard/index">Painel Geral</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="?url=selecao/index">Seleções</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="?url=jogador/index">Jogadores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="?url=estadio/index">Estadios</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">