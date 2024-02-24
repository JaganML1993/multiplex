<?php

namespace App\Actions;

use App\Models\admin\Category;
use Lorisleiva\Actions\Concerns\AsAction;

class CategoryAct
{
    use AsAction;

    public function handle()
    {
        return Category::where('status',1)->get();
    }
}
