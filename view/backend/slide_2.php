<h3 class="display-3">List slide_2</h3>
<a href="admin.php?controller=slide_2&action=add" class="btn btn-outline-secondary">Add slide_2</a>
<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Stt</th>
            <th scope="col">Img</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $key => $values): ?>
        <tr>
            <th scope="row"><?php echo $key+1; ?></th>
            <td>
                <img src="public/upload/<?php echo $values->slide_2_img; ?>" alt="img" style="width: 80px; height: auto;">
            </td>
            <td>
                <a class="btn btn-outline-info btn-sm" href="admin.php?controller=slide_2&action=edit&id=<?php echo $values->slide_2_id;?>">Edit</button>
                <a class="btn btn-outline-danger btn-sm" href="admin.php?controller=slide_2&action=delete&id=<?php echo $values->slide_2_id;?>">Delete</button>
            </td>
        </tr>
<?php endforeach; ?>
    </tbody>
</table>
<ul class="pagination float-right">
    <li class="page-item"><a class="page-link" href="#">Pag</a></li>
    <?php for($i = 1; $i <= $numPage; $i++): ?>
        <li class="page-item"><a class="page-link" href="admin.php?controller=slide_2&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
    <?php endfor; ?>
</ul>
