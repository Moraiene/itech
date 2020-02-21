<?php
    $file_name = "data.txt";
    
    $data = file( $file_name );
?>
<table border="1">
<?php
    foreach( $data as $value ):
    
        $value = explode( "|", $value );
?>
    <tr>
        <td><?=$value[0]?></td>
        <td><?=$value[1]?></td>
        <td><?=$value[2]?></td>
    </tr>
<?php
    endforeach;
?>
</table>