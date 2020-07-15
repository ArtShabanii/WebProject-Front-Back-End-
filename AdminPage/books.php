<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        include_once 'models/showBooks.php';

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
                <th> Delete </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userat as $roww){ ?>
            <tr>
                <td><?php echo $roww['Title']?></td>
                <td><?php echo $roww['Author'] ?></td>
                <td><?php echo '<img src="../'.($roww['Photo'] ).'" height="50" width="50" />'; ?></td>
                <td><?php echo $roww['Category_ID'] ?></td>
                <td><a href="./deleteBook.php?id=<?php echo $roww['Book_ID'];?>" style="color:#DB565D;">Delete</a>
            </tr>
            <?php }?>
        </tbody>
    </table>

            <div class="AddForm" id="AddForm">
                <form action="models/insertBook.php" class="signUpForm" method="POST" enctype="multipart/form-data">
			        <h1>Save a Book</h1>
					<input type="text" name="Title" id="Title" placeholder="Title" onblur=""/>
                    <input type="text" name="Author" id="Author" placeholder="Author" onblur=""/>
                    <input type="file" id="image" name="image" accept="image/*" required>
                    <input type="text" name="ReadBook" id="ReadBook" placeholder="BookPath" onblur=""/>
                    <select name="CategoryID" id="CategoryID">
                        <option value="1">Drame</option>
                        <option value="2">Romance</option>
                        <option value="3">History</option>
                        <option value="4">Biography</option>
                        <option value="5">Sci-Fi</option>
                    </select>
                    
                    <button name="AddButton" id="SignUpButton" onclick="">Add Book</button>
                    <a href="index.php" class="Back"> Go Back </a>
                </form>
        </div>
</body>
</html>