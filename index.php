<?php
session_start();
include ('includes/header.php') ?>


<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if (isset($_SESSION['message'])): ?>
                    <div id="alertMessage" class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> <?php echo $_SESSION['message']; ?>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php unset($_SESSION['message']); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>



<script>
    // Close the alert message after 5 seconds
    setTimeout(function () {
        document.getElementById('alertMessage').remove();
    }, 5000);
</script>
<?php include ('includes/footer.php') ?>