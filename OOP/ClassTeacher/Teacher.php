<?php

class Teacher {
    private $mName;
    private $mNational;
    private $mPosition;
    private $mAge;
    private $mProvince;

    // input value to datatype
    public function setName($name) {
        $this -> mName = $name;
    }

    public function setNational($national) {
        $this -> mNational = $national;
    }

    public function setPosition($position) {
        $this -> mPosition = $position;
    }

    public function setAge($age) {
        $this -> mAge = $age;
    }

    public function setProvince($province) {
        $this -> mProvince = $province;
    }

    // get value from datatypy to output
    public function getName() {
        return $this->mName;
    }

    public function getNational() {
        return $this->mNational;
    }

    public function getPosition() {
        return $this->mPosition;
    }

    public function getAge() {
        return $this->mAge;
    }

    public function getProvince() {
        return $this->mProvince;
    }

}

