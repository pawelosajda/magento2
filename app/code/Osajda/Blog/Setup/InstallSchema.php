<?php

namespace Osajda\Blog\Setup;

use Magento\Framework\Setup;
use Magento\Framework\DB\Ddl\Table;
use Osajda\Blog\Api\Data\PostInterface;

/**
 * Description of InstallSchema
 *
 * @author pawel
 */
class InstallSchema implements Setup\InstallSchemaInterface
{
    /**
     * @param \Magento\Framework\Setup\SchemaSetupInterface $setup
     * @param \Magento\Framework\Setup\ModuleContextInterface $context
     */
    public function install(Setup\SchemaSetupInterface $setup, Setup\ModuleContextInterface $context)
    {
        $setup->startSetup();
        
        $this->_installPostTable($setup);
        
        $setup->endSetup();
    }
    
    /**
     * @param \Magento\Framework\Setup\SchemaSetupInterface $setup
     */
    protected function _installPostTable(Setup\SchemaSetupInterface $setup)
    {
        $table = $setup->getConnection()->newTable(
            $setup->getTable('osajda_blog_post')
        )->addColumn(
            PostInterface::POST_ID, 
            Table::TYPE_INTEGER, 
            null, 
            ['identity' => true, 'nullable' => false, 'primary' => true],
            'Post Id'
        )->addColumn(
            PostInterface::TITLE, 
            Table::TYPE_TEXT, 
            255, 
            ['nullable' => false], 
            'Post Title'
        )->addColumn(
            PostInterface::SLUG, 
            Table::TYPE_TEXT, 
            null, 
            ['nullable' => false], 
            'Post Slug'
        )->addColumn(
            PostInterface::CONTENT, 
            Table::TYPE_TEXT, 
            null, 
            ['nullable' => false], 
            'Post Content'
        )->addColumn(
            PostInterface::CREATION_TIME, 
            Table::TYPE_TIMESTAMP, 
            null, 
            ['nullable' => false, 'default' => Table::TIMESTAMP_INIT], 
            'Post Creation Time'
        )->addColumn(
            PostInterface::UPDATE_TIME, 
            Table::TYPE_TIMESTAMP, 
            null, 
            ['nullable' => false, 'default' => Table::TIMESTAMP_INIT_UPDATE], 
            'Post Modification Time'
        )->addIndex(
            $setup->getIdxName(
                $setup->getTable('osajda_blog_post'), 
                [PostInterface::TITLE, PostInterface::SLUG, PostInterface::CONTENT], 
                \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
            ), 
            [PostInterface::TITLE, PostInterface::SLUG, PostInterface::CONTENT], 
            ['type' => \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT]
        )->setComment('Blog Post Table');
        
        $setup->getConnection()->createTable($table);
    }
}
