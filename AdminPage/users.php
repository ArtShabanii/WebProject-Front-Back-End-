<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="" method="POST">
        <?php
            include_once 'models/showUsers.php';

            $showusers = new UserView();
            $userat = $showusers->FillTableRowsWithStudents();

        ?>

        
    <table id="tbl" class="table table-border">
        <thead>
            <tr>
                <th> FirstName </th>
                <th> Username </th>
                <th> Email </th>
                <th> RoleID </th>
                <th> Delete </th>
            </tr>
        </thead>
    <tbody>
            <?php foreach ($userat as $roww){ ?>
            <tr>
                <td><?php echo $roww['Name']?></td>
                <td><?php echo $roww['Username'] ?></td>
                <td><?php echo $roww['Email'] ?></td>
                <td><?php echo $roww['RoleID'] ?></td>
                <td><a href="./deleteUser.php?id=<?php echo $roww['User_ID'];?>">Fshij</a>
            </tr>
            <?php }?>
        </tbody>
            </table>
            </form>
            
        <div class="AddForm" id="AddForm">
				<form name="signUpForm" action="models/insertUser.php" method="POST" class="signUpForm">
			        <h1>ADD A USER OR ADMIN</h1>
					<input type="text" name="Name" id="Name" placeholder="Full Name" onblur=""/>
					<input type="text" name="Username" id="Username" placeholder="Username" onblur=""/>
					<input type="email" name="Email" id="Email" placeholder="Email" onblur=""/>
					<input type="password" name="Password" id="Password" placeholder="Password" onblur=""/>
                    <select name="RoleID" id="RoleID">
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                    </select>
                    </br>
                    <button name="AddButton" id="SignUpButton" onclick="">Add User</button>
                    <a href="index.php" class="Back"> Go Back </a>
		        </form>
        </div>
        <div>
            
        </div>
</body>
</html>