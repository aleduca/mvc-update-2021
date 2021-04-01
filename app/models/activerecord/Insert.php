<?php

namespace app\models\activerecord;

use app\models\connection\Connection;
use app\interfaces\ActiveRecordInterface;
use app\interfaces\ActiveRecordExecuteInterface;
use Throwable;

class Insert implements ActiveRecordExecuteInterface
{
    public function execute(ActiveRecordInterface $activeRecordInterface)
    {
        try {
            $query = $this->createQuery($activeRecordInterface);

            $connection = Connection::connect();

            $prepare = $connection->prepare($query);
            return $prepare->execute($activeRecordInterface->getAttributes());
        } catch (Throwable $throw) {
            formatException($throw);
        }
    }

    private function createQuery(ActiveRecordInterface $activeRecordInterface)
    {
        // "insert into users (firstName,lastName) values(:firstName,:lastName)"
        
        $sql = "insert into {$activeRecordInterface->getTable()}(";
        $sql.= implode(',', array_keys($activeRecordInterface->getAttributes())).') values(';
        $sql.= ':'.implode(',:', array_keys($activeRecordInterface->getAttributes())).')';

        return $sql;
    }
}
