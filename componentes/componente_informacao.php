<article class="card">
    <img src="<?php echo htmlspecialchars($imagem); ?>" alt="Imagem ilustrativa de uma capivara" class="card-imagem">
    <div class="card-conteudo">
        <span class="etiqueta"><?php echo htmlspecialchars($categoria); ?></span>
        <h3><?php echo htmlspecialchars($titulo); ?></h3>
        <p><?php echo htmlspecialchars($descricao); ?></p>
        <a class="botao" href="<?php echo htmlspecialchars($link); ?>"><?php echo htmlspecialchars($textoLink); ?></a>
    </div>
</article>
