<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./profile_style.css">
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
                <label for="licence-card">Enter licence no.</label><br>
                <input type="alphanumeric" name="license" id="licence-card" required><br>
                <div id="error1"></div>


                <br>
                <label for="imageL">Upload License Image</label>
                <input type="file" name="license-image" id="imageL" required>
            </div>

            <div class="field">
                <label for="adhaar-card">Enter adhaar or pan no.</label><br>
                <input type="alphanumeric" name="adhaar" id="adhaar-card" required><br>
                <div id="error2"></div>


                <br>
                <label for="imageA">Uplaod Adhaar Image</label>
                <input type="file" name="adhaar-image" id="imageA" required>
            </div>
            
            <button id="submit-button" type="submit" name="submit">Done</button>

        </form>



    </div>





</body>
<script>
    const number = document.getElementById('user-contact');
    const Lno = document.getElementById('licence-card');
    const Ano = document.getElementById('adhaar-card');
    const form = document.getElementById('form');
    const errorElement = document.getElementById('error');
    const errorElement1 = document.getElementById('error1');
    const errorElement2 = document.getElementById('error2');
    const message = 'Invalid Contact Number';
    const message1 = 'Invalid License Number';
    const message2 = 'Invalid Adhaar Number';
    var count = 0;
     form.addEventListener('submit-button',(e)=> {

        const numberValue = number.value.trim();
        const LValue = Lno.value.trim();
        const AValue = Ano.value.trim();

        if(!isContact(numberValue))
            {

                errorElement.innerText = message;
                count = count+1;
            }
        else
        {
            errorElement.innerText = ' ';
        }
        if(!isLicense(LValue))
            {

                errorElement1.innerText = message1;
                count=count+1;
            }
        else
        {
            errorElement1.innerText = ' ';
        }
        if(!isAdhaar(AValue))
            {
                errorElement2.innerText = message2;
                count = count+1;
            }
        else
        {
            errorElement2.innerText = ' ';
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
    function isLicense(Lno)
            {
                return /^(([A-Z]{2}[0-9]{2}\s)|([A-Z]{2}-[0-9]{2}))((19|20)[0-9][0-9])[0-9]{7}$/.test(Lno);
            }
    function isAdhaar(Ano)
    {
        return /^.*\d{4}\s.*\d{4}\s.*\d{4}|s$/.test(Ano);
    }
</script>
</html>
