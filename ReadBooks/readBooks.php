<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="../AdminPage/css/style.css">
</head>
<body>
    <?php
        include_once '../AdminPage/models/showBooks.php';

        $showusers = new BookView();
        $userat = $showusers->FillTableRowsWithBooks();

    ?>

        
    <table id="tbl" class="table table-border">
        <thead>
            <tr>
                <th> Title </th>
                <th> Author </th>
                <th> Photo </th>
                <th> CategoryID </th>
                <th> Read the book </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userat as $roww){ ?>
            <tr>
                <td><?php echo $roww['Title']?></td>
                <td><?php echo $roww['Author'] ?></td>
                <td><?php echo '<img src="../'.($roww['Photo'] ).'" height="50" width="50" />'; ?></td>
                <td><?php echo $roww['Category_ID'] ?></td>
                <td><a href="./readTheBook.php?id=<?php echo $roww['Book_ID'];?>" style="color:#60BEA0;">Read the book</a>
            </tr>
            <?php }?>
        </tbody>
    </table>
</body>
</html>