<form>
    <h1 align="center">Cadastro</h1>
    <div class="form-group">
            <input type="hidden" class="form-control" name="id" value="<?php echo $informacoes['id']; ?>">
        </div>
        <div class="form-group">
            <label for="nome">
                Nome:
            </label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $informacoes['nome']; ?>">
        </div>
        <div class="form-group">
            <label for="email">
                Email:
            </label>
            <input type="text" class="form-control" id="email" name="email"
                   value="<?php echo $informacoes['email']; ?>">
        </div>

        <div class="form-group">
            <label for="telefone">
                Telefone:
            </label>

            <input type="text" id="telefone" class="form-control" name="telefone"
                   value="<?php echo $informacoes['telefone']; ?>">
        </div>

        <button class="btn btn-success">
            <?php echo $informacoes['id'] > 0 ? 'Atualizar' : 'Cadastrar'; ?>
        </button>
</form>
<br/>
