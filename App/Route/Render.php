<?php
    namespace App\Route;

    class Render{
        private string $header;
        private string $footer;
        private string $file;
        private array $params;

        public function commandRender(string $header, string $footer, string $file, array $params){
            $this->header = $header;
            $this->footer = $footer;
            $this->file = $file;
            $this->params = $params;

            $this->actionRender();
        }

        private function actionRender(){
            extract($this->params, EXTR_PREFIX_SAME, "dup");
            include($this->header);
            include($this->file);
            include($this->footer);
        }
    }
?>