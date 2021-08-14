<?php
namespace Core;
	
class View
{
    public function render(Page $page) {
        return $this->renderLayout($page, $this->renderView($page));
    }

    private function renderLayout(Page $page, $content) {
        $layoutPatch = $_SERVER['DOCUMENT_ROOT']. '/project/layouts/'.$page->layout;
        if(file_exists($layoutPatch)) {
            ob_start();
                $title = $page->title;
                include $layoutPatch;
            return ob_get_clean();
        }
        else {
            echo "Не найден файл шаблона $page->layout";
        }
    }

    private function renderView(Page $page) {
        $patchView = $_SERVER['DOCUMENT_ROOT'] . '/project/views/'.$page->view.'.php';
        if(file_exists($patchView)) {
            ob_start();
                $data = $page->data;
                extract($data);
                include $patchView;
            return ob_get_clean();
        }
        else {
            echo "Не найден файл вида $page->view.php";
        }
    }
}