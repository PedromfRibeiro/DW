<body>
<form method="post">
<div class="Input">
    <!--Header-->
    <div class="modal-header text-center pb-4">
        <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>SIGN</strong> <a
                    class="green-text font-weight-bold"><strong> UP</strong></a></h3>

    </div>
    <!--Body-->
    <div class="modal-body">
        <!--Body-->
        <div class="md-form mb-3">
            <label>Name</label>
            <input type="text" name="Nome" class="form-control validate white-text" placeholder="Your Name" required>
        </div>

        <div class="md-form mb-3">
            <label>email</label>
            <input type="email" name="email" class="form-control validate white-text" placeholder="Your Email" required>

        </div>

        <div class="md-form mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control validate white-text" placeholder="Your Password" required>
        </div>
        <div class="md-form mb-3">
            <label>Comfirm Password</label>
            <input type="password" name="newpassword" class="form-control validate white-text" placeholder="Confirm Password" required>
        </div>
        <div class="md-form mb-3">
            <label>Your Birthday</label>
            <input type="date" name="data_Nascimento" class="form-control validate white-text" placeholder="Your Date" required>
        </div>

        <!--Grid row-->
        <div class="row d-flex align-items-center mb-4">

            <!--Grid column-->
            <div class="text-center mb-3 col-md-12">
                <button type="submit" name="register" class="btn btn-success btn-block btn-rounded z-depth-1">Sign up</button>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-12">
                <p class="font-small white-text d-flex justify-content-end">Have an account? <a href="?page=Login/login" class="green-text ml-1 font-weight-bold">
                        Log in</a></p>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>
</div>
</form>
</body>
