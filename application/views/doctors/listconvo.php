<div class="container">
  <h3 class="my-2">List of all Messages</h3>
  <ul class="list-group">
    <?php if(count($convos) > 0):?>
      <?php foreach($convos as $key => $value): ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <span> <em> <b><?=$value->username?></b> said, </em> <?=$value->message?></span>
          <span class="badge badge-primary badge-pill"><?=$value->email?></span>
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