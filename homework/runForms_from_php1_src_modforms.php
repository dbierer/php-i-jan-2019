<?php
// The forms configuration array
$config = [
    'forms' => [
        'new_order' => [
            'name' => 'addorder',
            'id' => 'addorder',
            'action' => 'index.php',
            'method' => 'post',
            'layout' => 'vertical',
            'elements' => [
                1 => [
                    'label' => 'Amount:',
                    'type' => 'text',
                    'name' => 'amount',
                    'class' => '',
                    'id' => '',
                    'size' => 6
                ],
                2 => [
                    'label' => 'Name:',
                    'type' => 'text',
                    'name' => 'name',
                    'class' => '',
                    'id' => '',
                    'size' => 12
                ],
                3 => [
                    'label' => 'Description:',
                    'type' => 'textarea',
                    'name' => 'description',
                    'class' => '',
                    'id' => '',
                    'cols' => 50,
                    'rows' => 4
                ],
                4 => [
                    'label' => 'Status:',
                    'type' => 'select',
                    'options' => ['Yes','No','Maybe'],
                    'name' => 'status',
                    'class' => '',
                    'id' => '',
                ],
                5 => [
                    'type' => 'submit',
                    'class' => 'button',
                    'value' => 'Add Order'
                ],
            ],
        ],
    ],
];

// The form entry function that builds an HTML form from configuration
function getForm($config, $name)
{
    $form = getStartTag($config['forms'][$name]);
    $form .= getElements($config, $name);
    $form .= '</form>';
    return $form;
}

// The function that builds the start tag
function getStartTag($config)
{
    $tag = '<form ';
    foreach ($config as $key => $value) {
        if ($key === 'elements') continue;
        $tag .= " $key=\"$value\"";
    }
    return $tag .= '>';
}

function getSelect( $config, $name, $options) 
{
	$html = '<select name="' . $name . '">';
	// loop through key / value pairs to create <option> tags ...
	foreach ($options as $value) {
		$html .= '<option value="' . $value . '">' . $value . '</option>' . PHP_EOL;
	}
	$html .= '</select>' . PHP_EOL;
	return $html;
}

// The function that adds form elements
function getElements($config, $name)
{
    $html = null;
    $form = $config['forms'][$name];

    // Iterate over form elements, building each element
    foreach ($form['elements'] as $key => $value) {
        $html .= isset($value['label']) ? "<label>{$value['label']}</label>" : null;
        $divclass = isset($value['divclass']) ? "class=\"{$value['divclass']}\"":null;
        switch ($value['type']) {
            case 'text':
                $html .= "<div $divclass><input type=\"text\" class=\"{$value['class']}\" name=\"{$value['name']}\" size=\"{$value['size']}\"/></div>";
                break;
            case 'select' :
				$html .= getSelect($config, $name, $value['options']);
				break;
            case 'textarea':
                $html .= "<div $divclass><textarea class=\"{$value['class']}\" name=\"{$value['name']}\" cols=\"{$value['cols']}\" rows=\"{$value['rows']}\"></textarea></div>";
                break;
            case 'submit':
                $html .= "<div $divclass><input type=\"{$value['type']}\" class=\"{$value['class']}\" value=\"{$value['value']}\"/></div>";
                break;
        }
    }
    return $html;
}

echo getForm($config, 'new_order');
