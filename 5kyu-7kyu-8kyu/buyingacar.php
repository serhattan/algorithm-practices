<?php
/*	A man has a rather old car being worth $2000. He saw a secondhand car being worth $8000. He wants to keep his old car until he can buy the secondhand one.

He thinks he can save $1000 each month but the prices of his old car and of the new one decrease of 1.5 percent per month. Furthermore the percent of loss increases by a fixed 0.5 percent at the end of every two months.

Example of percents lost per month:

If, for example, at the end of first month the percent of loss is 1, end of second month percent of loss is 1.5, end of third month still 1.5, end of 4th month 2 and so on ...

Can you help him? Our man finds it difficult to make all these calculations.

How many months will it take him to save up enough money to buy the car he wants, and how much money will he have left over?*/


$prices = nbMonths(2000,8000,1000,1.5);
echo $prices["totalMonth"]."<br>".$prices["leftOver"];

function nbMonths($startPriceOld, $startPriceNew, $savingPerMonth, $percentLossByMonth) {
	$totalMoney = $startPriceOld;
	$mounths=0;
	while ($totalMoney<$startPriceNew) {
		$mounths++;
		if($mounths % 2  == 0){$percentLossByMonth = $percentLossByMonth + 0.5;} 
		$startPriceOld = $startPriceOld - (($startPriceOld*$percentLossByMonth)/100);
		$startPriceNew = $startPriceNew - (($startPriceNew*$percentLossByMonth)/100);
		$totalMoney = $startPriceOld + ($savingPerMonth*$mounths);
	}

	return array(
		"totalMonth" => $mounths, 
		"leftOver" => round($totalMoney-$startPriceNew)
		);
}