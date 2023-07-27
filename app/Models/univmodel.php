<?php
namespace App\Models;
use CodeIgniter\model;
class univmodel extends model
{
    protected $table = 'crud_universitas';
    protected $primaryKey="id";
    protected $allowedFields =['nama','nip','dosen_fakultas','email','nohp','alamat','kode_pos','gender'];
}
