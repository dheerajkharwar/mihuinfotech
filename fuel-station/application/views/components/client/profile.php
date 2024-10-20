<div class="col-md-6 m-auto">
    <!-- Profile Image -->
    <div class="card card-primary card-outline">
        <div class="card-body box-profile">
            <!-- <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
            </div> -->

            <!-- <h3 class="profile-username text-center">Nina Mcintire</h3>

            <p class="text-muted text-center">Software Engineer</p> -->

            <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>Username</b> <a class="float-right"><?= $user->username; ?></a>
                </li>
                <li class="list-group-item">
                    <b>Phone No.</b> <a class="float-right"><?= $user->phone_no; ?></a>
                </li>
                <li class="list-group-item">
                    <b>Place</b> <a class="float-right"><?= $user->place; ?></a>
                </li>
                <li class="list-group-item">
                    <b>User Type</b> <a class="float-right"><?= $usertype->user_type; ?></a>
                </li>
                <li class="list-group-item">
                    <b>Company Name</b> <a class="float-right"><?= $user->company_name; ?></a>
                </li>
                <li class="list-group-item">
                    <b>Company Address</b> <a class="float-right"><?= $user->company_address; ?></a>
                </li>
                <li class="list-group-item">
                    <b>State</b> <a class="float-right"><?= $user->state; ?></a>
                </li>
                <li class="list-group-item">
                    <b>Credit Period</b> <a class="float-right"><?= $user->credit_period; ?></a>
                </li>
                <li class="list-group-item">
                    <b>Slip Range</b> <a class="float-right"><?= $user->slip_range; ?></a>
                </li>
            </ul>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>