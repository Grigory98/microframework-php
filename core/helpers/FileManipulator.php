<?php

namespace Core\Helpers;

class FileManipulator
{
    public function create($filePath) {
        // create file
        file_put_contents($filePath, '');
    }

    public function delete($filePath) {
        // delete file
        unlink($filePath);
    }

    public function copy($filePath, $copyPath) {
        // copy file
        if (!copy($filePath, $copyPath)) {
                echo "не удалось скопировать $filePath...\n";
        }
    }

    public function rename($filePath, $newName) {
        // rename file
        $newName = str_replace('/','',$newName);
        rename ($filePath, $newName);
    }

    public function replace($filePath, $newPath) {
        // replace file
        rename($filePath, $newPath);
    }

    public function weigh($filePath) {
        // get size of file
        return "Размер файла: ". filesize($filePath) . ' байт';
    }
}