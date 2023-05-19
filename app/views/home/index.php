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
    <div class="col-sm">
      <div class="card text-white bg-dark">
        <img class="card-img-top" src="ex01.jpeg" alt="Card image cap">
        <div class="card-body text-center">
          <h5 class="card-title">Jonh Ferdinand</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

    <div class="col-sm">
      <div class="card text-white bg-dark">
        <img class="card-img-top" src="ex02.jpeg" alt="Card image cap">
        <div class="card-body text-center">
          <h5 class="card-title">Ernesto Mateus</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

    <div class="col-sm">
      <div class="card text-white bg-dark">
        <img class="card-img-top" src="ex03.png.jpeg" alt="Card image cap">
        <div class="card-body text-center">
          <h5 class="card-title">Roberto Carlos</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require APPROOT . '/views/includes/footer.php'; ?>