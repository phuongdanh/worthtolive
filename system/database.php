<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class process {

    //Bien ket noi 
    protected $_conn;

    //Ham ket noi
    function connect() {
        //Neu bien $_conn chua co gia tri thi ta se thuc thi cau lenh gan bien
        if (!$this->_conn) {
            $this->_conn = mysqli_connect('localhost', 'root', '', 'worthtolive')or die("Can not connect server");
            // Xử lý truy vấn UTF8 để tránh lỗi font
            mysqli_query($this->_conn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
        }
    }

    //Ham show danh sach
    function get_list($sql) {
        //Call connect() function
        $this->connect();
        //Execute the query
        $result = mysqli_query($this->_conn,$sql);
        $list = array();
        if (!$result) {// if The Query is wrong
            die('The query is wrong');
        }
        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
            $list[] = $row;
        }
        //rescue the memory
        mysqli_free_result($result);
        return $list;
    }

    //Ham dem so luong
    function count($sql,$count_as) {
         //Call connect() function
        $this->connect();
        //Execute the query
        $result = mysqli_query($this->_conn,$sql );
        if (!$result) {// if The Query is wrong
            die('The query is wrong');
        }
       
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if($row){
            mysqli_free_result($result);
            return $row[$count_as];
        }
        return 0;
    }

    //Ham show 1 row
    
    // Hàm lấy 1 record dùng trong trường hợp lấy chi tiết tin
    function get_row($sql) {
        // Kết nối
        $this->connect();

        $result = mysqli_query($this->_conn, $sql);

        if (!$result) {
            die('The query is wrong');
        }

        $row = mysqli_fetch_assoc($result);

        // Xóa kết quả khỏi bộ nhớ
        mysqli_free_result($result);

        if ($row) {
            return $row;
        }

        return false;
}
    //Ham them du lieu
    function add($table, $data = array()) {
        $this->connect();
        $field_list = '';
        $value_list = '';
        foreach ($data as $key => $value) {
            $field_list .= $key.',';
            $value_list .= "'".$value."'".',';
        }
        $sql = 'INSERT INTO ' . $table . ' (' . trim($field_list, ',') . ') VALUES (' . trim($value_list, ',') . ')';
        return mysqli_query($this->_conn, $sql);
    }

    //Ham update du lieu
    function update($table, $data, $idField,$idValue) {
        $this->connect();
        $sql = '';
        foreach ($data as $key => $value) {
            $sql .= "$key = '".$value."',";
        }
        $sql = 'UPDATE ' . $table . ' SET ' . trim($sql, ',') . ' WHERE ' .$idField. ' = '.$idValue.';';
        return mysqli_query($this->_conn, $sql);
    }

    //Ham xoa du lieu
    function delete($table,$idField, $idValue) {
        $this->connect();
        $sql = 'DELETE FROM '.$table.' WHERE '.$idField.'='.(int)$idValue.';';
        return mysqli_query($this->_conn, $sql);
    }

    //Ham ngat ket noi
    function disconnect() {
        if ($this->_conn) {
            mysqli_close($this->_conn);
        }
    }

}