<h3 class="display-3">List Users</h3>
<a href="admin.php?controller=user&action=add" class="btn btn-outline-secondary">Add user</a>
<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Stt</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $key => $values) : ?>
            <tr>
                <th scope="row"><?php echo $key + 1; ?></th>
                <td><?php echo $values->user_name; ?></td>
                <td><?php echo $values->user_email; ?></td>
                <td>
                    <a class="btn btn-outline-info btn-sm" href="admin.php?controller=user&action=edit&id=<?php echo $values->user_id; ?>">Edit</button>
                        <a class="btn btn-outline-danger btn-sm" href="admin.php?controller=user&action=delete&id=<?php echo $values->user_id; ?>">Delete</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<ul class="pagination float-right">
    <?php for ($i = 1; $i <= $numPage; $i++) : ?>
        <li class="page-item"><a class="page-link" href="admin.php?controller=user&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
    <?php endfor; ?>
</ul>