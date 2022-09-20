<?php
include 'conn.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formstyle.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <style>
    #imgbtn {
        position: absolute;
        height: 40px;
        width: 40px;
        right: 7px;
        top: 7px;
        display: flex;
        cursor: pointer;
    }

    #imgbtn img:hover {
        box-shadow: 0 0 0 10px #000000;
    }
    </style>

</head>

<body>
    <div class="container">
        <script>
        function yesno() {
            let yesno = confirm("Cancel registration ?");
            if (yesno) {
                alert("Registration cancelled");
                window.location.href = "../php/home.php"
            }
        }
        </script>
        <button onclick="yesno()"><img src="../images/x.png" id="imgbtn"></button>

        <header>Health Center</header>
        <form action="form.php" method="POST">
            <div class="form first">
                <div class="img">

                    <script type="text/javascript">
                    /* A jquery function that is used to read the file that is uploaded. */
                    $(function() {
                        $(":file").change(function() {
                            if (this.files && this.files[0]) {
                                var reader = new FileReader();

                                reader.onload = imageIsLoaded;
                                reader.readAsDataURL(this.files[0]);
                            }
                        });
                    });

                    /**
                     * The function imageIsLoaded() is called each time a file is selected using
                     * the file type box and the onchange event handler
                     */
                    function imageIsLoaded(e) {
                        $('#myImg').attr('src', e.target.result);
                        $('#yourImage').attr('src', e.target.result);
                    };
                    </script>

                    <img id="myImg" src="../images/add-image.png" alt="your image" name="pic" height=100 width=100>
                    <input type='file' name="pic" required>
                </div>
                <div class="child-info">
                    <span class="title">Child's Information</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" placeholder="Enter your Firstname" name="fname" required>
                        </div>

                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" placeholder="Enter your Lastname" name="lname" required>
                        </div>

                        <div class="input-field">
                            <label>Age</label>
                            <input type="number" placeholder="Enter your age" name="age" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" name="bday" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gender" required>
                                <option disabled selected hidden>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" placeholder="Enter your Address" name="address" required>
                        </div>
                    </div>
                </div>

                <div class="child-health">
                    <span class="title">Child's Health</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Height</label>
                            <input type="number" placeholder="Enter child's height" name="height" required>
                        </div>

                        <div class="input-field">
                            <label>Weight</label>
                            <input type="number" placeholder="Enter child's weight" name="weight" required>
                        </div>

                        <div class="input-field">
                            <label>Shots</label>
                            <input type="text" placeholder="Enter child's shots" name="shot" required>
                        </div>

                        <div class="input-field">
                            <label>Vitamins</label>
                            <input type="text" placeholder="Enter child's vitamins" name="vit" required>
                        </div>

                        <div class="input-field">
                            <label>Other Medicine</label>
                            <input type="text" placeholder="Enter Other medicine" name="meds" required>
                        </div>

                        <div class="input-field">
                            <label>Medical History</label>
                            <input type="text" placeholder="Enter Medical History" name="medhis" required>
                        </div>

                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
            </div>

            <div class="form second">
                <div class="guardian-info">
                    <span class="title">Guardian Information</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" placeholder="Guardian's Firstname" name="pfname" required>
                        </div>

                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" placeholder="Guardian's Lastname" name="plname" required>
                        </div>

                        <div class="input-field">
                            <label>Civil status</label>
                            <select name="civstatus" required>
                                <option disabled selected hidden>Select status</option>
                                <option>Married</option>
                                <option>Divorced</option>
                                <option>Widowed</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Relationship to child</label>
                            <input type="text" placeholder="Enter relationship to child" name="relate_child" required>
                        </div>

                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" placeholder="Enter your address" name="guardian_add" required>
                        </div>

                        <div class="input-field">
                            <label>Contact Number</label>
                            <input type="number" placeholder="Enter your Number" name="contact" required>
                        </div>


                    </div>
                </div>



                <div class="buttons">
                    <div class="backBtn">
                        <i class="uil uil-navigator"></i>
                        <span class="btnText">Back</span>
                    </div>

                    <button class="submit" name="submit" action = "https://formspree.io/f/mzbwebdg"  >
                        <span class="btnText" type="submit">Analyze</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
            </div>
    </div>
    </form>
    </div>

    <script src="../js/formscript.js"></script>
</body>

</html>

<?php



if (isset($_POST['submit'])) {


    $pic = $_POST['pic'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $bday = $_POST['bday'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $shot = $_POST['shot'];
    $vit = $_POST['vit'];
    $meds = $_POST['meds'];
    $medhis = $_POST['medhis'];
    $pfname = $_POST['pfname'];
    $plname = $_POST['plname'];
    $civstatus = $_POST['civstatus'];
    $relate_child = $_POST['relate_child'];
    $guardian_add = $_POST['guardian_add'];
    $contact = $_POST['contact'];


    $sql = "INSERT INTO `info`(`pic`,`fname`, `lname`, `age`, `bday`, `gender`, `address`, `height`, `weight`, `shot`, `vit`, `meds`, `medhis`, `pfname`, `plname`, `civstatus`, `relate_child`, `guardian_add`, `contact`) VALUES ('$pic','$fname', '$lname', '$age', '$bday', '$gender', '$address', '$height', '$weight', '$shot', '$vit', '$meds', '$medhis', '$pfname', '$plname', '$civstatus', '$relate_child', '$guardian_add', '$contact')";

    if ($conn->query($sql) === true) {
        echo "<script> alert('Registered Successfully!') </script>";
    } else {
        echo "error: " . $sql . "" . mysqli_error($conn);
    }

    mysqli_close($conn);
}



?>