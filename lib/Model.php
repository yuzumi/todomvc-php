<?php

    abstract class Model {
        public function __construct() {
            $this->db = new Database(
                DB_VENDOR,
                DB_HOST,
                DB_NAME,
                DB_USER,
                DB_PASSWORD
            );
        }
    };