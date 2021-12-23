<?php

    namespace Src\Infrastructure;

    class ConnectionFactory extends \PDO{
        private static $pgsql;

        public static function connect(): object{
            if(self::$pgsql == null){
                try{
                    self::$pgsql = new \PDO('pgsql:host=localhost;dbname=AffiliateProgram','postgres','gaivabeach');
                    self::$pgsql->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                }catch(\Exception $e){
                    throw new \Src\Exceptions\Treatment($e);
                }
            }
            return self::$pgsql;
        }
    }

?>