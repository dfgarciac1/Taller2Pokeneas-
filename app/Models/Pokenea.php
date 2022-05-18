<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pokenea extends Model
{
      /*
     * Pokenea ATTRIBUTES
     * $this->attributes["id"] - int - contains the pokenea primary key (id)
     * $this->attributes["name"] - string - contains the pokenea name
     * $this->attributes["height"] - int - contains the pokenea height
     * $this->attributes["ability"] - float - contains the pokenea ability
     * $this->attributes["image"] - string - contains the pokenea image url
     * $this->attributes["philosophical_phrase"] - float - contains the pokenea philosophical phrase
    */

    protected $fillable = ["name","name","height","ability","image","philosophical_phrase"];

    public function getId()
    {
        return $this->attributes["id"];
    }

    public function setId($id)
    {
        $this->attributes["id"] = $id;
    }

    public function getName()
    {
        return $this->attributes["name"];
    }

    public function setName($name)
    {
        $this->attributes["name"] = $name;
    }

    public function getHeight()
    {
        return $this->attributes["height"];
    }

    public function setHeight($height)
    {
        $this->attributes["height"] = $height;
    }

    public function getAbility()
    {
        return $this->attributes["ability"];
    }

    public function setAbility($ability)
    {
        $this->attributes["ability"] = $ability;
    }

    public function getImage()
    {
        return $this->attributes["image"];
    }

    public function setImage($image)
    {
        $this->attributes["image"] = $image;
    }

    public function getPhilosophicalPhrase()
    {
        return $this->attributes["philosophical_phrase"];
    }

    public function setPhilosophicalPhrase($philosophical_phrase)
    {
        $this->attributes["philosophical_phrase"] = $philosophical_phrase;
    }

}
