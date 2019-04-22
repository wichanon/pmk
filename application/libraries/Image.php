<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Image {
   public function base64_to_image($img='',$path='images')
   {
        define('UPLOAD_DIR', 'uploads/'.$path.'/');
        // $img = $_POST['img'];
        $img = str_replace('data:image/png;base64,', '', $img);
        $img = str_replace(' ', '+', $img);
        $data = base64_decode($img);
        $file = UPLOAD_DIR.date('Y-m-d_h-i-s').'_'.uniqid().'.png';
        $success = file_put_contents($file, $data);
        return $success ? $file : "Upload Error";
    }

    public function default_image($ar)
    {
        foreach ($ar as $key => $value) {
            $ar[$key]['image'] = $ar[$key]['image']!= "" ? $ar[$key]['image'] : 'images/default_image.png';
        }
        return $ar;
    }
}