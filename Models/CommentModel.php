<?php
class CommentModel extends BaseModel {

    const TABLE = "comment";

    public function getCommentByNewsID($newsId) {
        $sql = "select * from ".self::TABLE." join user on ".self::TABLE.".user_id = user.id where news_id = ${newsId}";
        $query = $this->_query($sql);

        $data = [];

        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }
}
