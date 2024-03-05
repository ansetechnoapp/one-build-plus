<?php

namespace App\Http\Controllers\dashboard\admin\all_list_pay;

use App\Models\devis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class index extends Controller
{
    public function ListShowAllFedapay()
    {
        $getShowAllFedapay = $this->devi->findDevis_withAll_Table();
        return view('dashboard.admin.all_list_pay.index', ['listShowAllFedapay' => $getShowAllFedapay,
        'sub_path_admin'=>$this->sub_path_admin(),]);
    }
}