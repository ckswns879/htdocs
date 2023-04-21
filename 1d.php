<!DOCTYPE html>
<html lang="eg">
<head>
<meta charset="UTF-8">
<mate http-equiv="X-UA-Compatible" content="IE=edge">
<mate name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<!-- html과 같이사용가능 (소스보기하면보임)-->
    <h1>php start</h1>

    <?php
    //xampp = 웹서버: 아파치, db: mysql, php
    //localhost80 
/*
php주석은 안보임
*/

// 변수선언에 string, int 안해도됨, 대소문자 구분은함
$txt = "ㅎㅇ";   //문자열 
$x =  5;         //정수
$y = 10.5;       //실수

//전역변수
//로컬변수 (지역변수)

$a = 5;
function myTest() { //함수규칙은 비슷함
//    global $a;      // a를 전역변수로 사용하겠다  5로출력
    $a = 3;           // a를 지역변수로 사용하겠다  3으로출력
    echo "변수 a의 출력값은 $a 이다";
    echo "<br>";        //줄바꾸기
}
myTest();



echo "변수 a의 출력값은 $a 이다";
    ?>

</body>
</html>
