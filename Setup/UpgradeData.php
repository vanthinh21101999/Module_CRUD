<?php
namespace AHT\Blog\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class UpgradeData implements UpgradeDataInterface
{
    protected $_postFactory;

    public function __construct(\AHT\Blog\Model\PostFactory $postFactory)
    {
        $this->_postFactory = $postFactory;
    }
    
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), '1.0.2','<')){
            $data = [
                'name'   => "How to create SQL setup script in magento 2",
                'content'  => "In this arcticle",
                'url_key'  => '/magento-2-module-development/magento-2',
                'status'    => 1,
            ];
            $post = $this->_postFactory->create();
            $post->addData($data)->save();
        }
        
    }
}