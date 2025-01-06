<?php
$id=$_POST['stuID'];
$name=$_POST['stuName'];
$gender=$_POST['gender'];
$score1=$_POST['score1'];
$score2=$_POST['score2'];
$score3=$_POST['score3'];
$total=$score1+$score2+$score3;
$average=$total/3;
$grade= $average>90? 'A':($average>80 ? 'B':($average>70?'C':($average>60?'D':($average>50?'E':'F'))));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="col-5 mx-auto mt-5">
        <table class="table table-hover table-dark text-center">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Score 1</th>
                <th>Score 2</th>
                <th>Score 3</th>
                <th>Total</th>
                <th>Average</th>
                <th>Grade</th>
            </tr>
            <tr>
                <td><?php echo $id ?></td>
                <td><?php echo $name ?></td>
                <td><?php echo $gender ?></td>
                <td><?php echo $score1 ?></td>
                <td><?php echo $score2 ?></td>
                <td><?php echo $score3 ?></td>
                <td><?php echo $total ?></td>
                <td><?php echo $average ?></td>
                <td><?php echo $grade ?></td>

            </tr>

        </table>
    </div>
    
</body>
</html>