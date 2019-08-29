<style type="text/css">

</style>

<div class="form-group">
  <div class="card" style="text-align: center; width:50%; margin-left: 25%;">
    <div class="card-body">
    <h5 class="card-title">Trufa a ser editada</h5>
    <h6 class="card-subtitle mb-2 text-muted">Sabor: <?=$trufas->sabor;?></h5>
    <h6 class="card-subtitle mb-2 text-muted">Preço R$<?=$trufas->preco?></h6>
    <h6 class="card-subtitle mb-2 text-muted">Quantidade:<?=$trufas->quantidade?></h6>
  </div>
</div>

<form method="post" action="<?php echo base_url('trufas/update');?>">

  <input type="hidden" name="id" value="<?=$trufas->id;?>">

  <div class="form-group">
    <?php echo form_error('sabor');?>
    <label for="sabor">Sabor</label>
    <input type="text" id="sabor" class="form-control" name="sabor" value="<?=$trufas->sabor?>">
  </div>

  <div class="form-group">
    <?php echo form_error('quantidade');?>
    <label class="form-check-label" for="quantidade">Quantidade</label>
    <input type="text" class="form-control" id="quantidade" name="quantidade" value="<?=$trufas->quantidade?>">
  </div>

  <div class="form-group">
    <?php echo form_error('preco');?>
    <label class="form-check-label" for="preco">Preço</label>
    <input type="text" class="form-control" id="preco" name="preco" value="<?= set_value('preco',$trufas->preco);?>">
  </div>

  <button type="submit" class="btn btn-lg btn-primary">Submit</button>
</form>
