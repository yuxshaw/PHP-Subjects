<?php
//	switch
$score = 69;
switch ($score){
	case $score == 100:
		echo '完美<br />';
		break;
	case $score >= 60:
		echo '合格<br />';
		break;
	default:
		echo '不及格<br />';
}

$team = '山猫';
switch ($team):
	case $team == '火箭':
	case $team == '猛龙':
	case $team == '勇士':
		echo '还行';
		break;
	case $team == '山猫':
		echo '没啦，你活在10年前吧?';
		break;
	default:
		echo '咱们不是一路人！再见！';
endswitch;