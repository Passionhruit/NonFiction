<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>NONFICTION</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/style.css" rel="stylesheet">
<script src="script/script.js" defer></script>
<script src="script/jquery-1.12.3.js"></script>
</head>

<body>
	<div id="shortcut">
		<p><a href="#">포 레스트 바디&핸드케어 런칭 CLICK</a></p>
		<p><a href="#">[공식 온라인 몰 혜택] 무료배송&선물포장, 시향지 키트 경험하기 CLICK</a></p>
	</div>
	<div id="header">
		<div class="gnb">
			<ul>
				<li>
					<a href="#">SHOP</a>
					<ul class="sub">
						<li><a href="#">SHOP ALL</a></li>
						<li><a href="#">NEW PRODUCT</a></li>
						<li><a href="#">PERFUME</a></li>
						<li><a href="#">BODY CARE</a></li>
						<li><a href="#">HAND CARE</a></li>
						<li><a href="#">LIP CARE</a></li>
						<li><a href="#">HOME OBJECT</a></li>
						<li><a href="#">GIFT SET</a></li>
						<li><a href="#">ACC</a></li>
					</ul>
				</li>
				<li>
					<a href="#">ABOUT</a>
					<ul class="sub">
						<li><a href="#">OUR STORY</a></li>
						<li><a href="#">PRESS</a></li>
						<li><a href="#">CAMPAIGN</a></li>
					</ul>
				</li>
				<li>
					<a href="#">STORES</a>
				</li>
				<li>
					<a href="#">CONTACT</a>
				</li>
			</ul>
			<div class="search">
				<form>   
         			<input type="text" placeholder="SEARCH">
     			</form>
			</div>
		</div>
		<div class="aside">
			<ul>
				<li><a href="#">KR</a></li>
                <?php
                    session_start();
                    if(isset($_SESSION["userid"])){
                ?>
				        <li><a href="logout.php">LOGOUT</a></li>
                <?php
                    } else {
                ?>
                        <li><a href="index2.html">LOGIN</a></li>
                <?php
                    }
                ?>
				<li><a href="#">CART</a></li>
			</ul>
		</div>
	</div>
	<div id="header_m">
		<div class="button_m">
				<span></span>
				<span></span>
				<span></span>
		</div>
		<div class="logo_m">
			<a href="index.html"><img src="img/half_logo.svg" alt="하프로고"></a>
		</div>
		<div class="bag_m">
			<a href="#"><img src="img/bag.svg" alt="bag"></a>
		</div>
		<div class="gnb_m">
			<ul>
				<li>
					<a href="#">SHOP</a>
					<ul class="sub">
						<li><a href="#">SHOP ALL</a></li>
						<li><a href="#">NEW PRODUCT</a></li>
						<li><a href="#">PERFUME</a></li>
						<li><a href="#">BODY CARE</a></li>
						<li><a href="#">HAND CARE</a></li>
						<li><a href="#">LIP CARE</a></li>
						<li><a href="#">HOME OBJECT</a></li>
						<li><a href="#">GIFT SET</a></li>
						<li><a href="#">ACC</a></li>
					</ul>
				</li>
				<li>
					<a href="#">ABOUT</a>
					<ul class="sub">
						<li><a href="#">OUR STORY</a></li>
						<li><a href="#">PRESS</a></li>
						<li><a href="#">CAMPAIGN</a></li>
					</ul>
				</li>
				<li>
					<a href="#">STORES</a>
				</li>
				<li>
					<a href="#">CONTACT</a>
				</li>
			</ul>
			<div class="search">
				<form>   
         			<input type="text" placeholder="SEARCH">
     			</form>
			</div>
			<div class="aside">
				<ul>
					<li><a href="#">LOGIN</a></li>
					<li><a href="#">CART</a></li>
					<li><a href="#">KR</a></li>
				</ul>
			</div>
			
			</div>
		</div>
	</div>
	<div id="main">
		<div class="np">
			<a href="#">
				<img src="img/이미지1.jpg" alt="새제품">
				<span>New Product</span>
			</a>
		</div>
		<wrap>
			<div class="bp">
				<a href="#">
					<img src="img/이미지2.jpg" alt="종이">
					<span>Blotter Paper</span>
				</a>
			</div>
			<div class="gs">
				<a href="#">
					<img src="img/이미지3.jpg" alt="선물세트">
					<span>Gift Set</span>
				</a>
			</div>
		</wrap>
		<div class="fr">
			<a href="#">
				<img src="img/이미지4.jpg" alt="휴식">
				<span>For Rest</span>
			</a>
		</div>
		<div class="sa">
			<a href="#">
				<img src="img/이미지5.jpg" alt="샵">
				<span>Shop All</span>
			</a>
		</div>
		<wrap>
			<div class="pf">
				<a href="#">
					<img src="img/이미지6.jpg" alt="향수">
					<span>Perfume</span>
				</a>
			</div>
			<div class="soap">
				<a href="#">
					<img src="img/이미지7.jpg" alt="비누">
					<span>Soap</span>
				</a>
			</div>
		</wrap>
		<div class="lc">
			<a href="#">
				<img src="img/이미지8.jpg" alt="샵">
				<span>Lip Care</span>
			</a>
		</div>
	</div>
	<div id="footer">
		<hr>
		<wrap>
		<div class="addr">
			<ul>COSTOMER SERVICE
				<li><img src="img/아이콘1.png" alt="전화">1666-7891</li>
				<li><img src="img/아이콘2.png" alt="영업시간">13:30-17:30</li>
				<li><img src="img/아이콘3.png" alt="휴무">토, 일요일 및 공휴일 휴무</li>
			</ul>
			<ul class="container">
				<li><a href="#">이용약관</a>|</li>
				<li><a href="#">개인정보 보호정책</a>|</li>
				<li><a href="#">사업자 정보확인</a></li>
			</ul>
			
		</div>
		<div class="fnb">
			<ul>
				MEMBERSHIP<br>BENEFIT
				<li><a href="#">공식 온라인스토어<br>혜택</a></li>
				<li><a href="#">무료 시향지 신청</a></li>
			</ul>
			<ul>
				INFO
				<li><a href="#">주문조회</a></li>
				<li><a href="#">공지사항</a></li>
				<li><a href="#">자주묻는 질문</a></li>
				<li><a href="#">배송 & 교환/반품</a></li>
			</ul>
			<ul>
				CONTACT US
				<li><a href="#">문의하기</a></li>
				<li><a href="#">대량구매 문의</a></li>
				<li><a href="#">고객 센터</a></li>
				<li><a href="#">매장안내</a></li>
			</ul>
			<ul>
				SOCIAL
				<li><a href="#">Instagram</a></li>
				<li><a href="#">Pinterest</a></li>
				<li><a href="#">Kakao</a></li>
			</ul>
		</div>
		</wrap>
		<div class="footer_m">
			<div class="addr_m">
				<ul>COSTOMER SERVICE
					<li><img src="img/아이콘1.png" alt="전화">1666-7891</li>
					<li><img src="img/아이콘2.png" alt="영업시간">13:30-17:30</li>
					<li><img src="img/아이콘3.png" alt="휴무">토, 일요일 및 공휴일 휴무</li>
				</ul>
				<ul class="container_m">
					<li><a href="#">이용약관</a>|</li>
					<li><a href="#">개인정보 보호정책</a>|</li>
					<li><a href="#">사업자 정보확인</a></li>
				</ul>
			</div>
			<div class="fnb_m">
				<ul>
					MEMBERSHIP BENEFIT
					<li><a href="#">공식 온라인스토어<br>혜택</a></li>
					<li><a href="#">무료 시향지 신청</a></li>
				</ul>
				<ul>
					INFO
					<li><a href="#">주문조회</a></li>
					<li><a href="#">공지사항</a></li>
					<li><a href="#">자주묻는 질문</a></li>
					<li><a href="#">배송 & 교환/반품</a></li>
				</ul>
				<ul>
					CONTACT US
					<li><a href="#">문의하기</a></li>
					<li><a href="#">대량구매 문의</a></li>
					<li><a href="#">고객 센터</a></li>
					<li><a href="#">매장안내</a></li>
				</ul>
				<ul>
					SOCIAL
					<li><a href="#">Instagram</a></li>
					<li><a href="#">Pinterest</a></li>
					<li><a href="#">Kakao</a></li>
				</ul>
			</div>
		</div>
		</div>
	<div class="logo">
		<img src="img/full_logo.svg" alt="로고">
	</div>
</body>
</html>
