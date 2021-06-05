<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"> </script>
    <title>StudentSave</title>
</head>
</head>
<body>
<div class="container">
        <div class="row" style="margin-top: 45px;">
            <div class="col-md-4 offset-md-4">
                <h4>Student Save</h4>
                <form action="{{ route('saveInformation') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Student Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name">

                        </div>
                        <div class="form-group">
                            <label for="surname">Student surname</label>
                            <input type="text" class="form-control" name="surname" placeholder="Enter surname">
                        </div>
                        <div class="form-group">
                            <label for="department">Department name</label>
                            <input type="text" class="form-control" name="department" placeholder="Enter department name">
                           
                        </div>
                        
                        <br>
                        <button type="submit" class="btn btn-block btn-info">Save</button>
                       
                    </form>
            </div>
        </div>
    </div>
</body>
</html>