<body onload="disable();">
  <article class="profile">
    <section class="editprform_container">
      <h2><?php if($data){echo "Update Profile Details";}?><br></h2>
      <div onclick="enable();" class="editbtn"><h5>Edit <i class="fas fa-pen"></i></h5></div>
      <p><?php echo $status; ?></p>
      <form method="post" action="index.php?page=userprofile">
        <div class="uprofilecont">
          <div class="uprofilefname"><label for="firstName">First Name</label></div>
          <div class="uprofilenfamein"><input type="text" id="firstname" name="firstName" value="<?php if($data){echo $data['firstName'];}?>" required placeholder="Client's updated first name.."></div>
          
          <div class="uprofilelname"><label for="lastName">Last Name</label></div>
          <div class="uprofilelnamein"><input type="text" id="lastname" name="lastName" value="<?php if($data){echo $data['lastName'];}?>" required placeholder="Client's updated last name.."></div>

          <div class="uprofilemail"><label for="email">Email</label></div>
          <div class="uprofilemailin"><input type="email" id="email" name="email" value="<?php if($data){echo $data['email'];}?>" required placeholder="Updated Email Address"></div>

          <div class="uprofilesubmit"><input type="submit" id="update" name="Update" value="Update Profile"></div>
          <input type="hidden" name="user_id" value=<?php echo $uid;?>>
        </div>
      </form>
    </section>
  </article>
</body>