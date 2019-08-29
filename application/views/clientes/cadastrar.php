<form class="form-group" action="<?php echo base_url('cliente/salvar'); ?>" method="post">
  <h2><?php echo $title;?></h2>
<div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" name="nome" id="nome" value="">
</div>

<div class="form-group">
    <label for="telefone">Telefone</label>
    <input type="text" class="form-control" name="telefone" id="telefone" value="">
</div>

<div class="form-group">
    <label for="endereco">Endereço</label>
    <input type="text" class="form-control" name="endereco" id="endereco" value="">
</div>

  <button type="submit" name="button">Cadastrar</button>
</form>
