<?php

// ensure that the session is enabled
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

// create an empty array
$profiles = [];

// check the session (at $_SESSION global variable) wheter it stores profiles.
if (isset($_SESSION['profiles'])) {
    // when the session does contain profiles use it by replacing the empty array.
    $profiles = $_SESSION['profiles'];
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>All Profiles</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <form action="simple_action.php" method="post" class="form">
            <h1 class="text-center">All Profiles</h1>

            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($profiles)) { ?>
                            <?php $counter = 1; ?>
                            <?php foreach ($profiles as $profile) { ?>
                            <tr>
                                <td><?= $counter++ ?>
                                </td>
                                <td><?= $profile["full_name"] ?>
                                </td>
                                <td><?= $profile["email"] ?>
                                </td>
                                <td>
                                    <a
                                        href="edit_profile.php?action=edit&email=<?= $profile["email"] ?>">ubah</a>&nbsp;|&nbsp;<a
                                        href="delete_profile.php?action=delete&email=<?= $profile["email"] ?>">hapus</a>
                                </td>
                            </tr>
                            <?php } ?>
                            <?php } else { ?>
                            <tr>
                                <td colspan="4"><i>No profiles</i></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
    </div>
</body>

</html>