# UlidType plugin for CakePHP

## Setup

### Install

```bash
$ composer require qumuinc/ulidtypes
```

### Bootstrap

- add plugin load command in `config/bootstrap.php`

```php
...
Plugin::load('qumuinc/UlidTypes', ['bootstrap' => true]);
...
```

### Model

- add `_initializeSchema()` method to `Model\Table` class to make id `ulid` type

```php
...
use Cake\Database\Schema\TableSchemaInterface;
...
class XXXXXXXXTable extends Table
{
    protected function _initializeSchema(TableSchemaInterface $table): TableSchemaInterface
    {
        parent::_initializeSchema($table);
        $table->setColumnType('id', 'ulid'); // set ulid type for id

        return $table;
    }
}
...
```
