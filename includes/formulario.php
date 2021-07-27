<main>
    

    <div class="d-flex justify-content-between">
        <h2 mt-3><?=TITLE?></h2>

        <a href="index.php"><button class="btn btn-success">Voltar</button></a>
    </div>

    <form action="" method="POST">
        <div class="form-group">
            <label for="">Título</label>
            <input type="text" class="form-control" name="titulo" value="<?=$obVaga->titulo?>">
        </div>
        <div class="form-group">
            <label for="">Descrição</label>
            <textarea name="descricao" id="" cols="30" rows="10" class="form-control"><?=$obVaga->descricao?></textarea>
        </div>
        
        <div class="d-flex justify-content-between form-group my-2">
            <div class="btn-group d-flex align-items-center">
            <label for="" class="m-1">Status:</label>
            <div>
                <div class="form-check form-check-inline  m-0 p-0">
                  <label class="form-control">
                    <input type="radio" name="ativo" value="s" checked> Ativo
                  </label>
                </div>

                <div class="form-check form-check-inline  m-0 p-0">
                  <label class="form-control">
                    <input type="radio" name="ativo" value="n" <?=$obVaga->ativo == 'n' ? 'checked' : ''?>> Inativo
                  </label>
                </div>
           </div>

            </div>

            <div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
        </div>

        
    </form>
</main>