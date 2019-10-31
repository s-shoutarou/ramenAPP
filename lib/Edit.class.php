<?php

namespace ramenApp\lib;

use ramenApp\lib\PDOoperation;

class Edit
{
    private $db = null;
    private $PDOope = null;

    public function __construct($db)
    {
        $this->db = $db;
        $this->PDOope = new PDOoperation($db);
    }

    public function editing($postData, $user_id)
    {
        $this->PDOope->optionidClean($user_id);
        $table = "restaurants";
        $column = '';
        $arrVal = [];
        foreach ($postData as $key => $val) {
            if (is_array($val)) {
                foreach ($val as $key => $val) {
                    $key += 1;
                    if ($key < 8) {
                        $column .= 'option_id' . $key . '=?,';
                        array_push($arrVal, $val);
                    }
                }
            } else {

                $column .= $key . '=?,';
                array_push($arrVal, $val);
            }
        }
        $column = substr($column, 0, -1);
        $where = [$user_id];
        $this->db->update($table, $column, $where, $arrVal);
    }

    public function makeCheckBox($option, $detail)
    {//0・1形式にすれば一回のループで可→テンプレート側での対応まで可 あるいはforeach
		//htmlの文字列を変数に格納する
		//checked = "checked"
		//<input hidden value=0 name=check>
		//<input checkbox value=0 name=check>
		//チェックボックスは選択されたら値が送られる。
		//同じnameを指定することでチェックをした際POSTでcheckを送信するときの値が上書かれる
        $checkbox = [];
        for ($i = 0; $i < 7; $i++) { //7つの項目を表示させる
            for ($y = 1; $y < 8; $y++) { //各項目でチェックを行う
                if ($option[$i]['id'] == $detail['option_id' . $y]) {//foreachを、使う場合keyに+1して処理
                    array_push(
                        $checkbox,
                        '<label class="option-label"><input class="option" type="checkbox" name="option[]" value=' . $option[$i]['id'] . ' checked>'
                            . $option[$i]['text'] . '</label>'
                    );
                } elseif ($y == 7 && empty($checkbox[($i)])) {
                    array_push($checkbox, '<label class="option-label"><input class="option" type="checkbox" name="option[]" value=' . $option[$i]['id'] . ' >'
                        . $option[($i)]['text'] . '</label>');
                }
            }
        }
        return $checkbox;
    }
}
