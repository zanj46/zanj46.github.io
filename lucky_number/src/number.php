<?php
$min=0;
$max=9;
// rand();
// $main1=rand($min, $max);
$main1=rand($min, $max);
$main2=rand($min, $max);
while ($main1==$main2){
	$main2=rand($min, $max);
}
// $main2=rand($min, $max);
// echo $main1;
// echo " - ";
// echo $main2;
if ($main1>$main2 or $main2<$main1) {
	$salab=$main1;
	$main1=$main2;
	$main2=$salab;
}
?>


<?php
$main1;
$sub1=rand($min, $max);
$sub2=rand($min, $max);
while ($sub1==$sub2){
	$sub2=rand($min, $max);
}
// echo " ";
// echo $main1;
// echo $sub2;
if ($sub1>$sub2 or $sub2<$sub1) {
	$salab=$sub1;
	$sub1=$sub2;
	$sub2=$salab;
}
?>


<?php
$main2;
$sub3=rand($min, $max);
$sub4=rand($min, $max);
while ($sub3==$sub4){
	$sub4=rand($min, $max);
}
// echo " ";
// echo $main2;
// echo $sub4;
if ($sub3>$sub4 or $sub4<$sub3) {
	$salab=$sub3;
	$sub3=$sub4;
	$sub4=$salab;
}
?>


<?php
$f=rand(0, 9);
$s=rand(0, 9);
$t=rand(0, 9);
$check=rand(1,3);
while ($f!=$main2 and $f!=$main1 and $s!=$main2 and $s!=$main1 and $t!=$main2 and $t!=$main1){
	if ($check==1) {
		$f=rand(0, 9);
	}
	if ($check==2) {
		$s=rand(0, 9);
	}
	if ($check==3) {
		$t=rand(0, 9);
	}
}
$sub5=$f.$s.$t;
$f=rand(0, 9);
$s=rand(0, 9);
$t=rand(0, 9);
$check=rand(1,3);
while ($f!=$main2 and $f!=$main1 and $s!=$main2 and $s!=$main1 and $t!=$main2 and $t!=$main1){
	if ($check==1) {
		$f=rand(0, 9);
	}
	if ($check==2) {
		$s=rand(0, 9);
	}
	if ($check==3) {
		$t=rand(0, 9);
	}
}
$sub6=$f.$s.$t;
// echo $sub5;
// echo " ";
// echo $sub6;
?>


<table align="center">
	<tr>
		<td  style="font-size: 100px;" align="center">
			<?php echo $main1; ?>

			<?php echo "-"; ?>

			<?php echo $main2; ?>
		</td>

	</tr>

	<tr>
		<td style="font-size: 100px;" align="center">
			<?php echo $main1.$sub1; ?>
			
			<?php echo " "; ?>
			
			<?php echo $main1.$sub2; ?>
		</td>

	</tr>

	<tr>
		<td style="font-size: 100px;" align="center">
			<?php echo $main2.$sub3; ?>

			<?php echo " "; ?>

			<?php echo $main2.$sub4; ?>
		</td>

	</tr>

	<tr>
		<td style="font-size: 100px;" align="center">
			<?php echo $sub5; ?>

			<?php echo " "; ?>
			
			<?php echo $sub6; ?>
		</td>

	</tr>
	<tr>
		<td colspan="3" align="right">
			<input type="button" style="width: 500px" value="Lucky Random" class="btn btn-success" onclick="random();">
			<!-- <input type="button" value="Reset" class="btn btn-outline-danger" onclick="random()"> -->
		</td>
	</tr>
</table>
<?php
?>