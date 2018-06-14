<?php

namespace App\Models;
use PDO;

/**
 * Post model
 *
 * PHP version 5.4
 */
class Ranks extends \Core\Model
{

    /**
     * Get all the posts as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
       
        try {
            
            $db = static::getDB();

            $stmt = $db->query('select Characters.nickname, Characters.class, Characters.score from Characters order by Characters.score desc');
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $results;
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
