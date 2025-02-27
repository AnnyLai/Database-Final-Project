<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update DVD Borrow</title>
    <link rel="stylesheet" href="modify.css">
    <style>
        .form-div {
            display: none;
        }
    </style>
</head>
<body>
    <div style="display: flex; align-items: center; justify-content: center; margin: 0;">
        <h2 style="color:#ffffff">更新圖書資料</h2>
    </div>
    <form action="updateDVDBorrow.php" method="post">	
        <table width="500" border="1" bgcolor="#cccccc" align="center">
            <?php
                $user_id = $_GET['user_id'];
                $dvd_id = $_GET['dvd_id'];
                $borrow_date = $_GET['borrow_date'];
                $borrow_date = new DateTime("{$borrow_date}");
                $borrow_date = $borrow_date->format('Y-m-d');
                $return_ddl = $_GET['return_ddl'];
                $return_ddl = new DateTime("{$return_ddl}");
                $return_ddl = $return_ddl->format('Y-m-d');

                // ******** update your personal settings ******** 
                $servername = "140.122.184.129:3310";
                $username = "team4";
                $password = "4pI@3uqfCfzW09Te";
                $dbname = "team4";
        
                // Connecting to and selecting a MySQL database
                $conn = mysqli_connect($servername, $username, $password, $dbname);
        
                if (!$conn->set_charset("utf8")) {
                    printf("Error loading character set utf8: %s\n", $conn->error);
                    exit();
                }
        
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 

                $search_sql = "select * 
                                from dvd_borrow
                                where user_id={$user_id} and dvd_id={$dvd_id} and borrow_date='{$borrow_date}' and return_ddl='{$return_ddl}';";
                $result = $conn->query($search_sql);

                if ($result->num_rows > 0) {
                    $row = mysqli_fetch_assoc($result);
                    echo "<tr>
                            <th>使用者ID</th>
                            <td bgcolor=\"#5b554e\">
                                <input type=\"text\" name=\"user_id\" value=\"{$row["user_id"]}\" required/>
                                <input type=\"hidden\" name=\"user_id_o\" value=\"{$row["user_id"]}\"/>
                            </td>
                        </tr>";
                    echo "<tr>
                            <th>DVD ID</th>
                            <td bgcolor=\"#5b554e\">
                                <input type=\"text\" name=\"dvd_id\" value=\"{$row["dvd_id"]}\" required/>
                                <input type=\"hidden\" name=\"dvd_id_o\" value=\"{$row["dvd_id"]}\"/>
                            </td>
                        </tr>";
                    echo "<tr>
                            <th>館員ID</th>
                            <td bgcolor=\"#5b554e\">
                                <input type=\"text\" name=\"staff_id\" value=\"{$row["staff_id"]}\" required/>
                                <input type=\"hidden\" name=\"staff_id_o\" value=\"{$row["staff_id"]}\"/>
                            </td>
                        </tr>";
                    echo "<tr>
                            <th>借閱日期</th>
                            <td bgcolor=\"#5b554e\">
                                <input  type=\"text\" name=\"borrow_date\" placeholder=\"YYYY-MM-DD\" value=\"{$row["borrow_date"]}\" required>
                                <input  type=\"hidden\" name=\"borrow_date_o\" value=\"{$row["borrow_date"]}\">
                            </td>
                        </tr>";
                    echo "<tr>
                            <th>還書日期</th>
                            <td bgcolor=\"#5b554e\">
                                <input  type=\"text\" name=\"return_ddl\" placeholder=\"YYYY-MM-DD\" value=\"{$row["return_ddl"]}\" required>
                                <input  type=\"hidden\" name=\"return_ddl_o\" value=\"{$row["return_ddl"]}\">
                            </td>
                        </tr>";
                    
                    echo "<tr>
                            <th colspan=\"2\"><input type=\"submit\" value=\"更新\"/></th>  
                        </tr>";
                } else {
                    $message = "資料載入失敗";
                    $location = "update.php?msg=" . urlencode($message);
                    header("Location: " . $location);
                }
            ?>
        </table>
    </form>
</body>
</html>

