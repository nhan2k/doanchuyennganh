<?php

class BaseModel extends Database {

    private $connect;

    public function __construct() {
        $this->connect = $this->connect();
    }

    // Lấy tất cả dữ liệu trong bảng
    public function all($table, $select = ['*'], $orderBys = [], $limit = 10) {

        $columns = implode(',', $select);

        $orderByString = implode(' ', $orderBys);

        if($orderByString) {
            $sql = "SELECT ${columns} from ${table} ORDER BY ${orderByString} LIMIT ${limit}";
        }else{
            $sql = "SELECT ${columns} from ${table} LIMIT ${limit}";
        }

        $query = $this->_query($sql);

        $data = [];

        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }

    public function lastedNews($table, $limit) {
        $sql = "SELECT * from ${table} ORDER By date_posted DESC limit ${limit}";
        $query = $this->_query($sql);

        $data = [];

        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }

    // Lấy news trong category
    public function newsCategory($table, $select = ['*'], $where = [''], $orderBys = [], $limit = 10) {

        $columns = implode(',', $select);

        $orderByString = implode(' ', $orderBys);

        if($orderByString) {
            $sql = "SELECT ${columns} from ${table} WHERE ${where} ORDER BY ${orderByString} LIMIT ${limit}";
        }else{
            $sql = "SELECT ${columns} from ${table} WHERE ${where} LIMIT ${limit}";
        }

        $query = $this->_query($sql);

        $data = [];

        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }

    // lấy 1 record trong bảng
    public function find($table, $id) {
        $sql = "SELECT * from ${table} Where id = ${id} limit 1";
        $query = $this->_query($sql);

        $data = [];
        while ($row = mysqli_fetch_assoc($query)){
            array_push($data, $row);
        }

        return $data;
    }

    // lấy 1 record trong bảng
    public function random($table) {
        $sql = "SELECT * from ${table} inner join author on ${table}.author_id = author.author_id Order by rand() limit 6";
        $query = $this->_query($sql);

        return $query;
    }

    // lấy tất cả record category trong bảng
    public function allCategory($table, $categoryId, $limit) {
        $sql = "SELECT * from ${table} inner join author on ${table}.author_id = author.author_id Where category_id = ${categoryId} limit ${limit}";
        $query = $this->_query($sql);

        return $query;
    }

    // Lấy 1 record category
    public function oneOfCategory($table, $categoryId) {
        $sql = "SELECT * from ${table} Where category_id = ${categoryId} limit 1";
        $query = $this->_query($sql);

        return $query;
    }

    // Thêm dữ liệu vào bảng
    public function create($table, $data = []) {

        $columns = implode(',', array_keys($data));
        $values = array_map(function($value) {
            return "'" . $value . "'";
        }, array_values($data));

        $values = implode(',', $values);

        $sql = "INSERT INTO ${table}(${columns}) VALUES(${values})";

        $this->_query($sql);
        // echo $sql;
    }

    // Cập nhật dữ liệu
    public function update($table, $id, $data) {

        $dataSet = [];
        foreach ($data as $key => $value) {
            array_push($dataSet, "${key} = '". $value . "'");
        }

        $dataSet = implode(',', $dataSet);

        $sql = "update ${table} set ${dataSet} where id = ${id}";

        $this->_query($sql);
    }

    // Xóa dữ liệu trong bảng
    public function delete($table, $id) {

        $sql = "DELETE FROM ${table} WHERE id = ${id}";
        $this->_query($sql);
    }

    // Thực hiện câu truy vấn
    public function _query($sql) {
        return mysqli_query($this->connect, $sql);
    }

    public function getByQuery($sql) {
        $query = $this->_query($sql);
        $data = [];

        while($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }
}
