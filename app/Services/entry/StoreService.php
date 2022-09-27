<?php
//This is Service file. You should write your logic in here
namespace App\Services\entry;
use App\Models\Category;
use App\Models\Entry;
use Auth;

class StoreService
{
    function handle($data)
    {
        $category = Category::Where('id', $data['category'])->first();
        if($category != null)
        {
            if($category->user_id == Auth::User()->id || $category->user_id == '')
            {
                $insert = Entry::Create([
                    'content' => $data['content'],
                    'category_id' => $data['category'],
                    'user_id' => Auth::User()->id,
                ]);
            }else{
                $insert = false;
            }
        }else{
            $insert = false;
        }

        if($insert == true)
        {
            return true;
        }else{
            return false;
        }
    }
}

?>
