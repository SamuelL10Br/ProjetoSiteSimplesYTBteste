<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barra de Navegação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <div class="menu-container">
            <div class="menu-icon" id="menuToggle"></div>
            <div class="menu-text">Menu</div>
        </div>
        
        <div class="logo-container">
            <img src="../barra_de_navegacao/logo/marca.png" alt="Logo" class="logo">
            <span class="navbar-title">Site YTB TESTE</span>
        </div>
    </div>

    <div class="menu-content" id="menuContent">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>

    <div class="carousel-container">
        <div class="carousel-slide">
            <!-- Slide 1 -->
            <div class="carousel-item" data-video="https://www.youtube.com/watch?v=Va-TVZTd1Lk&pp=ygUKYWJjIGxldHJhcw%3D%3D">
                <img src="../barra_de_rolagem/1.png" alt="Imagem 1">
                <div class="carousel-text">
                    <h2>Letras Do Alfabeto</h2>
                    <p>Aprenda fazer o abcdeffg nesse video.</p>
                    <button class="cta-button" onclick="window.open('https://www.youtube.com/watch?v=Va-TVZTd1Lk&pp=ygUKYWJjIGxldHJhcw%3D%3D')">Assista ao Vídeo</button>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item" data-video="https://www.youtube.com/watch?v=v07H75lWdYw&pp=ygUOdmlkZW8gZGUgY2Fycm8%3D">
                <img src="../barra_de_rolagem/2.png" alt="Imagem 2">
                <div class="carousel-text">
                    <h2>Carros sensacionais</h2>
                    <p>vejam esses carros sensacionais.</p>
                    <button class="cta-button" onclick="window.open('https://www.youtube.com/watch?v=v07H75lWdYw&pp=ygUOdmlkZW8gZGUgY2Fycm8%3D')">Assista ao Vídeo</button>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item" data-video="https://www.youtube.com/watch?v=-jDKJT2dDZQ&pp=ygUSdmlkZW8gZGUgYmljaWNsZXRh">
                <img src="../barra_de_rolagem/3.png" alt="Imagem 3">
                <div class="carousel-text">
                    <h2>Bicicletas bonitas</h2>
                    <p>Vejam essas bicicletas bonitas.</p>
                    <button class="cta-button" onclick="window.open('https://www.youtube.com/watch?v=-jDKJT2dDZQ&pp=ygUSdmlkZW8gZGUgYmljaWNsZXRh')">Assista ao Vídeo</button>
                </div>
            </div>
            <!-- Slide 4 -->
            <div class="carousel-item" data-video="https://www.youtube.com/watch?v=XU-oiydBlyo&pp=ygUMeW91dHViZSBjb21v">
                <img src="../barra_de_rolagem/4.png" alt="Imagem 4">
                <div class="carousel-text">
                    <h2>Como crescer no Youtube</h2>
                    <p>Crescer no youtube uma grande oportunidade.</p>
                    <button class="cta-button" onclick="window.open('https://www.youtube.com/watch?v=XU-oiydBlyo&pp=ygUMeW91dHViZSBjb21v')">Assista ao Vídeo</button>
                </div>
            </div>
        </div>
    
        <!-- Indicadores (bolinhas) -->
        <div class="carousel-indicators">
            <span class="dot" onclick="currentSlide(0)"></span>
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>

     <!-- Seção de Publicações -->
     <div class="grid-container">
        <!-- Post 1 -->
        <div class="post-card">
            <div class="post-image">
                <img src="../post_pagina/minecraft.png" alt="Imagem 1">
            </div>
            <div class="post-content">
                <h3 class="post-title">Minecraft Survival</h3>
                <p class="post-paragraph">Em breve teremos novos videos no canal deste tema.</p>
            </div>
        </div>
        
        <!-- Post 2 -->
        <div class="post-card">
            <div class="post-image">
                <img src="../post_pagina/lego.png" alt="Imagem 2">
            </div>
            <div class="post-content">
                <h3 class="post-title">Lego um jogo ganhando em forma</h3>
                <p class="post-paragraph">Na última quinta-feira foi gravada uma nova vídeo do canal,às 22hrs soltaremos sobre isto.</p>
            </div>
        </div>
        
          <!-- Post 3 -->
          <div class="post-card">
            <div class="post-image">
                <img src="../post_pagina/html.png" alt="Imagem 2">
            </div>
            <div class="post-content">
                <h3 class="post-title">HTML em ascensão</h3>
                <p class="post-paragraph">HTML se tornou algo muito prático no mercado no sentido de aprendizado</p>
            </div>
        </div>
        
          <!-- Post 4 -->
          <div class="post-card">
            <div class="post-image">
                <img src="../post_pagina/youtube premium.png" alt="Imagem 2">
            </div>
            <div class="post-content">
                <h3 class="post-title">YOUTUBE PREMIUM LIBERADO !</h3>
                <p class="post-paragraph">Compre o seu pacote de plano no Youtube premium para videos sem propraganda.</p>
            </div>
        </div>
        
        <!-- Adicione mais posts aqui -->
    </div>
    <h2>Fale Conosco:</h2>
    <form action="processar_formulario.php" method="POST">
        <div class="form-row">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
        </div>
        <div class="form-group-full">
            <label for="message">Escreva sua mensagem:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
        </div>
        <input type="submit" value="Enviar">
    </form>
    
    
    <footer>Direitos autorais 2024 - Samuel L.10</footer>
      
    <script src="script.js"></script>
</body>
</html>
