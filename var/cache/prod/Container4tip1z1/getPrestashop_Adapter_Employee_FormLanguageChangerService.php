<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.employee.form_language_changer' shared service.

return $this->services['prestashop.adapter.employee.form_language_changer'] = new \PrestaShop\PrestaShop\Adapter\Employee\FormLanguageChanger(${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'});
