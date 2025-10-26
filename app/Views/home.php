<?php
echo "Home.php" . "<b> Olá Mundo! </b>";
?>
<!DOCTYPE html> <!-- define que o documento é HTML5 -->
<html lang="pt-BR"> <!-- página configurada para português do Brasil -->

<head>
    <meta charset="UTF-8"> <!-- define o padrão de caracteres (acentos, ç, etc.) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jaú Turismo</title><!-- Título que aparece na aba do navegador -->

    <!-- importação de fontes do google fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/style.css"> <!-- importação do arquivo CSS externo -->
</head>

<body>

    <div class="superinfo-bg"> <!-- fundo da superinfo -->
        <div class="superinfo"> <!-- barra superior -->
            <p>Segunda / Sábado - 9h às 19h</p> <!-- horário de funcionamento -->
            <a href="tel:+551436662419">+55 14 3666-2419</a>
            <!-- telefone, href cria um link que faz ligação quando clicado -->
            <p>Av. Brasil, 1234 - Centro, Jaú - SP</p> <!-- endereço -->
        </div>
    </div>

    <!--cabeçalho principal-->
    <header class="menu-bg"> <!-- fundo do menu-->
        <div class="menu"> <!-- conteudo do menu -->
            <div class="menu-logo"> <!-- nome ou logo do menu-->
                <a href="#">JaúTurismo</a>
            </div>

            <!-- navegação do site-->
            <nav class="menu-nav">
                <ul>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#produtos">Serviços</a></li>
                    <li><a href="#planos">Planos</a></li>
                    <li><a href="#qualidade">Qualidade</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!--texto de introdução do site -->
    <h1 class="introducao">Bem-vindo a Jaú – Onde a história encontra a hospitalidade</h1> <!-- titulo -->
    <p class="introducao-paragrafo">Neste portal, você vai descobrir os principais pontos turísticos, eventos,
        curiosidades e experiências que fazem de Jaú um lugar único. Prepare-se para explorar casarões centenários,
        caminhar por trilhas de fé, saborear pratos típicos e se apaixonar por cada detalhe desta cidade vibrante.</p>

    <!-- seção sobre -->
    <section class="sobre" id="sobre"> <!--id é puxado no menu desse jeito-->
        <div class="sobre-info">
            <h1>Sobre</h1> <!-- titulo-->
            <p>Nosso site foi criado para ser seu guia confiável na descoberta das maravilhas de Jaú e região.
                Utilizamos roteiros turísticos personalizados, ajustados aos seus
                interesses, duração da viagem e preferências.

            <p>Quer você esteja planejando uma visita rápida ou uma estadia prolongada, estamos aqui para ajudar a criar
                experiências memoráveis que combinam com seu estilo único.</p>
            </p>
        </div>
        <!-- imagens ilustrativas -->
        <div class="sobre-img">
            <img src="img/catetraljpg.jpg" alt="Catetral da cidade de Jaú"> <!--imagem-->
        </div>
        <div class="sobre-img">
            <img src="img/parque-do-rio-jau.jpg" alt="Parque do rio Jaú"> <!--imagem-->
        </div>
    </section>

    <!-- seção de serviços -->
    <section class="produtos" id="produtos"> <!--id é puxado no menu desse jeito-->
        <h1>Serviços</h1> <!--titulo da seção(container)-->
        <!-- container -->
        <div class="produtos-container">


            <!-- item do container: pontos turisticos -->
            <div class="produtos-item orange">
                <h2>Pontos Turísticos</h2> <!--titulo (dos itens) -->
                <img src="img/lagoSilverio.webp" alt="Pontos Turísticos"> <!--imagem-->
                <a href="#">Ver mais</a> <!-- botao -->
            </div>

            <!-- item do container: hospedagem -->
            <div class="produtos-item gray">
                <h2>Hospedagens</h2> <!--titulo (dos itens)-->
                <img src="img/gabenHotel.webp" alt="Hospedagens"> <!--imagem-->
                <a href="#">Ver mais</a> <!-- botao -->
            </div>

            <!-- item do container: gastronomia -->
            <div class="produtos-item red">
                <h2>Gastronomia</h2> <!--titulo (dos itens)-->
                <img src="img/grillSul.webp" alt="Gastronomia"> <!--imagem-->
                <a href="#">Ver mais</a> <!-- botao -->
            </div>

        </div>
    </section>

    <!-- Seção de Planos de Turismo -->
    <section class="planos" id="planos"> <!--id é puxado no menu desse jeito-->
        <div class="planos-container">
            <!-- Plano História e Cultura -->
            <div class="planos-item">
                <h2>História e Cultura</h2> <!--titulo -->
                <span>Ideal para quem gosta de conhecer a história e os marcos da cidade:</span>
                <!--texto de introdução do plano-->
                <ul>
                    <!-- topicos que o plano tem-->
                    <li>Visita à Catedral</li>
                    <li>Visita ao Museu Municipal de Jaú</li>
                    <li>Almoço Porteira do Sul</li>
                    <li>Visita ao Teatro Elza Munerato</li>
                    <li>Jantar com música ao vivo </li>
                    <li>Pôr do sol no Parque do Rio Jaú</li>
                </ul>
                <a href="#">Assinar</a> <!-- botão -->
            </div>
            <!-- Plano Natureza -->
            <div class="planos-item">
                <h2>Nutureza e Bem-Estar</h2> <!-- titulo -->
                <span>Para quem busca relaxar e ter contato com o verde.</span> <!--texto de introdução do plano-->
                <ul>
                    <!-- topicos que o plano tem-->
                    <li>Caminhada ou piquenique no Bosque Municiapal</li>
                    <li>Almoço em restaurante rural ou pesqueiro</li>
                    <li>Visita a uma fazenda de café ou turismo rural na região</li>
                    <li>Café e Doces na Padaria Doce Pão</li>
                    <li>Jantar leve no centro da cidade</li>
                </ul>
                <a href="#">Assinar</a> <!-- botão -->
            </div>

            <div class="planos-item">
                <h2>Compras e Gastronomia</h2> <!-- titulo -->

                <span>Perfeito para quem quer aproveitar os produtos locais e comer bem.</span>
                <!--texto de introdução do plano-->
                <ul>
                    <!-- topicos que o plano tem-->
                    <li>Visita ao Shopping Teritório do Calçado</li>
                    <li>Compras em lojas tradicionais da região</li>
                    <li>Almoço com culinária caipira ou churrascaria</li>
                    <li>Parada para café ou sorvete artesanal</li>
                    <li>Passeio noturno pelo centro iluminado</li>
                    <li>Jantar em pizzaria ou restaurante moderno</li>
                </ul>
                <a href="#">Assinar</a> <!-- botão -->
            </div>

        </div>
    </section>

    <section class="qualidade" id="qualidade"> <!--id é puxado no menu desse jeito-->

        <div class="qualidade-item"> <!-- item do container(qualidade)-->
            <h2>Inteligente</h2>
            <p> Jaú é uma cidade que pensa à frente. Com soluções digitais, roteiros interativos e informações
                acessíveis, nosso portal foi criado para oferecer uma experiência inteligente ao visitante. Aqui, cada
                clique é uma descoberta — planejada com tecnologia, guiada por conhecimento e inspirada pela cultura
                local.</p>
        </div>

        <div class="qualidade-item"> <!-- item do container(qualidade)-->
            <h2>Sustentável</h2>
            <p>Promovemos o turismo consciente, valorizando práticas sustentáveis, negócios locais e preservação
                ambiental. De trilhas ecológicas a iniciativas verdes, Jaú mostra que é possível crescer sem perder o
                equilíbrio com a natureza. Viajar bem também é cuidar do amanhã.</p>
        </div>

        <div class="qualidade-item"> <!-- item do container(qualidade)-->
            <h2>Confiável</h2>
            <p>Segurança, transparência e compromisso com a verdade. Nosso conteúdo é cuidadosamente verificado, e as
                recomendações são feitas com base em fontes locais e experiências reais. Jaú é uma cidade que acolhe com
                confiança — e nosso site reflete esse mesmo espírito.</p>
        </div>

    </section>

    <!-- Seção de Newsletter (cadastro de e-mail) -->
    <section class="newsletter">
        <div class="newletter-info">
            <h1>Newletter</h1>
            <p>Assine e fique por dentro das novidades</p>
        </div>
        <form class="newsletter-form"> <!--formulario-->
            <input type="text" placeholder="Seu e-mail">
            <!--inserindo dado (email), placeholder (é o texto que fica visivel antes de inserir o dado)-->
            <button type="submit">Assinar</button> <!--botão-->
        </form>

        <!-- Rodapé -->
    </section>
    <footer class="footer">
  <div class="footer-container">
    <div class="footer-info">
      <h3>JaúTurismo</h3>
      <p>Av. Brasil, 1234 - Centro, Jaú - SP</p>
      <p>Telefone: (14) 3666-2419</p>
      <p>E-mail: contato@jauturismo.com.br</p>
    </div>

    <div class="footer-links">
      <h3>Links úteis</h3>
      <ul>
        <li><a href="#sobre">Sobre</a></li>
        <li><a href="#produtos">Serviços</a></li>
        <li><a href="#planos">Planos</a></li>
        <li><a href="#qualidade">Qualidade</a></li>
      </ul>
    </div>

    <div class="footer-social">
      <h3>Siga-nos</h3>
      <a href="#">Instagram</a> | <a href="#">Facebook</a> | <a href="#">YouTube</a>
    </div>
  </div>

  <p class="footer-copy">JaúTurismo © 2025 - Todos os direitos reservados</p>
</footer>
</body>

</html>