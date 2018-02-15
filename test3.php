
<?php
$json = '[{"label":"360","file":"http://aaa","src":"http://aaa"},{"label":"480","file":"http://bbb","src":"http://bbb"},{"label":"720","file":"http://ccc","src":"http://ccc"},{"label":"1080","file":"http://ddd","src":"http://ddd"}]';

$decoded = json_decode($json, true);

foreach($decoded['category'] as $key => $value) {
	if (in_array('item_to_remove', $value)) {
		unset($arr['category'][$key]);
	}
}
$json1 = json_encode($decoded);

print_r($json);
echo '<br>';
print_r($json1);
