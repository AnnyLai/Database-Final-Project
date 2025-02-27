<?php
include 'session.php';
session_start();
// Check if the user is logged in
if (!isset($_SESSION['ID'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="modify.css">
    <script type="text/javascript" src="alert.js"></script>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-title">
            <img src="lion.png" alt="Icon" class="navbar-icon">獅大圖書館管理系統</div>
        <ul class="nav-list">
            <li><a href="modify.php">首頁</a></li>
            <li><a href="delete.php">刪除資料</a></li>
            <li><a href="update.php">更新資料</a></li>
            <li><a href="create.php">新增資料</a></li>
        </ul>
    </nav>

    <div class="form-div" style="margin-top: 100px;">
        <div style="display: flex; align-items: center; justify-content: center; margin: 0;">
            <h2>新增圖書資料</h2>
        </div>
        <form action="createBook.php" method="post">	
        <table width="500" border="1" bgcolor="#cccccc" align="center">
            <tr>
                <th>ID</th>
                <td bgcolor="#FFFFFF"><input type="text" name="book_id" placeholder="若多於一項則以 ',' 分隔"  /></td>
            </tr>
            <tr>
                <th>ISBN</th>
                <td bgcolor="#FFFFFF"><input type="text" name="ISBN" required/></td>
            </tr>
            <tr>
                <th>書名</th>
                <td bgcolor="#FFFFFF"><input type="text" name="title"  /></td>
            </tr>
            <tr>
                <th>作者</th>
                <td bgcolor="#FFFFFF"><input  type="text" name="author"></td>
            </tr>
            <tr>
                <th>出版社</th>
                <td bgcolor="#FFFFFF"><input  type="text" name="publisher"></td>
            </tr>
            <tr>
                <th>出版日期</th>
                <td bgcolor="#FFFFFF"><input  type="text" name="publish_date" placeholder="YYYY-MM-DD"></td>
            </tr>
            <tr>
                <th>類型</th>
                <td bgcolor="#FFFFFF"><input  type="text" name="genre" placeholder="若多於一項則以 ',' 分隔"></td>
            </tr>
            <tr>
                <th>版本</th>
                <td bgcolor="#FFFFFF"><input  type="text" name="version"></td>
            </tr>
            <tr>
                <th>頁數</th>
                <td bgcolor="#FFFFFF"><input  type="text" name="page_num"></td>
            </tr>
            <tr>
                <th>語言</th>
                <td bgcolor="#FFFFFF"><input  type="text" name="language"></td>
            </tr>
            
            <tr>
            <th colspan="2"><input type="submit" value="新增"/></th>  
            </tr>
        </table>
        </form>
    </div>

    <div class="form-div">
        <div style="display: flex; align-items: center; margin: 0; justify-content: center;">
            <h2>新增DVD資料</h2>
        </div>
        <form action="createDVD.php" method="post">	
        <table width="500" border="1" bgcolor="#cccccc" align="center">
            <tr>
                <th>ID</th>
                <td bgcolor="#FFFFFF"><input type="text" name="dvd_id" placeholder="若多於一項則以 ',' 分隔"  /></td>
            </tr>
            <tr>
                <th>名稱</th>
                <td bgcolor="#FFFFFF"><input type="text" name="title" required /></td>
            </tr>
            <tr>
                <th>演員</th>
                <td bgcolor="#FFFFFF"><input type="text" name="actor"  /></td>
            </tr>
            <tr>
                <th>導演</th>
                <td bgcolor="#FFFFFF"><input  type="text" name="director"></td>
            </tr>
            <tr>
                <th>時長</th>
                <td bgcolor="#FFFFFF"><input  type="text" name="duration"></td>
            </tr>
            <tr>
                <th>上映日期</th>
                <td bgcolor="#FFFFFF"><input  type="text" name="release_date" placeholder="YYYY-MM-DD" required></td>
            </tr>
            <tr>
                <th>類型</th>
                <td bgcolor="#FFFFFF"><input  type="text" name="genre" placeholder="若多於一項則以 ',' 分隔"></td>
            </tr>
            <tr>
                <th>發行公司</th>
                <td bgcolor="#FFFFFF"><input  type="text" name="publish_company" required></td>
            </tr>
            <tr>
                <th>語言</th>
                <td bgcolor="#FFFFFF"><input  type="text" name="language"></td>
            </tr>
            <tr>
            <th colspan="2"><input type="submit" value="新增"/></th>  
            </tr>
        </table>
        </form>
    </div>

    <div class="form-div">
        <div style="display: flex; align-items: center; margin: 0; justify-content: center;">
            <h2>新增書籍借閱紀錄</h2>
        </div>
        <form action="createBookBorrow.php" method="post">	
        <table width="500" border="1" bgcolor="#cccccc" align="center">
            <tr>
                <th>使用者ID</th>
                <td bgcolor="#FFFFFF"><input type="text" name="user_id" required  /></td>
            </tr>
            <tr>
                <th>書籍ID</th>
                <td bgcolor="#FFFFFF"><input type="text" name="book_id" required /></td>
            </tr>
            <tr>
                <th>館員ID</th>
                <td bgcolor="#FFFFFF"><input type="text" name="staff_id"  /></td>
            </tr>
            <tr>
                <th>借閱日期</th>
                <td bgcolor="#FFFFFF"><input  type="text" name="borrow_date" placeholder="YYYY-MM-DD" required></td>
            </tr>
            <tr>
                <th>還書日期</th>
                <td bgcolor="#FFFFFF"><input  type="text" name="return_ddl" placeholder="YYYY-MM-DD" required></td>
            </tr>
            <tr>
            <th colspan="2"><input type="submit" value="新增"/></th>  
            </tr>
        </table>
        </form>
    </div>

    <div class="form-div">
        <div style="display: flex; align-items: center; margin: 0; justify-content: center;">
            <h2>新增DVD借閱紀錄</h2>
        </div>
        <form action="createDVDBorrow.php" method="post">	
        <table width="500" border="1" bgcolor="#cccccc" align="center">
            <tr>
                <th>使用者ID</th>
                <td bgcolor="#FFFFFF"><input type="text" name="user_id" required  /></td>
            </tr>
            <tr>
                <th>DVD ID</th>
                <td bgcolor="#FFFFFF"><input type="text" name="dvd_id" required /></td>
            </tr>
            <tr>
                <th>館員ID</th>
                <td bgcolor="#FFFFFF"><input type="text" name="staff_id"  /></td>
            </tr>
            <tr>
                <th>借閱日期</th>
                <td bgcolor="#FFFFFF"><input  type="text" name="borrow_date" placeholder="YYYY-MM-DD" required></td>
            </tr>
            <tr>
                <th>還書日期</th>
                <td bgcolor="#FFFFFF"><input  type="text" name="return_ddl" placeholder="YYYY-MM-DD" required></td>
            </tr>
            <tr>
            <th colspan="2"><input type="submit" value="新增"/></th>  
            </tr>
        </table>
        </form>
    </div>

    <div class="form-div">
        <div style="display: flex; align-items: center; margin: 0; justify-content: center;">
            <h2>新增書籍預約紀錄</h2>
        </div>
        <form action="createBookRes.php" method="post">	
        <table width="500" border="1" bgcolor="#cccccc" align="center">
            <tr>
                <th>使用者ID</th>
                <td bgcolor="#FFFFFF"><input type="text" name="user_id" required  /></td>
            </tr>
            <tr>
                <th>書籍 ID</th>
                <td bgcolor="#FFFFFF"><input type="text" name="book_id" required /></td>
            </tr>
            <tr>
                <th>序號</th>
                <td bgcolor="#FFFFFF"><input type="text" name="queue"  /></td>
            </tr>
            <tr>
                <th>取書日期</th>
                <td bgcolor="#FFFFFF"><input  type="text" name="estimation_date" placeholder="YYYY-MM-DD" required></td>
            </tr>
            <tr>
            <th colspan="2"><input type="submit" value="新增"/></th>  
            </tr>
        </table>
        </form>
    </div>

    <div class="form-div">
        <div style="display: flex; align-items: center; margin: 0; justify-content: center;">
            <h2>新增DVD預約紀錄</h2>
        </div>
        <form action="createDVDRes.php" method="post">	
        <table width="500" border="1" bgcolor="#cccccc" align="center">
            <tr>
                <th>使用者ID</th>
                <td bgcolor="#FFFFFF"><input type="text" name="user_id" required  /></td>
            </tr>
            <tr>
                <th>DVD ID</th>
                <td bgcolor="#FFFFFF"><input type="text" name="dvd_id" required /></td>
            </tr>
            <tr>
                <th>序號</th>
                <td bgcolor="#FFFFFF"><input type="text" name="queue"  /></td>
            </tr>
            <tr>
                <th>取件日期</th>
                <td bgcolor="#FFFFFF"><input  type="text" name="estimation_date" placeholder="YYYY-MM-DD" required></td>
            </tr>
            <tr>
            <th colspan="2"><input type="submit" value="新增"/></th>  
            </tr>
        </table>
        </form>
    </div>

    <div class="form-div" style="margin-bottom: 40px;">
        <div style="display: flex; align-items: center; margin: 0; justify-content: center;">
            <h2>新增活動資料</h2>
        </div>
        <form action="createAct.php" method="post">	
        <table width="500" border="1" bgcolor="#cccccc" align="center">
            <tr>
                <th>使用者ID</th>
                <td bgcolor="#FFFFFF"><input type="text" name="user_id" required  /></td>
            </tr>
            <tr>
                <th>場地 ID</th>
                <td bgcolor="#FFFFFF"><input type="text" name="room_id" required /></td>
            </tr>
            <tr>
                <th>負責館員ID</th>
                <td bgcolor="#FFFFFF"><input type="text" name="staff_id"  /></td>
            </tr>
            <tr>
                <th>活動名稱</th>
                <td bgcolor="#FFFFFF"><input  type="text" name="activity_name"></td>
            </tr>
            <tr>
                <th>活動日期</th>
                <td bgcolor="#FFFFFF"><input  type="text" name="activity_date" placeholder="YYYY-MM-DD" required></td>
            </tr>
            <tr>
            <th colspan="2"><input type="submit" value="新增"/></th>  
            </tr>
        </table>
        </form>
    </div>
</body>
</html>
