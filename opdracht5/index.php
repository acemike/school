<?php  

$likes	= array('sunshine', 'long walks', 'beer', 'dogs', 'games', 'comic sans');
$dislikes	= array('rain', 'queues', 'taxes', 'pessimists');

echo '<h2>Likes</h2>';
echo '<ol>';
foreach($likes as $like) {
	echo '<li>' . $like . '</li>';
}
echo '</ol>';


echo '<h2>Dislikes</h2>';
echo '<ol>';
foreach($dislikes as $dislike) {
	echo '<li>' . $dislike . '</li>';
}
echo '</ol>';
?>