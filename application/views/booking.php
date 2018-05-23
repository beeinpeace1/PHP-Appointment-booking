<header class="booking-header">
    <div class="booking-heading-text">
        <h3>Armed Forces Hospital</h3>
    </div>
    <img src="<?= base_url(); ?>assets/images/bg.jpeg" alt="Background">
</header>

<div class="booking-form">
    <form action="#">
        <div class="doctor">
            <div class="input-field row">
                <div class="department-select form-group col-6">
                    <label for="exampleFormControlSelect1">Choose Department:</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                </div>
                <div class="doc-select form-group col-6">
                    <label>Choose Doctor:</label>
                    <select class="form-control">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                </div>
            </div>
            <hr>
            <h5>Choose Appointment Date and Time:</h5>
            <div id="calendar"></div>
            <div class="next-button row doctor">
                <button class="next">Next</button>
            </div>
        </div>
        <div class="users">
            <div class="input-fields-users">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <label for="gender">Gender</label>
                <div class="form-row px-2" id="gender">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="male" name="gender" class="custom-control-input">
                        <label class="custom-control-label" for="male">Male</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="female" name="gender" class="custom-control-input">
                        <label class="custom-control-label" for="female">Female</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="others" name="gender" class="custom-control-input">
                        <label class="custom-control-label" for="others">Others</label>
                    </div>
                </div>
                <div class="form-group my-3">
                    <label for="phone">Contact</label>
                    <input type="tel" class="form-control" id="phone" placeholder="123-456-789">
                </div>
                <div class="form-group">
                    <label for="note">Note</label>
                    <textarea class="form-control" id="note" rows="3" placeholder="Brief Description of Health Issue"></textarea>
                </div>
            </div>
            <div class="next-button row users">
                <button class="next">Next</button>
            </div>
        </div>
        <div class="confirm">
            confirm
        </div>
    </form>
    <div class="time">
        <div class="time-holder">
            <h3>time illi</h3>
            <div class="time-grid">
                <div class="times time1">11:00</div>
                <div class="times time2">2</div>
                <div class="times time3">3</div>
                <div class="times time4">4</div>
                <div class="times time5">5</div>
                <div class="times time6">6</div>
                <div class="times time7">7</div>
                <div class="times time8">8</div>
                <div class="times time9">9</div>
                <div class="times time10">10</div>
            </div>
        </div>
    </div>
</div>