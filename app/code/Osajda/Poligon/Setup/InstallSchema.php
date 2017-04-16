<?php

namespace Osajda\Poligon\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Osajda\Poligon\Api\Data\PostInterface;

/**
 * Description of InstallSchema
 *
 * @author pawel
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $this->_installPostTable($setup);
        $setup->endSetup();
    }
    
    /**
     * @param SchemaSetupInterface $setup
     */
    protected function _installPostTable(SchemaSetupInterface $setup)
    {
        $table = $setup->getConnection()->newTable(
            $setup->getTable('osajda_poligon_post')
        )->addColumn(
            PostInterface::POST_ID, 
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, 
            null, 
            ['identity' => true, 'nullable' => false, 'primary' => true], 
            'Post Id'
        )->addColumn(
            PostInterface::TITLE, 
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 
            255, 
            [], 
            'Title'
        )->addColumn(
            PostInterface::SLUG, 
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 
            null, 
            [], 
            'Slug'
        )->addColumn(
            PostInterface::CONTENT, 
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 
            255, 
            [], 
            'Content'
        )->addColumn(
            PostInterface::CREATION_TIME, 
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP, 
            null, 
            ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT], 
            'Creation Time'
        )->addColumn(
            PostInterface::UPDATE_TIME, 
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP, 
            null, 
            ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE], 
            'Update Time'
        )->setComment('Post Table');
        $setup->getConnection()->createTable($table);
    }
}
