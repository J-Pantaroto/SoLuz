<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soluz - Energia Sustentável</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

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

    <header class="hero d-flex align-items-center text-center">
        <div class="container">
            <h1 class="text-white display-4 fw-bold" data-aos="fade-down">Gere sua Própria Energia</h1>
            <p class="text-white lead" data-up="fade-up">Economize na conta de luz desde o primeiro mês com energia solar.</p>
            <a href="#contact" class="btn btn-warning btn-lg mt-3" data-aos="zoom-in">Solicite um Orçamento</a>
        </div>
    </header>

    <section id="benefits" class="py-5">
        <div class="container text-center">
            <h2 class="fw-bold" data-aos="fade-up">Por que escolher energia solar?</h2>
            <div class="row mt-4">
                <div class="col-md-4" data-aos="fade-right">
                    <div class="benefit-card">
                        <i class="fas fa-sun fa-3x text-warning"></i>
                        <h4 class="mt-3">Energia Limpa</h4>
                        <p>100% renovável e sustentável.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up">
                    <div class="benefit-card">
                        <i class="fas fa-coins fa-3x text-primary"></i>
                        <h4 class="mt-3">Economia</h4>
                        <p>Reduza sua conta de luz e tenha retorno financeiro.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-left">
                    <div class="benefit-card">
                        <i class="fas fa-leaf fa-3x text-success"></i>
                        <h4 class="mt-3">Sustentabilidade</h4>
                        <p>Ajude a preservar o meio ambiente.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-center py-5 bg-light">
        <h2 class="fw-bold">Veja a Diferença</h2>
        <div class="row mt-4">
            <div class="col-md-6">
                <h4 data-aos="fade-right">Antes</h4>
                <img data-aos="fade-right" src="img/conta-alta.jpg" class="antes-depois img-fluid shadow rounded" alt="Conta de luz alta">
            </div>
            <div class="col-md-6">
                <h4 data-aos="fade-left">Depois</h4>
                <img data-aos="fade-left" src="img/painel-solar.jpg" class="antes-depois img-fluid shadow rounded" alt="Casa com painel solar">
            </div>
        </div>
    </section>

    <section id="about" class="py-5">
        <div class="container text-center">
            <h2 class="fw-bold" data-aos="fade-up">Quem Somos</h2>
            <p class="text-muted" data-aos="fade-up">
                A <strong>SOLUZ</strong> é uma empresa especializada em soluções de energia sustentável.
                Nosso compromisso é oferecer sistemas de energia solar acessíveis, eficientes e ecologicamente corretos
                para residências e empresas.
            </p>
            <div class="row mt-4">
                <div class="col-md-6" data-aos="fade-right">
                    <img src="img/empresa.jpg" class="img-fluid rounded shadow" alt="Nossa Empresa">
                </div>
                <div class="col-md-6 d-flex align-items-center" data-aos="fade-left">
                    <p class="text-muted">
                        Nosso objetivo é ajudar clientes a reduzir seus custos com energia elétrica e
                        contribuir para um planeta mais sustentável. Com profissionais altamente qualificados,
                        garantimos segurança e qualidade na instalação de sistemas solares.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center fw-bold" data-aos="fade-up">Entre em Contato</h2>
            <p class="text-center text-muted" data-aos="fade-up">
                Envie-nos uma mensagem pelo WhatsApp!
            </p>

            <div data-aos="fade-up" class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <!-- Botão do WhatsApp -->
                    <button id="whatsapp-btn" class="btn btn-success w-100 d-flex align-items-center justify-content-center mb-3">
                        <i class="fab fa-whatsapp fa-lg me-2"></i> Enviar Mensagem pelo WhatsApp
                    </button>

                    <!-- Formulário para E-mail -->
<!--                     <form id="email-form" action="php/contato.php" method="POST">
                        <div class="mb-3">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Seu Nome" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Seu Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Seu Telefone" required>
                        </div>
                        <div class="mb-3">
                            <textarea id="message" name="message" class="form-control" rows="4" placeholder="Envie suas dúvidas" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 d-flex align-items-center justify-content-center">
                            <i class="fas fa-envelope fa-lg me-2"></i> Solicitar Contato por E-mail
                        </button>
                    </form> -->
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 SOLUZ - Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script src="js/script.js"></script>
</body>

</html>