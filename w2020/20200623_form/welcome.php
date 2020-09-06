<!DOCTYPE html>
<html lang="ko">
<head>
   <meta http-equiv="X-UA-Compatible" content="IE=Edge">
   <meta charset="UTF-8">
   <title>문서 제목</title>
</head>
<body>
   <?      ?>   <!-- php프로그램의 시작과 끝 -->
   <? echo "HELLO" ?>   <!-- 문자/변수 화면출력 -->
   <? $name = "IMAWSOME"; ?>   <!-- 변수지정 -->
   <? echo $name; ?>   <!-- name변수의 data를 화면에 출력 -->

   <?
      $na = $_GET["name"];
      $mail = $_GET["mail"];
   ?> 

   <p>
      NAME : <? echo $na; ?>
      EMAIL : <? echo $mail; ?>
   </p>
</body>
</html>