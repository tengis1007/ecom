<?php session_start(); 
if(isset( $_SESSION['auth']))
{
    $_SESSION['message']='You are already logged in';
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- Include your CSS links here -->
</head>

<body>
    <!-- Include your header -->
    <?php include('includes/header.php'); ?>

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
                            <h4>Login form</h4>
                        </div>
                        <div class="card-body">
                            <form action="functions/code.php" method="POST">
                                <div class="mb-3"
                                    <label class="form-label">Email address</label>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Enter your email">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Enter password">
                                </div>
                                <button type="submit" name="login_btn" class="btn btn-primary">Login</button>
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
</body>

</html>
