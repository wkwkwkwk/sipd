<?php 
    $taun1='2010';
    $taun2='2011';
    $taun3='2012';
    $taun4='2013';
    $taun5='2014';
?>
<table border="1" width="100%">
	<caption class="text-center">Uji Coba Laporan hingga tahun <?php echo $tahunini; ?> </caption>
	
		<thead>
            <th class="text-center" style="font-size:10px;">NAMA</th>
            <th class="text-center" style="font-size:10px;">2010</th>
            <th class="text-center" style="font-size:10px;">2011</th>
            <th class="text-center" style="font-size:10px;">2012</th>
            <th class="text-center" style="font-size:10px;">2013</th>
            <th class="text-center" style="font-size:10px;">2014</th>
            <th class="text-center" style="font-size:10px;">SATUAN</th>
            <th class="text-center" style="font-size:10px;">KETERSEDIAAN</th>
            <th class="text-center" style="font-size:10px;">SUMBER DATA</th>
        </thead>
        <?php foreach ($dataTopografi as $x) :?>
        <tbody>
            <tr>
                <td width="55%">
                    <?php
                        if($x->id==1){
                            echo "<strong>";
                            echo $x->properti;
                            echo $x->nama;
                            echo "</strong>";
                        }else{
                            echo $x->properti;
                            echo $x->nama;
                        }
                    ?>
                </td>
                <td>
                    <?php echo $x->$taun1; ?>
                </td>
                <td>
                    <?php echo $x->$taun2; ?>
                </td>
                <td>
                    <?php echo $x->$taun3; ?>
                </td>
                <td>
                    <?php echo $x->$taun4; ?>
                </td>
                <td>
                    <?php echo $x->$taun5; ?>
                </td>
                <td>
                    <?php echo $x->satuan; ?>    
                </td>
                <td>
                    <?php echo $x->ketersediaan; ?>
                </td>
                <td>
                    <?php echo $x->sumber_data; ?>
                </td>
            </tr>
    
        </tbody>
        <?php endforeach; ?>
    <tr>
	  	<td style="border: none;" colspan="3">
	    Export ke format :
	    <a href="<?php echo $this -> createUrl("export/toexcel/fileName/reportexcel"); ?>">Ms. Excel</a> 
	    | 
	    <a href="<?php echo $this -> createUrl("export/toword/fileName/reportword"); ?>">Ms. 
	    Word</a>
	  	</td>
	</tr>
    
</table>