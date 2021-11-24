<?php

namespace App\Models;

use CodeIgniter\Model;

class MakananModel extends Model
{
    protected $db;
    protected $DBGroup = "default";

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }

    protected $table = "makanan";
    protected $primaryKey = "id_makanan";
    protected $slugs;
    protected $allowedFields = [
        'slugs',
        'nama_makanan',
        'harga_makanan',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;

    public function stringToSlugs($makanan)
    {
        $this->slugs = url_title($makanan, '-', true);
        return $this->slugs;
    }
}
