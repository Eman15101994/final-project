@extends("layouts.app")
@section("mycontent")
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="Learning" content="Html For Beginners">
    <title>contact us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/Sty.css">
    <style>
 body{
    display: block;
    background-image:url("image/q.jpg");
    background-size: auto;
    overflow: hidden;
}
header
{
    overflow: hidden;
    display: inline-block; 


  }
fieldset
{
    background:rgb(188, 59, 147);
    border: 1px solid rgb(73, 69, 69);
    padding: 10px;
    margin-bottom: 20px;
    width:500px;
    margin: 20px auto;
}
h1,h2
{
  color: rgba(57, 41, 146, 0.658);
  font-style: italic;
  font-size: larger;
  font-weight: bolder;
  font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
  
}
.footer
{
    color: aliceblue;
    padding: 10px 0;
    font-size: medium;
    text-align: center;
}
    </style>
</head>
<body>
    
    <form name="Regester" action="e.php" method="post" enctype="multipart/form-data">
        </fieldset>
        <fieldset class="log">
            <h2><b><i>Log In</b></i></h2>
            <label>E_Mail</label>
            <input type="email" name="e_mail"><br/><br>
            <label>Password</label>
        <input type="password" name="password"><br/><br>
        <label>Enter Password Again</label>
        <input type="password" name="password"><br/><br>
        <button type="button">Log In</button>
        <p>Forgot password?</p>
        </fieldset>
    </form>
   
</body>
</html>
@endsection