<?php

namespace App\Http\Controllers;
use App\repository\UploadImage;
use Illuminate\Http\Request;
use App\BlogArticle;
use App\Http\Requests\FetchUploadReq;

class fetchupload extends Controller
{
public function store(FetchUploadReq $FetchUploadReq,BlogArticle $BlogArticleModel)
{


    if (is_array($FetchUploadReq->file())) {

        foreach ($FetchUploadReq->file() as $key => $filed) {
            if (!is_array($filed)) {
                //just one image
                $image = new UploadImage('image', 'image', $filed);
                return $BlogArticleModel->$key = $image->UploadeImage();
            } else {
                //array of images
                $images = new UploadImage('image', 'image', $filed);
                $BlogArticleModel->$key = json_encode($images->uploadeImages());
            }

        }

    }
    return 'ayhaga';
    return redirect()->back();
}

}
