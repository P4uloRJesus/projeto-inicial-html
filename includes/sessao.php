<?php 
if (session_status() !== PHP_SESSION_ACTIVE) {//verificar se a sessão já esta aberta.
  session_start();
} 