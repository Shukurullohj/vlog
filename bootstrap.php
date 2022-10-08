<?php


class Connection {

    public static function make() {
        try {
            return new PDO('mysql:host=ec2-3-229-165-146.compute-1.amazonaws.com;dbname=dca2agsru7q048', 'cxvpnibvhvosfz', '644c4166ab16d69bfd5f6f19a1271d6877961352be0fcb3d57e38fc35f8a7b70');
            echo 'connected';
          }catch (PDOException $e){
            die( 'Problem with connection');
          }
    }
}
$connect = Connection::make();
