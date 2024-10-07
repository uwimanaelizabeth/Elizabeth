<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud oparations</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <a href="select.php"><button class="btn btn-warning">List Of trainee</button></a><br><br>
       <div class="row">
        <div class="card bg-info col-lg-4">
            <div class="card-header">
                <h3 class="text-white">Crud Oparation</h3>
            </div>
            <div class="card-body">
                <form action="insert.php" method="POST">
                    <div class="form-group">
                        <label for="">Names</label>
                        <input type="text" name="names" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Telephone</label>
                        <input type="tel" name="telephone" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" id="" class="form-control">
                    </div>
                
            </div>
            <div class="card-footer">
                <div class="form-group">
                    <input type="submit" value="Insert" name="save" class="btn btn-danger col-lg-12">
                </div>
            </div>
            </form>
        </div>
       </div>
    </div>
</body>
</html>