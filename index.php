<?php
include 'contact.class.php';

$contact = new Contact();
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
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="add.php"><img src="assets/img/add-contact.png" /></a>
                        <ul>
                            <li class="submenu">Add new contact</li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <h1>Contacts</h1>

        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Actions</th>
            </tr>

            <?php
                $list = $contact->getAll();
                foreach($list as $item):
            ?>

            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['email']; ?></td>
                <td class="actions">
                    <a href="edit.php?id=<?php echo $item['id']; ?>"><img id="img-edit" src="assets/img/edit.png"></a>
                    <a href="delete.php?id=<?php echo $item['id']; ?>" onclick="return confirm('Are you sure you want to delete this item?')" ><img id="img-delete" src="assets/img/trash.png"></a>
                </td>
            </tr>

            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>