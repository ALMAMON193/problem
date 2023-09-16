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
                <h5>Print the even number</h5>
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
                    $sum = 0;
                    for ($i = 0; $i <= $number; $i++) {

                        if ($i % 2 == 0) {

                            $sum += $i;
                        }
                    }

                    echo "Sum of even number" . $sum;
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>