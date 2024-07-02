<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Admin Dashboard Panel</title>
 
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="script/chart_data.js"></script>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        
        th {
            background-color: #007bff;
            color: white;
        }
        
        td {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="image/Yadgreen Logo.png" alt="logo">
            </div>
            <span class="Goodlook"></span>
        </div>
        <div class="menu-items">
        <?php include 'menu.php'; ?>
        </div>
    </nav>
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
	
            </div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
        </div>
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>
                <div  style=" border-radius: 20px; display: grid; grid-template-columns: auto auto">
                    <!-- Bar Chart -->
                    <div class="task-snapshot">
                        <h2>TASK SNAPSHOT</h2>
                        <div id="bar-chart" style="height: 250x ; width :600px ; background-color:rgb(252, 168, 168) ; margin:10px; border-radius: 20px; padding:20px"> </div>
                    </div>
                   <!-- Pie Chart -->
                   <div class="work-capacity">
                        <h2>WORK vs CAPACITY</h2>
                        <div id="pie-chart" style="height: 250x ; width :600px;  background-color:rgb(252, 168, 168) ; border-radius: 20px; padding:80px"> </div>
                    </div>
                
                </div>
                <div  style=" border-radius: 20px; display: grid; grid-template-columns: auto">
                    <div class="task-allocation">
                        <h2>TASK ALLOCATION</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>EMPLOYEE NAME</th>
                                    <th>Task Allocated</th>
                                    <th>Task Description</th>
                                    <th>Task Status</th>
                                    <th>Due Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ASHIR P</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>OLIVER</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="task-allocation">
                        <h2>Task Completed</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>EMPLOYEE NAME</th>
                                    <th>TASK ALLOCATED</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ASHIR P</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>OLIVER</td>
                                    <td>2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <script src="script/dark_light_script.js"></script>
</body>
</html>
