<?php
/**
 * Created by PhpStorm.
 * User: Shaon
 * Date: 10/24/2017
 * Time: 3:10 PM
 */

class main
{
    public $name;
    public $name2;
    public $our_email;

    public function setData()
    {
        $this->name;
        $this->name2;
        $this->our_email;
    }

    public function store()
        {
            try {
                $pdo = new PDO('mysql:host=localhost;dbname=amarproshno.com', 'root', '');
                $sql = "INSERT INTO `demo` (`id`,`name`,`name2`,`email` ) VALUES (:ID, :name, :name2, :email)";
                $query = 'INSERT INTO someTable VALUES(:name)';
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array(
                    ':ID' => null,
                    ':name' => $this->name,
                    ':name2'=>$this->name2,
                    ':email'=>$this->our_email
                ));
             } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }

        }


}