<?php

/*
 * This file is part of Phraseanet
 *
 * (c) 2005-2015 Alchemy
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Entities;

use Alchemy\Phrasea\Application;

/**
 * LazaretFile
 */
class LazaretFile
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $filename;

    /**
     * @var string
     */
    private $thumbFilename;

    /**
     * @var string
     */
    private $originalName;

    /**
     * @var integer
     */
    private $base_id;

    /**
     * @var string
     */
    private $uuid;

    /**
     * @var string
     */
    private $sha256;

    /**
     * @var boolean
     */
    private $forced = false;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $updated;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $attributes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $checks;

    /**
     * @var \Entities\LazaretSession
     */
    private $session;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->attributes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->checks = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set filename
     *
     * @param  string      $filename
     * @return LazaretFile
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set thumbFilename
     *
     * @param  string      $thumbFilename
     * @return LazaretFile
     */
    public function setThumbFilename($thumbFilename)
    {
        $this->thumbFilename = $thumbFilename;

        return $this;
    }

    /**
     * Get thumbFilename
     *
     * @return string
     */
    public function getThumbFilename()
    {
        return $this->thumbFilename;
    }

    /**
     * Set originalName
     *
     * @param  string      $originalName
     * @return LazaretFile
     */
    public function setOriginalName($originalName)
    {
        $this->originalName = $originalName;

        return $this;
    }

    /**
     * Get originalName
     *
     * @return string
     */
    public function getOriginalName()
    {
        return $this->originalName;
    }

    /**
     * Set base_id
     *
     * @param  integer     $baseId
     * @return LazaretFile
     */
    public function setBaseId($baseId)
    {
        $this->base_id = $baseId;

        return $this;
    }

    /**
     * Get base_id
     *
     * @return integer
     */
    public function getBaseId()
    {
        return $this->base_id;
    }

    /**
     * Get the Destination Collection
     *
     * @return \collection
     */
    public function getCollection(Application $app)
    {
        return \collection::get_from_base_id($app, $this->getBaseId());
    }

    /**
     * Set uuid
     *
     * @param  string      $uuid
     * @return LazaretFile
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;

        return $this;
    }

    /**
     * Get uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Set sha256
     *
     * @param  string      $sha256
     * @return LazaretFile
     */
    public function setSha256($sha256)
    {
        $this->sha256 = $sha256;

        return $this;
    }

    /**
     * Get sha256
     *
     * @return string
     */
    public function getSha256()
    {
        return $this->sha256;
    }

    /**
     * Set forced
     *
     * @param  boolean     $forced
     * @return LazaretFile
     */
    public function setForced($forced)
    {
        $this->forced = $forced;

        return $this;
    }

    /**
     * Get forced
     *
     * @return boolean
     */
    public function getForced()
    {
        return $this->forced;
    }

    /**
     * Set created
     *
     * @param  \DateTime   $created
     * @return LazaretFile
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param  \DateTime   $updated
     * @return LazaretFile
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Add attributes
     *
     * @param  \Entities\LazaretAttribute $attributes
     * @return LazaretFile
     */
    public function addAttribute(\Entities\LazaretAttribute $attributes)
    {
        $this->attributes[] = $attributes;

        return $this;
    }

    /**
     * Remove attributes
     *
     * @param \Entities\LazaretAttribute $attributes
     */
    public function removeAttribute(\Entities\LazaretAttribute $attributes)
    {
        $this->attributes->removeElement($attributes);
    }

    /**
     * Get attributes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Add checks
     *
     * @param  \Entities\LazaretCheck $checks
     * @return LazaretFile
     */
    public function addCheck(\Entities\LazaretCheck $checks)
    {
        $this->checks[] = $checks;

        return $this;
    }

    /**
     * Remove checks
     *
     * @param \Entities\LazaretCheck $checks
     */
    public function removeCheck(\Entities\LazaretCheck $checks)
    {
        $this->checks->removeElement($checks);
    }

    /**
     * Get checks
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChecks()
    {
        return $this->checks;
    }

    /**
     * Set session
     *
     * @param  \Entities\LazaretSession $session
     * @return LazaretFile
     */
    public function setSession(\Entities\LazaretSession $session = null)
    {
        $this->session = $session;

        return $this;
    }

    /**
     * Get session
     *
     * @return \Entities\LazaretSession
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Get an array of records that can be substitued by the Lazaret file
     *
     * @return array
     */
    public function getRecordsToSubstitute(Application $app)
    {
        $ret = array();

        $shaRecords = \record_adapter::get_record_by_sha(
                $app, $this->getCollection($app)->get_sbas_id(), $this->getSha256()
        );

        $uuidRecords = \record_adapter::get_record_by_uuid(
                $app, $this->getCollection($app)->get_databox(), $this->getUuid()
        );

        $merged = array_merge($uuidRecords, $shaRecords);

        foreach ($merged as $record) {
            if ( ! in_array($record, $ret)) {
                $ret[] = $record;
            }
        }

        return $ret;
    }
}
