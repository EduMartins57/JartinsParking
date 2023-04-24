<?php 
@ $conn = mysqli_connect('localhost:3306', 'root','','jartinsparking');
if (!$conn)
{
     die("Falha na conexão ao BD");
}