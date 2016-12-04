<?php 
/*
echo "pasando include"; 

echo $_SERVER['PHP_SELF'];
*/

?>


<?php  
include("productos.php");
$array=$GLOBALS['array'];
if ($GLOBALS['id']=="off"){
	for ($i=1;$i<=count($array);$i++){
	echo producto($array[$i]["imagen"],$array[$i]["precio"],$array[$i]["titulo"],$array[$i]["descripcion"],$array[$i]["pagina"]);
	}
}else{
	$i=$GLOBALS['id'];
	echo producto($array[$i]["imagen"],$array[$i]["precio"],$array[$i]["titulo"],$array[$i]["descripcion"],$array[$i]["pagina"]);
}





 ?> 


<?php function producto($imagen,$precio,$titulo,$descripcion,$pagina) { 
//echo $GLOBALS['id'];
 ?> 
<div style="background: #E0F1CF; width:770px; height:270px;border: 2px solid green;">
<div style="margin-top:17px;margin-left: 40px;">
		<div style="float:left; margin-top:10px;">
		<?php if ($GLOBALS['id']=="off"){ ?>
		<a href="productos/<?php echo $pagina; ?>">
		<?php }else{} ?>
		<img src="/todohogar/sites/default/files/<?php echo $imagen; ?>" />
		<?php if ($GLOBALS['id']=="off"){ ?>
		</a>
		<?php }else{} ?>
		</div>
		<div style="float:left; width:318px; margin-top:39px;margin-left:10px;margin-right:10px;">
			<div>
				<span style="font:Arial, Helvetica, sans-serif;font-size:25px;" class="titulo">
				<?php if ($GLOBALS['id']=="off"){ ?>
				<a href="productos/<?php echo $pagina; ?>">
				<?php }else{} ?>
				
				<?php echo $titulo; ?>
				
				<?php if ($GLOBALS['id']=="off"){ ?>
				</a>
				<?php }else{} ?>
				</span>
			</div>
			<div>
				<?php echo $descripcion; ?>
				<div class="precio">$ <?php echo $precio; ?> pesos</div>
			</div>
			
			<div>
			<?php if ($GLOBALS['id']=="off"){ ?>
			<input type="button" class="form-submit" value="Ver mas" onclick="location.href='productos/<?php echo $pagina; ?>' " />
			<?php }else{ ?>
			<input type="button" class="form-submit" value="Comprar" onclick="location.href='../comprar' " />
			
			<?php 
			} ?>
			</div>
		</div>
</div>
</div>

<div style="height:15px;"></div>
<?php } ?>
