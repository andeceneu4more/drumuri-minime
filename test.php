<html>
	<head>
	<style type="text/css">
	#apDiv1 {
	position: absolute;
	width: 353px;
	height: 282px;
	z-index: 1;
	left: 236px;
	top: 302px;
}
    #apDiv2 {
	position: absolute;
	width: 649px;
	height: 57px;
	z-index: 2;
	left: 181px;
	top: 588px;
}
    #apDiv3 {
	position: absolute;
	width: 750px;
	height: 115px;
	z-index: 3;
	left: 49px;
	top: 179px;
}
    #apDiv4 {
	position: absolute;
	width: 715px;
	height: 358px;
	z-index: 4;
	left: 103px;
	top: 656px;
}
    #apDiv5 {
	position: absolute;
	width: 530px;
	height: 247px;
	z-index: 5;
	left: 185px;
	top: 1024px;
}
	#apDiv5 table tr td {
	text-align: center;
	color: #FFF;
	font-weight: bolder;
	font-family: Georgia, "Times New Roman", Times, serif;
}
    #apDiv6 {
	position: absolute;
	width: 728px;
	height: 212px;
	z-index: 6;
	left: 84px;
	top: 1268px;
}
    #apDiv7 {
	position: absolute;
	width: 264px;
	height: 256px;
	z-index: 7;
	left: 134px;
	top: 1476px;
}
    #apDiv8 {
	position: absolute;
	width: 260px;
	height: 256px;
	z-index: 8;
	left: 497px;
	top: 1484px;
}
    #apDiv9 {
	position: absolute;
	width: 265px;
	height: 269px;
	z-index: 9;
	left: 132px;
	top: 1736px;
}
    #apDiv10 {
	position: absolute;
	width: 263px;
	height: 254px;
	z-index: 10;
	left: 493px;
	top: 1739px;
}
    #apDiv11 {
	position: absolute;
	width: 675px;
	height: 115px;
	z-index: 11;
	left: 108px;
	top: 2009px;
}
    #apDiv12 {
	position: absolute;
	width: 729px;
	height: 162px;
	z-index: 12;
	left: 90px;
	top: 2398px;
}
    #apDiv13 {
	position: absolute;
	width: 414px;
	height: 224px;
	z-index: 13;
	left: 226px;
	top: 2162px;
}
    #apDiv14 {
	position: absolute;
	width: 465px;
	height: 105px;
	z-index: 14;
	left: 346px;
	top: 5px;
	font-family: calibri;
}
    #apDiv15 {
	position: absolute;
	width: 760px;
	height: 115px;
	z-index: 15;
	left: 93px;
	top: 54px;
	font-family: calibri;
}
    </style>
	</head>
	<body BackGround="f22.png">
	<span style="font-family:calibri; color:white; font-size:125%;">
    <div id="apDiv1"><img src="schita3.png" width="351" height="284"></div>
	<link href="base.css" rel="stylesheet" type="text/css">
	<div id="apDiv14">
	<tab2>
    <p>
	<?php
	include 'connect2.php';
	include 'tabel.php';

	$mesaj='';
	if (isset($_POST['submit'])) $mesaj = 'Va rugam sa va autentificati !';

	if (isset($_POST['nume']) && isset($_POST['prenume']) && isset($_POST['clasa'])) 
	{

		// Se verifica daca au fost completate corect toate campurile
		// Daca au fost completate le preia in variabile, in caz contrar seteaza o variabila tip Array cu mesaj de eroare
		$mesaj='1';
		// Verifica daca Numele are cel putin 3 caractere si maxim 40
		if(strlen($_POST['nume'])>2 && strlen($_POST['nume'])<41) $nume = $_POST['nume'];
		else $eroare[] = 'Caseta Nume trebuie sa contina intre 3 si 40 caractere';

		// Verifica daca Numele are cel putin 3 caractere si maxim 40
		if(strlen($_POST['prenume'])>2 && strlen($_POST['nume'])<41) $prenume = $_POST['prenume'];
		else $eroare[] = 'Caseta Prenume trebuie sa contina intre 3 si 40 caractere';
  
		// Verifica daca a fost selectata o valoare pt. 'clasa'
		if(strlen($_POST['clasa'])>0) $clasa = $_POST['clasa'];
		else $eroare[] = 'Selectati "clasa"';
		$greseli=array();
		$rez=1;
		if (isset($_POST['q1'])) 
		{
			$q1=$_POST['q1'];
			if ($q1=="b") $rez=$rez+1;
			else $greseli[]=1;
		}
		else $err[] = '1';
		
		if (isset($_POST['q2'])) 
		{
			$q2=$_POST['q2'];
			if ($q2=="c") $rez=$rez+1;
			else $greseli[]=2;
		}
		else $err[] = '2';
		
		if (isset($_POST['q3'])) 
		{
			$q3=$_POST['q3'];
			if ($q3=="a") $rez=$rez+1;
			else $greseli[]=3;
		}
		else $err[] = '3';
		
		if (isset($_POST['q4'])) 
		{
			$q4=$_POST['q4'];
			if ($q4=="d") $rez=$rez+1;
			else $greseli[]=4;
		}
		else $err[] = '4';
		
		if (isset($_POST['q5'])) 
		{
			$q5=$_POST['q5'];
			if ($q5=="c") $rez=$rez+1;
			else $greseli[]=5;
		}
		else $err[] = '5';
		
		if (isset($_POST['q6']))
		{
			$q6=implode("",$_POST['q6']);
			if (strchr($q6,'a')) $q6a=TRUE;
			if (strchr($q6,'b')) $q6b=TRUE;
			if (strchr($q6,'c')) $q6c=TRUE;
			if (strchr($q6,'d')) $q6d=TRUE;
			if ($q6=="bd") $rez=$rez+1;
			else $greseli[]=6;
		}
		else $err[] = '6';
		
		if (isset($_POST['q7'])) 
		{
			$q7=$_POST['q7'];
			if ($q7=="a") $rez=$rez+1;
			else $greseli[]=7;
		}
		else $err[] = '7';
		
		if (isset($_POST['q8'])) 
		{
			$q8=$_POST['q8'];
			if ($q8=="c") $rez=$rez+1;
			else $greseli[]=8;
		}
		else $err[] = '8';
		
		if (isset($_POST['q9'])) 
		{
			$q9=$_POST['q9'];
			if ($q9=="d") $rez=$rez+1;
			else $greseli[]=9;
		}
		else $err[] = '9';
		
		if (isset($err))
		{
			if (count($err)>1) $eroare[]="Nu raspundeti la intrebarile ".implode(", ",$err)."?";
			else $eroare[]="Nu raspundeti la intrebarea ".implode(", ",$err)."?";
		}
			
		// Daca nu exista nici un mesaj de eroare, filtreaza datele cu mysql_real_escape_string() si le adauga in baza de date
		// Altfel, in cazul vreunei erori, adauga in variabila $mesaj
		if (!isset($eroare)) 
		{

			// Acum se adauga  aceste date in tabelul rezultate
			$sql = "INSERT INTO elevi.rezultate (`Nume`, `Prenume`, `Clasa`, `Punctaj`) VALUES ('".$nume."', '".$prenume."', '".$clasa."', '".$rez."');";
			if ($conn->query($sql) == TRUE) 
			{
				$mesaj = "Datele au fost adaugate<br/>Felicitari! Ati obtinut nota ".$rez." !";
				if (count($greseli)>=1)
					$mesaj=$mesaj."<br/>Raspunsuri gresite: ".implode(", ",$greseli)." .";
			}
			else $mesaj = 'Datele nu au putut fi adaugate '. mysql_error();

		}
		else $mesaj = implode('<br />', $eroare);
	}
	echo $mesaj.'<br/>';
	
	?></p>
    </div>
	<form method="post" action="">
	
	<ptit> Test </ptit>
    <div id="apDiv3">
<ol>
  <ol>
    <li> Intr-un graf ponderat, care are circuite de cost negativ, se poate determina un drum minim dintre 2 noduri? <br/> 
        <tab4><input type="radio" name="q1" <?php if (isset($q1) && $q1=="a") echo "checked";?> value="a">a. Da
        <tab5><input type="radio" name="q1" <?php if (isset($q1) && $q1=="b") echo "checked";?> value="b">b. Nu
      
    </li>
	<li>
		Cate circuite disjuncte (care difera prin cel putin un arc) de cost negativ exista in graful orientat din figura?<br/>
		 <tab1>
	</li>
      
  </ol>
	</ol>
   </div>
    <div id="apDiv4">
    <ol start="3">
    <li>Relaxarea drumurilor este:<br/>
    <input type="radio" name="q3" <?php if (isset($q3) && $q3=="a") echo "checked";?> value="a">a. O tehnica care consta sta la baza determinarii unui drum minim de sursa unica intr-un graf;<br/>
    <input type="radio" name="q3" <?php if (isset($q3) && $q3=="b") echo "checked";?> value="b">b. Un algoritm scris de Richard Bellman;<br/>
	<input type="radio" name="q3" <?php if (isset($q3) && $q3=="c") echo "checked";?> value="c">c. O activitate sportiva;<br/>
	<input type="radio" name="q3" <?php if (isset($q3) && $q3=="d") echo "checked";?> value="d">d. Metoda de parcurgere a unui graf.</li>
	<li>Graful neorientat cu 8 noduri, numerotate de la 1 la 8, este reprezentat cu ajutorul matricei de adiacenta de mai jos. Pentru acest 
graf este adevarata afirmatia:<br/>
	<input type="radio" name="q4" <?php if (isset($q4) && $q4=="a") echo "checked";?> value="a">a. Graful este arbore <br/>
	<input type="radio" name="q4" <?php if (isset($q4) && $q4=="b") echo "checked";?> value="b">b. Graful nu are noduri de grad 0<br/>
	<input type="radio" name="q4" <?php if (isset($q4) && $q4=="c") echo "checked";?> value="c">c. Gradul maxim al unui nod este 3<br/>
	<input type="radio" name="q4" <?php if (isset($q4) && $q4=="d") echo "checked";?> value="d">d. Graful are trei componente conexe<br/>
</li>
    </ol>
    </div>
    <div id="apDiv6">
      <ol start="5">
      <li>Intr-un arbore cu radacina cu 10 noduri, numerotate de la 1 la 10, nodul 10 este radacina,
iar intre celelate noduri exista relatia: nodul cu numărul i+1 este tatăl celui cu numarul i,
pentru i &#8712 {1, 2, 3, 4, 5, 6, 7, 8, 9}. Vectorul de tati al arborelui astfel definit, este:<br/>
<input type="radio" name="q5" <?php if (isset($q5) && $q5=="a") echo "checked";?> value="a">a. (0,1,2,3,4,5,6,7,8,9)<tab7>
<input type="radio" name="q5" <?php if (isset($q5) && $q5=="b") echo "checked";?> value="b">b. (1,2,3,4,5,6,7,8,9,0)<br/>
<input type="radio" name="q5" <?php if (isset($q5) && $q5=="c") echo "checked";?> value="c">c. (2,3,4,5,6,7,8,9,10,0)<tab9>
<input type="radio" name="q5" <?php if (isset($q5) && $q5=="d") echo "checked";?> value="d">d. (9,8,7,6,5,4,3,2,1,0)<br/></li>
		<li>Care dintre urmatorii arbori reprezinta un <i>max-heap</i>:</li>
      </ol>
    </div>
    <div id="apDiv11">
    <ol start="7">
    <li>Sa consideram urmatorul vector H = (2, 5, 3, 9, 8, 4, 10, 20, 10, 9). Poate fi considerat reprezentarea secventiala a unui <i>min-heap</i>?<br/>
<tab4><input type="radio" name="q7" <?php if (isset($q7) && $q7=="a") echo "checked";?> value="a">a. Da
<tab5><input type="radio" name="q7" <?php if (isset($q7) && $q7=="b") echo "checked";?> value="b">b. Nu	</li>
    <li>Pentru graful orientat din figura, cel mai scurt drum posibil din varful 1 la varful 2 are costul:</li>
    </ol>
    </div>
    <div id="apDiv12">
    <tab2>
	<input type="radio" name="q8" <?php if (isset($q8) && $q8=="a") echo "checked";?> value="a">a. 17<tab2>
    <input type="radio" name="q8" <?php if (isset($q8) && $q8=="b") echo "checked";?> value="b">b. 14<tab2>
    <input type="radio" name="q8" <?php if (isset($q8) && $q8=="c") echo "checked";?> value="c">c. 13<tab2>
    <input type="radio" name="q8" <?php if (isset($q8) && $q8=="d") echo "checked";?> value="d">d. 0<tab2>
    <input type="radio" name="q8" <?php if (isset($q8) && $q8=="e") echo "checked";?> value="e">e. 9<br/>
	<ol start="9">
	<li>Se considera un graf neorientat cu nodurile numerotate de la 1 la 5 si muchiile (1, 2), (1, 3),
	(3, 2), (4, 2), (3, 4), (3, 5), (4, 5). Care este numarul maxim de muchii ce pot fi eliminate din graf astfel incat graful partial rezultat sa fie conex?<br/>
	<tab2>
	<input type="radio" name="q9" <?php if (isset($q9) && $q9=="a") echo "checked";?> value="a">a. 0<tab2>
    <input type="radio" name="q9" <?php if (isset($q9) && $q9=="b") echo "checked";?> value="b">b. 1<tab2>
    <input type="radio" name="q9" <?php if (isset($q9) && $q9=="c") echo "checked";?> value="c">c. 2<tab2>
    <input type="radio" name="q9" <?php if (isset($q9) && $q9=="d") echo "checked";?> value="d">d. 3<tab2>
    <input type="radio" name="q9" <?php if (isset($q9) && $q9=="e") echo "checked";?> value="e">e. 4<br/>
	</li>
	</ol>
    </div>
    <div id="apDiv15">
Nume :
<input type="text" name="nume" id="nume" value="<?php if(isset($nume)) echo $nume; ?>" /><br />
 Prenume: <input type="text" name="prenume" id="prenume" value="<?php if(isset($prenume)) echo $prenume; ?>" /><br />
 Clasa :
 <select name="clasa">
 <option  value=""></option>
 <option  <?php if( isset($clasa) && $clasa=="a5-a" ) echo "selected"; ?> value="a5-a">a5-a</option>
 <option  <?php if( isset($clasa) && $clasa=="a6-a" ) echo "selected"; ?> value="a6-a">a6-a</option>
 <option  <?php if( isset($clasa) && $clasa=="a7-a" ) echo "selected"; ?> value="a7-a">a7-a</option>
 <option  <?php if( isset($clasa) && $clasa=="a8-a" ) echo "selected"; ?> value="a8-a">a8-a</option>
 <option  <?php if( isset($clasa) && $clasa=="a9-a" ) echo "selected"; ?> value="a9-a">a9-a</option>
 <option  <?php if( isset($clasa) && $clasa=="a10-a" ) echo "selected"; ?> value="a10-a">a10-a</option>
 <option  <?php if( isset($clasa) && $clasa=="a11-a" ) echo "selected"; ?> value="a11-a">a11-a</option>
 <option  <?php if( isset($clasa) && $clasa=="a12-a" ) echo "selected"; ?> value="a12-a">a12-a</option>
 </select><br />
 	<br/>
    <tab4> 
    <input type="submit" value="Trimite Raspuns">
    <tab4>
    <a href="test.php" target="desk"><input type="button" value="Mai incearca o data"></a>
    </div>
    <div id="apDiv7">
    <input type="checkbox" name="q6[]" <?php if ( isset($q6) && strchr($q6,'a') ) echo 'checked';?> value="a">a.<br/><img src="test61.png" width="254" height="225">
    </div>
    <div id="apDiv8">
    <input type="checkbox" name="q6[]" <?php if ( isset($q6) && strchr($q6,'b') ) echo 'checked';?> value="b">b.<br/>
	<img src="test62.png" width="254" height="225"> 
	</div>
    <div id="apDiv9">
	<input type="checkbox" name="q6[]" <?php if ( isset($q6) && strchr($q6,'c') ) echo 'checked';?> value="c">c.
	<img src="test63.png" width="254" height="225"><br/>
	</div>
    <div id="apDiv10">
	<input type="checkbox" name="q6[]" <?php if ( isset($q6) && strchr($q6,'d') ) echo 'checked';?> value="d">d.
	<img src="test64.png" width="253" height="223"><br/>
	</div>
<div id="apDiv2">
    <input type="radio" name="q2" <?php if (isset($q2) && $q2=="a") echo "checked";?> value="a">
	  a. 1
      <tab1>
      <input type="radio" name="q2" <?php if (isset($q2) && $q2=="b") echo "checked";?> value="b">
      b. 2
      <tab1>
      <input type="radio" name="q2" <?php if (isset($q2) && $q2=="c") echo "checked";?> value="c">
      c. 3
      <tab1>
      <input type="radio" name="q2" <?php if (isset($q2) && $q2=="d") echo "checked";?> value="d">
    d. 4 </div>
	<div id="apDiv5" align="center">
    <table width="523" height="234" border="1" align="center" cellpadding="1" cellspacing="1">
		<tr>
<td width="501">&nbsp;</td>
<td width="501">1</td>
<td width="501">2</td>
<td width="501">3</td>
<td width="501">4</td>
<td width="501">5</td>
<td width="501">6</td>
<td width="501">7</td>
<td width="501">8</td>
</tr>
<tr>
<td>1</td>
<td>0</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td>2</td>
<td>1</td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>1</td>
<td>1</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td>3</td>
<td>1</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td>4</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td>5</td>
<td>0</td>
<td>1</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td>6</td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>1</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td>7</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td>8</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>

	</table>
    </div>
    
    
	<div id="apDiv13"><img src="test7.png" width="410" height="218"></div>
    </form>
	</span>
	</body>
</html>