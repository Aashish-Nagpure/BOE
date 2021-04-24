<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vehicle_style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <title>SetUp | Vehicle Profile</title>
</head>

<body>


    <div class="container">

        <p>Let’s set up your Vehicle profile <br>
            </p>


        <form action="vehicleupload.php" method="post" enctype="multipart/form-data">
            <label for="vehicle-number">Vehicle Number</label><br>
            <input type="text" name="Vnumber" id="vehicle-number" required><br>

            <div class="field">
                <label for="rc-book">upload Vehicle RC Book</label><br>
                <input type="file" name="rc" id="rc-book" required>
            </div>

            <div class="field">
                <label for="insurance-book">Upload insurance documents</label><br>
                <input type="file" name="insurance" id="insurance-book" required><br>
            </div>
            
            <button id="submit-button" name="submit">Done</button>

        </form>



    </div>





</body>

</html>
