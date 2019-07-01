<?php 
include 'connection.inc';
require __DIR__ . '/header.phtml';

print "Produtos em Estoque" .'<br><br>';
$result = $pdo ->query("SELECT * FROM produtos");
$result = $result->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $r) {
	print "id:   " . $r['id'] . '|  ';
	print "Produto:  "  .$r['nome'] . '|   ';
	print "Status:  "  .$r['stt'] . '|   ';
	print "Codigo de Barras:  "  .$r['codBarras'] . '|   ';
	print "Quantidade:  "  .$r['qtd'] . '|   ';
	print "Preço:  "  .$r['preco'] . '<br>';
	print '<hr>'. '<br>';
	
}
print "Digite o ID ou Codigo de Barras e a Quantidade que deseja!" . '<br>';
?> 
<!----tela inicial---->
<style>
  .content {
    margin-top: 90px;
  }
</style>
<div class="row">
	<div class="col-md-12">
		<h2>Saida de Produto</h2>
		<form action="sproduto.php" method="post">
			<div class="form-group">
				<label for="exampleInputEmail1">ID</label>
				<input type="number" class="form-control"  placeholder="ID do produto" name="id">
			</div>
			<div class="form-group">
				<label >Nome do Produto</label>
				<input type="text" class="form-control" placeholder="Nome do Produto" name="nome">
			</div>
			<div class="form-group">
				<label >Codigo de barras</label>
				<input type="number" class="form-control" placeholder="Codigo de Barras" name="codbarras">
			</div>
			<div class="form-group">
				<label >Quantidade</label>
				<input type="text" class="form-control" placeholder="Quantidade" name="qtd">
			</div>      
			
	 <div class="form-group">		    
     <button type="submit" class="btn btn-primary">Selecionar Produto</button>
     </div> 
    </form>
    <?php 
        
    $result = $pdo ->query("SELECT * FROM produtos order by hora DESC limit 1");
	$result = $result->fetchAll(PDO::FETCH_ASSOC);
	foreach ($result as $r) {
	print "id:   " . $r['id'] . '|  ';
	print "Produto:  "  .$r['nome'] . '|   ';
	print "Status:  "  .$r['stt'] . '|   ';
	print "Codigo de Barras:  "  .$r['codBarras'] . '|   ';
	print "Quantidade:  "  .$r['qtd']. '|   ';
	print "Preço:  "  .$r['preco'] . '<br>';
	print "Valor Total:  "  .$r['preco'] * $r['qtd']  . '<br>';
	print '<hr>'. '<br>';
	
}

require __DIR__ . '/footer.phtml'; ?>