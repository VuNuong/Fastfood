<style>
    table tr th,
    table tr td {
        padding: 0.4rem !important;
    }
</style>
<h3 class="display-3">Category News</h3>
<a href="admin.php?controller=new&action=add" class="btn btn-outline-secondary">Add new</a>
<div class="table-responsive">
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Stt</th>
                <th scope="col">Img</th>
                <th scope="col">Name</th>
                <th scope="col">Content</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $key => $values) : ?>
            <tr>
                <th scope="row"><?php echo $key + 1 ?></th>
                <td>
                    <img src="public/upload/<?php echo $values->new_img; ?>" alt="img" style="width: 40px; height: auto;">
                </td>
                <td><?php echo substr($values->new_name, 0, 30); ?>...</td>
                <td><?php echo substr($values->new_content, 0, 60); ?>...</td>
                <td>
                    <a class="btn btn-outline-info btn-sm" href="admin.php?controller=new&action=edit&id=<?php echo $values->new_id; ?>">Edit</a>
                    <a class="btn btn-outline-danger btn-sm" href="admin.php?controller=new&action=delete&id=<?php echo $values->new_id; ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<ul class="pagination float-right">
    <?php for ($i = 1; $i <= $numPage; $i++) : ?>
    <li class="page-item"><a class="page-link" href="admin.php?controller=new&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
    <?php endfor; ?>
</ul> 