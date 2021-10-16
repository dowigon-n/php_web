

<!-- 데이터형 : 정수 integer, 실수 floating-point, 문자열 String, 불 boolean, 배열 array 등이 있다. -->

<?php

    echo "<br>";
    $title1 = "<h2>데이터형 : 정수 integer, 실수 floating-point, 문자열 String, 불 boolean, 배열 array</h2>";
    echo $title1;
    echo "<br>";

    $title2 = "<h2>정수와 실수</h2>";
    echo $title2;
    
    $a = 3769;
    echo "\$a : $a";   // 변수 $a에 정수 3769가 저장되어 $a는 정수형 변수가 된다   
    echo "<br>";       // \$는 기호로 출력하는 이스케이프 문자 (문자열을 출력하라는 의미)

    $a = 126.7;
    echo "\$a : $a";

    echo "<br>";
    echo "<br>";
?>

<?php

    $title3 = "<h2>문자열</h2>";
    echo $title3;

    $title = "<h3>연락처</h3>";
    $name = "홍길동";
    $address = "경기도 성남시 분당구";
    $phone = "010-1234-5678";
    $email = "user@codingschool.biz";

    echo $title;
    echo "이름 : $name<br>";
    echo "주소 : $address<br>";
    echo "전화번호 : $phone<br>";
    echo "이메일 : $email<br><br>";
?>

<?php

    $title4 = "<h2>Boolean</h2>";
    echo $title4;

    $a = true;
    $b = false;

    echo $a;           // ture는 1을 출력한다
    echo "<br>";
    echo $b;           // false는 아무것도 출력하지 않는다. 즉, null 이다. 표현 : "" 또는 null
?>


<?php
    echo "<br>";
    $title5 = "<h2>연산자</h2>";
    echo $title5;

    $title6 = "<h3>1. 산술 연산자</h3>";
    echo $title6;

    $a = 10;
    $b = 5;
    $c = $a + $b;        // 15
    
    $c++;                // 16

    $c = $c + $a;        // 26
    $d = $a + $b * $c;   // 140

    echo "\$d : $d";     // 140
    echo "<br>";

    $a = 5;
    $b = $a % 3;         // 5 % 3 = 2
    $b--;                // 1

    $c = $a - $b;        // 4
    $c = $c - 5;         // -1

    echo "\$c : $c";

    // 승수 :  4**5; 4의 5승
?>

<?php

    $title7 = "<h3>2. 문자열 연결 연산자</h3>";
    echo $title7;
    echo "<br>";

    // .(dot)은 문자열 연결 연산자로 2개 이상의 문자열을 하나로 연결하는 역할을 한다

    $num1 = "010";
    $num2 = "1234";
    $num3 = "5678";
    $phone_number = $num1."-".$num2."-".$num3;
    echo "휴대폰 번호 : $phone_number"."<br>";

    $email1 = "admin";
    $email2 = "codingschool.info";
    $email = $email1."@".$email2;
    echo "이메일 주소 : $email";

    // 정수 1234 와 문자열 "1234"
    // 정수 1234 는 실제 컴퓨터에서 십진수 1234를 이진수로 변환한 값인 10011010010 이고,
    // 문자열 1234 는 문자 1의 이진 코드 00110001, 2의 이진 코드 00110010, 3의 이진 코드 00110011,
    // 4의 이진 코드 00110100 이 하나로 합쳐진 값인 00110001001100100011001100110100 이다 (8자리씩)
?>

<?php

    echo "<br>";
    $title8 = "<h3>3. 대입 연산자</h3>";
    echo $title8;

    
    // 대입 연산자는 변수에 값을 대입할 때 (저장) 사용하는 연산자다

    $a = 5;             // $a에 5를 대입
    echo $a."<br>";
    
    $a += 3;            // $a = $a + 3 과 같다
    echo $a."<br>";

    $a -= 4;            // $a = $a - 4 와 같다
    echo $a."<br>";

    $a /= 4;            // $a = $a / 4 와 같다
    echo $a."<br>";

    $a %= 2;            // $a = $a % 2 와 같다
    echo $a."<br>";

    $a = "딸기";
    $a .= " 주스";      // $a = $a." 주스" 와 같다
    echo $a."<br>";
?>

<?php
    echo "<br>";
    $title9 = "<h3>4. 비교 연산자</h3>";
    echo $title9;

    // ==             $a == 30            $a 가 30 과 같으면 참, 그렇지 않으면 거짓
    // !=             $a != $b            $a 값과 $b 값이 다르면 참, 그렇지 않으면 거짓
    // >              $a > 100            $a 가 100 보다 큰 값이면 참, 그렇지 않으면 거짓
    // <              $a < 300            $a 가 300 보다 작은 값이면 참, 그렇지 않으면 거짓
    // >=             $a >= 50            $a 가 50 보다 크거나 같으면 참, 그렇지 않으면 거짓
    // <=             $a <= 70            $a 가 70 보다 작거나 같으면 참, 그렇지 않으면 거짓
?>

<?php
    $title9 = "<h3>5. 논리 연산자</h3>";
    echo $title9;

    // 논리 연산자도 비교 연산자와 마찬가지로 조건문과 반복문에서 많이 사용한다

    // !         !$a                            $a가 참이면 거짓, 거짓이면 참
    // &&        ($a > 10) && ($a < 20)         $a 가 10보다 크고 20 보다 작으면 참, 그렇지 않으면 거짓
    // ||        ($a > 0 ) || ($b > 0 )         $a 가 0 보다 크거나 $b 가 0 보다 크면 참, 그렇지 않으면 거짓
?>

<?php
    $name = "***";
    $n1 = "###";
    $n2 = "####";
    $addr = "*******************************";
    $email = "######"."@"."####.###";

    echo "-이름 : $name"."<br>";
    echo "-휴대폰 번호 : $n1"."-".$n2."-".$n2."<br>";
    echo "-주소 : $addr"."<br>";
    echo "-이메일 : $email";
    echo "<br>";
?>

<br>
<table border="1">
    <tr><td>이름</td><td>폰번호</td><td>주소</td><td>이메일</td></tr>
    <tr><td><?=$name?></td><td><?=$n1."-".$n2."-".$n2?></td><td><?=$addr?></td><td><?=$email?></td></tr>
</table>

<?php
    echo "<br>";
    $item = array("냉장고", "노트북", "정수기", "프린터", "태블릿", "휴대폰", "커피머신");
?>

<table border="1">
    <tr>
        <th>번호</th>
        <th>항목</th>
    </tr>
    <tr>
        <?php $count = 0;
        foreach($item as $row) : $count += 1 ?>
        <td><?=$count?></td>
        <td><?=$row?></td>
    </tr>
    <?php endforeach; ?>
</table>


<?php
    $child_fee = 5000;             // 청소년 입장료 5000원
    $adult_fee = 8000;             // 성인 입장료 8000원
    $num_child = 3;                // 청소년 3매
    $num_adult = 2;                // 성인 2매

    $total_fee = $child_fee * $num_child + $adult_fee * $num_adult;
    echo "전체 입장료 : $total_fee";

    $money = 3000;
    $price = 800; 
    $item = 3;

    $change = $money - $price * $item;

    echo ("물건 가격 : $price <br>");
    echo ("구매 개수 : $item <br>");
    echo ("지불액 : $money <br>");
    echo ("거스름돈은 $change 원 입니다.<br>");

?>