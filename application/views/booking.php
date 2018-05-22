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
            user choose
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
