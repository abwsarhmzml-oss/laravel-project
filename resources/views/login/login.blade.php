

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loigin pag</title>
    <link rel="stylesheet" href="{{asset('css/styl.css')}}">
</head>
<body>
    <div class="formlog">
    <form action="{{ route('login.store') }}" method="POST">
@csrf
        <div class="icon">
            login
        </div>

        <div class="name">
        <label for="name">name</label>
        <input type="text" name="name" id="name" placeholder="Enter your name" required>
       </div>

       <div class="email">
        <label for="emai">email</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" required>
       </div>

       <div class="password">
        <label for="password">password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password" required>
       </div>


       <div class="sub">
        <input type="submit" name="submit" value="signin">
       </div>


    </div>
    </form>

</body>
</html>

