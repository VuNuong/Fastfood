<?php
    class model {
        public static function getAll($sql)
        {
            global $db;
            $result = mysqli_query($db, $sql) or die("Không truy vấn được 1");
            $arr    = array();
            while($rows = mysqli_fetch_object($result))
                $arr[] = $rows;
            return $arr;
        }
        public static function execute($sql){
			global $db;
			//$result = mysqli_query($db,$sql) or die("Không truy vấn được");	
			$insert_id =0;
			if(mysqli_query($db,$sql))
				$insert_id = mysqli_insert_id($db);
			return $insert_id;
		}
        public static function getRecord($sql)
        {
            global $db;
            $result = mysqli_query($db, $sql) or die("Không truy vấn được 3");
            $record   = mysqli_fetch_object($result);
            return $record;
        }
        public static function numRows($sql){
			global $db;
			$result = mysqli_query($db,$sql) or die("Không truy vấn được 4");
			return mysqli_num_rows($result);
		}
    }
?>