<?php
require_once 'RecordDrivers/IndexRecord.php';
class DspaceRecord extends IndexRecord {
     public function getSearchResult ($view = "list") {
          global $interface;
          $template = parent :: getSearchResult ();
          $interface -> assign ('summAjaxStatus', false); //Don't show Callnumber and Location
          $interface -> assign ('summDate', false); //Don't show date
          $interface -> assign ('summPublisher', $this->getPublishers()); //Show publisher name
          $interface -> assign ('summNotes', false); //Preventing to show any general note
          return $template;
     }
}
?>
