<?php
 
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
 
$redis->delete('testredis');
 
$testScore = array(
                        'Smith' => 3,
                        'Johnson'  => 6,
                        'William'    => 12,
                        'Jones'    => 15,
                        'Emily'  => 15,
                        'Hanako' => 6,
                        'John'   => 20,
                        'Brown'   => 1,
                        'Natary' => 2,
                        'Honda'  => 1,
                        'Mary'   => 55
                    );
 
 
foreach( $testScore as $player => $score )
{
        $redis->zAdd( 'testRanking', $score, $player );
}
 
 
 
$result = $redis->zRevRange( 'testRanking', 0, 9, true );
 
 
var_dump($result);
echo "<hr/>";
 
 
foreach($result as $player => $score)
{
        ++$score;
        $rank = ($redis->zCount('testRanking', $score, '+inf')+1);
        echo "{$player}={$rank}<br/>";
}

?>
