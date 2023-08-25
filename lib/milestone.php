<?php

class milestone extends \rex_yform_manager_dataset
{
    
    /** @api */
    public function getTitle() : ?string
    {
        return $this->getValue("title");
    }
            
    /** @api */
    public function getDescription() : ?string
    {
        return $this->getValue("description");
    }
            
    /** @api */
    public function getImage() : ?string
    {
        return $this->getValue("image");
    }
            
    /** @api */
    public function getDate() : mixed
    {
        return $this->getValue("date");
    }
            
    /** @api */
    public function getCreateDate() : ?string
    {
        return $this->getValue("createdate");
    }
            
    /** @api */
    public function getUpdateDate() : ?string
    {
        return $this->getValue("updatedate");
    }
            
    /** @api */
    public function getUpdateUser() : ?string
    {
        return $this->getValue("updateuser");
    }
            
    /** @api */
    public function getCreateUser() : ?string
    {
        return $this->getValue("createuser");
    }
            
    /** @api */
    public function getStatus() : ?bool
    {
        return $this->getValue("status");
    }

}
