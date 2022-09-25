<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
    <style>
        form{
            margin:  25px 200px 0px;
        }
        h1{
            text-align: center;
        }
    </style>
</head>

<body>
    <form method="POST" action="crud.php" enctype="multipart/form-data">
        <h1>crud opration</h1>

        <label for="">firstname</label>
        <input type="text" class="form-control" name="firstname" value="">
       
        <label for="">lastname</label>
        <input type="text" class="form-control" name="lastname" value="">

        <label for="">email</label>
        <input type="email" class="form-control" name="email" value="">

        <label for="">password</label>
        <input type="password" class="form-control" name="password" value="">
        
            <label>
                chose a role :
            </label>
            <select name="role" class="form-control">
                
                <option value="admin">admin</option>
                <option value="user">user</option>
            </select>
            
        Gender:
        <input type="radio" name="gender" value="male">male
        <input type="radio" name="gender" value="female">female <br>
        <label for="">dob</label>
        <input type="date" name="dob">
        <br>
        <label for="">phone number</label>
        <input type="text" class="form-control" name="phoneno" value="">

        <label for="">hobbies</label><br>
        <input type="checkbox"  name="hobbies[]" value="reading">
        <label for="reading"> reading</label><br>

        <input type="checkbox"  name="hobbies[]" value="singing">
        <label for="singing"> singing</label><br>

        <input type="checkbox"  name="hobbies[]" value="acting">
        <label for="acting"> acting</label><br>

        <label for="">address</label>
        <textarea name="address" class="form-control"></textarea>
       
        <label for="">uplode profile photos</label>
        <input type="file" class="form-control-file" id="file" name="image" value="" /> 
       
        <input type="submit" class="btn btn-success" name="submit" value="submit">

    </form>
</body>

</html>