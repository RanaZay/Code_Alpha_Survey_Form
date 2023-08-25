<?php

session_start();
$FirstName = $_REQUEST["FirstName"];
$LastName = $_REQUEST["LastName"];
$Email = $_REQUEST["email"];
$Age = $_REQUEST["Age"];
$Gender = $_REQUEST["Gender"];


$file_extension=pathinfo($_FILES["Resume"]["name"],PATHINFO_EXTENSION);
$file_name="Resume/".$FirstName.$LastName.date("Ymd").".".$file_extension;
move_uploaded_file($_FILES["Resume"]["tmp_name"] ,$file_name);
move_uploaded_file($_FILES["Resume"]["tmp_name"] ,"CV");



?>
<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <title>Code Alpha Survey Form</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="StyleSheet.css" rel="stylesheet">
    <link  rel="shortcut icon" href="images/form.png" type="image">


    <!-- Custom styles for this template -->
    <link href="assets/sign-in.css" rel="stylesheet">
    

</head>


<body>
    <main class="mt-5 form-signin w-100 m-auto">
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col mt-5">

                    <form action="https://formsubmit.co/ranazayed19@gmail.com" method="post">

                        <center>
                            <h1>Welcome <?= $FirstName . " " . $LastName ?></h1>
                            <input type="hidden" aria-label="First name" name="FirstName" class="form-control" value=<?= $FirstName ?>>
                            <input type="hidden" aria-label="Last name" name="LastName" class="form-control" value=<?= $LastName ?>>
                            <input type="hidden" name="email" class=" form-control" id="floatingEmail" value=<?= $Email ?>>
                            <input type="hidden" name="Age" class="form-control" id="floatingAge" value=<?= $Age ?>>
                            <input class="form-check-input" type="hidden" name="Gender" id="inlineRadio1" value=<?=$Gender?>>
                            <input type="hidden" class="form-control" name="CV" id="inputGroupFile02"   value=<?=$file_name?> >
                            <!-- Date of birth -->
                            <div>
                                <input type="date" class="form-control" name="date" id="inputGroupFile02" required>
                                <label class="input-group-text" for="inputGroupFile02">Date of birth</label>

                            </div>
                            <!-- Current Role Selection -->
                            <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="Current Role" required>
                                <option selected>Select your Role</option>
                                <option value="Student">Student</option>
                                <option value="Part time job">Part time job</option>
                                <option value="Full time job">Full time job</option>
                            </select>
                            <br><br>


                            <!-- Rate in Web Development -->
                            <div>
                                <label for="customRange3" class="form-label">
                                    <h6>Rate yourself in web development</h6>
                                </label>
                                <input type="range" class="form-range" min="0" max="5" step="1" id="customRange3" name="Rate">
                            </div>
                            <br><br>

                            <!-- Add comments or suggestions -->
                            <div class="input-group">
                                <span class="input-group-text">Comments or Suggestions</span>
                                <textarea class="form-control" name="Comments or Suggestions" aria-label="With textarea" placeholder="Enter your comments here"></textarea>
                            </div>
                            <br><br>

                
                <!-- Next button -->
                <button class="btn btn-success w-100 py-2" type="submit">Submit</button>
                <p class="mt-5 mb-3 text-body-secondary">&copy; <a href="https://www.linkedin.com/company/codealpha/?originalSubdomain=in" target="_blank">Contact us</a></p>
                </center>
                <input type="hidden" name="_url" value="https://yourdomain.co/contact.html">


                </form>
                </div>
                <div class="col"></div>
            </div>
            

        </div>
        </div>

    </main>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>