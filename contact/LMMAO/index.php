<?php

require_once('./Monaka/config.php');
require_once('./Monaka/class/Form.php');

$form = new Form();

?>

<!DOCTYPE html>
<html lang="ja">
<head>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>お問い合わせ | 大阪市西成区のめっき工場、株式会社センショー</title>
  <meta http-equiv="keywords" content="クロム,ニッケル,めっき" />
  <meta name="description" content="当社は、大阪市西成区のめっき工場、株式会社センショーです。創業以来80年に渡り、メーカー様・金属加工業様を中心に、様々な業種に対応しためっき処理をご提供させていただいております。" />

  <!--[if lt IE 9]>
  <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <link rel="shortcut icon" href="../assets/icons/favicon.ico">
  <link type="text/css" rel="stylesheet" href="../assets/css/reset.css" media="all" />
  <link type="text/css" rel="stylesheet" href="../assets/css/cmn.css" media="all" />
  <link type="text/css" rel="stylesheet" href="../assets/css/fixed.css" media="all" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../assets/js/jquery.cmn.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-174508777-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-174508777-1');

</script>

</head>

<body>

	<div id="top"></div>

	<header>
		<div id="header">
			<div id="header_inner">
				<div id="logo">
					<a href="../">株式会社センショー</a>
				</div>


				<nav id="global_navi">
					<div class="telBtn">
						<a href="tel:06-6657-0007">
							<i class="fas fa-phone-volume"></i>
							TEL
						</a>
					</div>
					<div class="menuBtn">
						<label id="nav-open" for="nav-input"><span></span></label>
					</div>
					<ul id="navi_ul">
						<li class="toggle">
							<a href="../company/" class="header-nav-item">会社案内 <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
							<div class="megamenu">
				        <ul class="menu_inner">
									<li><a href="../company/">会社概要</a></li>
									<li><a href="../company/greeting.html">社長あいさつ</a></li>
									<li><a href="../company/policy.html">経営理念</a></li>
									<li><a href="../company/quality.html">品質方針</a></li>
									<li><a href="../company/environment.html">環境方針</a></li>
				        </ul>
				      </div>
						</li>
						<li class="toggle">
							<a href="../plating/" class="header-nav-item">加工技術・設備 <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
							<div class="megamenu">
				        <ul class="menu_inner">
									<li><a href="../plating/nickel.html">ニッケル</a></li>
									<li><a href="../plating/tin.html">スズ</a></li>
									<li><a href="../plating/nickelchrome.html">ニッケルクロム</a></li>
									<li><a href="../plating/hardchrome.html">硬質クロム</a></li>
									<li><a href="../plating/electroless_nickel.html">無電解ニッケル</a></li>
									<li><a href="../plating/equipment.html">設備一覧</a></li>
				        </ul>
				      </div>
						</li>
						<li class="toggle">
							<a href="../recruit/" class="header-nav-item">リクルート <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
							<div class="megamenu">
				        <ul class="menu_inner">
									<li><a href="../recruit/overview.html">募集要項</a></li>
									<li><a href="../recruit/voice.html">先輩社員の声</a></li>
									<li><a href="../recruit/work.html">仕事内容</a></li>
									<li><a href="../recruit/education.html">従業員教育</a></li>
				        </ul>
				      </div>
						</li>
						<li><a href="../news/" class="header-nav-item">新着情報</a></li>
						<li><a href="../contact/" class="header-nav-item">お問い合わせ</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>


	<main id="main_wrap" role="main">

		<div id="pageTitle">
			<div class="pageTitleImg">
				<img src="../assets/images/title/title09.jpg" alt="お問い合わせ" class="">
			</div>
			<div class="titleArea">
				<div class="inner">
					<h1>お問い合わせ</h1>
					<p class="page_en_title">Contact</p>
				</div>
			</div>
			<div class="title_mouse_bg"></div>
		</div>


		<div class="breadcrumbs">
			<div class="wrap">
				<a href="../">HOME</a> > お問い合わせ
			</div>
		</div>


		<section class="shortwrap mt70">

			<h2 class="title1">お問い合わせフォーム</h2>
			<p class="mb20 text-center">必要事項をご記入の上、下記確認ボタンを押して下さい。</p>

			<?php $form->create(); ?>
	      <table class="contact_table">
	        <tbody>
	          <tr>
	            <th>ご用件</th>
	            <td>
	              <div class="input-zone c-radio-list">
									<div class="c-radio-list__item">
										<label class="radio"><input type="radio" name="ご用件[value]" value="お見積り・加工のご相談" class="c-radio"> お見積り・加工のご相談</label>
									</div>
									<div class="c-radio-list__item">
	                  <label class="radio"><input type="radio" name="ご用件[value]" value="採用について" class="c-radio"> 採用について</label>
									</div>
									<div class="c-radio-list__item">
	                  <label class="radio"><input type="radio" name="ご用件[value]" value="その他" class="c-radio"> その他</label>
									</div>
	              </div>
	            </td>
	          </tr>

	          <tr>
	            <th><div class="hissu_cell">お問い合わせ内容<span class="hissu">必須</span></div></th>
	            <td>
	            	<input type="hidden" name="お問い合わせ内容[params]" value="必須">
	              <textarea class="form-control c-textarea" id="naiyou" rows="8" name="お問い合わせ内容[value]"></textarea>
	            </td>
	          </tr>

	          <tr>
	            <th>御社名</th>
	            <td><input type="text" id="shamei" name="御社名[value]" class="form-control c-input" placeholder="例）株式会社 センショー"></td>
	          </tr>

	          <tr>
	            <th><div class="hissu_cell">お名前<span class="hissu">必須</span></div></th>
	            <td><input type="hidden" name="お名前[params]" value="名前">
	            <input type="text" id="tanto" name="お名前[value]" class="form-control c-input w60p" placeholder="例）千田 翔子"></td>
	          </tr>

	          <tr>
	            <th><div class="hissu_cell">ふりがな<span class="hissu">必須</span></div></th>
	            <td><input type="hidden" name="ふりがな[params]" value="必須">
	            <input type="text" id="kana" name="ふりがな[value]" class="form-control c-input w60p" placeholder="例）せんだ しょうこ"></td>
	          </tr>

	          <tr>
	            <th><div class="hissu_cell">メールアドレス<span class="hissu">必須</span></div></th>
	            <td><input type="hidden" name="メールアドレス[params]" value="メールアドレス">
	            <input type="text" id="email" name="メールアドレス[value]" class="form-control c-input" placeholder="例）e-mail@sensyo-ltd.co.jp" ></td>
	          </tr>

	          <tr>
	            <th><div class="hissu_cell">メールアドレス（確認用）<span class="hissu">必須</span></div></th>
	            <td><input type="hidden" name="メールアドレス（確認用）[params]" value="再入力,必須">
	            <input type="text" id="email2" name="メールアドレス（確認用）[value]" class="form-control c-input" placeholder="例）e-mail@sensyo-ltd.co.jp"></td>
	          </tr>

	          <tr>
	            <th><div class="hissu_cell">電話番号<span class="hissu">必須</span></div></th>
	            <td><input type="hidden" name="電話番号[params]" value="電話番号,必須">
	            <input type="text" id="tel" name="電話番号[value]" class="form-control c-input w60p" placeholder="例）06-6657-0007"></td>
	          </tr>

	          <tr>
	            <th>FAX番号</th>
	            <td><input type="text" id="fax" name="FAX番号[value]" class="form-control c-input w60p" placeholder="例）06-6657-0185"></td>
	          </tr>

	          <tr>
	            <th>郵便番号</th>
	            <td><input type="text" id="zip_code" name="郵便番号[value]" class="form-control c-input w60p" placeholder="例）557-0063"></td>
	          </tr>

	          <tr>
	            <th>住所</th>
	            <td><input type="text" id="address" name="住所[value]" class="form-control c-input" placeholder="例）大阪府大阪市西成区南津守5-2-64 センショービル5階"></td>
	          </tr>

	          <tr>
	          	<th>添付ファイル</th>
	            <td>
	            	<?php $form->inputFile("添付ファイル1"); ?>
								<?php $form->inputFile("添付ファイル2"); ?>
	              <?php $form->inputFile("添付ファイル3"); ?>
	            </td>
	          </tr>

	        </tbody>
	      </table>

				<div class="form-group form-btn">
					<div class="input-zone">
						<input type="submit" value="確認画面へ" class="c-submit" />
					</div>
				</div>
	    <?php $form->end(); ?>

		</section>

	</main>


	<div class="marks clearfix">
  <div class="wrap"> 
	<img src="../assets/images/common/foot_takumi.gif" alt="大阪の元気なものづくり企業" class="foot-mark1"> <img src="../assets/images/common/foot_iso9001.jpg" alt="ISO9001" class="foot-mark2"> <img src="../assets/images/common/foot_iso14001.jpg" alt="ISO14001" class="foot-mark3"> <img src="../assets/images/common/foot_leading.jpg" alt="女性活躍リーディングカンパニー" class="foot-mark4"> <img src="../assets/images/common/foot_plus.jpg" alt="男女活き活きプラス認証" class="foot-mark5"> <img src="../assets/images/common/women.jpg" alt="Women Owned" class="foot-mark6"> <a href="https://www.nc-net.or.jp/company/92752/" class="emidas" target="_blank"> <img src="../assets/images/common/emidas.png" alt="エミダスプロ"> </a>
  </div>
	</div>



	<footer id="footer">

		<div class="footer_upper">
			<p class="footlogo"><img src="../assets/images/common/footlogo.png" alt="株式会社センショー"></p>
			<div class="footInfo">
				<p>株式会社センショー</p>
				<p>〒557-0063　大阪府大阪市西成区南津守5-2-64</p>
				<p>TEL 06-6657-0007　/　FAX 06-6657-0185</p>
			</div>
		</div>


		<div id="footer_under">
			<div class="wrap">
				<div class="foot_wrap">
					<h4>会社案内</h4>
					<ul>
						<li><a href="../company/">会社概要</a></li>
						<li><a href="../company/greeting.html">社長あいさつ</a></li>
						<li><a href="../company/policy.html">経営理念</a></li>
						<li><a href="../company/quality.html">品質方針</a></li>
						<li><a href="../company/environment.html">環境方針</a></li>
					</ul>
				</div>

				<div class="foot_wrap">
					<h4>めっき技術・設備</h4>
					<ul>
						<li><a href="../plating/nickel.html">ニッケル</a></li>
						<li><a href="../plating/tin.html">スズ</a></li>
						<li><a href="../plating/nickelchrome.html">ニッケルクロム</a></li>
						<li><a href="../plating/hardchrome.html">硬質クロム</a></li>
						<li><a href="../plating/electroless_nickel.html">無電解ニッケル</a></li>
						<li><a href="../plating/equipment.html">設備一覧</a></li>
					</ul>
				</div>

				<div class="foot_wrap">
					<h4>リクルート</h4>
					<ul>
						<li><a href="../recruit/">募集要項</a></li>
						<li><a href="../recruit/voice.html">先輩社員の声</a></li>
						<li><a href="../recruit/work.html">仕事内容</a></li>
						<li><a href="../recruit/education.html">従業員教育</a></li>
					</ul>
				</div>

				<div class="foot_wrap">
					<h4>CONTENTS</h4>
					<ul>
						<li><a href="../news/">新着情報</a></li>
						<li><a href="../contact/">お問い合わせ</a></li>
						<li><a href="../magazine/">メールマガジン</a></li>
						<li><a href="../privacy/">プライバシーポリシー</a></li>
					</ul>
				</div>
			</div>
		</div>

		<p class="copyright">&copy; 2020 SENSYO CO., LTD.</p>

	  <script type="text/javascript">
<!--
document.write("<img src='//www.nc-net.or.jp/al.php?id=92752&v=2.1&amp;r=" + escape(document.referrer) + "' style=\"height: 1px; width: 1px;\">");
//-->
</script>
<noscript>
<img src='//www.nc-net.or.jp/al.php?id=92752&v=2.1' style="height: 1px; width: 1px;">
</noscript>
</footer>


	<div id="pagetop">
		<a class="hash" href="#top" style="">pagetop</a>
	</div>


</body>
</html>
