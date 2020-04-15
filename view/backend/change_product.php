<style>
    .row {
        margin-bottom: 1rem;
    }
</style>
<section style="width:80%; margin: auto">
    <h3 class="display-3">Add edit Product</h3>
    <form action="<?php echo $formAction; ?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-2"><label for="inputName">Name</label></div>
            <div class="col-md-10">
                <input type="text" class="form-control" id="inputName" placeholder="Enter Fullname" require autocomplete="off" name="fullName" value="<?php echo isset($record->product_name) ? $record->product_name : ""; ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"><label for="inputPrice">Price</label></div>
            <div class="col-md-10">
                <input type="number" class="form-control" id="inputPrice" placeholder="Enter Price" autocomplete="off" name="price" value="<?php echo isset($record->product_price) ? $record->product_price : ""; ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">Hot</div>
            <div class="col-md-10">
                <input type="checkbox" <?php if (isset($record->product_hot) && $record->product_hot == 1) : ?> checked <?php endif; ?> name="hot">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">Sale</div>
            <div class="col-md-10">
                <input type="checkbox" <?php if (isset($record->product_sale) && $record->product_sale == 1) : ?> checked <?php endif; ?> name="sale">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">Sale Up</div>
            <div class="col-md-4">
                <input type="number" name="upto" min="0" max="100" class="form-control" <?php if (isset($record->product_sale) && $record->product_sale != 1) : ?> disabled <?php endif; ?> value="<?php echo isset($record->product_upTo) ? $record->product_upTo : ""; ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">Category</div>
            <div class="col-md-10">
                <select name="category" class="form-control">
                    <?php
                    $categoryy = model::getAll("select * from cake_category_product order by category_product_id desc");
                    foreach ($categoryy as $key => $values) : ?>
                        <option <?php if (isset($record->product_fk_id) && $record->product_fk_id == $values->category_product_id) : ?> selected <?php endif; ?> value="<?php echo $values->category_product_id; ?>"><?php echo $values->category_product_name; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">Description</div>
            <div class="col-md-10">
                <textarea name="desc" class="form-control" style="height:250px;">
					<?php echo isset($record->product_desc) ? $record->product_desc : ""; ?>					
					</textarea>
                <script type="text/javascript">
                    CKEDITOR.replace("desc");
                </script>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">Content</div>
            <div class="col-md-10">
                <textarea name="content" class="form-control" style="height:250px;">
					<?php echo isset($record->product_content) ? $record->product_content : ""; ?>					
				</textarea>
                <script type="text/javascript">
                    CKEDITOR.replace("content");
                </script>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">Img</div>
            <div class="col-md-10">
                <input type="file" name="img" class="form-control-file">
            </div>
        </div>
        <button type="submit" class="btn btn-outline-danger">Submit</button>
        <button type="button" class="btn btn-outline-dark" onclick="history.go(-1);">Back</button>
    </form>
</section>