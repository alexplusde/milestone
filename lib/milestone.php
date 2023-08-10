<?php

class milestone extends \rex_yform_manager_dataset
{

        public function getTitle() :string
        {
            return $this->getValue('title');
        }

        public function getDescription() :string
        {
            return $this->getValue('description');
        }

        public function getImage() :string
        {
            return $this->getValue('image');
        }

        public function getDate() :string
        {
            return $this->getValue('date');
        }

        public function getFormattedDate() :string
        {
            return $this->getValue('date');
        }

}
