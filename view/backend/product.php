<style>
    table tr th,
    table tr td {
        padding: 0.4rem !important;
    }
</style>
<h3 class="display-3">Sản phẩm</h3>
<a href="admin.php?controller=product&action=add" class="btn btn-outline-secondary">Add product</a>
<div class="table-responsive">
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Stt</th>
                <th scope="col">Name</th>
                <th scope="col">Img</th>
                <th scope="col">Category</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Hot</th>
                <th scopr="col">Sale</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $key => $values) : ?>
            <tr>
                <th scope="row"><?php echo $key + 1 ?></th>
                <td><?php echo $values->product_name; ?></td>
                <td>
                    <img src="public/upload/<?php echo $values->product_img; ?>" alt="img" style="width: 40px; height: auto;">
                </td>
                <td>
                    <?php
                    $category = model::getRecord("select category_product_name from category_product where category_product_id =$values->product_fk_id");
                    echo isset($category->category_product_name) ? $category->category_product_name : "";
                    ?>
                </td>
                <td><?php echo $values->product_price; ?></td>
                <td><?php echo substr($values->product_desc, 0, 40); ?>...</td>
                <td>
                    <input type="checkbox" <?php if ($values->product_hot == 1) : ?> checked <?php endif; ?>>
                </td>
                <td>
                    <input type="checkbox" <?php if ($values->product_sale == 1) : ?> checked <?php endif; ?>>
                    <?php echo $values->product_upTo; ?>%
                </td>
                <td>
                    <a class="btn btn-outline-info btn-sm" href="admin.php?controller=product&action=edit&id=<?php echo $values->product_id; ?>">Edit</a>
                    <a class="btn btn-outline-danger btn-sm" href="admin.php?controller=product&action=delete&id=<?php echo $values->product_id; ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<ul class="pagination float-right">
    <li class="page-item"><a class="page-link" href="#">Pag</a></li>
    <?php for ($i = 1; $i <= $numPage; $i++) : ?>
    <li class="page-item"><a class="page-link" href="admin.php?controller=product&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
    <?php endfor; ?>
</ul> 