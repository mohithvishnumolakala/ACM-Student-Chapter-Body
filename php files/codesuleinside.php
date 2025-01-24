<?php 

    require_once("codesuleconn.php");
    $query = " select * from codesule";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
			margin-bottom:120px;
        }
        .container {
           height: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin: 0;
            font-size: 24px;
        }
        .dashboard-options {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
			margin-right:150px;
        }
        .option-card {
            height: 200px;
            flex: 0 0 calc(33.33% - 20px);
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin-right:20px; 
			margin-left:10px;
        }
        .option-card h2 {
            margin-top: -10px;
            font-size: 18px;
			margin-bottom:20px;
        }
        .top-section {
            display: flex;
            align-items: center;
            margin-bottom: 50px;
        }
        .top-section a {
            color: #fff;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 5px;
            background-color: #555;
            transition: background-color 0.3s ease;
            margin-right: 10px; 
        }
        .top-section a:hover {
            background-color: #333;
        }
		.top-section a.no-underline {
            text-decoration: none;
        }
        .option-card a.no-underline {
            text-decoration: none; 
        }
    </style>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"/>
    <title>View Records</title>
</head>
<body class="bg-dark">
<header class="header">
        <h1>Codesule Registered Student Details</h1>
        <div class="top-section">
            <a href="http://localhost/loginwindow.html" class="home-link"><i class="ri-home-line"></i> Home</a> 
            <a href="login.html" class="logout-link"><i class="ri-login-box-line"></i> Logout</a> 
        </div>
    </header>
             
        
<div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <td> RollNo  </td>
                                <td> College </td>
                                
                                
                               
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $UserID = $row['RollNo'];
                                        $UserName = $row['College'];
                                       
                            ?>
                                    <tr>
                                        <td><?php echo $UserID ?></td>
                                        <td><?php echo $UserName ?></td>
                                        
                                       
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>

        
    
</body>
</html>