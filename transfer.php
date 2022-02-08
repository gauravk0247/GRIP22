<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/navbar.css">
    <title>Spark - Bank</title>
    <style type="text/css">
    button {
        transition: 1.5s;
    }

    button:hover {
        background-color: #616C6F;
        color: white;
    }
    </style>
</head>

<body style="background-color : White;">
    <?php include 'partials/_header.php'; ?>
    <?php include 'partials/_dbconnect.php'; ?>

    <?php
    include 'partials/_dbconnect.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
    ?>


    <div class="container">
        <h2 class="text-center pt-4" style="color : yellowgreen;">Transfer Money</h2>
        <br>
        <div class="row">
            <div class="col">
                <div class="table-responsive-sm">
                    <table class="table table-hover table-sm  table-striped table-condensed table-bordered table-light"
                        style="border-color:Black;">
                        <thead style="color : Black;" class="thead-dark">
                            <tr>
                                <th scope="col" class="text-center py-2">#</th>
                                <th scope="col" class="text-center py-2">Name</th>
                                <th scope="col" class="text-center py-2">E-Mail</th>
                                <th scope="col" class="text-center py-2">Balance</th>
                                <th scope="col" class="text-center py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    $cnt=1;
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                            <tr style="color : Black;">
                                <td class="py-2"><?php echo $cnt;; ?></td>
                                <td class="py-2"><?php echo $rows['name']?></td>
                                <td class="py-2"><?php echo $rows['email']?></td>
                                <td class="py-2">Rs. <?php echo $rows['balance']?> /-</td>
                                <td><a href="selectuserdetails.php?id= <?php echo $rows['id'] ;?>"> <button
                                            type="button" class="btn" style="background-color : yellowgreen;"
                                            style="border-radius:0%;">Proceed</button></a></td>
                            </tr>
                <?php
                $cnt=$cnt+1;
                    }
                ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php include 'partials/_footer.php'; ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>