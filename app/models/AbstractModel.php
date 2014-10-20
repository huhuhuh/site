<?php

abstract class AbstractModel
{
 //set values for protected/private fields via the corresponding mutators
    public function __set($field, $value) {
        $this->checkField($field);
        $mutator = "set" . ucfirst(strtolower($field));
        method_exists($this, $mutator) &&
            is_callable(array($this, $mutator))
            ? $this->$mutator($value)
            : $this->$field = $value;
        return $this;                
    }
       
    // get values from protected/private fields via the corresponding accessors
    public function __get($field) {
        $this->checkField($field);
        $accessor = "get" . ucfirst(strtolower($field));
        return method_exists($this, $accessor) &&
            is_callable(array($this, $accessor))
            ? $this->$accessor()
            : $this->$field;
    }
     
    protected function checkField($field) {
        if (!property_exists($this, $field)) {
            throw new InvalidArgumentException(
                "Setting or getting the field '$field' is not valid for this entity.");
        }
    }
    
        // sanitize strings assigned to the fields of the entity
    protected function sanitizeString($value, $min = 2, $max = null) {
        if (!is_string($value)
            || strlen($value) < (integer) $min
            || ($max) ? strlen($value) > (integer) $max : false) {
            throw new InvalidArgumentException(
                "The value of the field accessed must be a valid string.");
        }
        return htmlspecialchars(trim($value), ENT_QUOTES);
    }
     
    /**
     * Get the entity fields
     */
    public function toArray() {
        return get_object_vars($this);
    }
}
