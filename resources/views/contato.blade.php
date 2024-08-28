<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 50px;
            text-align: center;
        }
        .form-container {
            max-width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body class="bg-body-secondary">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/quemsomos">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="d-flex justify-content-center">

                    <form action="/contato" method="POST" style="margin-top: 20px;">
                        @csrf
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="motivo_contato" class="form-label">Motivo do Contato</label>
                            <textarea class="form-control" id="motivo_contato" name="motivo_contato" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="mensagem" class="form-label">Mensagem</label>
                            <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    
                        @if(isset($data))
                        <div class="mt-5">
                            <h2>Dados Recebidos</h2>
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Nome:</strong> {{ $data['nome'] }}</li>
                                <li class="list-group-item"><strong>Telefone:</strong> {{ $data['telefone'] }}</li>
                                <li class="list-group-item"><strong>Email:</strong> {{ $data['email'] }}</li>
                                <li class="list-group-item"><strong>Motivo do Contato:</strong> {{ $data['motivo_contato'] }}</li>
                                <li class="list-group-item"><strong>Mensagem:</strong> {{ $data['mensagem'] }}</li>
                            </ul>
                            </div>
@endif


</body>
</html>