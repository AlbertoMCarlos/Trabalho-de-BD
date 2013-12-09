<?php
        
        define('PGHOST','localhost');
        define('PGPORT',5432);
        define('PGDATABASE','postgres');
        define('PGUSER', 'postgres');
        define('PGPASSWORD', 'Yan123');
        define('ERROR_ON_CONNECT_FAILED','Sorry, can not connect the database server now!');
             
		$dbcon = pg_pconnect('host=' . PGHOST . ' port=' . PGPORT . ' dbname=' . PGDATABASE . ' user=' . PGUSER . ' password=' . PGPASSWORD);
        
       	pg_set_client_encoding($dbcon, UTF-8);
?>