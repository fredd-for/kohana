<img src="/media/images/folder-icon.png" align="left" width="38" />
<h2 class="subtitulo"><?php echo ucwords(strtolower($carpeta[0]['carpeta'])); ?> <br/><span>LISTA DE CORRESPONDENCIA ARCHIVADA EN ESTA CARPETA</span></h2>
<table id="theTable">
    <thead>
        <tr>
            <th>HS</th>
            <th>Documento</th>
            <th>Referencia</th>
            <th>Observaciones</th>
            <th>Fecha</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($carpeta as $c):?>
        <tr>
            <td><a href="/seguimiento/?nur=<?php echo $c['nur']?>"><?php echo $c['nur'];?></a></td>
            <td><?php echo $c['codigo'];?></td>            
            <td><?php echo $c['referencia'];?></td>
            <td><?php echo $c['observaciones'];?></td>
            <td><?php echo $c['fecha_archivo'];?></td>            
            <td>
            <?php if($c['id_user']==$user->id):?>
                <a href="/bandeja/desarchivar/<?php echo $c['id_seg'];?>" title="Regresar el tramite a mis pendientes" class="uiButton">Quitar</a>
            <?php endif;?>
            </td>            
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
<?php // echo // $page_links; ?>
