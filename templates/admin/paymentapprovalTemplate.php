<section>
    <table>
        <tr><th column=6>ESewa</th></tr>
        <tr><th>Buyer Name</th><th>ESewa Transaction ID</th><th>Remarks</th><th>Amount</th><th>Seller Name</th><th>Approve</th><th>Deny</th></tr>
        <?php
            $bol=0;
            foreach($pendingesewa as $valEsewa){
                echo '<tr><td>'.$valEsewa['transaction_by'].'</td><td>'.$valEsewa['transaction_id'].'</td><td>'.$valEsewa['transaction_remarks'].'</td><td>'.$sellerEsewa[$bol][3].'</td><td>'.$sellerEsewa[$bol][1].' '.$sellerEsewa[$bol][2].'</td><td><a href="index.php?page=payment&approve=1&shid='.$valEsewa['shid'].'"> Approve</a></td><td><a href="index.php?page=payment&deny=1&shid='.$valEsewa['shid'].'">Deny</a></td></tr>';
                $bol=$bol+1;
            }
        ?>
        </table><br><br>
        <table>
        <tr><th column=7>Credit Card</th></tr>
        <tr><th>Buyer Name</th><th>Card Number</th><th>CVV</th><th>Expire</th><th>Amount</th><th>Seller</th><th>Approve</th><th>Deny</th></tr>
        <?php
            $bol=0;
            foreach($pendingcard as $valCard){
                echo '<tr><td>'.$valCard['Name'].'</td><td>'.$valCard['cardnumber'].'</td><td>'.$valCard['cvv'].'</td><td>Month:'.$valCard['exp_month'].'<br>Year:'.$valCard['exp_year'].'</td><td>'.$sellerCard[$bol][0].'</td><td>'.$sellerCard[$bol][1].' '.$sellerCard[$bol][2].'</td><td><a href="index.php?page=payment&approve=1&shid='.$valCard['shid'].'"> Approve</a></td><td><a href="index.php?page=payment&deny=1&shid='.$valCard['shid'].'">Deny</a></td></tr>';
                $bol=$bol+1;
            }
        ?>
        </table> <br><br>
        <table>
        <tr><th column=7>Cash On Delivery</th></tr>
        <tr><th>Buyer Name</th><th>Address</th><th>Phone</th><th>Amount</th><th>Seller</th><th>Approve</th><th>Deny</th></tr>
        <?php
            $bol=0;
            foreach($pendingcash as $valCard){
                echo '<tr><td>'.$valCard['delivery_name'].'</td><td>'.$valCard['delivery_addr'].'</td><td>'.$valCard['delivery_phone'].'</td><td>'.$sellerCard[$bol][0].'</td><td>'.$sellerCard[$bol][1].' '.$sellerCard[$bol][2].'</td><td><a href="index.php?page=payment&approve=1&shid='.$valCard['shid'].'"> Approve</a></td><td><a href="index.php?page=payment&deny=1&shid='.$valCard['shid'].'">Deny</a></td></tr>';
                $bol=$bol+1;
            }
        ?>
    </table>
</section>