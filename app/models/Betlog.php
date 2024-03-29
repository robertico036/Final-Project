<?php

class Betlog extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $login;

    /**
     *
     * @var integer
     */
    public $num;

    /**
     *
     * @var string
     */
    public $color;

    /**
     *
     * @var integer
     */
    public $bet;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ruleta");
        $this->setSource("betlog");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'betlog';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Betlog[]|Betlog|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Betlog|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
