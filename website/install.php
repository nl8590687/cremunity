<?php

$con = mysqli_connect("localhost","root","123456");
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}

if (mysqli_query($con,"CREATE DATABASE cremunity"))
{
  echo "Database created";
}
else
{
  echo "Error creating database: " . mysqli_error();
}

//选取数据库 cremunity
mysqli_select_db($con,"cremunity");



//创建数据表 users
$sql = "CREATE TABLE users 
(
UserName varchar(15),
LastName varchar(15),
Age int
)";
$r = mysqli_query($con,$sql);
if ($r)
{
	echo '成功';
}
else
{
	echo '失败';
}

//创建数据表 posts
$sql = "CREATE TABLE posts 
(
Title varchar(30),
Content varchar(5000),
Hit int
)";
$r = mysqli_query($con,$sql);
if ($r)
{
	echo '成功';
}
else
{
	echo '失败';
}


//创建存储过程 newPost
$sql = "
#DELIMITER $$
CREATE PROCEDURE newPost(title varchar(30), content varchar(5000))
 BEGIN
  INSERT INTO posts(Title, Content, Hit) VALUES (title,content,0);
  COMMIT;
 END;
";
$r = mysqli_query($con,$sql);
if ($r)
{
	echo '成功';
}
else
{
	echo '失败';
}


//调用存储过程 newPost
$sql = "
call newPost('A Test Post','This is a post for test.');
";
$r = mysqli_query($con,$sql);
if ($r)
{
	echo '成功';
}
else
{
	echo '失败';
}


mysqli_close($con);


?>