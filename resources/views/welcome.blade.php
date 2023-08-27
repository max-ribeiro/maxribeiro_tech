<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{asset('css/home.css')}}>
    <title>Max Ribeiro - Criação de Sites e Desenvolvimento Web</title>
    <meta name="description" content="Transformando Ideias em Experiências Digitais - Desenvolvedor Web Especializado em Criação e Desenvolvimento de Sites Impactantes e Funcionais para Potencializar sua Presença Online.">
    <link rel="icon" type="image/x-svg" href={{asset('img/code-solid.svg')}}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    {{-- Open Graph --}}
    <meta property="og:title" content="Max Ribeiro - Criação de Sites e Desenvolvimento Web" />
    <meta property="og:url" content="https://www.maxribeiro.tech" />
    <meta property="og:image" content={{asset('img/code-solid.svg')}} />
</head>
<body>
    <nav class="glass-menu">
        <ul>
            <li><a class="current" href="#about" title="inicio"><i class="fa-solid fa-house"></i></a></li>
            <li><a class="" href="#projects" title="projetos"><i class="fa-solid fa-palette"></i></a></li>
            <li><a class="" href="#contact" title="contatos"><i class="fa-solid fa-message"></i></a></li>
        </ul>
    </nav>
    <section class="section" id="about">
        <div class="container">
            <div>
                <h1>Max Ribeiro</h1>
                <h2 class="text-black-50 mb-md-3">Desenvolvimento Web</h2>
                <a href="#contact" title="contatos">
                    <button class="btn btn-primary">
                        Entrar em Contato <i class="fa-solid fa-message"></i>
                    </button>
                </a>
            </div>
        </div>
    </section>
    <section class="section" id="projects">
        <h2>Ultimos Projetos</h2>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active d-flex justify-content-center align-items-center">
                    <img class="d-block img-fluid" src={{asset('img/site1.svg')}} alt="First slide">
                    {{-- <div class="carousel-caption d-none d-md-block">
                        <a href="https://markstattoo.ink" target="_blank"><i class="fa-solid fa-eye"></i> Acessar Site</a>
                    </div> --}}
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <a href="https://markstattoo.ink" target="_blank"><button class="btn btn-warning mt-md-3"><i class="fa-solid fa-eye"></i> Acessar Site</button></a>
    </section>
    <section class="section" id="contact">
        <h2>Entre em contato</h2>
        <ul class="social-links">
            <li><a href="https://linkedin.com/in/max-ribeiro" target="_blank"><i class="social-icon fab fa-linkedin"></i></a></li>
            <li><a href="https://github.com/max-ribeiro" target="_blank"><i class="social-icon fab fa-github"></i></a></li>
            <li><a href="mailto:devmaxribeiro@gmail.com" target="_blank"><i class="social-icon far fa-envelope"></i></a></li>
        </ul>
    </section>
    <script src={{asset('js/main.js')}} type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
