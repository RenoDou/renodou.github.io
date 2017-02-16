<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		body{background-color: black;
			color: Chartreuse;
		}
		.title{
			color: blue;
			border:3px;
		}
		.fact{
			color: white;
		}
	</style>
</head>
<body>

<?php
if(isset($_POST['cm']) && isset($_POST['kg'] )){
    $a = $_POST['kg'];
    $b = $_POST['cm'];
    if($a!=0 && $b!=0){
	    $b2 = pow($b/100,2);
	    $bmi = $a / $b2;
	?>
	<?php
	    echo "你的ＢＭＩ值是 ",round($bmi,2),"，";
	    if($bmi<18.5 && $bmi > 0){echo "太瘦了";}
	    elseif ($bmi>=18.5 && $bmi <=24) {echo "你的身材真好";}
	    elseif ($bmi>=24) {echo "根本就是一隻豬";}
	    else{echo "你是不是打錯了什麼？";}
	}
	else{
		echo "<h1 class=\"\" >有些東西打錯了唷！<h1>";
	}
}

else{
?>
<form action="phphw1.php" method="post">
	<h1 class="title">歡迎來到小若宇のBMI計算機</h1>
	<h3>請輸入你的身高(公分)：<input type="text"  name="cm"></h3>
	<h3>請輸入你的體重(公斤)：<input type="password" name="kg"></h3>
	<h2 class="fact">準備好面對現實了嗎？<input type="submit" value="按我看結果"  style="width:120px;height:40px;border:2px #9999FF dashed;"></h2>
</form>
<?php
}
?>

</body>
</html>