<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./hp_style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <title>SetUp | Profile</title>
</head>

<body>


    <div class="container">

        <div class="set-profile-img">
            <button><i class="fa fa-camera" aria-hidden="true"></i></button>
        </div>

        <p>Let’s set up your profile <br>
            before we start </p>


        <form id="form" action="upload.php" method="post" enctype="multipart/form-data">
            <label for="profile-pic">Upload Profile Picture</label>
            <input type="file" name="profile" id="profile-pic" required><br><br>
            <label for="user-name">Enter name</label><br>
            <input type="text" name="name" id="user-name" required><br><br>


            <label for="user-contact">Contact No</label><br>
            <input type="number" name="contact" id="user-contact" required><br>
            <div id="error"></div>

            <br>

            <label for="user-dob">Date of birth</label><br>
            <input type="date" name="dob" id="user-dob" required><br><br>


            <label for="user-gender">Select Gender</label><br>
            <select name="gender" class="round" id="user-gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select><br>

            <div class="field">





                <label for="imageL">Upload Police ID card</label>
                <input type="file" name="police-image" id="imageP" required>
            </div>

            <button id="submit-button" type="submit" name="submit">Done</button>

        </form>



    </div>





</body>
<script>
    const number = document.getElementById('user-contact');
    const form = document.getElementById('form');
    const errorElement = document.getElementById('error');

    const message = 'Invalid Contact Number';
    var count = 0;
     form.addEventListener('submit-button',(e)=> {

        const numberValue = number.value.trim();


        if(!isContact(numberValue))
            {

                errorElement.innerText = message;
                count = count+1;
            }


         if(count>=1)
             {
                 e.preventDefault();
             }
    })



    function isContact(number)
            {
                return /^((?![0-5]))[0-9]{10}$/.test(number);
            }
</script>
</html>
