<?php

namespace AHT\Blog\Api\Data;


interface PostInterface
{
    const POST_ID      = 'post_id';
    const NAME      = 'name';
    const URL      = 'url_key';
    const IMG      = 'image';
    const CONTENT      = 'content';
    const STATUST      = 'statust';
    const CREATE      = 'create';
    const UPDATE      = 'update';

    /**#@-*/

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get name
     *
     * @return string
     */
    public function getName();

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl();

    /**
     * Get img
     *
     * @return string|null
     */
    public function getImg();

    /**
     * Get content
     *
     * @return string|null
     */
    public function getContent();

    /**
     * Get statust
     *
     * @return string|null
     */
    public function getStatust();


     /**
     * Get create
     *
     * @return string|null
     */
    public function getCreateTime();

     /**
     * Get update
     *
     * @return string|null
     */
    public function getUpdateTime();

   
    /**
     * Set ID
     *
     * @param int $id
     * @return BlockInterface
     */
    public function setId($id);

    /**
     * Set name
     *
     * @param string $name
     * @return BlockInterface
     */
    public function setName($name);

    /**
     * Set url
     *
     * @param string $url
     * @return BlockInterface
     */
    public function setUrl($url);

    /**
     * Set content
     *
     * @param string $content
     * @return BlockInterface
     */
    public function setContent($content);

    /**
     * Set creation statust
     *
     * @param string $statust
     * @return BlockInterface
     */
    public function setStatust($statust);


     /**
     * Set create time
     *
     * @param string $create 
     * @return BlockInterface
     */
    public function setCreateTime($create);

    /**
     * Set update time
     *
     * @param string $updateTime
     * @return BlockInterface
     */
    public function setUpdateTime($update);

}