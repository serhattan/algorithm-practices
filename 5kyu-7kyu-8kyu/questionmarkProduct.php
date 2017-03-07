<?php
/*
Product("") == 0
product("!") == 0
Product("!ab? ?") == 2
Product("!!") == 0
Product("!??") == 2
Product("!???") == 3
Product("!!!???") == 9
Product("!!!??") == 6
Product("!???!!") == 9
Product("!????!!!?") == 20*/

echo product("!????!!!?");

function product($s){
	if(substr_count($s,"?")>0 && substr_count($s, "!")>0){
		return substr_count($s,"?") * substr_count($s, "!");
	}
}