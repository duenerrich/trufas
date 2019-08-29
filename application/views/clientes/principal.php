<h1>Clientes</h1>
<!-- Aqui esta chamando o controller cliente depois a função cadastrar -->
<?php echo anchor('cliente/cadastrar', 'Adicionar'); ?>

<?php foreach ($clientes as $value){
    echo"<hr>";
    echo "<p>Nome: {$value->nome}</p>";
    echo "<p>Telefone: {$value->telefone}</p>";
    echo "<p>Endereço: {$value->endereco}</p>";
    echo anchor ('cliente/excluir/'.$value->id, 'Excluir');
}




  ?>
