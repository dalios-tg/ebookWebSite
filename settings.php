<?php
include("login/php/userData.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="login/css/style.css">
    <link rel="stylesheet" href="settingsStyle.css">
    <script src="js/settingsScripts.js"></script>

    <link rel="icon" type="image/png" href="assets/icon.png">
    <title>ZipBooks|Settings</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg  bg-white fixed-top " id="navbar" aria-label="Offcanvas navbar large">
        <div class="container-fluid">
            <a href="home.php">
                <img src="assets/logo.png" alt="logo de site web " class="mainNavLogo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2"
                aria-controls="offcanvasNavbar2">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-white" tabindex="-1" id="offcanvasNavbar2"
                aria-labelledby="offcanvasNavbar2Label">
                <div class="offcanvas-header">
                    <img src="assets/logo.png" alt="logo de site web" class="logo"></a>

                    <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="home.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacts">Contact</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="login/login.php">Login</a>
                        </li> -->
                        <li class="nav-item">

                            <div class="btn-group test">
                                <button type="button" class="dropdown-toggle nav-link active" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-person-lines-fill"></i>
                                    <?php
                            echo $userName;
                            ?>
                                    <!-- Display the user's name with an icon -->
                                </button>
                                <div class="test">
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item nav-link" href="profil.php"><i
                                                class="bi bi-person-fill"></i>
                                            Profile</a>
                                        <a class="dropdown-item nav-link" href="settings.php"><i
                                                class="bi bi-gear-fill"></i>
                                            Settings</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item nav-link" href="login/login.php"><i
                                                class="bi bi-box-arrow-right"></i>
                                            Logout</a>
                                    </div>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="content">
        <section class="section">
            <h2>Change Password</h2>
            <form action="user-settings-php/passwordCheck.php" name="form" method="POST"
                onsubmit="return newPasswordValidation()">
                <div class="field">
                    <input type="password" placeholder="Current Password" autocomplete="off" class="password"
                        name="current_password" id="current_password">
                    <p id="current_passError"></p>
                </div>
                <div class="field">
                    <input type="password" placeholder="New Password" autocomplete="off" class="password"
                        name="newPassword" id="pass">
                    <p id="newPassError"></p>
                </div>

                <div class="field">
                    <input type="password" placeholder="Confirm New Password" autocomplete="off" class="password"
                        id="confirmPass">
                    <p id="newConfirmPassError">
                    </p>
                    <i class='bx bx-hide eye-icon'></i>
                </div>

                <div class="field">

                    <input type="submit" value="Change password" class="button">
                </div>
            </form>
        </section>

        <section class="section">
            <h2>Delete Account</h2>
            <form action="user-settings-php/deleteAccount.php" method="post"
                onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.');">
                <div class="field">

                    <input type="submit" value="Delete my account" class="button">
                </div>
            </form>
        </section>

        <section class="section">
            <h2>Update Profile Information</h2>
            <form action="user-settings-php/updateFullName.php" method="post" onsubmit="return nameValidation()">
                <div class="field">
                    <input type="text" placeholder="Full name" class="input" name="fullName" id="fullName"
                        maxlength="32" />
                    <p id="nameError"></p>

                </div>
                <div class="field">

                    <input type="submit" value="Update Full name" class="button">
                </div>
            </form>
            <form action="user-settings-php/updateDateBirth.php" method="post" onsubmit="return dateValidation()">
                <div class="dateBirth">
                    <div class="field">
                        <label for="dateBirth" class="birth">Date of birth : </label>
                        <input type="date" id="dateBirth" name="dateBirth" />
                        <p id="ageError"></p>
                    </div>
                    <div class="field">

                        <input type="submit" value="Update date of birth" class="button">
                    </div>
            </form>
        </section>
    </div>
</body>

</html>