<?php
// created: 2025-08-07 15:51:39
$dictionary["Contact"]["fields"]["unf_workshop_contacts_1"] = array (
  'name' => 'unf_workshop_contacts_1',
  'type' => 'link',
  'relationship' => 'unf_workshop_contacts_1',
  'source' => 'non-db',
  'module' => 'UNF_Workshop',
  'bean_name' => 'UNF_Workshop',
  'vname' => 'LBL_UNF_WORKSHOP_CONTACTS_1_FROM_UNF_WORKSHOP_TITLE',
  'id_name' => 'unf_workshop_contacts_1unf_workshop_ida',
);
$dictionary["Contact"]["fields"]["unf_workshop_contacts_1_name"] = array (
  'name' => 'unf_workshop_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_UNF_WORKSHOP_CONTACTS_1_FROM_UNF_WORKSHOP_TITLE',
  'save' => true,
  'id_name' => 'unf_workshop_contacts_1unf_workshop_ida',
  'link' => 'unf_workshop_contacts_1',
  'table' => 'unf_workshop',
  'module' => 'UNF_Workshop',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["unf_workshop_contacts_1unf_workshop_ida"] = array (
  'name' => 'unf_workshop_contacts_1unf_workshop_ida',
  'type' => 'link',
  'relationship' => 'unf_workshop_contacts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_UNF_WORKSHOP_CONTACTS_1_FROM_CONTACTS_TITLE',
);
