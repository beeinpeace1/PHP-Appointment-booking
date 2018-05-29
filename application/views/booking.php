<header class="booking-header">
    <div class="booking-heading-text">
    </div>
    <img src="<?= base_url(); ?>assets/images/left.jpg" alt="Background">
</header>

<div class="booking-form">
    <form action="/booking/booking/submit" method="post" >
        <div class="doctor">
            <div class="input-field row">
                <div class="department-select form-group col-6">
                    <label for="doc-dept">Choose Department:</label>
                    <select class="form-control" name="doc-dept" onchange="fillDoctors(this.value)">
                        <option value="" disabled selected>Choose your option</option>
                        <?php foreach ($departments as $key => $value) {
                            echo '<option value="'. $value->id .'">'. $value->name .'</option>'; 
                        }?>
                    </select>
                </div>
                <div class="doc-select form-group col-6">
                    <label>Choose Doctor:</label>
                    <select class="form-control" name="doc-name" id="docs" onchange="fillCalendar(this.value)">
                    </select>
                </div>
            </div>
            <hr>
            <h5>Choose Appointment Date and Time:</h5>
            <div id="calendar"></div>
            <h6 id="date-time"></h6>
            <input type="hidden" name="date-time" id="date-time-input">
            <input type="hidden" name="date-time2" id="date-time-input2">
            <div class="next-button row doctor">
                <button class="next" onclick="return false;">Next</button>
            </div>
        </div>
        <div class="users">
            <div class="input-fields-users">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="username" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" 
                        placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St">
                </div>
                <label for="gender">Gender</label>
                <div class="form-row px-2" id="gender">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="male" name="gender" class="custom-control-input" value="Male">
                        <label class="custom-control-label" for="male">Male</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="female" name="gender" class="custom-control-input" value="Female">
                        <label class="custom-control-label" for="female">Female</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="others" name="gender" class="custom-control-input" value="Others">
                        <label class="custom-control-label" for="others">Others</label>
                    </div>
                </div>
                <div class="form-group my-3">
                    <label for="phone">Contact</label>
                    <input type="number" class="form-control" id="phone" name="contact" placeholder="123-456-789">
                </div>
                <div class="form-group">
                    <label for="note">Note</label>
                    <textarea class="form-control" id="note" rows="6" name="note" placeholder="Brief Description of Health Issue"></textarea>
                </div>
            </div>
            <div class="next-button row users">
                <button class="next" onclick="return false;">Next</button>
            </div>
        </div>
        <div class="confirm">
            <div class="input-fields-users">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input disabled type="text" class="form-control" id="confirm-name" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input disabled type="email" class="form-control" id="confirm-email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input disabled type="text" class="form-control" id="confirm-inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <label for="confirm-gender">Gender</label>
                    <input disabled type="text" class="form-control" id="confirm-gender">
                </div>
                <div class="form-group my-3">
                    <label for="phone">Contact</label>
                    <input disabled type="tel" class="form-control" id="confirm-phone" placeholder="123-456-789">
                </div>
                <div class="form-group">
                    <label for="note">Note</label>
                    <textarea disabled class="form-control" id="confirm-note" rows="6" placeholder="Brief Description of Health Issue"></textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="confirm-doc-name">Doctor Name</label>
                        <input disabled type="text" class="form-control" id="confirm-doc-name" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="confirm-doc-dept">Department</label>
                        <input disabled type="text" class="form-control" id="confirm-doc-dept">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="confirm-doc-time">Date/Time</label>
                        <input disabled type="text" class="form-control" id="confirm-doc-time">
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary">
                </div>
            </div>
        </div>
    </form>
    <div class="time">
        <div class="time-holder">
            <h3 id="time-date-holder"></h3>
            <div class="time-grid" id="time-grid">
            </div>
            <span id="close-time">&times;</span>
        </div>
    </div>
</div>