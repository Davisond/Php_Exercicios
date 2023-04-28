<!-- 


        <form action="" method="GET">
        <input type="hidden" name="logout" value="1">
        <button class="button">Logout</button>
        </form>

 <?php     


// if (isset($_GET['logout']) && $_GET['logout'] == 1) { -->
    session_destroy();
    header('Location://localhost/2023/Suplements/index.php');
// }





?>