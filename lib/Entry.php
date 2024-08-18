<?php 

namespace Alexplusde\Milestone;

/* Nicht benötigte Klassen entfernen */
use rex_user;
use rex_media;
use rex_yform_manager_collection;
use rex_yform_manager_dataset;

class Entry extends rex_yform_manager_dataset {

    const STATUS = [
        0 => 'translate:milestone_status_offline',
        1 => 'translate:milestone_status_published'
    ]; 

    /* Online-Einträge */
    /** @api */
    public static function findOnline() : rex_yform_manager_collection {
        return self::query()->where("status", 1)->find();
    }

    /* Status-Optionen */
    /** @api */
    public static function getStatusOptions() : array {
        return self::STATUS;
    }

    /* Titel */
    /** @api */
    public function getTitle() : ?string {
        return $this->getValue("title");
    }
    /** @api */
    public function setTitle(mixed $value) : self {
        $this->setValue("title", $value);
        return $this;
    }

    /* Beschreibung */
    /** @api */
    public function getDescription(bool $asPlaintext = false) : ?string {
        if($asPlaintext) {
            return strip_tags($this->getValue("description"));
        }
        return $this->getValue("description");
    }
    /** @api */
    public function setDescription(mixed $value) : self {
        $this->setValue("description", $value);
        return $this;
    }
            
    /* Bild */
    /** @api */
    public function getImage(bool $asMedia = false) : mixed {
        if($asMedia) {
            return rex_media::get($this->getValue("image"));
        }
        return $this->getValue("image");
    }
    /** @api */
    public function setImage(string $filename) : self {
        if(rex_media::get($filename)) {
            $this->getValue("image", $filename);
        }
        return $this;
    }
            
    /* Datum / Jahr */
    /** @api */
    public function getDate() : ?string {
        return $this->getValue("date");
    }
    /** @api */
    public function setDate(mixed $value) : self {
        $this->setValue("date", $value);
        return $this;
    }

    /* Status */
    /** @api */
    public function getStatus() : mixed {
        return $this->getValue("status");
    }
    /** @api */
    public function setStatus(mixed $param) : mixed {
        $this->setValue("status", $param);
        return $this;
    }

    /* Erstellt am... */
    /** @api */
    public function getCreateDate() : ?string {
        return $this->getValue("createdate");
    }
    /** @api */
    public function setCreateDate(string $value) : self {
        $this->setValue("createdate", $value);
        return $this;
    }

    /* Erstellt von... */
    /** @api */
    public function getCreateUser() : ?rex_user {
        return rex_user::get($this->getValue("createuser"));
    }
    /** @api */
    public function setCreateUser(mixed $value) : self {
        $this->setValue("createuser", $value);
        return $this;
    }

    /* Zuletzt geändert am... */
    /** @api */
    public function getUpdateDate() : ?string {
        return $this->getValue("updatedate");
    }
    /** @api */
    public function setUpdateDate(string $value) : self {
        $this->setValue("updatedate", $value);
        return $this;
    }

    /* zuletzt geändert von... */
    /** @api */
    public function getUpdateUser() : ?rex_user {
        return rex_user::get($this->getValue("updateuser"));
    }
    /** @api */
    public function setUpdateUser(mixed $value) : self {
        $this->setValue("updateuser", $value);
        return $this;
    }

}?>
