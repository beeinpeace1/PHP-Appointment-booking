<div class="container">
  <div class="card text-center">
    <div class="card-header">
      <h3><?= $details[0]->username ?></h3>
    </div>
    <div class="card-body">
      <p class="card-text">Email: <a href="mailto:<?= $details[0]->email ?>"><?= $details[0]->email ?></a></p>
      <p class="card-text">Contact: <a href="tel:<?= $details[0]->contact ?>"><?= $details[0]->contact ?></a></p>
      <p class="card-text">Address: <?= $details[0]->address ?></p>
      <p class="card-text">Gender: <?= $details[0]->gender ?></p>
      <p class="card-text">Note: <?= $details[0]->note ?></p>
      <a href="/booking/doctors/apts" class="btn btn-primary">Go Back</a>
    </div>
    <div class="card-footer text-muted">
    <?= $details[0]->DATE ?> at <?= $details[0]->TIME ?>
    </div>
  </div>
</div>