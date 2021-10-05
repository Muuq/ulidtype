<?php
namespace qumuinc\UlidTypes\Model\Table;

use Cake\Database\Schema\TableSchemaInterface;

trait UlidTypeTrait {
    protected function _traitInitSchema(TableSchemaInterface $table): TableSchemaInterface
    {
        parent::_initializeSchema($table);

        $table->setColumnType('id', 'ulid'); // set ulid type for id

        return $table;
    }
    protected function _initializeSchema(TableSchemaInterface $table): TableSchemaInterface
    {
        return $this->_traitInitSchema($table);
    }
}
