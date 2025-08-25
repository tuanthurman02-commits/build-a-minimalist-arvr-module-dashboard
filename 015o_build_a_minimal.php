<?php

class ARVRModuleDashboard {
  private $modules;
  private $sensors;
  private $actions;

  function __construct() {
    $this->modules = array(
      " Navigation" => array("type" => "AR", "description" => "Provides augmented reality navigation"),
      "Sensor Readings" => array("type" => "VR", "description" => "Displays virtual reality sensor readings"),
      "Object Detection" => array("type" => "AR", "description" => "Detects objects in augmented reality")
    );

    $this->sensors = array(
      "Accelerometer" => array("description" => "Measures device acceleration", "unit" => "m/s^2"),
      "Gyroscope" => array("description" => "Measures device orientation", "unit" => "degrees"),
      "Camera" => array("description" => "Captures environment images", "unit" => "pixels")
    );

    $this->actions = array(
      "Start Session" => array("description" => "Initialize AR/VR session"),
      "Pause Session" => array("description" => "Temporarily halt AR/VR session"),
      "Exit Session" => array("description" => "Terminate AR/VR session")
    );
  }

  function getModules() {
    return $this->modules;
  }

  function getSensors() {
    return $this->sensors;
  }

  function getActions() {
    return $this->actions;
  }
}

$dashboard = new ARVRModuleDashboard();

// Sample usage
echo "Modules: \n";
print_r($dashboard->getModules());
echo "\nSensors: \n";
print_r($dashboard->getSensors());
echo "\nActions: \n";
print_r($dashboard->getActions());

?>