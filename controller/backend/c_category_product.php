<?php
    class category_product {
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
            $totalRecord = model::numRows("select category_product_id from category_product");
            $numPage = ceil($totalRecord/$recordPerPage);
            $p = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"] - 1 : 0;
            $from = $p * $recordPerPage;
            $data = model::getAll("select * from category_product order by category_product_id desc limit $from, $recordPerPage");
            include "view/backend/category_product.php";
        }
        public function addItem(){
			$formAction = "admin.php?controller=category_product&action=doAdd";
			include "view/backend/change_category_product.php";
        }
        public function doAddItem(){
			$fullName = $_POST["fullName"];
			model::execute("insert into category_product set category_product_name='$fullName'");
			header("location:admin.php?controller=category_product");
		}	
        public function editItem($id){
			$formAction = "admin.php?controller=category_product&action=doEdit&id=$id";
			$record = model::getRecord("select * from category_product where category_product_id=$id");
			include "view/backend/change_category_product.php";
        }
        public function doEditItem($id){
			$fullName = $_POST["fullName"];
			model::execute("update category_product set category_product_name='$fullName' where category_product_id=$id");
			header("location:admin.php?controller=category_product");
		}
        public function deleteItem($id){
			model::execute("delete from category_product where category_product_id=$id");
			header("location:admin.php?controller=category_product");
		}	
    }
    new category_product();
