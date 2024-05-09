<?php
    session_start();

    if(!$_SESSION['email']){
        header('Location : index.html');
    }

    require_once('../layoutsAdminLTE/sidebar.php');
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <h3>Selamat datang di halaman admin.</h3>
</div>

<?php
    require_once('../layoutsAdminLTE/footer.php');
?>