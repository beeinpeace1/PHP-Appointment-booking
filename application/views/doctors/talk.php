<div class="container">
<form method="post" action="/booking/doctors/talksubmit">
  <label>Choose Department and Doctor</label>
  <div class="form-row">
      <div class="form-group col-md-6">
      <select class="form-control" name="doc-dept" onchange="fillDoctors(this.value)">
          <option value="" disabled selected>Choose your option</option>
          <?php foreach ($departments as $key => $value) {
              echo '<option value="'. $value->id .'">'. $value->name .'</option>'; 
          }?>
      </select>
      </div>
      <div class="form-group col-md-6">
        <select class="form-control" name="doc-name" id="docs" onchange="fillCalendar(this.value)">
        </select>
      </div>
  </div>
  <input type="hidden" name="hidden-doc-id" id="hidden-doc-id">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name-talk" name="name" placeholder="Enter your name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email-talk" name="email" placeholder="name@example.com">
  </div>
  
  <div class="form-group">
      <label for="message">Message</label>
      <textarea type="text" class="form-control" id="message-talk" name="message" placeholder="Enter your message..." rows="5"></textarea>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>