<?php

namespace App\Models;

use CodeIgniter\Model;

class Partenaire extends Model
{
    protected $table            = 'partenaire';
    protected $primaryKey       = 'IDPARTENAIRE';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'NOMPARTENAIRE',
        'AVISPARTENAIRE',
        'IMGPARTENAIRE'
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getOldFileNamePartenaire($partenaireId) { // Récupère l'ancien nom de l'image du partenaire pour la modif
        return $this->select('IMGPARTENAIRE')
        ->where('IDPARTENAIRE = '. $partenaireId)
        ->find($partenaireId);
    }

    public function getOnlyFirstPartenaire() { // Récupère seulement toutes les informations du premier partenaire
        return $this->select('IDPARTENAIRE, NOMPARTENAIRE, AVISPARTENAIRE, IMGPARTENAIRE')
        ->limit(1)
        ->find();
    }

    public function findAllExceptFirstResult($partenaireId) { // Récupère la liste des partenaires sauf pour le premier
        return $this->select('IDPARTENAIRE, NOMPARTENAIRE, AVISPARTENAIRE, IMGPARTENAIRE')
        ->where('IDPARTENAIRE != '. $partenaireId)
        ->find();
    }
}
