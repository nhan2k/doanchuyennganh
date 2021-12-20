<?php

class NewsModel extends BaseModel{

    const TABLE = 'news';
    private $conn;
    
    public function getAll($select = ['*'],$orderBy =[], $limit = 10) {
        return $this->all(self::TABLE, $select, $orderBy, $limit);
    }

    public function findById($id) {
        
        return $this->find(self::TABLE, $id);

    }

    public function updateById($id) {
        
    } 

    public function deleteById($id) {
        return __METHOD__;
    }

    public function getRandomNews() {
        return $this->random(self::TABLE);
    }

    public function getAllByCategoryId($categoryId, $limit) {
        
        return $this->allCategory(self::TABLE, $categoryId, $limit);
    }

    public function getOneByCategoryId($categoryId) {
        return $this->oneOfCategory(self::TABLE, $categoryId);
    }

    public function getLastedNews($limit) {
        return $this->lastedNews(self::TABLE, $limit);
    }
    

}