<h1><?php echo $titulo?></h1>
<br>
<?php echo anchor('trufas/cadastrar', 'Adicionar')?>

<?php
echo "<br>";
foreach ($trufas as $value){
  echo "<p>Sabor: {$value->sabor}, Preço: {$value->preco}, Quantidade: {$value->quantidade}". anchor("trufas/editar/{$value->id}", ' Editar'). anchor("trufas/excluir/{$value->id}", ' Excluir');"</p>";

}

?>
