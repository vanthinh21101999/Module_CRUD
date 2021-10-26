<?php
namespace AHT\Blog\Model;

use AHT\Blog\Api\Data\PostInterface;

class Post extends \Magento\Framework\Model\AbstractModel implements  PostInterface
{
	const CACHE_TAG = 'aht_blog_post';

	protected $_cacheTag = 'aht_blog_post';

	protected $_eventPrefix = 'aht_blog_post';

	protected function _construct()
	{
		$this->_init('AHT\Blog\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}

	 /**
     * Retrieve block id
     *
     * @return int
     */

	public function getId()
    {
        return $this->getData(self::POST_ID);
    }

	/**
     * Set ID
     *
     * @param int $id
     * @return BlockInterface
     */
    public function setId($id)
    {
        return $this->setData(self::POST_ID, $id);
    }


	 /**
     * Retrieve block name
     *
     * @return string
     */

	public function getName()
	{
        return $this->getData(self::NAME);
    }

	/**
     * Set name
     *
     * @param string $name
     * @return BlockInterface
     */
    public function setName($name)
	{
        return $this->setData(self::NAME, $name);
    }

	/**
     * Retrieve block url
     *
     * @return string
     */

	public function getUrl()
	{
        return $this->getData(self::URL);
    }

	/**
     * Set url
     *
     * @param string $url
     * @return BlockInterface
     */
    public function setUrl($url)
	{
        return $this->setData(self::URL, $url);
    }

	/**
     * Retrieve block img
     *
     * @return string
     */

	public function getImg()
	{
        return $this->getData(self::IMG);
    }

	/**
     * Retrieve block content
     *
     * @return string
     */

	public function getContent()
	{
        return $this->getData(self::CONTENT);
    }

	/**
     * Set content
     *
     * @param string $content
     * @return BlockInterface
     */
    public function setContent($content)
	{
        return $this->setData(self::URL, $content);
    }

	/**
     * Retrieve statust
     *
     * @return int
     */

	public function getStatust()
	{
        return $this->getData(self::STATUST);
    }

	/**
     * Set statust
     *
     * @param string $statust
     * @return BlockInterface
     */
    public function setStatust($statust)
	{
	
        return $this->setData(self::URL, $statust);
    }

	/**
     * Retrieve block create time
     *
     * @return string
     */

	public function getCreateTime()
	{
        return $this->getData(self::CREATE);
    }

	/**
     * Set create time
     *
     * @param string $create
     * @return BlockInterface
     */
    public function setCreateTime($create)
	{
        return $this->setData(self::URL, $create);
    }

	/**
     * Retrieve block update time
     *
     * @return string
     */

	public function getUpdateTime()
	{
        return $this->getData(self::UPDATE);
    }

	/**
     * Set update
     *
     * @param string $update
     * @return BlockInterface
     */
    public function setUpdateTime($update)
	{
	        return $this->setData(self::URL, $update);
    }
}