<?php 

class VideoUploadData {

    public $videoDataArray, $title, $desciption, $privacy, $category, $uploadedBy;

    public function __construct($videoDataArray, $title, $desciption, $privacy, $category, $uploadedBy){
        $this->videoDataArray = $videoDataArray;
        $this->title = $title;
        $this->desciption = $desciption;
        $this->privacy = $privacy;
        $this->$category = $category;
        $this->uploadedBy = $uploadedBy;
    }
    
}

?>