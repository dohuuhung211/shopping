<?php
namespace App\Components;
class Recusive{
    private $data;
    private $htmlSelect = '';
    public function __construct($data){
        $this->data = $data;
    }
    public function categoryRecusive($parentId, $id = 0, $text = ''){
        foreach ($this->data as $val) {
            if ($val['parent_id'] == $id) {
                if (!empty($parentId) && $parentId == $val['id']){
                    $this->htmlSelect .= '<option selected value="'.$val['id'].'">' . $text . $val['name'] . '</option>';

                } else{
                    $this->htmlSelect .= '<option value="'.$val['id'].'">' . $text . $val['name'] . '</option>';
                }
                $this->categoryRecusive($parentId, $val['id'], $text. '--');
            }
        }
        return $this->htmlSelect;
    }
}
