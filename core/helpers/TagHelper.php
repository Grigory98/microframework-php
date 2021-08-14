<?php 

namespace Core\Helpers;

class TagHelper {
	
    public function openTag($name, $attrs = []) {
        $attrStr = $this->getAttrsStr($attrs);
        return "<$name$attrStr>";
    }

    public function closeTag($name) {
        return "</$name>";
    }

    public function show($tagName, $text, $attrs = []) {
        return $this->openTag($tagName, $attrs) . $text . $this->closeTag($tagName);
    }

    private function getAttrsStr($attrs = []) {
        $result = '';

        if(!empty($attrs)) {
            foreach($attrs as $name => $value) {
                $value === true ? $result .= " " . $name : $result .= " ". $name. '="'. $value . '"';
                //$result .= " ". $name. '="'. $value . '"';
            }
        }

        return $result;
    }
}