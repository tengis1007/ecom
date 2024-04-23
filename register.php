<?php session_start(); 
if(isset( $_SESSION['auth']))
{
    $_SESSION['message']='You are already logged in';
    header('Location: index.php');
    exit();
}
include('includes/header.php');
?>  

    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <?php if (isset($_SESSION['message'])): ?>
                        <div id="alertMessage"class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['message']; ?>.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php unset($_SESSION['message']); ?>
                    <?php endif; ?>
                    <!-- Registration Form -->
                    <div class="card">
                        <div class="card-header">
                            <h4>Register form</h4>
                        </div>
                        <div class="card-body">
                            <form action="functions/authcode.php" method="POST">
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter your name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Phone number</label>
                                    <input type="number" name="phone" class="form-control"
                                        placeholder="Enter your phone number">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email address</label>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Enter your email">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Enter password">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" name="cpassword"
                                        placeholder="Confirm Password">
                                </div>
                                <button type="submit" name="register_btn" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                    <!-- End of Registration Form -->
                </div>
            </div>
        </div>
    </div>

    <!-- Include your footer -->
    <?php include('includes/footer.php'); ?>

    <!-- JavaScript code to close the alert message after a certain time -->

</body>

</html>
