<h3 class="display-3">Category products</h3>
<a href="admin.php?controller=category_product&action=add" class="btn btn-outline-secondary">Add category product</a>
<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Stt</th>
            <th scope="col">Name</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $key => $values): ?>
        <tr>
            <th scope="row"><?php echo $key+1 ?></th>
            <td><?php echo $values->category_product_name; ?></td>
            <td>
                <a class="btn btn-outline-info" href="admin.php?controller=category_product&action=edit&id=<?php echo $values->category_product_id;?>">Edit</button>
                <a class="btn btn-outline-danger" href="admin.php?controller=category_product&action=delete&id=<?php echo $values->category_product_id;?>">Delete</button>
            </td>
        </tr>
<?php endforeach; ?>
    </tbody>
</table>
<ul class="pagination float-right">
    <?php for($i = 1; $i <= $numPage; $i++): ?>
        <li class="page-item"><a class="page-link" href="admin.php?controller=category_product&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
    <?php endfor; ?>
</ul>
