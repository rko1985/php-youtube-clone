<?php 

class VideoProcessor {

    private $con;
    private $sizeLimit = 5;

    public function __construct($con){
        $this->con = $con;
    }

    public function upload($videoUploadData){
        $targetDir = "uploads/videos/";
        $videoData = $videoUploadData->videoDataArray;

        $tempFilePath = $targetDir . uniqid() . basename($videoData["name"]);
        //ex creates string uploads/videos/5aa3e9343c9ffdogs_playing.flx
        $tempFilePath = str_replace(" ", "_", $tempFilePath);
        $isValidData = $this->processData($videoData, $tempFilePath);

        echo $tempFilePath;
    }

    private function processData($videoData, $filePath){
        $videoType = pathInfo($filePath, PATHINFO_EXTENSION);

        if(!$this->isValidSize($videoData)){
            echo "File too large. Can't be more than " . $this->sizeLimit . " bytes";
            return false;
        }
    }

    private function isValidSize($data){
        return $data["size"] <= $this->sizeLimit;
    }
    
}
?>