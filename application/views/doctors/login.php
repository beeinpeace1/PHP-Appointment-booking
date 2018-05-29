<form class="form-signin text-center" action="/booking/doctors/login" method="post">
  <img class="mb-4" src="<?= base_url(); ?>assets/images/logo1.png" alt="" width="100" height="130">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputEmail" class="sr-only">Username</label>
  <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Username" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
</form>
