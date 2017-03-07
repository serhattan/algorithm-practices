<?php

/*You are the "computer man" of a local Athletic Association (C.A.A.). Many teams of runners come to compete. Each time you get a string of all race results of every team who has run. For example here is a string showing the individual results of a team of 5:

"01|15|59, 1|47|6, 01|17|20, 1|32|34, 2|3|17"

Each part of the string is of the form: h|m|s where h, m, s are positive or null integer (represented as strings) with one or two digits. There are no traps in this format.

To compare the results of the teams you are asked for giving three statistics; range, average and median.

Range : difference between the lowest and highest values. In {4, 6, 9, 3, 7} the lowest value is 3, and the highest is 9, so the range is 9 − 3 = 6.

Mean or Average : To calculate mean, add together all of the numbers in a set and then divide the sum by the total count of numbers.

Median : In statistics, the median is the number separating the higher half of a data sample from the lower half. The median of a finite list of numbers can be found by arranging all the observations from lowest value to highest value and picking the middle one (e.g., the median of {3, 3, 5, 9, 11} is 5) when there is an odd number of observations. If there is an even number of observations, then there is no single middle value; the median is then defined to be the mean of the two middle values (the median of {3, 5, 6, 9} is (5 + 6) / 2 = 5.5).

Your task is to return a string giving these 3 values. For the example given above, the string result will be

"Range: 00|47|18 Average: 01|35|15 Median: 01|32|34"

of the form:

"Range: hh|mm|ss Average: hh|mm|ss Median: hh|mm|ss"

where hh, mm, ss are integers (represented by strings) with each 2 digits.

Remarks:

if a result in seconds is ab.xy... it will be given truncated as ab.
if the given string is "" you will return "*/

/*
	class StatAssocTestCases extends TestCase {
    private function dotest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testrankBasics() {
        $this->dotest(statAssoc("01|15|59, 1|47|16, 01|17|20, 1|32|34, 2|17|17"), 
            "Range: 01|01|18 Average: 01|38|05 Median: 01|32|34");
        $this->dotest(statAssoc("02|15|59, 2|47|16, 02|17|20, 2|32|34, 2|17|17, 2|22|00, 2|31|41"), 
            "Range: 00|31|17 Average: 02|26|18 Median: 02|22|00");
    }
}
	
*/

echo statAssoc("02|15|59, 2|47|16, 02|17|20, 2|32|34, 2|17|17, 2|22|00, 2|31|41");

function statAssoc($strg) {
	if(strlen($strg)!=0){
		$statistics = explode(",", $strg);
		$individuals=[];
		$totaltime=[];
		for ($i=0; $i <count($statistics) ; $i++) { 
			$individuals = explode("|", $statistics[$i]);
			array_push($totaltime,($individuals[0]*60*60)+($individuals[1]*60)+($individuals[2]));
		}
	//Buble Sort
		for ($a=0; $a <(count($totaltime))-1; $a++) { 
			for ($b=0; $b < (count($totaltime))-1 ; $b++) { 
				if(!is_null($totaltime[$b+1]) &&($totaltime[$b]>$totaltime[$b+1])){
					$temp = $totaltime[$b];
					$totaltime[$b]=$totaltime[$b+1];
					$totaltime[$b+1] = $temp;
				}
			}
		}
		count($totaltime)%2 != 0 ?$median=$totaltime[intval(count($totaltime)/2)]: $median=($totaltime[count($totaltime)/2]+$totaltime[(count($totaltime)/2)+1])/2;

		$range=sprintf("%02d",intval((max($totaltime)-min($totaltime))/3600))."|".sprintf("%02d",intval(((max($totaltime)-min($totaltime))%3600)/60))."|".sprintf("%02d",(max($totaltime)-min($totaltime))%60);
		$average= sprintf("%02d",intval((array_sum($totaltime)/count($totaltime))/3600))."|".sprintf("%02d",intval(((array_sum($totaltime)/count($totaltime))%3600)/60))."|".sprintf("%02d",(array_sum($totaltime)/count($totaltime))%60);
		$median= sprintf("%02d",intval(($median)/3600))."|".sprintf("%02d",intval((($median)%3600)/60)) ."|".sprintf("%02d",$median%60);
		return "Range: ".$range." Average: ".$average." Median: ".$median;
	}else{
		return "";
	}
}