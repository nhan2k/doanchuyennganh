<?php

class CategoryModel extends BaseModel {

    const TABLE = 'category';

    public function getAll($select = ['*'],$orderBy =[], $limit = 10) {
        return $this->all(self::TABLE, $select, $orderBy, $limit);
    }

    public function findById($id) {

        return $this->find(self::TABLE, $id);

    }

    public function store($data) {

        $this->create(self::TABLE, $data);
    }

    public function updateData($id, $data) {

        $this->update(self::TABLE, $id, $data);
    }

    public function deleteData($id) {

        $this->delete(self::TABLE, $id);
    }

    public function getByCategoryId($categoryId) {

        $sql = "SELECT * FROM ".self::TABLE." WHERE id = ${categoryId}";
        return $this->getByQuery($sql);
    }

    public function getByCategoryName($categoryName) {
        $sql = "select name, title, news.id, content, hinhanh from ".self::TABLE." join news on ".self::TABLE.".id = news.category_id where name like '%${categoryName}%'";
        return $this->getByQuery($sql);
    }
}
