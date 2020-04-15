<?php
    class product {
        public function __construct() {
            $action = isset($_GET['action']) ? $_GET["action"] : "";
            $id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
            switch($action){
                case 'edit':
                    $this->editItem($id);
                    break;
                case 'doEdit':
                    $this->doEditItem($id);
                    break;
                case 'add':
                    $this->addItem();
                    break;
                case 'doAdd':
                    $this->doAddItem();
                    break;
                case 'delete':
                    $this->deleteItem($id);
                    break;
                default: 
                    $this->getItems();
                    break;
            }
        }
        public function getItems()
        {
            $recordPerPage = 5;
            $totalRecord = model::numRows("select product_id from product");
            $numPage = ceil($totalRecord/$recordPerPage);
            $p = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"] - 1 : 0;
            $from = $p * $recordPerPage;
            $data = model::getAll("select * from product order by product_id desc limit $from, $recordPerPage");
            include "view/backend/product.php";
        }
        public function addItem(){
			$formAction = "admin.php?controller=products&action=doAdd";
			include "view/backend/change_product.php";
        }
        public function doAddItem(){
            $fullName = $_POST["fullName"] ;
            $price =  $_POST["price"] ;
            $desc = $_POST["desc"];
            $category = $_POST["category"];
            $hot = isset($_POST["hot"]) ? 1 : "";
            $sale = isset($_POST["sale"]) ? 1 : "";
            $content =$_POST["content"] ;
            $upTo =  $_POST["upto"] ;
            $img = "";
            if($_FILES["img"]["name"] != ""){
                $img = time().$_FILES["img"]["name"];
                move_uploaded_file($_FILES["img"]["tmp_name"], "public/upload/$img");
            }
            model::execute("insert into product set product_name='$fullName', product_price = '$price', product_desc = '$desc', product_content = '$content', product_fk_id = '$category', product_hot = '$hot', product_sale = '$sale', product_img = '$img', product_upTo = '$upTo'");

            header("location:admin.php?controller=products");
		}	
        public function editItem($id){
			$formAction = "admin.php?controller=products&action=doEdit&id=$id";
			$record = model::getRecord("select * from product where product_id=$id");
			include "view/backend/change_product.php";
        }
        public function doEditItem($id){
			$fullName = $_POST["fullName"] ;
            $price =  $_POST["price"] ;
            $desc = $_POST["desc"];
            $category = $_POST["category"];
            $hot = isset($_POST["hot"]) ? 1 : "";
            $sale = isset($_POST["sale"]) ? 1 : "";
            $content =$_POST["content"] ;
            $upTo =  $_POST["upto"] ;
            model::execute("update product set product_name = '$fullName', product_price = '$price', product_desc = '$desc', product_content = '$content', product_fk_id = '$category', product_hot = '$hot', product_sale = '$sale', product_upTo = '$upTo' where product_id=$id");
            if($_FILES["img"]["name"] != ""){
                $old_img = model::getRecord("select product_img from product where product_id=$id");
                if($old_img->product_img != "" && file_exists("public/upload/".$old_img->product_img))
					unlink("public/upload/".$old_img->product_img);
				$img = time().$_FILES["img"]["name"];
				move_uploaded_file($_FILES["img"]["tmp_name"],"public/upload/$img");
				model::execute("update product set product_img='$img' where product_id=$id");
			}
			header("location:admin.php?controller=products");
		}
        public function deleteItem($id){
            $old_img = model::getRecord("select product_img from product where product_id=$id");
            if($old_img->product_img != "" && file_exists("public/upload/".$old_img->product_img))
                unlink("public/upload/".$old_img->product_img);
			model::execute("delete from product where product_id=$id");
			header("location:admin.php?controller=products");
		}	
    }
    new product();
