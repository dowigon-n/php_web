<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>echo문</title>
</head>
<body>
    <h3>
        <?php
            echo "고양이와 토끼";
        ?>
    </h3>

        <?php
            $filename = "cat.png";
            echo "<img src='$filename'>";
            echo "<br>";

            $filename = "rabbit.jpg";
            echo "<img src='$filename'>";
            echo "<br>";
        ?>

<!-- 문자열이나 echo문의 큰따옴표와 작은따옴표는 차이가 없다 -->

        <?php
            $name = "홍지수";
            echo $name;
            echo "님 반갑습니다.";
            echo "<br>";

            $name = '홍지수';
            echo $name;
            echo '님 반갑습니다.';
            echo "<br>";
        ?>

<!-- 그러나 echo문 안의 "$name"은 변수값이 출력되고 '$name'은 문자열 $name이 출력된다.  -->

        <?php
            $name = "홍지수";
            echo "$name 님 반갑습니다!";
            echo "<br>";

            $name = '홍지수';
            echo '$name 님 반갑습니다!';
            echo "<br>";
        ?>

        <?php
            $name = "안지영";
            echo "$name 님 반갑습니다!";
            echo "<br>";

            $name = "변수문자열붙이면오류";            // 정의되지 않은 변수 오류
            echo "$name님 반갑습니다!";
            echo "<br>";

            $name = "중괄호조치";
            echo "{$name}님 반갑습니다!";
            echo "<br>";
        ?>

        <?php
            //echo "<img src= "cat.png">";          // 문자열 안에 또 문자열 오류
            echo "<img src=\"cat.png\">";   // 또는
            echo "<img src='cat.png'>";     // 로 해야 한다

            // 이때 사용하는 \를 이스케이프(escape) 문자라고 한다.
            // PHP 문자열에서 많이 사용하는 이스케이프 문자는 다음과 같다.
            // \" : "(큰따옴표 기호)
            // \n : 줄바꿈
            // \t : 탭
            // \\ : \(역슬래시 기호)
            // \$ : $(달러 기호)
        ?>

        <?php
            $id = "rubato";
            $name = '루바토';
        ?>

        <h3> 회원정보 </h3>
        <p>- 아이디 : <?=$id?></p>     
        <p>- 이름 : <?=$name?></p>

        <?php
            /* <?=$id?>는 <?php echo $id?> 를 줄여서 표기한 것이고,
               <?=$name?>는 <?php echo $name?> 를 줄여서 표기한 것이다.
            */
        ?>
</body>
</html>