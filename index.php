<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <form class="container bg-white" style="max-width: 475px">
        <h1 class="pt-4 ms-4"><span class="text-info">|</span> E-classe</h1>
        <h2 class="pt-3 text-center">SIGN IN</h2>
        <div class="opacity-75">
            <p class="pt-3 text-center">Entrer your credentials to access your account</p>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
        <div class="opacity-50">  
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer your email">
        </div>  
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <div class="opacity-50">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrer your password">
          </div>
        </div>
        <div class="d-grid pt-3">
            <a type="submit" href="p2.php" class="btn btn-info text-white">SIGN IN</a>
        </div>
        <p class="text-center mt-3">Forgot your password?<span> <a class="text-info" href="#">Reset password</a> </span> </p>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>