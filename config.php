<?php
const DB_HOST = 'localhost';
const DB_NAME = 'balon_de_oro';
const DB_USER = 'root';
const DB_PASS = '';

const ADMIN_USER = 'webadmin';
const ADMIN_PASS = 'admin';

if (session_status() === PHP_SESSION_NONE) session_start();

define('BASE_URL', '//localhost/BalonDeOro-Web2/');
