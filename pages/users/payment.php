<?php
    $title="Process Payment";
    if(isset($_SESSION['login']) && $_SESSION['login'] == 1 && $_SESSION['role']  == 'user' ) {
        $connToInsert =new DatabaseTable("creditinfo");
        if(isset($_POST['submit'])){
            unset($_POST['submit']);
            $connToInsert-> insert($_POST);
            if($connToInsert){
                header('location:index.php?page=');
          
}
        }
        if(isset($_POST['esewa'])){
        $conn1 = new DatabaseTable('payment_esewa');
        $shid=$_POST['shid'];
        unset($_POST['esewa']);
        $insertVal= $conn1->insert($_POST);

        $conn1SH = new DatabaseTable('shortlist');
        $val = [
            "shortlistid"=>$shid,
            "status"=>"pending"
        ];

        $updateToSH = $conn1SH->update($val,"shortlistid");
        }

        if(isset($_POST['deposit_submit'])){
        $conn2 = new DatabaseTable('bankinfo');
        $shid=$_POST['shid'];
        unset($_POST['deposit_submit']);
        $insertVal= $conn2->insert($_POST);

        $conn1SH = new DatabaseTable('shortlist');
        $val = [
            "shortlistid"=>$shid,
            "status"=>"pending"
        ];

        $updateToSH = $conn1SH->update($val,"shortlistid");

        }

         if(isset($_POST['cash_on_deliv'])){
        $conn3 = new DatabaseTable('cashondelivery');
        $shid=$_POST['shid'];
        unset($_POST['cash_on_deliv']);
        $insertVal= $conn3->insert($_POST);

        $conn1SH = new DatabaseTable('shortlist');
        $val = [
            "shortlistid"=>$shid,
            "status"=>"pending"
        ];

        $updateToSH = $conn1SH->update($val,"shortlistid");
        }

        ///cash_on_deliv
        $content = loadTemplate('../templates/users/paymentTemplate.php', []);//load template
    }else {
        session_unset();
        header('location:index.php?page=login');
    }
?>