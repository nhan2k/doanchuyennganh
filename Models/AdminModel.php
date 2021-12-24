<?php

class AdminModel extends BaseModel {


    public function getAll($table) {

        $sql = "SELECT * FROM ${table} order by id asc limit 10";
        $query = $this->_query($sql);

        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }

    public function getAllTable($table) {
        
        $sql = "select * from ${table}";
        $query = $this->_query($sql);

        return $query; 
    }

    public function count($table) {
        
        $sql = "select count(id) as count from ${table}";
        $query = $this->_query($sql);

        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }

    public function countAuthor() {
        
        $sql = "select count(author_id) as count from author";
        $query = $this->_query($sql);

        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }

    public function insert($table, $data) {
        $this->create($table, $data);
    }

    public function edit($table, $id, $data) {
        $this->update($table, $id, $data);
    }

    public function destroy($table, $id) {
        $this->delete($table, $id);
    }

    public function getAllNews($limit) {
        return $this->all("news", ["*"], ["id" => "id", "id2" => "asc"], $limit);
    }

    public function getCategoryId() {
        $sql = "SELECT DISTINCT id, name FROM category";
        $query = $this->_query($sql);

        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }

    public function getAuthorId() {
        $sql = "SELECT DISTINCT author_id, name FROM author";
        $query = $this->_query($sql);

        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }

    public function findCategoryById($id) {
        $sql = "SELECT * from category Where id = ${id} limit 1";
        $query = $this->_query($sql);

        $data = []; 
        while ($row = mysqli_fetch_assoc($query)){
            array_push($data, $row);
        }

        return $data;        
    }

    public function findNews($id) {
        
        $sql = "SELECT news.id as newsId, title,category_id, content, date_posted, date_updated, status, comment_status,
        hinhanh, category.name as category_name,author.author_id, author.name as author_name
        from news inner join category on news.category_id = category.id inner join 
        author on news.author_id = author.author_id where news.id = ${id}";
        
        $query = $this->_query($sql);

        $data = []; 
        while ($row = mysqli_fetch_assoc($query)){
            array_push($data, $row);
        }

        return $data;
    }

    public function getAllAuthor($limit) {
        return $this->all("author", ["*"], ["author_id" => "author_id", "id2" => "asc"], $limit);
    }

    public function deleteauthor($id) {
        $sql = "DELETE FROM author WHERE author_id = ${id}";
        $this->_query($sql);
    }

    public function findAuthor($author_id) {
        $sql = "SELECT * from author where author_id = ${author_id}";
        
        $query = $this->_query($sql);

        $data = []; 
        while ($row = mysqli_fetch_assoc($query)){
            array_push($data, $row);
        }

        return $data;
    }

    public function authorEdit($table, $author_id, $data=[]) {

        $dataSet = [];
        foreach ($data as $key => $value) {
            array_push($dataSet, "${key} = '". $value . "'");
        }

        $dataSet = implode(',', $dataSet);

        $sql = "update ${table} set ${dataSet} where author_id = ${author_id}";

        $this->_query($sql);
    }
}