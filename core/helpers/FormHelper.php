<?php 
namespace Core\Helpers;
use \Core\Helpers\TagHelper;

class FormHelper extends TagHelper {
	
    public function openForm($attrs = []) {
        return $this->openTag('form', $attrs);
    }

    public function closeForm() {
        return $this->closeTag('form');
    }

    public function input($attrs = []) {
        if(isset($attrs['name'])) {
            $name = $attrs['name'];

            if($_REQUEST[$name]) {
                $attrs['value'] = $_REQUEST[$name];
            }
        }
        return $this->openTag('input', $attrs);
    }

    public function password($attrs = []) {
        $attrs['type'] = 'password';
        return $this->input($attrs);
    }

    public function hidden($attrs = []) {
        $attrs['hidden'] = true;
        return $this->input($attrs);
    }

    public function submit($attrs = []) {
        $attrs['type'] = 'submit';
        return $this->input($attrs);
    }

    public function checkbox($attrs = []) {
        $attrs['type'] = 'checkbox';
        $attrs['value'] = 1;

        if(isset($attrs['name'])) {
            $name = $attrs['name'];

            if( isset($_REQUEST[$name]) and $_REQUEST[$name] == '1' ) {
                $attrs['checked'] = true;
            }
            //$hidden = $this->hidden(['name'=>$name, 'value'=>'0']);
        }
        else {
            //$hidden = '';
        }
        return /*$hidden .*/ $this->openTag('input', $attrs);
    }

    public function textArea($attrs = []) {
        $name = $attrs['name'];
        $text = '';

        if(isset($_REQUEST[$name])) {
            $text = $_REQUEST[$name];
        }
        return $this->openTag('textarea', $attrs) . $text . $this->closeTag('textarea');
    }

    public function select($attrs, $options = []) {
        $name = $attrs['name'];
        return $this->openTag('select', $attrs) . $this->option($options, $name) .  $this->closeTag('select');
    }

    public function option($attrs, $sel) {
        $text = '';
        $req_sel = $_REQUEST[$sel];

        foreach($attrs as $k => $val) {
            $k++;

            if($req_sel) {
                if(strval($k) == $req_sel) {
                    $val['attrs']['selected'] = '';
                    $text .= $this->openTag('option', $val['attrs']);
                }
                else {
                    unset($val['attrs']['selected']);
                    $text .= $this->openTag('option', $val['attrs']);	
                }
                $text .= $val['text'] . " ". $k;
                $text .= $this->closeTag('option');
            }
            else {
                $text .= $this->openTag('option', $val['attrs']);
                $text .= $val['text'] . " ". $k;
                $text .= $this->closeTag('option');
            }
        }
        return $text;
    }
}
