<?php
namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;
use Exception;


class UploadForm extends Model {
    public $file;
    public function rules() {
        return [
            [['file'], 'file', 'skipOnEmpty' => false/*, 'extensions' => 'csv'*/],
        ];
    }
    public function upload() {

        if ($this->validate()) {

            try {
                $this->file->saveAs('../uploads/' . $this->file->baseName . '.' .
                                    $this->file->extension);
            } catch (Exception $e) {
            }
            return true;
        } else {
            return false;
        }
    }
}