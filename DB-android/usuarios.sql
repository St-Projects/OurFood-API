CREATE DATABASE ANDROID;
USE ANDROID;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL PRIMARY KEY, 
  `nome_completo` text NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` text NOT NULL,
  `email` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


