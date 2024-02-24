<?php

namespace App\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use File;

class UploadImageAct
{
    use AsAction;

    public function handle($folder,$request_image)
    {
        $path = public_path($folder);
        if(!File::isDirectory($path)){
            File::makeDirectory($path, 0777, true, true);
        }

        $fileName = time().'_'.random_int(100000, 999999).'.'.$request_image->extension();  
        $request_image->move($path, $fileName);
        return $folder.'/'.$fileName;
    }
}
