<?php
$migration_name = 'Add superadministrator role';

$this->database->exec("ALTER TYPE access_level ADD VALUE IF NOT EXISTS 'superadministrator'");
