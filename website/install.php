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



//创建数据表 userinfo:  user information
$sql = "
CREATE TABLE USERINFO(
`ID` INT(10) NOT NULL  AUTO_INCREMENT PRIMARY KEY,
`NAME` VARCHAR(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
`PASSWORD` VARCHAR(32) NOT NULL
);
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

//创建数据表 categories:  list of categories
$sql = "
CREATE TABLE CATEGORIES(
`CATEGORY` VARCHAR(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL PRIMARY KEY
);
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


//创建数据表 artiinfo:  article information
$sql = "
CREATE TABLE ARTIINFO(
`AID` INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`TITLE` VARCHAR(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
`ID` INT(10), -- author id
`CATEGORY` VARCHAR(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
`CONTENT` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
`TIME` DATETIME NOT NULL,
CONSTRAINT ID_CONS FOREIGN KEY (ID) REFERENCES USERINFO(ID),
CONSTRAINT CATE_CONS FOREIGN KEY (CATEGORY) REFERENCES CATEGORIES(CATEGORY)
);
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


//创建数据表 comminfo:  comment information
$sql = "
CREATE TABLE COMMINFO(
`AID` INT(10) NOT NULL,                   -- article id
`CID` INT(10) NOT NULL,      -- comment id   AUTO_INCREMENT 
`CORR_ID` INT(10) NOT NULL,                 -- the corresponding reply comment id
`ID` INT(10) NOT NULL,
`CONTENT` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
`TIME` DATETIME NOT NULL,
CONSTRAINT CO_CONS PRIMARY KEY(AID,CID),
CONSTRAINT AID_CONS FOREIGN KEY (AID) REFERENCES ARTIINFO(AID),
CONSTRAINT ID2_CONS FOREIGN KEY (ID) REFERENCES USERINFO(ID)
);
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

//创建数据表 BROWSE:  browse records
$sql = "
CREATE TABLE BROWSE(
`ID` INT(10) NOT NULL,
`AID` INT(10) NOT NULL,
`TIME` DATETIME NOT NULL,
CONSTRAINT ID3_CONS FOREIGN KEY (ID) REFERENCES USERINFO(ID),
CONSTRAINT AID2_CONS FOREIGN KEY (AID) REFERENCES ARTIINFO(AID)
);
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


//创建数据表 RECOMMEND:  the list of recommended content
$sql = "
CREATE TABLE RECOMMEND(
`ID` INT(10) NOT NULL,
`AID` INT(10) NOT NULL,
CONSTRAINT ID4_CONS FOREIGN KEY (ID) REFERENCES USERINFO(ID),
CONSTRAINT AID3_CONS FOREIGN KEY (AID) REFERENCES ARTIINFO(AID)
);
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

// ************ 视图部分 *******************


//创建数据视图 N_A:  存放计算皮尔逊相关系数时所用到的各用户各类别文章数
$sql = "
CREATE VIEW N_A(ID,CATEGORY,NUM)   -- 存放计算皮尔逊相关系数时所用到的各用户各类别文章数
     as
        SELECT BROWSE.ID,ARTIINFO.CATEGORY,COUNT(*)
        FROM BROWSE,ARTIINFO
        WHERE BROWSE.AID=ARTIINFO.AID
        GROUP BY BROWSE.ID,ARTIINFO.CATEGORY;
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

// ************** 存储过程部分 ****************


//创建存储过程 ADD_USERINFO
$sql = "
CREATE PROCEDURE ADD_USERINFO(
IN NAME VARCHAR(30),
IN PASSWORD VARCHAR(32)) COMMENT ' 向用户表中添加信息 '
begin
INSERT INTO USERINFO(NAME,PASSWORD)
VALUES(NAME,PASSWORD);
end;
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


//创建存储过程 ADD_CATEGORIES
$sql = "
CREATE PROCEDURE ADD_CATEGORIES(
IN CATEG VARCHAR(10)) COMMENT ' 向类别表中添加信息 '
begin
INSERT INTO CATEGORIES
VALUES(CATEG);
end;
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


//创建存储过程 ADD_ARTIINFO
$sql = "
CREATE PROCEDURE ADD_ARTIINFO(
IN TITLE VARCHAR(30),
IN ID INT(10),
IN CATEGORY VARCHAR(10),
IN CONTENT TEXT) COMMENT ' 向文章表中添加信息 '
begin
INSERT INTO ARTIINFO(TITLE,ID,CATEGORY,CONTENT,TIME)
VALUES(TITLE,ID,CATEGORY,CONTENT,NOW());
end;
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


//创建存储过程 ADD_COMMENT
$sql = "
CREATE PROCEDURE ADD_COMMENT(
IN AID INT(10),
IN CID INT(10),
IN CORR_ID INT(10),
IN ID INT(10),
IN CONTENT TEXT) COMMENT ' 向评价表中添加信息 '
begin
INSERT INTO COMMINFO
VALUES(AID,CID,CORR_ID,ID,CONTENT,NOW());
end;
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


//创建存储过程 ADD_BROWSE
$sql = "
CREATE PROCEDURE ADD_BROWSE(
IN ID INT(10),
IN AID INT(10)) COMMENT ' 向浏览记录表中添加信息 '
begin
INSERT INTO BROWSE
VALUES(ID,AID,NOW());
end;
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


//创建存储过程 ADD_RECOMMEND
$sql = "
CREATE PROCEDURE ADD_RECOMMEND(
IN ID INT(10),
IN AID INT(10)) COMMENT ' 向推荐表中添加信息 '
begin
INSERT INTO RECOMMEND
VALUES(ID,AID);
end;
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


//创建存储过程 QUERY_NUM
$sql = "
CREATE PROCEDURE QUERY_NUM(
IN ID INT(10),
IN CATE VARCHAR(10),
OUT SUM INT ) COMMENT ' 根据用户ID和文章类别查询文章数目 '
begin
SELECT NUM
FROM N_A
WHERE N_A.ID=ID AND N_A.CATEGORY=CATE;
SELECT NUM INTO SUM;
end;
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




// **************** 数据库信息初始化部分 ********************

//调用存储过程 ADD_USERINFO
$sql = "
call ADD_USERINFO('admin','827CCB0EEA8A706C4C34A16891F84E7B');
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


//调用存储过程 ADD_CATEGORIES
$sql = "
call ADD_CATEGORIES('Default');
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


//调用存储过程 ADD_ARTIINFO
$sql = "
call ADD_ARTIINFO('A Test Post',1,'Default','This is a post for test.');
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


//调用存储过程 ADD_COMMENT
$sql = "
call ADD_COMMENT(1,1,0,1,'This is a comment. ');
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