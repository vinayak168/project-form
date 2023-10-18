<?php 
include("config.php");
include('header.html');  

$title = "";
$name = "";
$email = "";
$phone = "";
$date = date( 'd-m-Y');
$time = date( 'h:i:s A', time () );
$servies = "";
$msg = "";
if (isset($_POST["submit"])) {
    
    $title = $_POST['title'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['demo'];
    $time = $_POST['demo2'];
    $servies = $_POST['servies'];
    $recaptchaResponse = $_POST["g-recaptcha-response"];
    $userIp = $_SERVER["REMOTE_ADDR"];

    $request = "https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaResponse}&remoteip={$userIp}";
    $content = file_get_contents($request);
    $json = json_decode($content);
    if ($json->success == "true") {
        $msg = "Hi {$name}, You are {$email} years old!";
        header("location: thankyou.php");
    } else {
        
        $msg = "You have failed to pass recaptcha. What does this means? ROBOT!";
    }

    $query=mysqli_query($con,"insert into info(title,name,email,phone,date,time,servies) values('$title','$name','$email','$phone','$date','$time','$servies')");
   
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css">
    <!-- Google Recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <title>appointment form </title>
</head>
<body class="bg-light py-1" >
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card border shadow-sm bg-white p-3">
                    <div class="card-body">
                        <h3 class="card-title mb-3">form</h3>
                        <p><?php echo $msg; ?></p>
                        <form action="" method="POST">
                        <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?php echo $title; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Enter your name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="e.g. John Doe" value="<?php echo $name; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="e.g. abc@gmail.com" value="<?php echo $email; ?>" required="required">
                            </div>
                            <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">+91</span>
                                    <input type="text" id="phone" class="form-control" maxlength="10" name="phone" value="<?php echo $phone; ?>" placeholder="Contact no" required="required" autofocus>
                            </div>
                            <div class="mb-3" >
                                <label>Date</label><br>
                                <input type="date" id="demo" name="demo" value="<?php echo $date; ?>" required="required" >

                            </div>
                            <div>
                                <label>Time</label><br>
                                <input type="time" id="demo2" name="demo2" value="<?php echo $time; ?>" required="required">
                            </div>
                            <div class="col-sm-4">
                                <label>servies</label><br>
                                <select name="servies"  required="required" class="form-control">
                                <option value="">---select---</option>
                                <option value="Confinement">Confinement</option>
                                <option value="treatments">treatments</option>
                                <option value="procedures">procedures</option>
                                <option value="tests">tests</option>
                                <option value="examinations">examinations</option>

                                </select>
                            </div>
                            <div class="g-recaptcha mb-3" data-sitekey="<?php echo $siteKey; ?>"></div>
                            <button class="btn btn-primary" name="submit" type="submit">Submit Form</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var date = new Date();
       
        var tdate = date.getDate();
        var month = date.getMonth() + 1;
        if(date < 10){
            var tdate = "0"+tdate;
        }
        if(month<10){
            var month = "0"+month;
        }

        var year = date.getUTCFullYear();

        var minDate = year+"-"+month+"-"+tdate;
        document.getElementById("demo").setAttribute('min',minDate);

        console.log(minDate);

    </script>
</body>
</html>
