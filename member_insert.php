<?php
    $host = "localhost";
    $user = "***";   // 닷홈 ftp 아이디 입력
    $pw = "***";     // 닷홈 ftp 비밀번호 입력
    $dbName = "***";         // 닷홈 데이터베이스 아이디 입력
    $dbConnect = new mysqli($host, $user, $pw, $dbName);
    $dbConnect->set_charset("utf8");


    $id   = $_POST["id"];
    $pw = $_POST["pw"];
    $name = $_POST["name"];
    $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장W


    $sql = "insert into members(id, pw, regist_day) values('$id', '$pw', '$name', '$regist_day')";
		// members 테이블에 새로운 레코드 삽입

    $result = $dbConnect->query($sql);	// 데이터베이스 실행

    echo "
	      <script>
              alert('회원가입이 완료되었습니다! 로그인해서 이용하시면 됩니다.');
	          location.href = 'index.php'
	      </script>
	  ";

?>