<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id';

    protected $allowedFields = ['id', 'nama', 'nip', 'nis', 'jenis_kelamin', 'kelas', 'jurusan', 'tanggal_lahir', 'gambar', 'alamat', 'no_telp', 'username', 'password', 'role', 'slug'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';

    public function getComic($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}