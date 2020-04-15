<?php
    class slide_2 {
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
            $totalRecord = model::numRows("select slide_2_id from slide_2");
            $numPage = ceil($totalRecord/$recordPerPage);
            $p = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"] - 1 : 0;
            $from = $p * $recordPerPage;
            $data = model::getAll("select * from slide_2 order by slide_2_id desc limit $from, $recordPerPage");
            include "view/backend/slide_2.php";
        }
        public function addItem(){
			$formAction = "admin.php?controller=slide_2&action=doAdd";
			include "view/backend/change_slide_2.php";
        }
        public function doAddItem(){
            $img = "";
            if($_FILES["img"]["name"] != ""){
                $img = time().$_FILES["img"]["name"];
                move_uploaded_file($_FILES["img"]["tmp_name"], "public/upload/$img");
            }
			model::execute("insert into slide_2 set slide_2_img = '$img'");
			header("location:admin.php?controller=slide_2");
		}	
        public function editItem($id){
			$formAction = "admin.php?controller=slide_2&action=doEdit&id=$id";
			$record = model::getRecord("select * from slide_2 where slide_2_id=$id");
			include "view/backend/change_slide_2.php";
        }
        public function doEditItem($id){
            if($_FILES["img"]["name"] != ""){
                $old_img = model::getRecord("select slide_2_img from slide_2 where slide_2_id=$id");
                if($old_img->slide_2_img != "" && file_exists("public/upload/".$old_img->slide_2_img))
					unlink("public/upload/".$old_img->slide_2_img);
				$img = time().$_FILES["img"]["name"];
				move_uploaded_file($_FILES["img"]["tmp_name"],"public/upload/$img");
				model::execute("update slide_2 set slide_2_img='$img' where slide_2_id=$id");
			}
			header("location:admin.php?controller=slide_2");
		}
        public function deleteItem($id){
            $old_img = model::getRecord("select slide_2_img from slide_2 where slide_2_id=$id");
            if($old_img->slide_2_img != "" && file_exists("public/upload/".$old_img->slide_2_img))
                unlink("public/upload/".$old_img->slide_2_img);
			model::execute("delete from slide_2 where slide_2_id=$id");
			header("location:admin.php?controller=slide_2");
		}	
    }
    new slide_2();
?>