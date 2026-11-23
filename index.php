<?php include './header.php'; ?>

<main class="container">
    <section class="apresentacao">
        <span class="etiqueta">MUNDO ANIMAL</span>
        <h2>Bem-vindo ao universo das capivaras!</h2>
        <p>Explore informações sobre características, comportamento e curiosidades desse animal que conquistou a internet.</p>
    </section>

    <section class="secao">
        <h2>Conheça mais</h2>
        <div class="grade">
            <?php
                $imagem = "https://www.infoescola.com/wp-content/uploads/2008/05/capivara-119654188.jpg";

                $titulo = "Características";
                $descricao = "Descubra como é o maior roedor do mundo e conheça suas principais características físicas.";
                $link = "sobre.php";
                $textoLink = "Ver características";
                $categoria = "Informação";
                include './componentes/componente_informacao.php';

                $tituloCuriosidade = "Vida em grupo";
                $textoCuriosidade = "As capivaras são animais sociais e costumam viver em grupos próximos à água.";
                $linkCuriosidade = "sobre.php#comportamento";
                $nivel = "Você sabia?";
                include './componentes/componente_curiosidade.php';

                $nomeEspecie = "Hydrochoerus hydrochaeris";
                $descricaoEspecie = "Esse é o nome científico da capivara, um mamífero nativo da América do Sul.";
                $linkEspecie = "sobre.php";
                $acaoEspecie = "Conhecer a espécie";
                include './componentes/componente_especie.php';
            ?>
        </div>
    </section>
</main>

<?php include './footer.php'; ?>
