<?php
    use Illuminate\Http\Request;
    use Carbon\Carbon;

    function upload_image(Request $request,$image_file){
        $image = $request->file($image_file);
        $image_name = time().'_'.$image->getClientOriginalName();
        $upload_path = public_path('uploads');
        $image->move($upload_path,$image_name);
        return $image_name;
    }

    function checkImageExist($imagepath, $imagename){
        $storage_path = public_path('uploads/'.$imagepath);
        if (file_exists($storage_path)) {   
            return true;                         
        }else{
            return false;
        }
        
    }

    function getimage( $imagename){

    }

    function get_dummy_image() {
        return url('/images/no-image-found.jpeg');
    }


    function DateFormat($datetime,$showOnlyDate=1,$format='F d, Y') {
        return date($format,strtotime($datetime));
    }




?>



