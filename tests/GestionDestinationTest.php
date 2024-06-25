<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../model/gestion_destination.php'; 

class GestionDestinationTest extends TestCase
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

    public function testCreatePost()
    {
        global $pdo;
        $titre = 'Test Destination';
        $img1 = 'img1.jpg';
        $img2 = 'img2.jpg';
        $img3 = 'img3.jpg';
        $description1 = 'Description 1';
        $description2 = 'Description 2';
        $id_continent = 1;
        $map = 'la';

        create_post($titre, $img1, $img2, $img3, $description1, $description2, $id_continent, $map);

        $result = $pdo->query("SELECT d.*, r.id_continent FROM destination d JOIN relation_continent_destination r ON d.id_destination = r.id_destination WHERE d.titre = 'Test Destination'")->fetch(PDO::FETCH_ASSOC);

        $this->assertNotEmpty($result);
        $this->assertEquals($titre, $result['titre']);
        $this->assertEquals($img1, $result['img1']);
        $this->assertEquals($img2, $result['img2']);
        $this->assertEquals($img3, $result['img3']);
        $this->assertEquals($description1, $result['description1']);
        $this->assertEquals($description2, $result['description2']);
        $this->assertEquals($id_continent, $result['id_continent']);
        $this->assertEquals($map, $result['map']);
    }

    public function testDeletePost()
    {
        global $pdo;

        // Insérer une destination pour tester la suppression
        $pdo->exec("INSERT INTO destination (titre, img1, img2, img3, description1, description2, map) VALUES ('Test Destination', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'Description 1', 'Description 2', 'la')");
        $id_destination = $pdo->lastInsertId();

        $pdo->exec("INSERT INTO relation_continent_destination (id_destination, id_continent) VALUES ($id_destination, 1)");

        delete_post($id_destination);

        $result = $pdo->query("SELECT * FROM destination WHERE id_destination = $id_destination")->fetch(PDO::FETCH_ASSOC);
        $relation_result = $pdo->query("SELECT * FROM relation_continent_destination WHERE id_destination = $id_destination")->fetch(PDO::FETCH_ASSOC);

        $this->assertEmpty($result);
        $this->assertEmpty($relation_result);
    }

    public function testGetDestinations()
    {
        global $pdo;

        $pdo->exec("INSERT INTO destination (titre, img1, img2, img3, description1, description2, map) VALUES ('Test Destination 1', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'Description 1', 'Description 2', 'la')");
        $id_destination1 = $pdo->lastInsertId();
        $pdo->exec("INSERT INTO relation_continent_destination (id_destination, id_continent) VALUES ($id_destination1, 1)");

        $pdo->exec("INSERT INTO destination (titre, img1, img2, img3, description1, description2, map) VALUES ('Test Destination 2', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'Description 1', 'Description 2', 'la')");
        $id_destination2 = $pdo->lastInsertId();
        $pdo->exec("INSERT INTO relation_continent_destination (id_destination, id_continent) VALUES ($id_destination2, 1)");

        $destinations = get_destinations();

        $this->assertCount(2, $destinations);
        $this->assertEquals('Test Destination 1', $destinations[0]['titre']);
        $this->assertEquals('Test Destination 2', $destinations[1]['titre']);
    }
}
