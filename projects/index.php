

<?php include_once('./index.ctrl.php')?>

<?php include_once('../header.php')?>

<table class="table table-striped table-hover">
    <tr>
        <th>#</th>
        <th>name</th>
        <th>devs</th>
        <th>actions</th>
    </tr>
<?php foreach($projects as $p):?>
<tr>
    <td><?=$p->getId()?></td>
    <td><?=$p->getName()?></td>
    <td>
        <a href="/devs/index.php?project_id=<?=$p->getId()?>">devs</a>
    </td>
    <td>
        <a href="" class="btn btn-danger">
            <i class="fas fa-trash"></i>
        </a>
    </td>
</tr>

<?php endforeach;?>    

</table>
<?php include_once('../footer.php')?>              
