<!DOCTYPE html>
<html>
<body>
<h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
<form method="post" action = "{{route('register')}}" >
@csrf

  
    

    Name: <input type="text" placeholder="Enter name" name="name" ><br>
    
    Email: <input type="text" placeholder="Enter Email" name="email" ><br>

    company:<input type="text" placeholder="company name" name="company" ><br>

    
    Password: <input type="password" placeholder="Enter Password" name="password" ><br>
   
    <input type="submit"  value="Registerd" ><br>



</form>
</body>
</html>