<?php 
$taun1='2010';
$taun2='2011';
$taun3='2012';
$taun4='2013';
$taun5='2014';
 ?>
<table border="1" width="100%">
    <caption>Laporan njajal <!-- hingga tahun <?php /*echo*/ $tahunini; ?> --></caption>
    <?php foreach ($dataTopografi as $x) :?>
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
    <?php endforeach; ?>
    

</table>