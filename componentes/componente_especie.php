<article class="card card-especie">
    <img src="https://www.infoescola.com/wp-content/uploads/2008/05/capivara-119654188.jpg" alt="Capivara em seu habitat" class="card-imagem">
    <div class="card-conteudo">
        <span class="etiqueta">ESPÉCIE</span>
        <h3><?php echo htmlspecialchars($nomeEspecie); ?></h3>
        <p><?php echo htmlspecialchars($descricaoEspecie); ?></p>
        <a class="botao botao-secundario" href="<?php echo htmlspecialchars($linkEspecie); ?>"><?php echo htmlspecialchars($acaoEspecie); ?></a>
        <span class="codigo">Classificação: mamífero</span>
    </div>
</article>
