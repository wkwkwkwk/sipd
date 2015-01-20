<table width="100%">
    <?php foreach ($dataProvider as $x): ?>
    <tr>
        <td>
        	<?php
        		if($x['id']==1){
        			echo "<strong>";
        			echo $x['properti'];
        			echo $x['nama'];
        			echo "</strong>";
        		}else{
        			echo $x['properti'];
        			echo $x['nama'];
        		}
        	?>
        </td>
        <td width="45%"><input type="text" class="form-control" 
        	<?php
        		if($x['readonly']=='true' && $x['ketersediaan']=='Ada'){
        			echo "readonly='readonly' ";
        			echo "name='";
        			echo $x['nm_field'];
        			echo "'";
        		}else if($x['readonly']=='true' && $x['ketersediaan']=='Tidak Ada'){
        			echo "readonly='readonly' ";
        			echo "name='";
        			echo $x['nm_field'];
        			echo "'";
        			echo " placeholder='Tidak Ada'";
        		}else{
        			echo "name='";
        			echo $x['nm_field'];
        			echo "'";
        		}
        	?> /></td>
    </tr>
	<?php endforeach; ?>
</table>