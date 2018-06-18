CMB2 Number Field
=================

Adds a number field to CMB2.

```php
$countdown = new_cmb2_box( array(
    'id'            => 'countdown',
    'title'         => __('Countdown', 'theme'),
));

$countdown_seconds = $countdown->add_field(array(
    'name' => __( 'Seconds Left', 'theme'),
    'id'   => 'countdown_seconds',
    'type' => 'text_number',
));
```
