<!DOCTYPE html>
<html>
<head>
    <title>Faculty Search</title>
    <style>
        body {
            text-align: center;
        }

        .header1 {
            background-color: #ff7f50;
            color: white;
            display: flex;
            justify-content: space-between;
            padding: 6px;
        }

        .logo1 {
            margin: 2px 10px;
            width: 180px;
            height: 90px;
            border-radius: 4px;
        }

        .faculty-search {
            text-align: center;
            margin-top: 20px;
        }

        .custom-input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            width: 300px;
            margin: 10px;
            box-sizing: border-box;
        }

        .blue-input {
            
            /* color: white; */
            border-color: #2980b9;
        }

        .search1 {
            font-size: 24px;
            font-weight: bold;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
        }
				.submit-button{
					width:100px;
					background-color:#ff7f50;
					border-width:0;
					border-radius:8px;
					padding:15px;
				}
    </style>
</head>
<body>
<header class="header1">
    <img class="logo1" src="Images/logo.jpg"/>
    <h2 style="margin-top:30px;margin-right: 7px;">Faculty Info</h2>
</header>
<h1 class="faculty-search">Faculty Search</h1>
<form method="post" action="">
    <label for="search" class="search1" id="search">Search Faculty:</label>
    <input type="text" class="custom-input blue-input input-shadow" placeholder="Faculty Name" name="search">
    <input type="submit" name="submit" value="Search" class="submit-button">
</form>
<br>
<?php
// check if form is submitted
if (isset($_POST['submit'])) {
    // connect to database
    $db = mysqli_connect("localhost", "root", "", "school");

    // escape special characters in the search term to prevent SQL injection
    $search = mysqli_real_escape_string($db, $_POST['search']);

    // query to search faculty
    $sql = "SELECT * FROM faculty WHERE name LIKE '%$search%'";

    // execute query and get results
    $result = mysqli_query($db, $sql);

    // check if any result is found
    if (mysqli_num_rows($result) > 0) {
        // display results in a table
        echo "<table>";
        echo "<tr><th>ID</th><th>Username</th><th>Name</th><th>Department</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['username'] . "</td><td>" . $row['name'] . "</td><td>" . $row['department'] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No result found.";
    }

    // close database connection
    mysqli_close($db);
}
?>
</body>
</html>
