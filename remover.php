<?php
require "banco_site2.php";

excluir($conexao, $_GET['id']);
header('Location: cadastro.php');