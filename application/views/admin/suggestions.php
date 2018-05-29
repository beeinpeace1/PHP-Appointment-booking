<div class="container">
  <form class="form-signin text-center" action="/booking/suggestions/submit" method="post">
    <img class="mb-4" src="<?= base_url(); ?>assets/images/logo2.png" alt="" width="200" height="100">
    <h1 class="h3 mb-3 font-weight-normal">Enter your suggestion</h1>
    <label for="name" class="sr-only">Name</label>
    <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="message" class="sr-only">Message</label>
    <textarea id="message" name="message" class="form-control" rows="5" placeholder="Message"></textarea>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
  </form>
  <a href="/booking/suggestions/list" class="nav-link text-center">List all suggestions?</a>
</div>