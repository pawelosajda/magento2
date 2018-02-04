<?php

namespace Training\Basic\Setup;

use Training\Basic\Api\Data\Post;
use Magento\Framework\DB\Ddl\Table;

/**
 * Description of InstallSchema
 *
 * @author pawel
 */
class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{
    public function install(
        \Magento\Framework\Setup\SchemaSetupInterface $setup, 
        \Magento\Framework\Setup\ModuleContextInterface $context
    ) {
        $installer = $setup;
        $installer->startSetup();
        
        $this->createPostTable($installer);
        
        $installer->endSetup();
    }
    
    private function createPostTable(
        \Magento\Framework\Setup\SchemaSetupInterface $installer
    ) {
        $table = $installer->getConnection()->newTable(
            $installer->getTable(\Training\Basic\Model\ResourceModel\Post::MAIN_TABLE
        ))->addColumn(
            Post::ID, 
            Table::TYPE_INTEGER, 
            null, 
            ['identity' => true, 'nullable' => false, 'primary' => true], 
            'Post Id'
        )->addColumn(
            Post::TITLE, 
            Table::TYPE_TEXT, 
            80, 
            [], 
            'Post Title'
        )->addColumn(
            Post::TEASER, 
            Table::TYPE_TEXT, 
            '2M', 
            [], 
            'Post Teaser'
        )->addColumn(
            Post::CONTENT, 
            Table::TYPE_TEXT, 
            '2M', 
            [], 
            'Post Content'
        )->addColumn(
            Post::CREATION_TIME, 
            Table::TYPE_TIMESTAMP, 
            null, 
            ['nullable' => false, 'default' => Table::TIMESTAMP_INIT], 
            'Post Creation Time'
        )->addColumn(
            Post::UPDATE_TIME, 
            Table::TYPE_TIMESTAMP, 
            null, 
            ['nullable' => false, 'default' => Table::TIMESTAMP_INIT_UPDATE], 
            'Post Update Time'
        );
        $installer->getConnection()->createTable($table);
    }
}
