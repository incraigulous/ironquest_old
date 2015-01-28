<?php namespace Ironquest\Validators;
/**
 * Created by PhpStorm.
 * User: craigwann1
 * Date: 1/17/15
 * Time: 10:44 PM
 */

use \Validator as Validator;

abstract class ValidatorBase {

    /**
     * The rules to decorate and then pass to the Validator.
     *
     * @var array
     */
    protected $rules = array();
    protected $messages = array();

    /**
     * Merge rules into the rules array.
     *
     * @param array $rules
     */
    function addRules(array $rules) {
        $this->rules = array_merge($this->rules, $rules);
    }

    /**
     * This record exists so we'll merge in some additional rules.
     *
     * @return $this
     */
    function existing() {
        return $this;
    }

    /**
     * Pass our rules along to the validator.
     * If new rules are passed to this function, it will override our rules. This is to keep parameter compatibility with Validator::make.
     *
     * @param array $data
     * @param array $rules
     * @param array $messages
     * @param array $customAttributes
     * @return mixed
     */
    function make(array $data, $rules = array(), $messages = array(), array $customAttributes = array()) {
        return Validator::make(
            $data,
            (!empty($rules)) ? $rules : $this->rules,
            array_merge($messages, $this->messages),
            $customAttributes
        );
    }

    /**
     * Add a custom validation message.
     *
     * @param $rule
     * @param $message
     */
    function addMessage($rule, $message) {
        $this->messages[$rule] = $message;
    }
} 