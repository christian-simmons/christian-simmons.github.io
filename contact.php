<?php include "template/header.php"; ?>
<?php include "template/nav.php"; ?>
        </ul>
      </nav>
    </div>
  </div>
<main>
<?php


if(isset($_POST['submit'])){

  //collect form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = htmlspecialchars($_POST['message'], ENT_QUOTES);
$lang = "ENGLISH";

//check name is set
if($name ==''){
    $error[] = 'Name is required';
}

//check for a valid email address
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
     $error[] = 'Please enter a valid email address';
}

//if no errors carry on
if(!isset($error)){

    //set the data of the CSV
    $txt .= "$name, $email, $message, $lang\n";

    # set the file name and create CSV file
    # if you're wondering where this contacts.csv is, it's in my root folder on
    # my webserver.
    $myfile = fopen("../contacts.csv", "a") or die("Unable to open file!");
    fwrite($myfile, $txt);
    fclose($myfile);
    echo "Thanks for submitting! I'll get back to you as soon as I can.";

    
}
}

//if their are errors display them
if(isset($error)){
foreach($error as $error){
    echo "<h3 style='color:#ff0000'>$error</h3><br><br><br>";
}
}
?> 

<?php if(!isset($_POST['submit'])){ ?>

<form action='' method='post' id="contact">
    <label>Name</label><br><input type='text' name='name' value=''>
    <br><label>Email</label><br><input type='text' name='email' value=''>
    <br><label>Message</label><br><textarea name="message" rows="7" cols="60" wrap="soft" style='resize:none;'></textarea>
    <br><br><input type='submit' name='submit' value='Submit'>
</form>
<?php }?>
</main>
<br><br>
  <div class="footer">
    <p>
      simmonschristianr@gmail.com<br>
      138 Gray Ave<br>
      Ames, IA 50014<br>
      <a id="mobile" href="tel:563-528-3835">563 528 3835</a>
      <span id="desktop">563 528 3835</span>
    </p>
  </div>
<?php include "template/footer.php"; ?>
