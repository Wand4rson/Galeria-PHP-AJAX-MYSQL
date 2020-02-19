
<div class="container">

    <form method="POST" action="<?php echo BASE_URL;?>foto/add_action" enctype="multipart/form-data">
    
    <br>
    <?php if (!empty($msgErro)) : ;?>
    <div class="alert alert-danger text-center" role="alert">
        <?php echo $msgErro; ?>
    </div>
    <?php endif; ?>
    

    <div class="form-group">
        <label for="titulo">Titulo</label>
        <input type="text" class="form-control" id="titulo" name="titulo" required autofocus>
    </div>
    
    <div class="form-group">        
        <label for="titulo">Selecione uma Imagem</label>

        <div class="custom-file">        
            <input type="file" class="custom-file-input" id="arquivo" name="arquivo" required>
            <label class="custom-file-label" for="arquivo">Escolha uma imagem</label>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Confirmar</button>

    </form>

</div>