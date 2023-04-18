<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<body class="d-flex justify-content-center align-items-center vh-100" >
    <div class="w-400 p-5 shadow rounded ">
<form method="post" action="back.php">
<div class="mb-3">
   <h3 class="display-4 fs-2 text-center">LOGIN</h3>
  </div>
  <?php if(isset($_GET['error'])){ ?>
  <div class="alert alert-warning" role="alert">
  <?php echo htmlspecialchars($_GET['error']);?>
  <?php }
   if(isset($_GET['name'])){
    $name = $_GET['name'];
   }
   else{
    $name='';
   }
   if(isset($_GET['username'])){
    $username = $_GET['username'];
   }
   else{
    $username='';
   }
  ?>
</div>
  <div class="mb-3">
    <label  class="form-label">name</label>
    <input type="text" name="name" value="<?=$name;?>" class="form-control">
  </div>
  <div class="mb-3">
    <label  class="form-label">username</label>
    <input type="text" name="username" class="form-control" value="<?=$username?>"  >
  </div>
  <button type="submit" name="SUBMIT"class="btn btn-primary">Submit</button>
</form> 
</div>
</body>
</html>