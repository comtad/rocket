<?php

namespace App\Http\Controllers;

use App\Http\Filters\LikeFilters\ChandelierFilter;
use App\Models\Chandelier;
use Illuminate\Http\Request;
use Ramsey\Collection\Collection;

class ChandelierController extends Controller
{
    public function index(Request $request)
    {
        $data = (array)$request->query();

        $chandelierQuery = Chandelier::query();
        $filter = new ChandelierFilter($data);
        $filter->applyFilter($chandelierQuery);

        return $chandelierQuery->paginate(40);
    }
}
