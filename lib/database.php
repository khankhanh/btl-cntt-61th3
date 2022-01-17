<?php
    class database
    {
        public $link;
        function __construct()
        {
            $this->link = mysqli_connect("127.0.0.1","root","","nhaccuatui") or die ();
           
            mysqli_set_charset($this->link,"utf8");
        }

        
        function insert($table, array $data)
        {
            $sql = "INSERT INTO {$table} "; // $sql = "INSERT INTO category ";
            $columns = implode(',',array_keys($data)); // arr => string : $columns = "name,slug,detail,description"
            // gộp mảng thành chuỗi , ngăn cách bởi dấu ,
            $values = "";
            $sql .= '('.$columns.")"; // '('.$columns.")" = (name,slug,detail,description)
            // $sql = "INSERT INTO category (name,slug,detail,description) ";
            foreach($data as $field => $value)
            {
                if(is_string($value))
                {
                    $values .= "'".mysqli_real_escape_string($this->link,$value)."',"; // 'áds','áds','áds','áds',
                }
                else
                {
                    $values .= mysqli_real_escape_string($this->link,$value).",";
                }
            }
            // $value : 'áds','áds','áds','áds',
            $values = substr($values, 0, -1); // $value : 'áds','áds','áds','áds'
            $sql .= " VALUES(".$values.")"; // VALUES(".$values.")" =  VALUES(12312,'áds','áds','áds')
            // $sql = "INSERT INTO category (name,slug,detail,description) VALUES(12312,'áds','áds','áds')

            //debug($sql);die;
            mysqli_query($this->link,$sql) or die ("Lỗi query insert ----" .mysqli_error($this->link));
            return mysqli_insert_id($this->link);
        }

        
        public function update($table, array $data, array $conditions)
        {
            $sql = "UPDATE {$table}";
            $set = " SET ";
            $where = " WHERE ";
            foreach($data as $field => $value)
            {
                if(is_string($value))
                {
                    $set .= $field .'='.'\''. mysqli_real_escape_string($this->link, $value) .'\',';
                }
                else
                {
                    $set .= $field .'='. mysqli_real_escape_string($this->link,$value) . ',';
                }
            }

            $set=substr($set,0,-1);
            // UPDATE `category` SET `name`='a',`slug`='a',`detail`=123,`description`='des'
            foreach($conditions as $field =>$value)
            {
                if(is_string($value))
                {
                    $where .= $field .'='.'\''. mysqli_real_escape_string($this->link,$value) .'\' AND ';
                }
                else
                {
                    $where .= $field .'='. mysqli_real_escape_string($this->link,$value) .' AND ';
                }
            }

            $where=substr($where, 0, -5);
            $sql .= $set . $where;

            //debug($sql);die;
            mysqli_query($this->link,$sql) or die("Lỗi truy vấn Update ----".mysqli_error($this->link));
            return mysqli_affected_rows($this->link);
        }

        
        public function fetchAll($sql)
        {
            $result = mysqli_query($this->link,$sql) or die("Lỗi truy vấn sql ".mysqli_error($this->link));
            $data =[];
            if($result)
            {
                while($num=mysqli_fetch_assoc($result))
                {
                    $data[] = $num;
                }
            }
            return $data;
        }

        
        public function fetchOne($sql)
        {
            $result = mysqli_query($this->link,$sql) or die("Lỗi truy vấn fetchID ".mysqli_error($this->link));
            return mysqli_fetch_assoc($result);
        }
        public function countData($sql)
        {
            $result = mysqli_query($this->link,$sql) or die("Lỗi truy vấn fetchID ".mysqli_error($this->link));
            return mysqli_affected_rows($this->link);
        }
        
        public function delete($sql)
        {
            mysqli_query($this->link,$sql) or die("Lỗi truy vấn delete--------".mysqli_error($this->link));
            return mysqli_affected_rows($this->link);
        }

        public function query($sql)
        {
            mysqli_query($this->link,$sql) or die("Lỗi truy vấn --------".mysqli_error($this->link));
            return mysqli_affected_rows($this->link);
        }
    }
?>