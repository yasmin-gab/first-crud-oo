<?php
include 'contact.class.php';

$contact = new Contact();

if(!empty($_GET['id'])) {
    $id = $_GET['id'];

    $info = $contact->getInfo($id);

    if(empty($info['email'])) {
        header("Location: index.php");
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Contacts</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Georama:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
    <header>
        <div class="container-menu" >
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="index.php"><img src="assets/img/home.png" /></a>
                            <ul>
                                <li class="submenu">Home</li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="form" >
            <div class="container-form">
                <h1>Edit</h1>

                <form method="POST" action="edit_submit.php" >
                    <input type="hidden" name="id" value="<?php echo $info['id']; ?>" />
                    
                    <label>Name:
                    <input type="text" name="name" value="<?php echo $info['name']; ?>" autofocus autocomplete="off"/>
                    </label>

                    <label>E-mail:
                    <input type="email" name="email" value="<?php echo $info['email']; ?>" />
                    </label>

                    <input type="submit" value="Save" />
                </form>
            </div>
        </div>
    </div>
</body>
</html>