<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="procura margin-bottom-padrao bg-cinza-padrao">
  <h3>PROCURAR UM PROFISSIONAL</h3>
  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Pesquisar ..." aria-label="Pesquisar ..." aria-describedby="basic-addon2">
    <div class="input-group-append">
      <button class="btn btn-primary" type="button">Pesquisar</button>
    </div>
  </div>
</div>

<div class="container2 row align-items-center bg-cinza-padrao">
  <div class="row justify-content-between">
    <?php foreach($data as $curriculo): ?>
      <div class="col-sm">
        <div class="card text-white bg-dark">
          <img class="card-img-top" src="<?=$curriculo->imagem?>" alt="Card image cap">
          <div class="card-body text-center">
            <h5 class="card-title"><?php echo $curriculo->nome_completo; ?></h5>
            <p class="card-text"><?=$curriculo->curriculo?></p>
            <a href="#" class="btn btn-primary">Ver perfil</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<?php require APPROOT . '/views/includes/footer.php'; ?>