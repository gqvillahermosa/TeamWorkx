<?php
 //$this->load->library('table');
echo "<div class='container'>";
$template = array(
        'table_open'            => '<table class="table table-striped table-hover table-bordered table-sm">',

        'thead_open'            => '<thead>',
        'thead_close'           => '</thead>',

        'heading_row_start'     => '<tr>',
        'heading_row_end'       => '</tr>',
        'heading_cell_start'    => '<th>',
        'heading_cell_end'      => '</th>',

        'tbody_open'            => '<tbody>',
        'tbody_close'           => '</tbody>',

        'row_start'             => '<tr>',
        'row_end'               => '</tr>',
        'cell_start'            => '<td>',
        'cell_end'              => '</td>',

        'row_alt_start'         => '<tr>',
        'row_alt_end'           => '</tr>',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td>',

        'table_close'           => '</table>'
);

$this->table->set_template($template);
$result = $this->rank->getRanks();
echo "<h2>Dekiti Tirsia Siradas Ranking</h2>";
echo $this->table->generate($result);
echo "</div>";

$options = array(
        'small'         => 'Small Shirt',
        'med'           => 'Medium Shirt',
        'large'         => 'Large Shirt',
        'xlarge'        => 'Extra Large Shirt',
);

$shirts_on_sale = array('small', 'large');
echo form_dropdown('shirts', $options, 'large');

//print_r($this->rank->getTestRank());

$js = 'onClick="some_function()"';
echo form_button('mybutton', 'Click Me', $js);
?>
