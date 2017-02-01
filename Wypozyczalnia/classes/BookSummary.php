<?php


class BookSummary implements JsonSerializable {
    

    private $id;
    private $title;
    private $author;
    
    public function __construct($id, $title, $author) {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function jsonSerialize() {
        return [
            'id'=> $this->getId(),
            'title' => $this->getTitle(),
            'author' => $this->getAuthor()
        ];
    }

}

