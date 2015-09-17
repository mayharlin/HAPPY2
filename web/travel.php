<?php

$APP_ID = '1082793997935846162'; //
$API_ID = '20131024';
$AFFILIATE_ID = '144f156d.e974fbc5.144f156e.7f3a0831';
$API_NAME = 'Rakuten Travel Ranking Harlin';
$API_CODE = 'Travel/HotelRanking/';
$API_BASE_URL = 'https://app.rakuten.co.jp/services/api/';

$valset = 0;
$count = 0;
if(isset($_POST['genre'])) $input = preg_replace('/[!@#$%^&*()]/', '', $_POST['genre']);
if(!empty($input))
{
	$valset = 1;
	$submit = array('format' => 'json',
					'genre' => $input,
					'applicationId' => $APP_ID);
					
	$API_URL = $API_BASE_URL . $API_CODE . $API_ID . '?' . http_build_query($submit);

	//print_r($API_URL);
	$contents = file_get_contents($API_URL);
	
	$data = json_decode($contents, true);
	if($data)
	{
		$count = 10;
		$hotels =  $data['Rankings'];
		$hotels2 = $hotels[0];
		$hotels3 = $hotels2['Ranking'];
		$hotels4 = $hotels3['hotels'];
	};
}

?>

<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="stylesheet" href="css.css" media="screen" />
<title><?php echo 'LP Search Result' ?></title>
<script src="jquery.min.js"></script>
<script src="jquery-simple-pagination-plugin.js"></script>
</head>
	<body>
		<h1><?php echo 'LP Search Result' ?></h1>

		<form action="travel.php" method="post">
			<input type="text" name="genre" size="25" value="<?php if($valset==1) echo $_POST['genre']; ?>" />
			<input type="submit" name"submitBtn" value="Search" />
		</form>
			<?php if($count > 0 ): ?>
			<?php echo $count . ' hotels found'; ?>
			<?php// print_r($API_URL); ?>
			
			<table width="60%" border="solid" cellspacing="0" cellpadding="0" style="margin: 0px 0pt 0pt 0px;">
					<tbody>	
						<tr>
							<th width="10%">Planer</th>
							<th width="25%">Destination</th>
							<th width="15%">Area / Prefecture</th>
							<th width="10%">Price</th>
							<th width="40%">User Testimonials</th>
						</tr>
					</tbody>
			</table>
			<div id="result">
				<table width="60%" border="solid" cellspacing="0" cellpadding="0" style="margin: 0px 0pt 0pt 0px;">			
					<tbody>
						<?php // print_r('111' . $hotels); ?>
						<?php foreach($hotels4 as $temp): ?>
						<tr>
						<?php $hotels_1 = $temp['hotel']; ?>
							<td width="10%"><a href="<?php echo $hotels_1['hotelInformationUrl']; ?>"><img width="100px" height="75px" src="<?php echo 'http://oi58.tinypic.com/25tckeu.jpg' ?>" />Jinze<a/></td>
							<td width="25%"><a href="<?php echo $hotels_1['hotelInformationUrl']; ?>"><img width="240px" height="160px" src="<?php echo $hotels_1['hotelImageUrl']; ?>" /><a/>
							<?php echo '<br/>' . $hotels_1['hotelName'] ?></td>
							<td width="15%"><a href="<?php echo $hotels_1['hotelInformationUrl']; ?>"><?php echo $hotels_1['middleClassName'] ?></a></td>
							<td width="10%">50.000 JPY</td>
							<td width="40%"><a href="<?php echo $hotels_1['hotelInformationUrl']; ?>"><?php echo $hotels_1['userReview'] ?></a>
							<img width="100px" height="25px" src="<?php echo 'http://blog.sweetiq.com/wp-content/uploads/2012/07/3-5-stars.png' ?>" /></td>
						</tr>
						<?php endforeach; ?>
						<?php endif; ?>
					</tbody>
				</table>
				
				<div class="my-navigation">
					<div class="simple-pagination-first"></div>
					<div class="simple-pagination-previous"></div>
					<div class="simple-pagination-page-numbers"></div>
					<div class="simple-pagination-next"></div>
					<div class="simple-pagination-last"></div>
				</div>
				<div class="simple-pagination-page-x-of-x"></div>
				<div class="simple-pagination-showing-x-of-x"></div>
			</div>
			
			<script>
			(function($){

			$('#result').simplePagination();

			})(jQuery);
			</script>
			
	</body>
</html>