<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../model/update_destination.php'; 

class UpdateDestinationTest extends TestCase
{
    private $pdo;

    protected function setUp(): void
    {
        global $pdo;
        $pdo = new PDO('mysql:host=localhost;dbname=Imaluu', 'root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec("DELETE FROM relation_continent_destination");
        $pdo->exec("DELETE FROM destination");
    }

    public function testUpdateDestination()
    {
        global $pdo;

        $pdo->exec("INSERT INTO destination (titre, img1, img2, img3, description1, description2, map) VALUES ('Test Destination', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'Description 1', 'Description 2', 'ici')");
        $id_destination = $pdo->lastInsertId();
        $pdo->exec("INSERT INTO relation_continent_destination (id_destination, id_continent) VALUES ($id_destination, 1)");

        $_GET['id_destination'] = $id_destination;
        $newTitre = 'Updated Destination';
        $newImg1 = 'newimg1.jpg';
        $newImg2 = 'newimg2.jpg';
        $newImg3 = 'newimg3.jpg';
        $newDescription1 = 'New Description 1';
        $newDescription2 = 'New Description 2';
        $newMap = 'new_ici';

        update_destination($newTitre, $newImg1, $newImg2, $newImg3, $newDescription1, $newDescription2, $newMap);

        $result = $pdo->query("SELECT * FROM destination WHERE id_destination = $id_destination")->fetch(PDO::FETCH_ASSOC);

        $this->assertEquals($newTitre, $result['titre']);
        $this->assertEquals($newImg1, $result['img1']);
        $this->assertEquals($newImg2, $result['img2']);
        $this->assertEquals($newImg3, $result['img3']);
        $this->assertEquals($newDescription1, $result['description1']);
        $this->assertEquals($newDescription2, $result['description2']);
        $this->assertEquals($newMap, $result['map']);
    }

    public function testGetModif()
    {
        global $pdo;

        $pdo->exec("INSERT INTO destination (titre, img1, img2, img3, description1, description2, map) VALUES ('Test Destination', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'Description 1', 'Description 2', 'ici')");
        $id_destination = $pdo->lastInsertId();
        $pdo->exec("INSERT INTO relation_continent_destination (id_destination, id_continent) VALUES ($id_destination, 1)");
        $_GET['id_destination'] = $id_destination;
        $result = get_modif();

        $this->assertEquals('Test Destination', $result['titre']);
        $this->assertEquals('img1.jpg', $result['img1']);
        $this->assertEquals('img2.jpg', $result['img2']);
        $this->assertEquals('img3.jpg', $result['img3']);
        $this->assertEquals('Description 1', $result['description1']);
        $this->assertEquals('Description 2', $result['description2']);
        $this->assertEquals('ici', $result['map']);
    }
}
