<?php
    class user {
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
            $totalRecord = model::numRows("select user_id from user");
            $numPage = ceil($totalRecord/$recordPerPage);
            $p = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"] - 1 : 0;
            $from = $p * $recordPerPage;
            $data = model::getAll("select * from user order by user_id desc limit $from, $recordPerPage");
            include "view/backend/user.php";
        }
        public function addItem(){
			$formAction = "admin.php?controller=user&action=doAdd";
			include "view/backend/change_user.php";
        }
        public function doAddItem(){
			$fullName = $_POST["fullName"];
			$pass = $_POST["pass"];
			$email = $_POST["email"];
			$pass = md5($pass);
			model::execute("insert into user set user_name='$fullName', user_password='$pass', user_email='$email'");
			header("location:admin.php?controller=user");
		}	
        public function editItem($id){
			$formAction = "admin.php?controller=user&action=doEdit&id=$id";
			$record = model::getRecord("select * from home_user where user_id=$id");
			include "view/backend/change_user.php";
        }
        public function doEditItem($id){
			$fullName = $_POST["fullName"];
			$pass = $_POST["pass"];
			model::execute("update user set user_name='$fullName' where user_id=$id");
			if($pass != ""){
				$pass = md5($pass);
				model::execute("update user set user_password='$pass' where user_id=$id");
			}
			header("location:admin.php?controller=user");
		}
        public function deleteItem($id){
			model::execute("delete from user where user_id=$id");
			header("location:admin.php?controller=user");
		}	
    }
    new user();
