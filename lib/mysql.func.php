<?php
function connect(){
	$conn=mysql_connect(DB_HOST,DB_USER,DB_PWD) or die("数据库连接失败".mysql_errno().":".mysql_error());
	mysql_set_charset(DB_CHARSET);
	mysql_select_db(DB_NAME)or die("指定数据库打开失败");
	return $conn;
}
//
// insert into tb_admin(a,b,c)values('a','b','c');
// 'a','b','c'
$arr=array(a=>'a',b=>'b',c=>'c');
$keys=join(',',array_keys($arr));
// echo $vals="'".join("','",array_values($arr))."'";
function insert($table,$arr){
	$keys=join(',',array_keys($arr));
	$vals="'".join("','",array_values($arr))."'";
	$sql="insert into {$table}($keys) values({$vals})";
// 	echo $sql;
    mysql_query($sql);
    return mysql_insert_id();
}
//
function update($table,$arr){
	
}
insert('tb_admin',$arr);
