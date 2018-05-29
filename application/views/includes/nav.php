<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="/booking">Armed Forces Hospital</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/booking/doctors">Doctors</a>
            </li>
        </ul>
        <ul class="navbar-nav nav-right">
            <li class="nav-item">
                <a class="nav-link" href="/booking/suggestions">Suggestions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/booking/doctors/talk">Talk to Doc</a>
            </li>
            <?php if (isset($apts)) {
                echo '<li class="nav-item">
                    <a class="nav-link" href="/booking/doctors/signout">Logout</a>
                </li>';
            } ?>
        </ul>
    </div>
</nav>