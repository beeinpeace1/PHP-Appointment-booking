<div class="container">
  <h3 class="my-2">List of all Appointments</h3>
  <ul class="list-group">
    <?php if(count($apts) > 0):?>
      <?php foreach($apts as $key => $value): ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="/booking/doctors/userdetails?un=<?= $value->username ?>&mail=<?= $value->email ?>&time=<?= $value->TIME ?>&date=<?= $value->DATE ?>"><?= (isset($value->username) && strlen($value->username) > 0) ? $value->username: 'Anonymous'; ?></a>
          <span class="badge badge-primary badge-pill"><?=$value->DATE?> at <?=$value->TIME?></span>
        </li>
      <?php endforeach; ?>
    <?php else: ?>
      <li class="list-group-item d-flex justify-content-between align-items-center">
          <span class="">No Appointments</span>
          <span class="badge badge-primary badge-pill">0</span>
      </li>
    <?php endif; ?>
  </ul>
</div>