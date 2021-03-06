<?php
/**
 * REPERTOIREmodifrequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API iSendPro
 *
 * [1] Liste des fonctionnalités : - envoi de SMS à un ou plusieurs destinataires, - lookup HLR, - récupération des récapitulatifs de campagne, - gestion des répertoires, - ajout en liste noire. - comptage du nombre de caractères des SMS  [2] Pour utiliser cette API vous devez: - Créer un compte iSendPro sur https://isendpro.com/ - Créditer votre compte      - Remarque: obtention d'un crédit de test possible sous conditions - Noter votre clé de compte (keyid)   - Elle vous sera indispensable à l'utilisation de l'API   - Vous pouvez la trouver dans le rubrique mon \"compte\", sous-rubrique \"mon API\" - Configurer le contrôle IP   - Le contrôle IP est configurable dans le rubrique mon \"compte\", sous-rubrique \"mon API\"   - Il s'agit d'un système de liste blanche, vous devez entrer les IP utilisées pour appeler l'API   - Vous pouvez également désactiver totalement le contrôle IP
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@isendpro.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * REPERTOIREmodifrequest Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class REPERTOIREmodifrequest implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'REPERTOIREmodifrequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'keyid' => 'string',
        'repertoire_edit' => 'string',
        'repertoire_id' => 'string',
        'num' => 'string[]'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'keyid' => 'keyid',
        'repertoire_edit' => 'repertoireEdit',
        'repertoire_id' => 'repertoireId',
        'num' => 'num'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'keyid' => 'setKeyid',
        'repertoire_edit' => 'setRepertoireEdit',
        'repertoire_id' => 'setRepertoireId',
        'num' => 'setNum'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'keyid' => 'getKeyid',
        'repertoire_edit' => 'getRepertoireEdit',
        'repertoire_id' => 'getRepertoireId',
        'num' => 'getNum'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const REPERTOIRE_EDIT_ADD = 'add';
    const REPERTOIRE_EDIT_DEL = 'del';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getRepertoireEditAllowableValues()
    {
        return [
            self::REPERTOIRE_EDIT_ADD,
            self::REPERTOIRE_EDIT_DEL,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['keyid'] = isset($data['keyid']) ? $data['keyid'] : null;
        $this->container['repertoire_edit'] = isset($data['repertoire_edit']) ? $data['repertoire_edit'] : null;
        $this->container['repertoire_id'] = isset($data['repertoire_id']) ? $data['repertoire_id'] : null;
        $this->container['num'] = isset($data['num']) ? $data['num'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['keyid'] === null) {
            $invalid_properties[] = "'keyid' can't be null";
        }
        if ($this->container['repertoire_edit'] === null) {
            $invalid_properties[] = "'repertoire_edit' can't be null";
        }
        $allowed_values = array("add", "del");
        if (!in_array($this->container['repertoire_edit'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'repertoire_edit', must be one of #{allowed_values}.";
        }
        if ($this->container['repertoire_id'] === null) {
            $invalid_properties[] = "'repertoire_id' can't be null";
        }
        if ($this->container['num'] === null) {
            $invalid_properties[] = "'num' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['keyid'] === null) {
            return false;
        }
        if ($this->container['repertoire_edit'] === null) {
            return false;
        }
        $allowed_values = array("add", "del");
        if (!in_array($this->container['repertoire_edit'], $allowed_values)) {
            return false;
        }
        if ($this->container['repertoire_id'] === null) {
            return false;
        }
        if ($this->container['num'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets keyid
     * @return string
     */
    public function getKeyid()
    {
        return $this->container['keyid'];
    }

    /**
     * Sets keyid
     * @param string $keyid Clé API
     * @return $this
     */
    public function setKeyid($keyid)
    {
        $this->container['keyid'] = $keyid;

        return $this;
    }

    /**
     * Gets repertoire_edit
     * @return string
     */
    public function getRepertoireEdit()
    {
        return $this->container['repertoire_edit'];
    }

    /**
     * Sets repertoire_edit
     * @param string $repertoire_edit action à réaliser, \"add\" pour l'ajout de numéros, \"del\" pour la suppression de numéros
     * @return $this
     */
    public function setRepertoireEdit($repertoire_edit)
    {
        $allowed_values = array('add', 'del');
        if (!in_array($repertoire_edit, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'repertoire_edit', must be one of 'add', 'del'");
        }
        $this->container['repertoire_edit'] = $repertoire_edit;

        return $this;
    }

    /**
     * Gets repertoire_id
     * @return string
     */
    public function getRepertoireId()
    {
        return $this->container['repertoire_id'];
    }

    /**
     * Sets repertoire_id
     * @param string $repertoire_id repertoireId du répertoire cible
     * @return $this
     */
    public function setRepertoireId($repertoire_id)
    {
        $this->container['repertoire_id'] = $repertoire_id;

        return $this;
    }

    /**
     * Gets num
     * @return string[]
     */
    public function getNum()
    {
        return $this->container['num'];
    }

    /**
     * Sets num
     * @param string[] $num liste des numéros des téléphone à ajouter ou supprimer
     * @return $this
     */
    public function setNum($num)
    {
        $this->container['num'] = $num;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


