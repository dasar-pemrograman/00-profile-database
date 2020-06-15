<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center">New Profile</h1>
        <form action="save_profile.php" method="post" class="form">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="form-group">
                        <label for="full_name"><b>Full Name:</b></label>
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" name="full_name" id="full_name" maxlength="40"
                                value="Wiro Sableng" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email"><b>Email:</b></label>
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" name="email" id="email" maxlength="64"
                                value="wiro@sigurita.com" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <input type="submit" class="btn btn-success" value="Save" />
                        &nbsp;
                        <input type="reset" class="btn btn-secondary" value="Reset" />
                    </div>
                </div>
            </div>
            <input type="hidden" name="action" value="add_profile" />
        </form>
    </div>
</body>

</html>