<?php
namespace mitakeck\UlidTypes\Model\Table;

use Cake\Database\Schema\TableSchemaInterface;

trait UlidTypeTrait {
    protected function _initializeSchema(TableSchemaInterface $table): TableSchemaInterface
    {
        $table->setColumnType('id', 'ulid'); // set ulid type for id

        return $table;
    }
}
