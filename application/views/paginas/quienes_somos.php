<div class="Tw3rs-sheet clearfix">
            <div class="Tw3rs-layout-wrapper clearfix">
                <div class="Tw3rs-content-layout">
                    <div class="Tw3rs-content-layout-row">
                        <div class="Tw3rs-layout-cell Tw3rs-content clearfix"><article class="Tw3rs-post Tw3rs-article">
                                
                                                
                <div class="Tw3rs-postcontent Tw3rs-postcontent-0 clearfix"><div class="Tw3rs-content-layout">
    <div class="Tw3rs-content-layout-row">
    <div class="Tw3rs-layout-cell layout-item-1" style="width: 100%" >
        <br style="line-height: 450px">
        <div style="position:absolute;top:110px;left:50px;text-shadow:3px 3px #cccccc;">
        <h5><?=$cuerpo['texto_reduce']?><br>
        <?=$cuerpo['texto_reutiliza']?><br>
        <?=$cuerpo['texto_recicla']?></h5>
        </div>
    </div>
    </div>
</div>
<div class="Tw3rs-content-layout-br layout-item-0">
</div><div class="Tw3rs-content-layout layout-item-2">
    <div class="Tw3rs-content-layout-row">
    <div class="Tw3rs-layout-cell layout-item-3" style="width: 33%" >
        <p style="text-align:center;"><img width="201" height="201" alt="" src="<?=$url?>images/green1.jpg" class=""></p>
        <h4 style="text-align:center;"><?=$cuerpo['titulo_mision']?></h4>
        <p style="text-align:center;"><?=$cuerpo['texto_mision']?>.</p>
    </div><div class="Tw3rs-layout-cell layout-item-3" style="width: 34%" >
        <p style="text-align:center;"><img width="201" height="201" alt="" src="<?=$url?>images/green2-2.jpg" class=""></p>
        <h4 style="text-align:center;"><?=$cuerpo['titulo_vision']?></h4>
        <p style="text-align:center;"><?=$cuerpo['texto_vision']?></p>
    </div><div class="Tw3rs-layout-cell layout-item-3" style="width: 33%" >
        <p style="text-align:center;"><img width="201" height="201" alt="" src="<?=$url?>images/green3-2.jpg" class=""></p>
        <h4 style="text-align:center;"><?=$cuerpo['titulo_objetivo']?></h4>
        <p style="text-align:center;"><?=$cuerpo['texto_objetivo']?></p>
    </div>
    </div>
</div>
<div class="Tw3rs-content-layout-br layout-item-0">
</div><div class="Tw3rs-content-layout layout-item-2">
    <div class="Tw3rs-content-layout-row">
    <div class="Tw3rs-layout-cell layout-item-3" style="width: 25%" >
        <h3><a href="productos.php"><?=$txproductos['titulo_productos']?></a></h3>
        <?php foreach($productos as $producto): ?>
        <ul>
        	<li><a href="productos.php"><?=$producto['nombre_producto']?></a></li>
        </ul>
        
        <?php endforeach; ?>
    </div><div class="Tw3rs-layout-cell layout-item-3" style="width: 50%" >
        <h1><?=$cuerpo['titulo_calidad_eficiencia']?></h1>
        <p><img width="449" height="269" alt="" src="<?=$url?>images/ga_image.jpg" style="margin-right:-50px;" class=""></p>
        <p><?=$cuerpo['texto_calidad_eficiencia']?></p>
        
    </div><div class="Tw3rs-layout-cell layout-item-3" style="width: 25%" >
        <h3><a href="servicios.php"><?=$txproductos['titulo_servicios']?></a></h3>
        <ul>
        <?php foreach($servicios as $servicio): ?>
            <li><a href="servicios.php"><?=$servicio['nombre_servicio']?></a></li>
        <?php endforeach; ?>
        </ul>
    </div>
    </div>
</div>
<!--Nueva seccion quienes_somos-->
<div class="Tw3rs-content-layout layout-item-2">
    <div class="Tw3rs-content-layout-row">
        <div class="Tw3rs-layout-cell layout-item-3" style="width: 100%" >
			<?=$cuerpo['parrafo_1']?>
		</div>
	</div>
</div>
<div class="Tw3rs-content-layout layout-item-2">
    <div class="Tw3rs-content-layout-row">
        <div class="Tw3rs-layout-cell layout-item-3" style="width: 100%" >
			<?=$cuerpo['parrafo_2']?>
		</div>
	</div>
</div>
<div class="Tw3rs-content-layout layout-item-2">
    <div class="Tw3rs-content-layout-row">
        <div class="Tw3rs-layout-cell layout-item-3" style="width: 100%" >
			<?=$cuerpo['parrafo_3']?>
		</div>
	</div>
</div>
<div class="Tw3rs-content-layout layout-item-2">
    <div class="Tw3rs-content-layout-row">
        <div class="Tw3rs-layout-cell layout-item-3" style="width: 100%" >
			<?=$cuerpo['parrafo_4']?>
		</div>
	</div>
</div>
<!--FIN Nueva seccion quienes_somos-->
</div>
                                
                </article></div>
                    </div>
                </div>
            </div>