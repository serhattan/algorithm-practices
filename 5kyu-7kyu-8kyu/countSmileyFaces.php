<?php

/*Rules for a smiling face:
-Each smiley face must contain a valid pair of eyes. Eyes can be marked as : or ;
-A smiley face can have a nose but it does not have to. Valid characters for a nose are - or ~
-Every smiling face must have a smiling mouth that should be marked with either ) or D.
Valid smiley face examples:
:) :D ;-D :~)
Invalid smiley faces:
;( :> :} :] 

Example cases:

countSmileys([':)', ';(', ';}', ':-D']);       // should return 2;
countSmileys([';D', ':-(', ':-)', ';~)']);     // should return 3;
countSmileys([';]', ':[', ';*', ':$', ';-D']); // should return 1;


Note: In case of an empty array return 0. You will not be tested with invalid input (input will always be an array)

*/

var_dump(count_smileys([';D', ':-(', ':-)', ';~)']));

function count_smileys($arr){ 
 $count=0;
 if(!$arr)return 0;
  foreach($arr as $arrSmile){   
    if($arrSmile[0]===';' || $arrSmile[0]===':' ){   
      if($arrSmile[1]==='-' || $arrSmile[1]==='~'){  
        if($arrSmile[2]==='D' || $arrSmile[2]===')' ){
          $count++;       
        }
      }
      elseif($arrSmile[1]==='D' || $arrSmile[1]===')' ){
        $count++;     
      }
    }
  }
  return $count;
}