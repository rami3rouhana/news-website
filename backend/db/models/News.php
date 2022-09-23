<?php
    class News
    {
        protected $mysql;

        public function __construct($mysql)
        {
            $this->mysql = $mysql;
        }

        public function getAlltNews() {
            return $this->mysql->query('SELECT * FROM news');
        }

        public function insertNews($author, $title, $description, $url, $image, $publishedAt) {
            $stmt = $this->mysql->prepare("INSERT INTO news (author, title, description, url, image, publishedAt)  VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss",$author, $title, $description, $url, $image, $publishedAt);
            if(!$stmt->execute()) {
                echo "Error: " . mysqli_error($this->mysql);
            }
        }
    }
?>