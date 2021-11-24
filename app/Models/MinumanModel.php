<?php

namespace App\Models;

use CodeIgniter\Model;

class MinumanModel extends Model
{
    protected $db;
    protected $DBGroup = "default";

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }
    protected $table = "minuman";
    protected $primaryKey = "id_minuman";
    protected $slugs;
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $allowedFields = [
        'slugs',
        'nama_minuman',
        'harga_minuman',
        'created_at',
        'deleted_at'
    ];

    public function stringToSlugs($minuman)
    {
        $this->slugs = url_title($minuman, '-', true);
        return $this->slugs;
    }
}
