<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{asset('css/home.css')}}>
    <title>Max Ribeiro - Desenvolvedor Web</title>
    <meta name="description" content="Transformando Ideias em Experiências Digitais - Desenvolvedor Web Especializado em Criação e Desenvolvimento de Sites Impactantes e Funcionais para Potencializar sua Presença Online.">
    <link rel="icon" type="image/x-svg" href={{asset('img/code-solid.svg')}}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    {{-- Open Graph --}}
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Max Ribeiro - Criação de Sites e Desenvolvimento Web" />
    <meta property="og:url" content="https://www.maxribeiro.tech" />
    <meta property="og:image" content={{asset('img/code-solid.svg')}} />
</head>
<body>
    <nav class="glass-menu">
        <ul>
            <li><a class="current" href="#about" title="inicio">SOBRE</a></li><span class="separator">|</span>
            <li><a class="" href="#projects" title="projetos">PROJETOS</a></li>
            {{-- <li><a class="" href="#contact" title="contatos"><i class="fa-solid fa-message"></i></a></li> --}}
        </ul>
    </nav>
    <section class="section" id="about">
        <div class="container">
            <div>
                <h1>Olá, eu sou o Max!</h1>
                <p>Sou um Desenvolvedor Fullstack com foco em tecnologias web como
                    <span class="language-icon"><i class="fa-brands fa-php"></i>PHP</span>,
                    <span class="language-icon"><i class="fa-brands fa-laravel"></i>Laravel</span>,
                    <span class="language-icon"><i class="fa-brands fa-vuejs"></i>Vue.js</span> e
                    <span class="language-icon"><i class="fa-solid fa-database"></i>MySQL</span>.
                </p>
                <p>Tenho paixão pelo desafio de solucionar problemas e conceber soluções inovadoras.
                Atualmente, trabalho em uma empresa que atua nos setores de Agronegócios, Construção Civil e Apontamento de Serviços Externos.
                Meu trabalho consiste em criar e aperfeiçoar sistemas que aprimoram a gestão e a visibilidade das operações de campo.
                </p>
                <ul class="social-links">
                    <li><a href="https://linkedin.com/in/max-ribeiro" target="_blank"><i class="social-icon fab fa-linkedin"></i></a></li>
                    <li><a href="https://github.com/max-ribeiro" target="_blank"><i class="social-icon fab fa-github"></i></a></li>
                    <li><a href="mailto:devmaxribeiro@gmail.com" target="_blank"><i class="social-icon far fa-envelope"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section" id="projects">
        <h2>PROJETOS</h2>
        <p class="projects__description">
            Aqui você vai encontrar alguns de meus projetos pessoais e de clientes.
        </p>

        <div class="divider"><hr/></div>
        <div class="container projects__content">
            <div class="row">
                <div class="col-md-6">
                    <img src={{asset('img/site1.webp')}} class="img-fluid rounded-start float-end" alt="...">
                </div>
                <div class="col-md-6 card__text">
                    <h4>Marks Tattoo</h4><br/>
                    <p>Marks Tattoo é um especialista no mundo da tatuagem.<p>
                    <p>Landing page criada para ampliar sua presença online e exibir seu portfólio de trabalhos.</p>
                    <p><a href="https://markstattoo.ink" target="_blank"><button class="btn btn-warning mt-md-3"><i class="fa-solid fa-eye"></i> Acessar Site</button></a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="section" id="contact">
        <div class="container">
            <h2>Entre em contato!</h2>
            <form action="/send" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" label required>
                </div>
                <div class="form-group">
                    <label for="message">Mensagem</label>
                    <textarea class="form-control" name="message" id="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Enviar</button>
            </form>
        </div>
    </section>
    <script src={{asset('js/main.js')}} type="text/javascript"></script>
    <script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
