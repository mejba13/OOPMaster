<?php
namespace RamlitService;

class Service {
    private $serviceName;

    public function __construct($serviceName) {
        $this->serviceName = $serviceName;
    }

    public function getServiceDetails() {
        return "Service Name: " . $this->serviceName;
    }
}
?>
