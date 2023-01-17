<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KPI-Register-Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/style/style.css">
</head>
<body>
    <div class="register-form">
        <div class="content-area">
            <h4 class="text-center">Khulna Polytechnic Institute</h4>
            <h6 class="text-center">Registration Form</h6>

            <form action="action/register-action.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" value="<?=$_GET?>" name="id" id="id">
                <div>
                    Name: <input type="text" name="name" id="name" class="name" placeholder="Write your name"><br><br>
                    Birth Registration Number: <input type="number" name="brn" id="brn" class="brn" placeholder="Write your Birth Registration Number"><br><br>
                    Father's Name: <input type="text" name="fathersName" id="fathersName" class="fathersName" placeholder="Write your father's name"><br><br>
                    Father's NID Number:<input type="number" name="fnidno" id="fnidno" class="fnidno" placeholder="Write your father's NID number"><br><br>
                    Mother's Name: <input type="text" name="mothersName" id="mothersName" class="mothersName" placeholder="Write your mother's name"><br><br>
                    Mother's NID Number: <input type="number" name="mnidno" id="mnidno" class="mnidno" placeholder="Write your mother's NID number"><br><br>
                    E-mail: <input type="email" name="email" id="email" class="email" placeholder="Write your email"><br><br>
                    Contact Number: <input type="number" name="contact" id="contact" class="contact" placeholder="Write your contact number"><br><br>
                    Preferred Shift: <select name="shift" id="shift" >
                        <option value="1st shift">1st shift</option>
                        <option value="2nd shift">2nd shift</option>
                    </select><br><br>
                    Photo: <input type="file" name="img_url" id="img_url">
                </div>
                <div class="submit">
                    <button type="submit" class="submitBtn">Submit</button>
                </div>                
            </form>
        </div>
        
    </div>


 
</body>
</html> 