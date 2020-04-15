<?php
    class listNew {
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
            $totalRecord = model::numRows("select new_id from new");
            $numPage = ceil($totalRecord/$recordPerPage);
            $p = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"] - 1 : 0;
            $from = $p * $recordPerPage;
            $data = model::getAll("select * from new order by new_id desc limit $from, $recordPerPage");
            include "view/backend/new.php";
        }
        public function addItem(){
			$formAction = "admin.php?controller=new&action=doAdd";
			include "view/backend/change_new.php";
        }
        public function doAddItem(){
            $fullName = isset($_POST["fullName"]) ? $_POST["fullName"] : "" ;
            $content = isset($_POST["content"]) ? $_POST["content"] : "";
            $img = "";
            if($_FILES["img"]["name"] != ""){
                $img = time().$_FILES["img"]["name"];
                move_uploaded_file($_FILES["img"]["tmp_name"], "public/upload/$img");
            }
            model::execute("insert into new set new_name='$fullName', new_content = '$content',new_img = '$img'");
            header("location:admin.php?controller=new");
		}	
        public function editItem($id){
			$formAction = "admin.php?controller=new&action=doEdit&id=$id";
			$record = model::getRecord("select * from new where new_id=$id");
			include "view/backend/change_new.php";
        }
        public function doEditItem($id){
			$fullName = isset($_POST["fullName"]) ? $_POST["fullName"] : "" ;
            $content = isset($_POST["content"]) ? $_POST["content"] : "";
            model::execute("update new set new_name = '$fullName',  new_content = '$content' where new_id=$id");
            if($_FILES["img"]["name"] != ""){
                $old_img = model::getRecord("select new_img from new where new_id=$id");
                if($old_img->new_img != "" && file_exists("public/upload/".$old_img->new_img))
					unlink("public/upload/".$old_img->new_img);
				$img = time().$_FILES["img"]["name"];
				move_uploaded_file($_FILES["img"]["tmp_name"],"public/upload/$img");
				model::execute("update new set new_img='$img' where new_id=$id");
			}
			header("location:admin.php?controller=new");
		}
        public function deleteItem($id){
            $old_img = model::getRecord("select new_img from new where new_id=$id");
            if($old_img->new_img != "" && file_exists("public/upload/".$old_img->new_img))
                unlink("public/upload/".$old_img->new_img);
			model::execute("delete from new where new_id=$id");
			header("location:admin.php?controller=new");
		}	
    }
    new listNew();
?>