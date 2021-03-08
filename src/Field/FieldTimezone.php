<?php

namespace Adaptcms\FieldTimezone\Field;

use Illuminate\Http\Request;

use Adaptcms\Base\Models\PackageField;
use Adaptcms\Fields\FieldType;

class FieldTimezone extends FieldType
{
  /**
  * Get Timezones
  *
  * @return array
  */
  public function getTimezones()
  {
    $list = \DateTimeZone::listIdentifiers();
    // $list = \DateTimeZone::listIdentifiers(\DateTimeZone::AMERICA);

    return $list;
  }

  /**
  * With Form Meta
  *
  * @param Request      $request
  * @param PackageField $packageField
  *
  * @return array
  */
  public function withFormMeta(Request $request, PackageField $packageField)
  {
    $meta = [
      'timezones' => $this->getTimezones()
    ];

    return $meta;
  }

  /**
  * With Settings Form Meta
  *
  * @param Request $request
  * @param object  $model
  * @param string  $columnName
  *
  * @return array
  */
  public function withSettingsFormMeta(Request $request, $model, string $columnName)
  {
    $meta = [
      'timezones' => $this->getTimezones()
    ];

    return $meta;
  }
}
