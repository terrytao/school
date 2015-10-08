<?php
include 'UploadHandler.php';
$uploader = new UploadHandler();
// Specify the list of valid extensions, ex. array("jpeg", "xml", "bmp")
$uploader->allowedExtensions = array(); // all files types allowed by default
// Specify max file size in bytes.
$uploader->sizeLimit = 10 * 1024 * 1024; // default is 10 MiB
// Specify the input name set in the javascript.
$uploader->inputName = "qqfile"; // matches Fine Uploader's default inputName value by default
// If you want to use the chunking/resume feature, specify the folder to temporarily save parts.
$uploader->chunksFolder = "chunks";
$method = $_SERVER["REQUEST_METHOD"];
if ($method == "POST") {
    header("Content-Type: text/plain");
    // Assumes you have a chunking.success.endpoint set to point here with a query parameter of "done".
    // For example: /myserver/handlers/endpoint.php?done
    if (isset($_GET["done"])) {
        $result = $uploader->combineChunks("files");
    }
    // Handles upload requests
    else {
        // Call handleUpload() with the name of the folder, relative to PHP's getcwd()
        $result = $uploader->handleUpload("files");
        // To return a name used for uploaded file you can use the following line.
        $result["uploadName"] = $uploader->getUploadName();
    }
    echo json_encode($result);
}
// for delete file requests
else if ($method == "DELETE") {
    $result = $uploader->handleDelete("files");
    echo json_encode($result);
}
else {
    header("HTTP/1.0 405 Method Not Allowed");
}
