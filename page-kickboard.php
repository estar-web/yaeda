<?php
/*
Template Name: kickboard
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/kick.css?<?php echo date_i18n("YmdHis"); ?>" type="text/css" />
<?php wp_head(); ?>
</head>

<body>
	<?php get_header(2); ?>
	<!-- 動画 -->
	<video class="bg_movie" src="<?php echo get_template_directory_uri(); ?>/movie/web.mp4" loop autoplay muted playsinline></video>
	<!-- /動画 -->
	<div class="textfv">
		<div class="textfv_sd">
			<div class="c-pagettl_area">
				<div class="textfv_ttlbox">
					<h1 class="yano">特定小型原動機付自転車について</h1>
				</div>
			</div>
		</div>
		<img class="maru pc" src="<?php echo get_template_directory_uri(); ?>/img/common/textbg_maru.png" alt="">
		<img class="maru sp" src="<?php echo get_template_directory_uri(); ?>/img/common/bg_maru_sp.png" alt="">
	</div>


	<!-- パンくず -->
	<div class="c-inner-l c-p20">
		<ol class="c-bread">
			<li class="aaa"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a><span>&gt;</span></li>
			<li>特定小型原動機付自転車について</li>
		</ol>
	</div>
	<!-- /パンくず -->


	<main class="kick_main">

		<div class="kickboard">
			<div class="top_txt">
				<p>令和5年（2023年）7月1日より、特定小型原動機付自転車の法改正が施行されました。</p>
				<p>ルールを守り、楽しく便利なモビリティライフを満喫ください。</p>
				<p>そこで実証実験を通じて様々な知見を積み、<br>警察関連団体との取り組みが盛んなハセガワモビリティが分かりやすく特定小型原動機付自転車を解説します。</p>
			</div>

			<div class="box table">
				<div class="box_inner">
					<h2>目次</h2>
					<div class="tableLink">
						<a href="#box01">1.&nbsp;電動キックボードの種類について</a>
						<a href="#box02">2.&nbsp;特定小型電動機付自転車の特徴</a>
						<a href="#box03">3.&nbsp;交通ルール</a>
					</div>
					<p class="source">出典:<a href="" target="_blank">特定小型原動機付自転車（いわゆる電動キックボード等）に関する交通ルール等について</a></p>
				</div>
			</div>


			<!-- box01 -->
			<div id="box01">
				<div class="box">
					<div class="box_inner">
						<h2>電動キックボードの<br class="br395s">種類について</h2>
						<p class="topTxt">令和5年7月1日 道路交通法の施行から、公道を走行可能な電動キックボードは2種類になりました。</p>
						<p class="topTxt">
							・一般原動機付自転車<br>
							・特定小型原動機付自転車<br>
							※特例の装備がない機体は車道のみの走行<br>
							※電動サイクルも特定小型原動機付自転車に該当します
						</p>
						<p class="topTxt">以前から公道を走行していた一般原動機付自転車の電動キックボードに、 7月1日より新しく加わったのは特定小型原動機付自転車、特例特定小型原動機付自転車です。</p>
						<p class="topTxt">それぞれの違いは下記画像をご覧ください。</p>
						<img class="img1-1" src="<?php echo get_template_directory_uri(); ?>/img/kick/img1-1.png" alt="YADEA Hasegawa 2023年7月1日施工、道路交通法新区分 電動キックボードの車両区分 【一般原動機付自転車】▶︎法定最高速度:30km/h 通行区分:車道のみ 右折方法:小回り右折(片側二車線以下二段階も右折禁止の場合)、二段階右折(三車線以上且つ二段階右折禁止ではない場合) 運転免許:必要(原付免許) ヘルメットの着用:必要 後写鏡:必要 警音器:必要 尾灯:必要 制御灯:必要 方向指示器:必要 最高速度表示灯:不要 ナンバープレート:必要 自賠責保険:必要  【特定小型原動機付自転車】▶︎法定最高速度:20km/h 通行区分:車道、自転車道、自転車専用通行帯 右折方法:常に二段階右折 運転免許:不要(16歳未満運転不可) ヘルメットの着用:努力義務 後写鏡:不要 警音器:必要(ベル程度でも可) 尾灯:必要 制御灯:必要 方向指示器:必要 最高速度表示灯:必要(緑色点灯) ナンバープレート:必要 自賠責保険:必要  【特例特定小型原動機付自転車】▶︎法定最高速度:6km/h 通行区分:車道、歩道、路側帯（道路標識等により歩道通行不可とされている場合に限る） 右折方法:横断歩道、自転車横断帯を利用（歩行者優先） 運転免許:不要(16歳未満運転不可) ヘルメットの着用:努力義務 後写鏡:不要 警音器:必要(ベル程度でも可) 尾灯:必要 制御灯:必要 方向指示器:必要 最高速度表示灯:必要(緑色点滅) ナンバープレート:必要 自賠責保険:必要  【保安部品なし】公道走行不可（私有地のみ）  ※他社製品では、特例特定小型原動機付自転車が未対応の機種もございます。">
						<div class="flex">
							<div class="leftBox">
								<p>YADEA KS6 PRO(特定原付モデル)&ensp;についてはコチラ</p>
								<a href="https://yadea.jp/lineup/301/">https://yadea.jp/lineup/301/</a>
								<p>KS6 PROは国土交通省認定機関による、性能等確認制度にて適合品と認定されています。</p>
							</div>
							<div class="rightBox">
								<img class="certification" src="<?php echo get_template_directory_uri(); ?>/img/kick/certification.png" alt="特定原付 性能等確認済使 JATA-0007 yadea・KS6PRO-JP">
							</div>
						</div>
					</div>
				</div>
			</div><!-- /box01 -->


			<!-- box02 -->
			<div id="box02">
				<div class="box">
					<div class="box_inner">
						<h2>特定小型電動機付自転車の<br class="br395s">特徴</h2>
						<ul>
							<li>・運転免許 不要（但し16歳未満の運転は不可）</li>
							<li>・ヘルメットの着用は努力義務<br>（法律上ヘルメットを被っていないことで罰則等はないですが、自分の命を守るため被りましょう）</li>
							<li>・特定小型電動機付自転車専用のナンバープレートが必要</li>
							<li>・自賠責保険の加入が必要</li>
							<li>・最高速度20km/hで公道を走行可能</li>
							<li>・最高速度表示灯がついている</li>
						</ul>
						<p>YADEA KS6 PRO(特定原付モデル) の最高速度表示灯は、速度のモードを20km/hと6km/hに切り替え可能です。<br>
							走行中、一目で最高速度がわかる仕様になっています。</p>
						<div class="flex">
							<div class="imgKick">
								<img class="" src="<?php echo get_template_directory_uri(); ?>/img/kick/img2-2.png" alt="">
							</div>
							<div class="imgList"> <img class="" src="<?php echo get_template_directory_uri(); ?>/img/kick/img2-1.jpg" alt="【Sモード】速度:時速20km 最高速度表示灯:点灯 基準:特定小型原付 走行帯(車道、自転車道、自転車専用通行帯) 【ECOモード】速度:時速6km 最高速度表示灯:点滅 特例特定小型原付 走行帯(歩道、路側帯)※自転車走行可の道路に限る">
							</div>
						</div>
						<p class="box02_note">※機体によって最高速度表示灯が光る部分が異なります。<br>
							YADEA KS6 PRO (特定原付モデル)はハンドルの両先が光ります。</p>
					</div>
				</div>
			</div><!-- /box02 -->


			<!-- box03 -->
			<div id="box03">
				<div class="box">
					<div class="box_inner">
						<div class="cont">

							<h2>交通ルール</h2>
							<h3>特定小型電動機付自転車が通行できる場所</h3>
							<h4>車道</h4>
							<span class="point">Point</span>
							<p>原則として左側端に寄って通行しなければならず、右側を通行してはいけません。</p>
							<div class="flex rule_flex">
								<img class="rule" src="<?php echo get_template_directory_uri(); ?>/img/kick/rule1-1.jpg" alt="">
								<img class="rule" src="<?php echo get_template_directory_uri(); ?>/img/kick/rule1-2.jpg" alt="">
							</div>

							<h4>自転車道・自転車専用通行帯</h4>
							<span class="point">Point</span>
							<p>自転車道がある場合、自転車道と車道のどちらでも通行してよいですが、自転車専用通行帯がある場合は、車道を通行してはいけません。<br>
								その場合、自転車専用通行帯を必ず通行しなければいけません。</p>
							<div class="flex rule_flex">
								<img class="rule" src="<?php echo get_template_directory_uri(); ?>/img/kick/rule2-1.jpg" alt="">
								<img class="rule" src="<?php echo get_template_directory_uri(); ?>/img/kick/rule2-2.jpg" alt="">
							</div>

							<div class="signBox signBox01">
								<p class="sign_ttl">通行可能な道の目印となる標識</p>
								<div class="flex sign_flex">
									<img src="<?php echo get_template_directory_uri(); ?>/img/kick/sign1-1.png" alt="特定小型原動機付自転車・自転車専用">
									<img src="<?php echo get_template_directory_uri(); ?>/img/kick/sign1-2.png" alt="普通自転車専用通行帯">
									<img src="<?php echo get_template_directory_uri(); ?>/img/kick/sign1-3.png" alt="特定小型原動機付自転車・自転車一方通行">
								</div>
								<div class="flex sign_flex">
									<img src="<?php echo get_template_directory_uri(); ?>/img/kick/sign1-4.png" alt="一方通行 自転車を除く">
									<img src="<?php echo get_template_directory_uri(); ?>/img/kick/sign1-5.png" alt="車両通行止め 自転車を除く">
								</div>
							</div>

						</div>

						<div class="cont">

							<h3>特例特定小型電動機付自転車のみが通行できる場所</h3>
							<h4>歩道</h4>
							<span class="point">Point</span>
							<p>最高速度6km/hで道路標識等により例外的に通行可能です。</p>
							<div class="signBox signBox02">
								<p class="sign_ttl">通行可能な道の目印となる道路標識</p>
								<div class="flex sign_flex">
									<img src="<?php echo get_template_directory_uri(); ?>/img/kick/sign2-1.png" alt="通行可能な道の目印となる道路標識">
									<img src="<?php echo get_template_directory_uri(); ?>/img/kick/sign2-2.png" alt="特例特定小型原動機付自転車・普通自転車歩道通行可">
									<img src="<?php echo get_template_directory_uri(); ?>/img/kick/sign2-3.png" alt="特例特定小型原動機付自転車・普通自転車の歩道通行部分">
								</div>
							</div>
							<span class="note note01">※通行イメージ</span>
							<div class="flex rule_flex">
								<img class="rule" src="<?php echo get_template_directory_uri(); ?>/img/kick/rule3-1.jpg" alt="">
								<img class="rule" src="<?php echo get_template_directory_uri(); ?>/img/kick/rule3-2.jpg" alt="">
							</div>
							<span class="point">Point</span>
							<p>歩道を通行するときは、その歩道の中央から車道寄りの部分、または普通自転車通行指定部分を通行しなければなりません。</p>
							<span class="point">Point</span>
							<p>歩行者優先です。歩行者の通行を妨げることとなるときは、一時停止しなければいけません。</p>

							<h3 class="h3_01">歩行者の優先</h3>
							<p>横断歩道に近づいたときは、横断する人がいないことが明らかな場合のほかは、その手前で停止することができるように速度を落として進まなければいけません。<br><br>
								また、横断歩道に歩行者がいる場合は、横断歩道の手前（停止線があるときは、停止線の手前）で一時停止をして歩行者に道を譲らなければいけません。<br><br>
								尚、特例の6km/hモードで歩道を走行する場合も、もちろん歩行者優先です。<br>
								危険な走行は避け、電動キックボードを降りて手押ししましょう。</p>
							<span class="note note02">※通行イメージ</span>
							<img class="ill01 pc" src="<?php echo get_template_directory_uri(); ?>/img/kick/ill01.png" alt="">
							<img class="ill01 sp" src="<?php echo get_template_directory_uri(); ?>/img/kick/ill01_sp.png" alt="">

							<h3 class="h3_02">右折の方法</h3>
							<p>信号機がある交差点では、車線の数は関係なく全ての場所で二段階右折をしなければいけません。<br><br>
								また、自動車や一般原動機付自転車は、赤信号や黄信号でも青の矢印の信号によって右折できる場合がありますが、特定小型原動機付自転車はその場合でも進むことはできません。<br><br>
								尚、信号機が設置されていない交差点等では、後方の安全を確かめ、その交差点の手前の側端から30メートルの手前で方向指示器を操作し右折の合図を行い、道路の左端に寄って交差点の向こう側まで直進し十分に速度を落として曲がりましょう。</p>
							<span class="note note03">※通行イメージ</span>
							<img class="ill02" src="<?php echo get_template_directory_uri(); ?>/img/kick/ill02.png" alt="">

							<h3 class="h3_03">駐車が禁止されている場所</h3>
							<ul class="banList">
								<li>・人の乗降、貨物の積卸し、駐車又は自動車の格納、修理のため道路外に設けられた施設場所の道路に接する自動車用の出入口から3メートル以内の部分</li>
								<li>・道路工事が行なわれている当該工事区域の側端から5メートル以内の部分</li>
								<li>・消防用機械器具の置場、消防用防火水槽の側端、又はこれらの道路に接する出入口から5メートル以内の部分</li>
								<li>・消火栓、指定消防水利の標識が設けられている位置、消防用防火水槽の吸水口、吸管投入孔から5メートル以内の部分</li>
								<li>・火災報知機から1メートル以内の部分</li>
							</ul>
							<div class="signBox signBox03">
								<p class="sign_ttl">その他駐車が禁止されている場所の目印となる標識</p>
								<div class="flex sign_flex">
									<img src="<?php echo get_template_directory_uri(); ?>/img/kick/sign3-1.png" alt="駐車禁止">
									<img src="<?php echo get_template_directory_uri(); ?>/img/kick/sign3-2.png" alt="駐車禁止">
									<img src="<?php echo get_template_directory_uri(); ?>/img/kick/sign3-3.png" alt="駐停車禁止">
								</div>
							</div>

						</div>

					</div><!-- box_inner -->
				</div>
			</div><!-- /box03 -->


			<div class="box video">
				<div class="videoTop">
					<p class="videoTtl">交通ルールについてなど、 YouTubeのYADEA JAPAN 公式チャンネルでも詳しく解説しています！<br>
						ぜひご覧ください！</p>
					<div class="videoBox">
						<iframe width="700" height="395" src="https://www.youtube.com/embed/d3bGtN1jE78?si=SnRI-GYtxADbKSg5&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
					</div>
					<a class="video01" href="https://www.youtube.com/channel/UCavTW7Lq1xg2baWBJ-VF5LA" target="_blank">https://www.youtube.com/channel/UCavTW7Lq1xg2baWBJ-VF5LA</a>
				</div>

				<div class="videoBot">
					<h3>PICK UP おすすめ動画</h3>
					<p>【特定原付】7月1日施行のルールを総まとめ！さやぴと一緒に復習しよう！【完全保存版】</p>
					<a href="https://youtu.be/d3bGtN1jE78" target="_blank">https://youtu.be/d3bGtN1jE78</a>
					<p>【特定原付どこ走れる？】さやぴと一緒に勉強しよう！！【警察確認済み】</p>
					<a href="https://youtu.be/G7vf7gzncnQ" target="_blank">https://youtu.be/G7vf7gzncnQ</a>
					<p>【特定原付】道路標識と道路表示をさやぴと一緒に勉強しよう！【警察確認済み】</p>
					<a href="https://youtu.be/yDz8-yng0oY" target="_blank">https://youtu.be/yDz8-yng0oY</a>
				</div>
			</div>

		</div>



	</main>

	<div class="bread_sp">
		<ol class="c-bread c-bread_sp">
			<li class="aaa"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a><span>&gt;</span></li>
			<li>電動キックボードについて</li>
		</ol>
	</div>

	<?php get_footer(); ?>

</body>

</html>