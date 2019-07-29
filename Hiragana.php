<!DOCTYPE html>
<html>
	<head>
		<title>Hiragana teacher</title>
		<link rel="stylesheet" type="text/css" href="Hiragana.css">
		<script src="Hiragana.js"></script>
		<h1>Hiragana set</h1>
	</head>
	<body>
		<p>
		Hover to see how to draw.<br/>
		Click for sound.<br/>
		Scroll down for quiz
		</p>
		<audio id="a" src="Sounds\a.mp3" preload="auto"></audio>
		<audio id="i" src="Sounds\i.mp3" preload="auto"></audio>
		<audio id="u" src="Sounds\u.mp3" preload="auto"></audio>
		<audio id="e" src="Sounds\e.mp3" preload="auto"></audio>
		<audio id="o" src="Sounds\o.mp3" preload="auto"></audio>
		<audio id="ka" src="Sounds\ka.mp3" preload="auto"></audio>
		<audio id="ki" src="Sounds\ki.mp3" preload="auto"></audio>
		<audio id="ku" src="Sounds\ku.mp3" preload="auto"></audio>
		<audio id="ke" src="Sounds\ke.mp3" preload="auto"></audio>
		<audio id="ko" src="Sounds\ko.mp3" preload="auto"></audio>
		<audio id="sa" src="Sounds\sa.mp3" preload="auto"></audio>
		<audio id="si" src="Sounds\si.mp3" preload="auto"></audio>
		<audio id="su" src="Sounds\su.mp3" preload="auto"></audio>
		<audio id="se" src="Sounds\se.mp3" preload="auto"></audio>
		<audio id="so" src="Sounds\so.mp3" preload="auto"></audio>
		<audio id="ta" src="Sounds\ta.mp3" preload="auto"></audio>
		<audio id="ti" src="Sounds\ti.mp3" preload="auto"></audio>
		<audio id="tu" src="Sounds\tu.mp3" preload="auto"></audio>
		<audio id="te" src="Sounds\te.mp3" preload="auto"></audio>
		<audio id="to" src="Sounds\to.mp3" preload="auto"></audio>
		<audio id="na" src="Sounds\na.mp3" preload="auto"></audio>
		<audio id="ni" src="Sounds\ni.mp3" preload="auto"></audio>
		<audio id="nu" src="Sounds\nu.mp3" preload="auto"></audio>
		<audio id="ne" src="Sounds\ne.mp3" preload="auto"></audio>
		<audio id="no" src="Sounds\no.mp3" preload="auto"></audio>
		<audio id="ha" src="Sounds\ha.mp3" preload="auto"></audio>
		<audio id="hi" src="Sounds\hi.mp3" preload="auto"></audio>
		<audio id="hu" src="Sounds\hu.mp3" preload="auto"></audio>
		<audio id="he" src="Sounds\he.mp3" preload="auto"></audio>
		<audio id="ho" src="Sounds\ho.mp3" preload="auto"></audio>
		<audio id="ma" src="Sounds\ma.mp3" preload="auto"></audio>
		<audio id="mi" src="Sounds\mi.mp3" preload="auto"></audio>
		<audio id="mu" src="Sounds\mu.mp3" preload="auto"></audio>
		<audio id="me" src="Sounds\me.mp3" preload="auto"></audio>
		<audio id="mo" src="Sounds\mo.mp3" preload="auto"></audio>
		<audio id="ya" src="Sounds\ya.mp3" preload="auto"></audio>
		<audio id="yu" src="Sounds\yu.mp3" preload="auto"></audio>
		<audio id="yo" src="Sounds\yo.mp3" preload="auto"></audio>
		<audio id="ra" src="Sounds\ra.mp3" preload="auto"></audio>
		<audio id="ri" src="Sounds\ri.mp3" preload="auto"></audio>
		<audio id="ru" src="Sounds\ru.mp3" preload="auto"></audio>
		<audio id="re" src="Sounds\re.mp3" preload="auto"></audio>
		<audio id="ro" src="Sounds\ro.mp3" preload="auto"></audio>
		<audio id="wa" src="Sounds\wa.mp3" preload="auto"></audio>
		<audio id="wo" src="Sounds\wo.mp3" preload="auto"></audio>
		<audio id="n" src="Sounds\n.mp3" preload="auto"></audio>
		<form>
			<table>
				<tbody>
					<tr>
						<td><img onclick="document.getElementById('a').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Japanese_Hiragana_kyokashotai_A.svg/800px-Japanese_Hiragana_kyokashotai_A.svg.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/d/d8/Hiragana_%E3%81%82_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('i').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/f/fa/Japanese_Hiragana_kyokashotai_I.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/c/cf/Hiragana_%E3%81%84_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('u').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/9/90/Japanese_Hiragana_kyokashotai_U.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/7/7f/Hiragana_%E3%81%86_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('e').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/a/a1/It-%E3%81%88.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/4/4f/Hiragana_%E3%81%88_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('o').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/3/3b/Japanese_Hiragana_kyokashotai_O.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/7/7b/Hiragana_%E3%81%8A_stroke_order_animation.gif'></td>
					</tr>
					<tr>
						<td id='romaji'><input type="checkbox" name="characters" value="a">a</td>
						<td id='romaji'><input type="checkbox" name="characters" value="i">i</td>
						<td id='romaji'><input type="checkbox" name="characters" value="u">u</td>
						<td id='romaji'><input type="checkbox" name="characters" value="e">e</td>
						<td id='romaji'><input type="checkbox" name="characters" value="o">o</td>
					</tr>
					<tr>
						<td><img onclick="document.getElementById('ka').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/thumb/b/be/Japanese_Hiragana_kyokashotai_KA.svg/800px-Japanese_Hiragana_kyokashotai_KA.svg.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/9/97/Hiragana_%E3%81%8B_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('ki').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/e/e0/It-%E3%81%8D.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/1/18/Hiragana_%E3%81%8D_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('ku').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/f/fe/Japanese_Hiragana_kyokashotai_KU.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/6/68/Hiragana_%E3%81%8F_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('ke').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/4/4d/Japanese_Hiragana_kyokashotai_KE.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/5/57/Hiragana_%E3%81%91_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('ko').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/f/f3/Japanese_Hiragana_kyokashotai_KO.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/8/83/Hiragana_%E3%81%93_stroke_order_animation.gif'></td>
					</tr>
					<tr>
						<td id='romaji'><input type="checkbox" name="characters" value="ka">ka</td>
						<td id='romaji'><input type="checkbox" name="characters" value="ki">ki</td>
						<td id='romaji'><input type="checkbox" name="characters" value="ku">ku</td>
						<td id='romaji'><input type="checkbox" name="characters" value="ke">ke</td>
						<td id='romaji'><input type="checkbox" name="characters" value="ko">ko</td>
					</tr>
					<tr>
						<td><img onclick="document.getElementById('sa').play()" class="static" src='http://www.i2symbol.com/images/cool-letters/hiragana/hiragana_letter_sa_u3055_icon_256x256.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/7/79/Hiragana_%E3%81%95_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('si').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/Japanese_Hiragana_kyokashotai_SI.svg/120px-Japanese_Hiragana_kyokashotai_SI.svg.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/a/a4/Hiragana_%E3%81%97_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('su').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Japanese_Hiragana_kyokashotai_SU.svg/800px-Japanese_Hiragana_kyokashotai_SU.svg.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/0/05/Hiragana_%E3%81%99_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('se').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Japanese_Hiragana_kyokashotai_SE.svg/800px-Japanese_Hiragana_kyokashotai_SE.svg.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/7/7a/Hiragana_%E3%81%9B_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('so').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Japanese_Hiragana_kyokashotai_SO.svg/120px-Japanese_Hiragana_kyokashotai_SO.svg.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/5/5b/Hiragana_%E3%81%9D_stroke_order_animation.gif'></td>
					</tr>
					<tr>
						<td id='romaji'><input type="checkbox" name="characters" value="sa">sa</td>
						<td id='romaji'><input type="checkbox" name="characters" value="si">si</td>
						<td id='romaji'><input type="checkbox" name="characters" value="su">su</td>
						<td id='romaji'><input type="checkbox" name="characters" value="se">se</td>
						<td id='romaji'><input type="checkbox" name="characters" value="so">so</td>
					</tr>
					<tr>
						<td><img onclick="document.getElementById('ta').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/b/b7/Japanese_Hiragana_kyokashotai_TA.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/9/9a/Hiragana_%E3%81%9F_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('ti').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/a/ad/Japanese_Hiragana_kyokashotai_TI.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/3/32/Hiragana_%E3%81%A1_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('tu').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/c/c9/Japanese_Hiragana_kyokashotai_TU.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/0/08/Hiragana_%E3%81%A4_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('te').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/9/96/Japanese_Hiragana_kyokashotai_TE.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/1/15/Hiragana_%E3%81%A6_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('to').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/0/07/Japanese_Hiragana_kyokashotai_TO.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/6/6e/Hiragana_%E3%81%A8_stroke_order_animation.gif'></td>
					</tr>
					<tr>
						<td id='romaji'><input type="checkbox" name="characters" value="ta">ta</td>
						<td id='romaji'><input type="checkbox" name="characters" value="ti">ti</td>
						<td id='romaji'><input type="checkbox" name="characters" value="tu">tu</td>
						<td id='romaji'><input type="checkbox" name="characters" value="te">te</td>
						<td id='romaji'><input type="checkbox" name="characters" value="to">to</td>
					</tr>
					<tr>
						<td><img onclick="document.getElementById('na').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/7/72/Japanese_Hiragana_kyokashotai_NA.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/8/83/Hiragana_%E3%81%AA_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('ni').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/3/37/Japanese_Hiragana_kyokashotai_NI.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/2/27/Hiragana_%E3%81%AB_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('nu').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/f/fa/Japanese_Hiragana_kyokashotai_NU.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/5/5a/Hiragana_%E3%81%AC_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('ne').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Japanese_Hiragana_kyokashotai_NE.png/120px-Japanese_Hiragana_kyokashotai_NE.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/0/0a/Hiragana_%E3%81%AD_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('no').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/7/71/Japanese_Hiragana_kyokashotai_NO.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/0/05/Hiragana_%E3%81%AE_stroke_order_animation.gif'></td>
					</tr>
					<tr>
						<td id='romaji'><input type="checkbox" name="characters" value="na">na</td>
						<td id='romaji'><input type="checkbox" name="characters" value="ni">ni</td>
						<td id='romaji'><input type="checkbox" name="characters" value="nu">nu</td>
						<td id='romaji'><input type="checkbox" name="characters" value="ne">ne</td>
						<td id='romaji'><input type="checkbox" name="characters" value="no">no</td>
					</tr>
					<tr>
						<td><img onclick="document.getElementById('ha').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/9/9a/Japanese_Hiragana_kyokashotai_HA.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/4/43/Hiragana_%E3%81%AF_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('hi').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/2/24/%E3%81%B2_%E6%95%99%E7%A7%91%E6%9B%B8%E4%BD%93.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/4/40/Hiragana_%E3%81%B2_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('hu').play()" class="static" src='http://www.i2symbol.com/force_download.php?file=images/cool-letters/hiragana/hiragana_letter_hu_u3075_icon_256x256.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/1/1f/Hiragana_%E3%81%B5_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('he').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/f/fe/Japanese_Hiragana_kyokashotai_HE.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/4/40/Hiragana_%E3%81%B8_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('ho').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/6/6c/Japanese_Hiragana_kyokashotai_HO.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/9/96/Hiragana_%E3%81%BB_stroke_order_animation.gif'></td>
					</tr>
					<tr>
						<td id='romaji'><input type="checkbox" name="characters" value="ha">ha</td>
						<td id='romaji'><input type="checkbox" name="characters" value="hi">hi</td>
						<td id='romaji'><input type="checkbox" name="characters" value="hu">hu</td>
						<td id='romaji'><input type="checkbox" name="characters" value="he">he</td>
						<td id='romaji'><input type="checkbox" name="characters" value="ho">ho</td>
					</tr>
					<tr>
						<td><img onclick="document.getElementById('ma').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Japanese_Hiragana_kyokashotai_MA.svg/800px-Japanese_Hiragana_kyokashotai_MA.svg.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/6/65/Hiragana_%E3%81%BE_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('mi').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/6/60/Japanese_Hiragana_kyokashotai_MI.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/d/d7/Hiragana_%E3%81%BF_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('mu').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/f/f3/Japanese_Hiragana_kyokashotai_MU.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/1/1f/Hiragana_%E3%82%80_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('me').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/1/1c/Japanese_Hiragana_kyokashotai_ME.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/5/58/Hiragana_%E3%82%81_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('mo').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/f/f5/Japanese_Hiragana_kyokashotai_MO.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/c/c1/Hiragana_%E3%82%82_stroke_order_animation.gif'></td>
					</tr>
					<tr>
						<td id='romaji'><input type="checkbox" name="characters" value="ma">ma</td>
						<td id='romaji'><input type="checkbox" name="characters" value="mi">mi</td>
						<td id='romaji'><input type="checkbox" name="characters" value="mu">mu</td>
						<td id='romaji'><input type="checkbox" name="characters" value="me">me</td>
						<td id='romaji'><input type="checkbox" name="characters" value="mo">mo</td>
					</tr>
					<tr>	
						<td><img onclick="document.getElementById('ya').play()" class="static" src='http://www.i2symbol.com/images/cool-letters/hiragana/hiragana_letter_small_ya_u3083_icon_256x256.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/0/07/Hiragana_%E3%82%84_stroke_order_animation.gif'></td>
						<td style="background-color: #FF8500;"></td>
						<td><img onclick="document.getElementById('yu').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/c/cc/Japanese_Hiragana_kyokashotai_YU.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/7/78/Hiragana_%E3%82%86_stroke_order_animation.gif'></td>
						<td style="background-color: #FF8500;"></td>
						<td><img onclick="document.getElementById('yo').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/1/10/Japanese_Hiragana_kyokashotai_YO.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/8/80/Hiragana_%E3%82%88_stroke_order_animation.gif'></td>
					</tr>
					<tr>
						<td id='romaji'><input type="checkbox" name="characters" value="ya">ya</td>
						<td style="background-color: #FF8500;"></td>
						<td id='romaji'><input type="checkbox" name="characters" value="yu">yu</td>
						<td style="background-color: #FF8500;"></td>
						<td id='romaji'><input type="checkbox" name="characters" value="yo">yo</td>
					</tr>
					<tr>	
						<td><img onclick="document.getElementById('ra').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Japanese_Hiragana_kyokashotai_RA.png/120px-Japanese_Hiragana_kyokashotai_RA.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/6/6c/Hiragana_%E3%82%89_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('ri').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Japanese_Hiragana_kyokashotai_RI.png/120px-Japanese_Hiragana_kyokashotai_RI.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/9/9f/Hiragana_%E3%82%8A_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('ru').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/c/c5/Japanese_Hiragana_kyokashotai_RU.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/2/26/Hiragana_%E3%82%8B_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('re').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/a/ab/Japanese_Hiragana_kyokashotai_RE.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/6/6c/Hiragana_%E3%82%8C_stroke_order_animation.gif'></td>
						<td><img onclick="document.getElementById('ro').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/7/70/Japanese_Hiragana_kyokashotai_RO.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/3/35/Hiragana_%E3%82%8D_stroke_order_animation.gif'></td>
					</tr>
					<tr>
						<td id='romaji'><input type="checkbox" name="characters" value="ra">ra</td>
						<td id='romaji'><input type="checkbox" name="characters" value="ri">ri</td>
						<td id='romaji'><input type="checkbox" name="characters" value="ru">ru</td>
						<td id='romaji'><input type="checkbox" name="characters" value="re">re</td>
						<td id='romaji'><input type="checkbox" name="characters" value="ro">ro</td>
					</tr>
					<tr>
						<td><img onclick="document.getElementById('wa').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/0/01/Japanese_Hiragana_kyokashotai_WA.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/6/6a/Hiragana_%E3%82%8F_stroke_order_animation.gif'></td>
						<td style="background-color: #FF8500;"></td>
						<td style="background-color: #FF8500;"></td>
						<td style="background-color: #FF8500;"></td>
						<td><img onclick="document.getElementById('wo').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/b/b7/Japanese_Hiragana_kyokashotai_WO.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/6/64/Hiragana_%E3%82%92_stroke_order_animation.gif'></td>
					</tr>
					<tr>
						<td id='romaji'><input type="checkbox" name="characters" value="wa">wa</td>
						<td style="background-color: #FF8500;"></td>
						<td style="background-color: #FF8500;"></td>
						<td style="background-color: #FF8500;"></td>
						<td id='romaji'><input type="checkbox" name="characters" value="wo">wo</td>
					</tr>
					<tr>
						<td><img onclick="document.getElementById('n').play()" class="static" src='https://upload.wikimedia.org/wikipedia/commons/7/77/Japanese_Hiragana_kyokashotai_N.png'><img class="animated-gif" src='https://upload.wikimedia.org/wikipedia/commons/f/f6/Hiragana_%E3%82%93_stroke_order_animation.gif'></td>
						<td style="background-color: #FF8500;"></td>
						<td style="background-color: #FF8500;"></td>
						<td style="background-color: #FF8500;"></td>
						<td style="background-color: #FF8500;"></td>
					</tr>
					<tr>
						<td id='romaji'><input type="checkbox" name="characters" value="n">n</td>
						<td style="background-color: #FF8500;"></td>
						<td style="background-color: #FF8500;"></td>
						<td style="background-color: #FF8500;"></td>
						<td style="background-color: #FF8500;"></td>
					</tr>
				</tbody>
			</table>
		</form>
		<p class=p2>
		The quizzes are below!!!!!!!!!!!!!!!!!!
		</p>
		<p class=p3>Hiragana quiz</p>
		<div class="flex">
			<div class="field">Score</div>
			<div id="score" class="field">0</div>
		</div>
		<div class="flex">
			<div class="field">Question</div>
			<div id="question" class="field"></div>
		</div>
		<div class="flex">
			<div class="field">Answer A</div>
			<button id="answerA" onclick="answerA_clicked()"></button>
		</div>
		<div class="flex">
			<div class="field">Answer B</div>
			<button id="answerB" onclick="answerB_clicked()"></button>
		</div>
		<div class="flex">
			<div class="field">Answer C</div>
			<button id="answerC" onclick="answerC_clicked()"></button>
		</div>	
		<div class="flex">
			<div class="field">Answer D</div>
			<button id="answerD" onclick="answerD_clicked()"></button>
		</div>
		<p class=p3>Romaji quiz</p>
		<div class="flex">
			<div class="field">Score</div>
			<div id="score1" class="field">0</div>
		</div>
		<div class="flex">
			<div class="field">Question</div>
			<div id="question1" class="field"></div>
		</div>
		<div class="flex">
			<div class="field">Answer A</div>
			<button id="answerA1" onclick="answerA_clicked1()"></button>
		</div>
		<div class="flex">
			<div class="field">Answer B</div>
			<button id="answerB1" onclick="answerB_clicked1()"></button>
		</div>
		<div class="flex">
			<div class="field">Answer C</div>
			<button id="answerC1" onclick="answerC_clicked1()"></button>
		</div>	
		<div class="flex">
			<div class="field">Answer D</div>
			<button id="answerD1" onclick="answerD_clicked1()"></button>
		</div>
	</body>
</html>