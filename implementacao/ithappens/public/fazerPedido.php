<?php require __DIR__ . '/header.phtml';?> 

<!----tela inicial---->
<style>
  .content {
    margin-top: 90px;
  }
</style>
<div class="row">
  <div class="col-md-12">
    <h2>Fazer pedido</h2>
    <form action="pedido.php" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Filial</label>
        <input type="text" class="form-control"  placeholder="Filial" name="filial">
       </div>
      <div class="form-group">
        <label >Usuario</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Usuario" name="usuario">
      </div>
      <div class="form-group">
        <label >Nome do Cliente</label>
        <input type="text" class="form-control" id="cliente" placeholder="Nome do cliente" name="cliente">
      </div>
      <div class="form-group">
        <label >Observação entrega</label>
        <input type="text" class="form-control"  placeholder="Observação entrega" name="obs">
      </div>
     <button onclick="window.location.href='/produto.php';">Fazer Pedido</button>
    </form>
    <?php require __DIR__ . '/footer.phtml'; ?>