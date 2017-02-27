<?php
$a=1;
$ad=strtolower($_SERVER['SERVER_NAME']);

?>

<?php if($a==2) { ?>
	alert('000[<?php echo $ad;?>]');
<?php }else{ ?>
	alert('111[<?php echo $ad;?>]');
<?php } ?>




