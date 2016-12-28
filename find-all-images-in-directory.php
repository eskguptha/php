<!DOCTYPE html>
<html>
<head>
	<title>Find all images in Directory</title>
</head>
<body style="padding:0px;margin:0px;">
	<div style="width:1040px;margin:auto;">
	<?php 
		
		$folder_name    = '/images';
		$list_of_files = scandir($folder_name);
		$i = 0;
		foreach ($list_of_files as $key => $file_name) {
			$i++;
			#echo $file_name;
			if ($file_name == '.' or $file_name == '..')
				continue;
		?>
			<div style="margin-left:10px;width:200px;float:left;margin-bottom:30px;"><img src="<?php echo $folder_name; ?>/<?php echo $file_name;?>" title="<?php echo $file_name;?>" alt="<?php echo $file_name;?>"  width="150" height="150"></a></div>
		<?php }?>
	</div>
</body>
</html>
