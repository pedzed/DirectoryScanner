<?php

namespace pedzed\DirectoryScanner {
    
    class DirectoryScanner {
        
        private $_directory;
        
        public function setDirectory($dir) {
            $this->_directory = $dir;
        }
        
        public function getDirectory() {
            return $this->_directory;
        }
        
        public function scan() {
            $scanResults = [];
            
            $files = new \RecursiveDirectoryIterator(
                $this->getDirectory(),
                \RecursiveDirectoryIterator::SKIP_DOTS
            );
            $files = new \RecursiveIteratorIterator(
                $files,
                \RecursiveIteratorIterator::SELF_FIRST
            );
            
            foreach($files as $file) {
                $filePath = str_replace('\\', '/', $files->getSubPathName());
                $scanResults[] = $filePath;
            }
            
            return $scanResults;
        }
        
    }
    
}

