---
title: ImageWidget
description: Render an image on a canvas matching the dimensions of the image.
---
## ImageWidget

Render an image on a canvas matching the dimensions of the image.
{{% terminal file="/data/example/docs/widget/imageWidget.html" %}}
{{< details "Show code"  >}}
{{% codeInclude file="/data/example/docs/widget/imageWidget.php" language="php" %}}

{{< /details >}}
### Parameters

Configure the widget using the builder methods named as follows:

| Name | Type | Description |
| --- | --- | --- |
| **path** | `string` | Absolute path to the image |
| **marker** | `PhpTui\Tui\Model\Marker\|null` | Canvas marker to use, defaults to Marker::HalfBlock |