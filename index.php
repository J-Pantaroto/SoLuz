<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soluz - Energia Sustentável</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-solar-panel"></i> SOLUZ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#benefits"><i class="fas fa-lightbulb"></i> Benefícios</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact"><i class="fas fa-envelope"></i> Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero d-flex align-items-center text-center">
        <div class="container">
            <h1 class="text-white display-4 fw-bold">Gere sua Própria Energia</h1>
            <p class="text-white lead">Economize na conta de luz desde o primeiro mês com energia solar.</p>
            <a href="#contact" class="btn btn-warning btn-lg mt-3">Solicite um Orçamento</a>
        </div>
    </header>

    <!-- Benefícios -->
    <section id="benefits" class="py-5">
        <div class="container text-center">
            <h2 class="fw-bold">Por que escolher energia solar?</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="benefit-card">
                        <i class="fas fa-sun fa-3x text-warning"></i>
                        <h4 class="mt-3">Energia Limpa</h4>
                        <p>100% renovável e sustentável.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="benefit-card">
                        <i class="fas fa-coins fa-3x text-primary"></i>
                        <h4 class="mt-3">Economia</h4>
                        <p>Reduza sua conta de luz e tenha retorno financeiro.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="benefit-card">
                        <i class="fas fa-leaf fa-3x text-success"></i>
                        <h4 class="mt-3">Sustentabilidade</h4>
                        <p>Ajude a preservar o meio ambiente.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Comparação Antes e Depois -->
    <section class="text-center py-5 bg-light">
        <h2 class="fw-bold">Veja a Diferença</h2>
        <div class="row mt-4">
            <div class="col-md-6">
                <h4>Antes</h4>
                <img src="img/conta-alta.jpg" class="img-fluid shadow rounded" alt="Conta de luz alta">
            </div>
            <div class="col-md-6">
                <h4>Depois</h4>
                <img src="img/painel-solar.jpg" class="img-fluid shadow rounded" alt="Casa com painel solar">
            </div>
        </div>
    </section>

    <!-- Formulário de Contato -->
    <section id="contact" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center fw-bold">Entre em Contato</h2>
            <p class="text-center text-muted">Solicite um orçamento sem compromisso.</p>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="php/contato.php" method="POST">
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Seu Nome" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Seu Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="tel" name="phone" class="form-control" placeholder="Seu Telefone" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 SOLUZ - Todos os direitos reservados.</p>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
