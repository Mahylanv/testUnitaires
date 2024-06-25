<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../model/gestion_hotel.php'; 

class HotelTest extends TestCase
{
    private $pdo;

    protected function setUp(): void
    {
        global $pdo;
        $pdo = new PDO('mysql:host=localhost;dbname=Imaluu', 'root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec("DELETE FROM hotel");
    }

    public function testCreatePost()
    {
        global $pdo;
        $titre = 'Test Hotel';
        $img1 = 'img1.jpg';
        $img2 = 'img2.jpg';
        $img3 = 'img3.jpg';
        $description1 = 'Description 1';
        $description2 = 'Description 2';
        $map = 'ici';

        create_post($titre, $img1, $img2, $img3, $description1, $description2, $map);

        $result = $pdo->query("SELECT * FROM hotel WHERE titre = 'Test Hotel'")->fetch(PDO::FETCH_ASSOC);

        $this->assertNotEmpty($result);
        $this->assertEquals($titre, $result['titre']);
        $this->assertEquals($img1, $result['img1']);
        $this->assertEquals($img2, $result['img2']);
        $this->assertEquals($img3, $result['img3']);
        $this->assertEquals($description1, $result['description1']);
        $this->assertEquals($description2, $result['description2']);
        $this->assertEquals($map, $result['map']);
    }

    public function testGetHotels()
    {
        global $pdo;

        $pdo->exec("INSERT INTO hotel (titre, img1, img2, img3, description1, description2, map) VALUES ('Hotel 1', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'Description 1', 'Description 2', 'ici')");
        $pdo->exec("INSERT INTO hotel (titre, img1, img2, img3, description1, description2, map) VALUES ('Hotel 2', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'Description 1', 'Description 2', 'ici')");

        $hotels = get_hotels();

        $this->assertCount(2, $hotels);
        $this->assertEquals('Hotel 1', $hotels[0]['titre']);
        $this->assertEquals('Hotel 2', $hotels[1]['titre']);
    }

    public function testDeletePost()
    {
        global $pdo;

        $pdo->exec("INSERT INTO hotel (titre, img1, img2, img3, description1, description2, map) VALUES ('Test Hotel', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'Description 1', 'Description 2', 'ici')");
        $id_hotel = $pdo->lastInsertId();

        delete_post($id_hotel);

        $result = $pdo->query("SELECT * FROM hotel WHERE id_hotel = $id_hotel")->fetch(PDO::FETCH_ASSOC);

        $this->assertEmpty($result);
    }
}
