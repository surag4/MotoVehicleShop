<body onload="hideNseek();">
    <h2>Payment Options:</h2>
<p>Choose your Payment Option:</p>

<div class="tab">
  <button class="tablinks" onclick="hideNseek(event, 'Deposit')">Deposit</button>
  <button class="tablinks" onclick="hideNseek(event, 'ESEWA')">ESEWA</button>
  <button class="tablinks" onclick="hideNseek(event, 'Cash')">Cash On Delivery</button>
</div>
<div id="Deposit" class="tabcontent">
  <form action="index.php?page=payment" method="POST"> 
    
           <div class="card_paymentheader">
            <h2>Bank Payment</h2>
                    <div class="icon-container">
                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                    <i class="fa fa-cc-amex" style="color:blue;"></i>
                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                    </div>
        </div>
        <input type="hidden" name="shid" value="<?php echo $_GET['shid'];?>">
        <div class="payment-name">
            <label for="cname">Depositor Name</label>
            <input type="text" id="cname" name="depositer_name" placeholder="Full Name">
        </div>

        <div class="card-num">
            <label for="ccnum">Deposit ID</label>
            <input type="number" id="ccnum" name="deposit_num" min="10000000" max="99999999" placeholder="12345678">
        </div>  

        <div class="exp-month">
            <label for="expmonth">Time</label>
            <input type="time" id="expmonth" name="time" placeholder="07:00 AM">
        </div>

        <div class="exp-year">
            <label>Date</label>
            <input type="date" id="expyear" name="date">
        </div>
        
        <div class="cvv">
            <label for="cvv">Depositor Phone Number</label>
            <input type="number" id="cvv" name="depositer_number" placeholder="+977-9841000000">
        </div>

         <div class="payment-header">
         
         </div>
        <div class="chkout">
            <input type="submit" name="deposit_submit" value="Submit"> 
        </div>
    
    </form>
</div>

<div id="ESEWA" class="tabcontent">
  <h3>ESEWA</h3>
   <form action="index.php?page=payment" method="POST"> 
   <input type="hidden" name="shid" value="<?php echo $_GET['shid'];?>">
    <label>Transaction ID</label>
    <input type="text" id="transaction_id" name="transaction_id">
    <label>Transaction by</label>
    <input type="text" id="transaction_by" name="transaction_by">
    <label>Remarks (if any..)</label>
    <input type="text" id="transaction_remarks" name="transaction_remarks">
    <input type="submit" name="esewa" value="Pay Through Esewa">
  </form> 
</div>

<div id="Cash" class="tabcontent">
  <h3>Cash</h3>
   <form action="index.php?page=payment" method="POST"> 
   <input type="hidden" name="shid" value="<?php echo $_GET['shid'];?>">
     <label>Name:</label>
    <input type="text" id="delivery_name" name="delivery_name" required>
    <label>Address:</label>
    <input type="text" id="delivery_addr" name="delivery_addr" required>
    <label>Phone:</label>
    <input type="number" id="delivery_phone" name="delivery_phone" required>
    <label>Alternate Phone:</label>
    <input type="number" id="alt_delivery_phone" name="alt_delivery_phone">

    <input type="submit" name="cash_on_deliv" value="Pay Cash On Delivery">


   
  </form>
</div>

</body>