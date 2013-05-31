<?php

class Application_Model_DbTable_MEDICAMENT extends Zend_Db_Table_Abstract
{

    protected $_name = 'MEDICAMENT';
 public function obtenirMedicament($depot)
    {
        $depot = (int)$depot;
        $row = $this->fetchRow('MED_DEPOTLEGAL = ' . $depot);
        if (!$row) {
            throw new Exception("Impossible de trouver l'enregistrement $depot");
        }
        return $row->toArray();
    }

    public function ajouterMedicament($famille, $nom, $composition, $effet)
    {
        $data = array(
            'FAM_CODE' => $famille,
            'MED_NOMCOMMERCIAL' => $nom,
	    'MED_COMPOSITION' => $composition,
	    'MED_EFFETS' => $effet,
        );
        $this->insert($data);
    }

    public function modifierMedicament($depot, $famille, $nom)
    {
        $data = array(
            'FAM_CODE' => $artiste,
            'MED_NOMCOMMERCIAL' => $nom,
	    'MED_COMPOSITION' => $composition,
	    'MED_EFFETS' => $effet,
        );
        $this->update($data, 'MED_DEPOTLEGAL = '. (int)$depot);
    }

    public function supprimerMedicament($depot)
    {
        $this->delete('MED_DEPOTLEGAL =' . (int)$depot);
    }

}

