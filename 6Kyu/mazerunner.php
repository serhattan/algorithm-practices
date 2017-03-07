<?php

/*Introduction

 	Welcome Adventurer. Your aim is to navigate the maze and reach the finish point without touching any walls. Doing so will kill you instantly!
 
Maze Runner
Task

 	You will be given a 2D array of the maze and an array of directions. Your task is to follow the directions given. If you reach the end point before all your moves have gone, you should return Finish. If you hit any walls or go outside the maze border, you should return Dead. If you find yourself still in the maze after using all the moves, you should return Lost.
 
The Maze array will look like

maze = [[1,1,1,1,1,1,1],
        [1,0,0,0,0,0,3],
        [1,0,1,0,1,0,1],
        [0,0,1,0,0,0,1],
        [1,0,1,0,1,0,1],
        [1,0,0,0,0,0,1],
        [1,2,1,0,1,0,1]]
..with the following key

 	0 = Safe place to walk
1 = Wall
2 = Start Point
3 = Finish Point
 
The Maze array will always be square i.e. 7 x 7 but its size and content will alter from test to test.

The directions array will always be in upper case and will be in the format of N = North, E = East, W = West and S = South.

  direction = ["N","N","N","N","N","E","E","E","E","E"] == "Finish"
Good luck, and stay safe!

class MyTestCases extends TestCase {
    public function testExample() {
      
      $maze = [[1,1,1,1,1,1,1],
               [1,0,0,0,0,0,3],
               [1,0,1,0,1,0,1],
               [0,0,1,0,0,0,1],
               [1,0,1,0,1,0,1],
               [1,0,0,0,0,0,1],
               [1,2,1,0,1,0,1]];
      
      $this->assertEquals("Finish", maze_runner($maze,["N","N","N","N","N","E","E","E","E","E"]));
      $this->assertEquals("Finish", maze_runner($maze,["N","N","N","N","N","E","E","S","S","E","E","N","N","E"]));
      $this->assertEquals("Finish", maze_runner($maze,["N","N","N","N","N","E","E","E","E","E","W","W"]));
      
      $this->assertEquals("Dead", maze_runner($maze,["N","N","N","W","W"]));
      $this->assertEquals("Dead", maze_runner($maze,["N","N","N","N","N","E","E","S","S","S","S","S","S"]));
      
      $this->assertEquals("Lost", maze_runner($maze,["N","E","E","E","E"]));
    }
}
*/

$time=microtime(true);
$maze = [[1,1,1,1,1,1,1],
[1,0,0,0,0,0,3],
[1,0,1,0,1,0,1],
[0,0,1,0,0,0,1],
[1,0,1,0,1,0,1],
[1,0,0,0,0,0,1],
[1,2,1,0,1,0,1]];

echo maze_runner($maze,["N","N","N","N","N","E","E","S","S","E","E","N","N","E"]);

function maze_runner($maze, $directions){
	foreach ($maze as $firstkey => $digits) {
		foreach ($digits as $secondkey => $digit) {
			if ($digit==3) {
			}else if ($digit==2) {
				for ($i=0; $i < count($directions); $i++) { 
					if ($directions[$i]=="N") {
						$firstkey-=1;
						if(!isset($maze[$firstkey][$secondkey]) || $maze[$firstkey][$secondkey]==1){
							return "Dead";
						}else if (count($directions)-1==$i && $maze[$firstkey][$secondkey]!=3) {
							return "Lost";
						}else if ($maze[$firstkey][$secondkey]==3) {
							return "Finish";
						}else if ($maze[$firstkey][$secondkey]==0) {
							continue;
						}
					}else if ($directions[$i]=="S") {
						$firstkey+=1;
						if(!isset($maze[$firstkey][$secondkey]) || $maze[$firstkey][$secondkey]==1){
							return "Dead";
						}else if (count($directions)-1==$i && $maze[$firstkey][$secondkey]!=3) {
							return "Lost";
						}else if ($maze[$firstkey][$secondkey]==3) {
							return "Finish";
						}else if ($maze[$firstkey][$secondkey]==0) {
							continue;
						}
					}else if ($directions[$i]=="W") {
						$secondkey-=1;
						if(!isset($maze[$firstkey][$secondkey]) || $maze[$firstkey][$secondkey]==1){
							return "Dead";
						}else if (count($directions)-1==$i && $maze[$firstkey][$secondkey]!=3) {
							return "Lost";
						}else if ($maze[$firstkey][$secondkey]==3) {
							return "Finish";
						}else if ($maze[$firstkey][$secondkey]==0) {
							continue;
						}
					}else if ($directions[$i]=="E") {
						$secondkey+=1;
						if(!isset($maze[$firstkey][$secondkey]) || $maze[$firstkey][$secondkey]==1){
							return "Dead";
						}else if (count($directions)-1==$i && $maze[$firstkey][$secondkey]!=3) {
							return "Lost";
						}else if ($maze[$firstkey][$secondkey]==3) {
							return "Finish";
						}else if ($maze[$firstkey][$secondkey]==0) {
							continue;
						}
					}
				}
			}
		}
	}
}

echo microtime(true)-$time;