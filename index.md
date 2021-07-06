<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Portfolio Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<h1>My Details</h1>
<form action="process.php" method="POST" enctype="multipart/form-data">
  

  <input type="hidden" name="Admission Number" value="02246">

<div class="mb-3">
  <label for="firstname">Enter Your First Name: </label>
  <br><input type="text" name="firstname" class="form-control form-control-sm" class="form-control" required placeholder="John">
  <br>
  <br>
</div>

<div class="mb-3">
  <label for="lastname" class="form-label">Enter Your Last Name: </label>
  <br><input type="text" name="lastname" class="form-control form-control-sm" class="form-control" required placeholder="Doe">
  <br>
  <br>
</div>

<div class="mb-3">
  <label for="firstname"  class="form-label">Enter Your Email: </label>
  <br><input type="Email" name="firstname" class="form-control form-control-sm" class="form-control" required readonly value="JohnDoe@gmail.com">
  <br>
  <br>
</div>

<div class="mb-3">
  <label for="firstname"  class="form-label" >Enter Your Password: </label>
  <br><input type="Password" class="form-control form-control-sm" class="form-control" id="exampleInputPassword1" name="firstname">
  <br>
  <br>
</div>

<!--Checkboxes -->
<label class="form-label">Select your hobbies</label>
<br>
<input type="checkbox" name="Cycling"> Cycling
<br>
<input type="checkbox" name="Soccer"> Playing Soccer
<br>


<!--Textarea -->
<label for="biodata">Tell us more about yourself</label>
<br>
<textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Say Something" cols="25" rows="3" name="biodata"></textarea>


<!--Select options -->
<br>
<label>Select the BBIT Group you are in </label>
<br>
<select name="bbitgroup" class="form-select form-select-sm" aria-label=".form-select-sm example">
    <option value="a1">BBIT A1</option>
    <option value="a2">BBIT A2</option>
    <option value="b1">BBIT B1</option>
    <option value="b2">BBIT B2</option>

</select>
<br>


<!--Files Upload -->
<br>
<label>Select your file to upload</label>
<br>
<input type="file" class="form-control form-control-sm" id="formFileSm" name="userfile" accept=".txt,.xlsx"/>
<br>






<!--Radio Buttons -->
<br>
<label for="Gender">Select Your Gender</label>
<br>
<input type="radio" name="Gender" value="Female"> Male
<br>
<input type="radio" name="Gender" value="Male"> Female
<br>



<!--Submit button -->
  <input type="submit" value="Register" class="btn btn-primary mb-3">

<!--Clear button -->

  <input type="reset" value="Clear Form" class="btn btn-primary mb-3">




</form>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>
</html>
