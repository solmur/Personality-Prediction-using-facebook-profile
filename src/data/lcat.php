<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 0.2b
 */

//
// Database `technoli_mydb`
//

// `technoli_mydb`.`features`
$features = array(
  array('uid' => '100000184531749','extraversion' => '2.5','agreeableness' => '2.77778','conscientiousness' => '2.77778','neuroticism' => '2.5','openness' => '1.8'),
  array('uid' => '100000966526483','extraversion' => '4.625','agreeableness' => '4.33333','conscientiousness' => '4','neuroticism' => '2.625','openness' => '4.5'),
  array('uid' => '100000807245444','extraversion' => '2.375','agreeableness' => '3.55556','conscientiousness' => '2.66667','neuroticism' => '4','openness' => '3.6'),
  array('uid' => '1360550593','extraversion' => '3.5','agreeableness' => '3.66667','conscientiousness' => '2','neuroticism' => '2.25','openness' => '4.3'),
  array('uid' => '100001108193506','extraversion' => '2','agreeableness' => '4.33333','conscientiousness' => '2.66667','neuroticism' => '3','openness' => '3.3'),
  array('uid' => '100006599203697','extraversion' => '1.875','agreeableness' => '4.22222','conscientiousness' => '3','neuroticism' => '4.125','openness' => '3.3'),
  array('uid' => '659368463','extraversion' => '2.25','agreeableness' => '4.66667','conscientiousness' => '3.55556','neuroticism' => '3.375','openness' => '3.8'),
  array('uid' => '100001468972444','extraversion' => '2.875','agreeableness' => '4.44444','conscientiousness' => '3.88889','neuroticism' => '3','openness' => '3.9'),
  array('uid' => '100002083630229','extraversion' => '3.25','agreeableness' => '3.88889','conscientiousness' => '2.77778','neuroticism' => '2.125','openness' => '4.2'),
  array('uid' => '100003363377993','extraversion' => '3.625','agreeableness' => '3.22222','conscientiousness' => '3.77778','neuroticism' => '2.75','openness' => '4'),
  array('uid' => '100000745663429','extraversion' => '4','agreeableness' => '3.77778','conscientiousness' => '3.44444','neuroticism' => '2.25','openness' => '3.7'),
  array('uid' => '100003470353128','extraversion' => '3.75','agreeableness' => '3.77778','conscientiousness' => '2.88889','neuroticism' => '2.375','openness' => '3.8'),
  array('uid' => '100003271962779','extraversion' => '3.875','agreeableness' => '4.22222','conscientiousness' => '3.88889','neuroticism' => '1.625','openness' => '3.3'),
  array('uid' => '100001324430179','extraversion' => '2.375','agreeableness' => '3.88889','conscientiousness' => '3','neuroticism' => '2.625','openness' => '4.2'),
  array('uid' => '100001322059096','extraversion' => '4.125','agreeableness' => '4.33333','conscientiousness' => '3.77778','neuroticism' => '1.875','openness' => '4.6'),
  array('uid' => '100006927158741','extraversion' => '4.375','agreeableness' => '4.66667','conscientiousness' => '3.88889','neuroticism' => '1.625','openness' => '3.9')
);

$uid=[];
foreach($features as $f)
{
	array_push($uid, $f["uid"]);
}

$categories=[];

foreach($uid as $id)
{
	$file = fopen($id.".data", "r");
	$data = fread($file, filesize($id.".data"));
	fclose($file);
	$data = unserialize($data);
	$likes=$data["likes"]["data"];
	foreach($likes as $l)
	{
		if(!in_array($l["category"], $categories))
			array_push($categories, $l["category"]);
	}
}
//print_r($categories);
$cat="[";
foreach($categories as $category)
{
	$cat=$cat."'".$category."', ";
}
$cat = $cat." ]\n";
print $cat;
print(count($categories));
print "\n";

