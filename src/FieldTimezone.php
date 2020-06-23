<?php

namespace Adaptcms\FieldTimezone;

use Adaptcms\Base\Models\Package;

class FieldTimezone
{
  /**
  * On Install
  *
  * @return void
  */
  public function onInstall()
  {
    Package::syncPackageFolder(get_class());
  }
}
