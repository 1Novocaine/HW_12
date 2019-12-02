<?php
try {
$pdo = new PDO ( 'mysql:host=localhost;dbname=new_blog',
				 'erjan',
				 'wakeup'
                );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (Exception $e) {
    echo 'Соединение с базой не установлено<br>';
    echo $e->getMessage();
};
$sql = 'create table if not exists members 
(
	id int auto_increment,
	fullName varchar (255),
	phone varchar(255),
	email varchar (100),
	role int not null, 
	averageMark float,
	subject varchar (255),
	workingDay varchar (255),
	primary key (id)
)
';
$pdo->exec($sql);
echo '<br>';
echo 'База успешно создана.';



