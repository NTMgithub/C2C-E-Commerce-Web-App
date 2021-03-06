<?php 
class Database{
        private $hostname = 'localhost';
        private $username = 'root';
        private $pass = '';
        private $dbname = 'webc2c';

        public $conn = NULL;
        public $result = NULL;


        public function __construct()
        {
            $this->connect();
        }

        //Hàm kết nối database
        public function connect(){
            $this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->dbname);
            if (!$this->conn){
                echo "Kết nối thất bại!";
                exit();
            }else{
                mysqli_set_charset($this->conn, 'utf8');
              //  echo 'Kết nối thành công!';
            }
            return $this->conn;
        }

        //Hàm excute câu truy vấn
        public function ExcuteQuery($sqlquery){
            $this->result = mysqli_query($this->conn, $sqlquery);
            return $this->result;
        }

        //Hàm phân trang
        public function Pagination($tableName, $start, $per_page){
            $sqlquery = "select * FROM $tableName limit $start,$per_page";

            $resultData = $this->ExcuteQuery($sqlquery);

            if ($this->result){
                while ( $datas = mysqli_fetch_array($resultData) ){
                    $data[] = $datas;
                }
            }
            else{
                $data = 0;
            }

            return $data;
        }

        //Đếm số lượng record
        public function CountDataTable($tableName){
            $sqlquery = "SELECT * FROM $tableName";
            $resultData = $this->ExcuteQuery($sqlquery);

            $count = mysqli_num_rows($resultData);

            return $count;
        }

        //Hàm lấy tất cả dữ liệu (dùng cho show dữ liệu)
        public function ShowAllData($tableName){
            $sqlquery = "SELECT * FROM $tableName";
            $this->ExcuteQuery($sqlquery);

            if ($this->result){
                while ( $datas = mysqli_fetch_array($this->result) ){
                    $data[] = $datas;
                }
            }
            else{
                $data = 0;
            }
            return $data;
        }

        //Hàm lấy dữ liệu từ 2 bảng
        public function ShowAllData2Table($tableName1, $idJoinTable, $tableName2){
            $sqlquery = "SELECT * FROM $tableName1, $tableName2 WHERE $tableName1.$idJoinTable = $tableName2.$idJoinTable ";
            $this->ExcuteQuery($sqlquery);

            if ($this->result){
                while ( $datas = mysqli_fetch_array($this->result) ){
                    $data[] = $datas;
                }
            }
            else{
                $data = 0;
            }
            return $data;
        }


        //Hàm lấy dữ liệu với điều kiện ID (dùng cho show dữ liệu)
        public function ShowDataWithID($tableName, $tableProps, $value){
            $sqlquery = "SELECT * FROM $tableName WHERE $tableProps = $value ";
            $this->ExcuteQuery($sqlquery);

            if ($this->result){
                while ( $datas = mysqli_fetch_array($this->result) ){
                    $data[] = $datas;
                }
            }
            else{
                $data = 0;
            }
            return $data;
        }

        //Kiểu dữ liệu truyền vào các tham số
        // $tableName   = 'user_info'; //tên table
        // $tableProps = ['user_name','pass_word']; //thuộc tính table
        // $value = [$username,$password]; //giá trị table

        //Hàm thêm mới
        public function InsertData($tableName, $tableProps, $value){
            $sqlquery = "INSERT INTO $tableName($tableProps) VALUES ($value) ";
            return $this->ExcuteQuery($sqlquery);
        }

        //Hàm sửa
        public function UpdateData($tableName, $tableProps, $value, $tableId, $id){
            $sqlquery = "UPDATE $tableName SET $tableProps = '$value' WHERE $tableId = '$id' ";
            return $this->ExcuteQuery($sqlquery);
        }

        //Hàm xóa
        public function DeleteData($tableName, $tableProps, $value){
            $sqlquery = "DELETE FROM $tableName WHERE $tableProps = '$value' ";
            return $this->ExcuteQuery($sqlquery);
        }

        //Hàm nối URL GET METHOD
        //$parameter = "category=1";                            
        public function MergeURL($parameter){
            $url = $_SERVER['REQUEST_URI'];
            $query = parse_url($url, PHP_URL_QUERY);

            // Returns a string if the URL has parameters or NULL if not
            if ($query) {
                $url .= '&'.$parameter;
                return $url;
            } else {
                $url .= '?'.$parameter;
                return $url;
            }

        }

        //Active color menu đã chọn
        public function ActiveMenuSelected($getParameterURL, $valueCompare){
            if ( isset($getParameterURL) && ($getParameterURL == $valueCompare) ) echo 'active';
        }



}