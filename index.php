<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
		<link rel="stylesheet" href="./css/normalize.css" />
  	<link rel="stylesheet" href="./css/board.css" />
    <!-- /*<style>
        table{border:1px solid gray; border-collapse:collapse;}
        td{border:1px solid gray;padding:5px;}
    </style>*/ -->
</head>
<body>
	<article class="boardArticle">
		<h3>자유게시판</h3>
		<table>
			<caption class="readHide">자유게시판</caption>
			<thead>
				<tr>
					<th scope="col" class="no">번호</th>
					<th scope="col" class="title">제목</th>
					<th scope="col" class="author">작성자</th>
					<th scope="col" class="date">작성일</th>
					<th scope="col" class="hit">조회</th>
				</tr>
			</thead>

<?php
$conn = mysql_connect("localhost", "root", "");
mysql_query('SET NAMES utf8');
if (!$conn) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
}

if (!mysql_select_db("board")) {
    echo "Unable to select mydbname: " . mysql_error();
    exit;
}

$sql = "SELECT *
        FROM  board
    LIMIT 10";

$result = mysql_query($sql);

if (!$result) {
    echo "Could not successfully run query ($sql) from DB: " . mysql_error();
    exit;
}

if (mysql_num_rows($result) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}

// While a row of data exists, put that row in $row as an associative array
// Note: If you're expecting just one row, no need to use a loop
// Note: If you put extract($row); inside the following loop, you'll
//       then create $userid, $fullname, and $userstatus
echo "<table>";
while ($row = mysql_fetch_assoc($result)) {
    echo "<tr><td>{$row['b_no']}</td><td>{$row['b_title']}</td><td>{$row['b_id']}</td>
		          <td>{$row['b_date']}</td><td>{$row['b_hit']}</td></tr>";
}
echo "</table>";
mysql_free_result($result);

?>
</body>
</html>
