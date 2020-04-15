<?php
    class listSlide {
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
            $totalRecord = model::numRows("select slide_id from slide");
            $numPage = ceil($totalRecord/$recordPerPage);
            $p = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"] - 1 : 0;
            $from = $p * $recordPerPage;
            $data = model::getAll("select * from slide order by slide_id desc limit $from, $recordPerPage");
            include "view/backend/slide.php";
        }
        public function addItem(){
			$formAction = "admin.php?controller=slide&action=doAdd";
			include "view/backend/change_slide.php";
        }
        public function doAddItem(){
            $img = "";
            if($_FILES["img"]["name"] != ""){
                $img = time().$_FILES["img"]["name"];
                move_uploaded_file($_FILES["img"]["tmp_name"], "public/upload/$img");
            }
			model::execute("insert into slide set slide_img = '$img'");
			header("location:admin.php?controller=slide");
		}	
        public function editItem($id){
			$formAction = "admin.php?controller=slide&action=doEdit&id=$id";
			$record = model::getRecord("select * from slide where slide_id=$id");
			include "view/backend/change_slide.php";
        }
        public function doEditItem($id){
            if($_FILES["img"]["name"] != ""){
                $old_img = model::getRecord("select slide_img from slide where slide_id=$id");
                if($old_img->slide_img != "" && file_exists("public/upload/".$old_img->slide_img))
					unlink("public/upload/".$old_img->slide_img);
				$img = time().$_FILES["img"]["name"];
				move_uploaded_file($_FILES["img"]["tmp_name"],"public/upload/$img");
				model::execute("update slide set slide_img='$img' where slide_id=$id");
			}
			header("location:admin.php?controller=slide");
		}
        public function deleteItem($id){
            $old_img = model::getRecord("select slide_img from slide where slide_id=$id");
            if($old_img->slide_img != "" && file_exists("public/upload/".$old_img->slide_img))
                unlink("public/upload/".$old_img->slide_img);
			model::execute("delete from slide where slide_id=$id");
			header("location:admin.php?controller=slide");
		}	
    }
    new listSlide();
