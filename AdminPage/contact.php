<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
        include_once 'models/showContact.php';

        $showcontacts = new ContactView();
        $contacts = $showcontacts->FillTableRowsWithContact();

    ?>

    <div>
        <table id="tbl" class="table table-border">
            <thead>
                <tr>
                    <th> Name </th>
                    <th> Message </th>
                    <th> Delete </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contacts as $roww){ ?>
                <tr>
                    <td><?php echo $roww['Name']?></td>
                    <td><?php echo $roww['Message'] ?></td>
                    <td><a href="./deleteContact.php?id=<?php echo $roww['Contact_ID'];?>" style="color:#DB565D;">Delete</a>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
    </div>
    <a href="index.php" class="Back"> Go Back </a>
</body>
</html>