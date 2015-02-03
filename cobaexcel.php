<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=opportunity.xls");
?>
	<table>
        <thead>
            <tr>
                <td rowspan="2" width="30">No</td>
                <td rowspan="2">Description</td>
                <td rowspan="2">Contact</td>
                <td rowspan="2">Company</td>
                <td rowspan="2">Title</td>
                <td rowspan="2">Go</td>
                <td rowspan="2">Get</td>
                <td colspan="4">Last Activity</td>
            </tr>
            <tr>
                <td>Date</td>
                <td>PIC</td>
                <td>Result</td>
                <td>Notes</td>
            </tr>
        </thead>

        <tbody>
        	<?php $p=0; $i=0; foreach ($tbOpportunity as $row) {$i++; 
        		if ($row->oppID <> $p) {
        			$p = $row->oppID;
        		?>
            <tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $row->description; ?></td>
				<td><?php echo $row->contactName; ?></td>
				<td><?php echo $row->companyName; ?></td>
				<td><?php echo $row->title; ?></td>
				<td><?php echo $row->goopp; ?></td>
				<td><?php echo $row->getopp; ?></td>
				<td><?php echo $row->date; ?></td>
				<td><?php echo $row->PIC; ?></td>
				<td><?php echo $row->result; ?></td>
				<td><?php echo $row->notes; ?></td>
			</tr>
			<?php }} ?>
        </tbody>
    </table>
<?php
exit()
?>