<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5>Print the even number 1-50</h5>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Enter the number</label>
                        <input type="number" class="form-control" placeholder="Enter the number" name="number">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $number = $_POST['number'];
                    for ($i = 1; $i <= $number; $i++) {
                        if ($i % 2 == 0) {
                            echo $i . "<br>";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>