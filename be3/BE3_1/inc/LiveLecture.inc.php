<?php
/**
 * Description of LiveLecture
 * 
 * @author KJK
 */
class LiveLecture extends Product {
    protected $lecturer;
    protected $duration;
    protected $topic;

    public function __construct($type, $title, $duration, $lecturer, $topic) {
        $this->type = $type;
        $this->title = $title;
        $this->duration = $duration;
        $this->lecturer = $lecturer;
        $this->topic = $topic;
    }

    public function getLecturer() {
        return $this->lecturer;
    }

    public function getDuration() {
        return $this->duration;
    }

    public function getTopic() {
        return $this->topic;
    }

    public function display() {
        printf("<p>Lecturer: %s <br> Title: %s <br> Duration: %s <br> Topic: %s <br> Type: %s</p>\n"
        , $this->getLecturer()
        , $this->getTitle()
        , $this->getDuration()
        , $this->getTopic()
        , $this->getProductType());
        
    }
}