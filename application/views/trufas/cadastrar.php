<form method="post" action="<?php echo base_url('trufas/salvar');?>">
<h2 style="text-align:center;"> Centro de Bombons e Trufas</h2>
  <div class="form-group">
    <?php echo form_error('sabor');?>
    <label for="sabor">Sabor</label>
    <input type="text" id="sabor" class="form-control" name="sabor" value="<?=set_value('sabor')?>">

  </div>

  <div class="form-group">
    <?php echo form_error('quantidade');?>
    <label class="form-check-label" for="quantidade">Quantidade</label>
    <input type="text" class="form-control" id="quantidade" name="quantidade" value="<?php echo set_value('quantidade');?>">
  </div>
  
  <div class="form-group">
    <?php echo form_error('preco');?>
    <label class="form-check-label" for="preco">Preço</label>
    <input type="text" class="form-control" id="preco" name="preco">
  </div>

  <button type="submit" class="btn btn-lg btn-primary">Submit</button>
</form>
