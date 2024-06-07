<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\QuotationDataTable;
use App\Http\Controllers\Controller;
use App\Models\Quotation;
use Illuminate\Http\Request;

class QuotationviewController extends Controller
{
        public function index(QuotationDataTable $dataTable){
        return $dataTable->render('admin.quotation.quotation');
        
    }

}
