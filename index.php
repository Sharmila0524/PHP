<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scala=1.0">
        <title>Registration Form</title>
    </head>
    <h1> blood Donation Camp</h1><head>
        <body bgcolor= #FBB917>
            <div> <h2> registration form</h2></div>
            <form action='connect.php' method="POST">
                <label for="user">Name:</label> <br>
                <input type="text" name="name" required/> 
                <br> <br>
                
                <label for="email">Email:</label> <br>
                <input type="email" name="email" required/>
                <br> <br>


                <label for="phone">Phone:</label> <br>
                <input type="email" name="email" required/>
                <br> <br>
                
                <label for="bground">Blood Group</label> <br>
                <input type="text" name="bgroup" id="bgroup" required/> <br> <br>
                
                <input type='submmit' name='submit' id=" submit" />
            </form>
        </body>
</html>