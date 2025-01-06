<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Form</title>
</head>
<body>
    <div class="col-5 mx-auto mt-5 p-3 border border-black">
        <form class=" shadow p-3 mb-5 bg-black rounded" action="student.php" method="POST">
            <h1 class="mx-auto">Student's Form</h1>
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" name="stuID" class="form-control" id="id" placeholder="ID">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="stuName" class="form-control" id="name" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="Gender">Gender</label>
                <select name="gender" id="Gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="score1">Score1</label>
                    <input type="text" name="score1" id="score1" ></div>
                <div class="form-group col-md-4">
                    <label for="score1">Score2</label>
                    <input type="text" name="score2" id="score2"></div>
                <div class="form-group col-md-4">
                    <label for="">score3</label>
                    <input type="text" name="score3" id="score3"></div>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    
</body>
</html>