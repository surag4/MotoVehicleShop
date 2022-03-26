<?php
    $title="Process Payment";
    if(isset($_SESSION['login']) && $_SESSION['login'] == 1 && $_SESSION['role']  == 'user' ) {
        $connToInsert =new DatabaseTable("creditinfo");
        if(isset($_POST['submit'])){
            unset($_POST['submit']);
            $connToInsert-> insert($_POST);
            if($connToInsert){
                header('location:index.php?page=');
                //2147483647
            }
        }
        $content = loadTemplate('../templates/users/paymentTemplate.php', []);//load template
    }else {
        session_unset();
        header('location:index.php?page=login');
    }
?>