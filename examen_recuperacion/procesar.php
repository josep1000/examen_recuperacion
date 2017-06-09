<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_GET['login']) && isset($_GET['password'])){
    echo 'login: ' .$_GET['login']. ' password: ' . $_GET['password']. ' edad: ' . $_GET['edad'] ;
}
