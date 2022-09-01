<?php

namespace App\Controllers;

use App\Models\ProductsModel;
use App\Models\ClassLevelModel;

class Home extends BaseController
{
    public function index()
    {
        $level_model = model(ClassLevelModel::class);
        $levels = $level_model->findAll();
        $data = [
            'levels' => $levels
        ];
        return view('index', $data);
    }
    /** Returns Json Object Of Class Data Requested From Step One Select Field Is Changed */
    public function api_get_product_menu($level_id){
        $products_model = model(ProductsModel::class);
        $level_model = model(ClassLevelModel::class);
        
        if($level_id != 0){
            /** Fires when the request needs one single class */
            $products = $products_model->where('class_id', $level_id)->findAll();
            $level = $level_model->find($level_id);
            $html = '';
            $html .= '<h4 class="text-center text-danger">'.$level['level'].' Packages</h4>';
            $html .= $this->table_structure($products);
            $result = $html;

            $html_2 = '';
            $html_2 .= '<h4 class="text-center text-danger">'.$level['level'].' Packages</h4>';
            $html_2 .= $this->summary_structure($products);
            $summary_result = $html_2;
        }else{
            /** Fires when the request needs all available classes */
            $levels = $level_model->findAll();
            $html = '';
            $summary_html = '';
            foreach($levels as $key){
                $products = $products_model->where('class_id', $key['id'])->findAll();
                $html .= '<h4 class="text-center text-danger">'.$key['level'].'</h4>';
                $html .= $this->table_structure($products);
                $html .= '<div class="clearfix"></div>';

                $summary_html .= '<h4 class="text-center text-danger">'.$key['level'].'</h4>';
                $summary_html .= $this->summary_structure($products);
                $summary_html .= '<div class="clearfix"></div>';
            }
        
            $result = $html;
            $summary_result = $summary_html;
        }
        $data = array(
            'result' => $result,
            'summary_result' => $summary_result,
        );
        /** Bundle into json object */
        echo json_encode($data);
    }

    /**Generate Dyanmic Table Structure As Our Simple Cart */
    public function table_structure($data){
        $html = '';
        $html .= '<table class="table table-sm table-bordered">';
        $html .= '<thead><th>Subject</th><th>Cost(Ush)</th><th>Qty</th><th>Guide (Ush)</th><th>Qty</th></thead><tbody>';
            foreach ($data as $key) {
                $html .= '<tr><td><b>'.$key['subject'].'</b></td>';
                $html .= '<td>'.$key['cost'].'/=</td><input type="hidden" value="'.$key['cost'].'" name="book_'.$key['id'].'"><td><input type="number" value="0" min="0" class="form-control form-control-sm" id="book_'.$key['id'].'" onchange="getTotal(this);"></td>';
                $html .= '<td>'.$key['guide'].'/=</td><input type="hidden" value="'.$key['guide'].'" name="guide_'.$key['id'].'"><td><input type="number" value="0" min="0" class="form-control form-control-sm" id="guide_'.$key['id'].'" onchange="getTotal(this);"></td></tr>';
            }
        $html .= '</tbody></table>';
        return $html;
    }

    /**Generate Dyanmic Table Structure As Our Simple Cart */
    public function summary_structure($data){
        $html = '';
        $html .= '<table class="table table-sm table-bordered">';
        $html .= '<thead><th>Subject</th><th>Cost(Ush)</th><th>Total</th><th>Guide (Ush)</th><th>Total</th></thead><tbody>';
            foreach ($data as $key) {
                $html .= '<tr><td><b>'.$key['subject'].'</b></td>';
                $html .= '<td>'.$key['cost'].'/=</td>
                <td class="summary_book_'.$key['id'].'"></td>
                <input type="hidden" name="summary_book_'.$key['id'].'"  value="0" min="0" class="form-control form-control-sm" >';
                $html .= '<td>'.$key['guide'].'/=</td>
                <td class="summary_guide_'.$key['id'].'"></td>
                <input type="hidden" name="summary_guide_'.$key['id'].'" value="0" min="0" class="form-control form-control-sm">
                </tr>';
            }
        $html .= '</tbody></table>';
        return $html;
    }




}
