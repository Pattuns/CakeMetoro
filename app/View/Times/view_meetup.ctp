<div class="times index">
	<h2><?php echo __($timesInfo_0['Depart']['title'] . ' <=> ' . $timesInfo_0['Arrive']['title']); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
        <td><?php echo __($timesInfo_0['Time']['depart'] . ' 出発'); ?></td>
        <td><?php echo __($timesInfo_0['Depart']['title']); ?></td>
	</tr>
    <tr>
        <td>↓</td><td>↓</td>
    </tr>
    <?php if(count($timesInfo_0['Connect'])!=0){ ?>
        <?php foreach($timesInfo_0['Connect'] as $info){ ?>
            <tr>
                <td><?php echo '到着 : ' . $info['arrive'] . ' | 出発 : ' . $info['depart']; ?></td>
                <td><?php echo $info['station_name']; ?></td>
            </tr>
            <?php if($info['depart'] == $info['arrive']){ ?>
                <tr>
                    <td> V </td>
                    <td> 徒歩 </td>
                </tr>
            <?php } else{ ?>
                <tr>
                    <td> ↓ </td>
                    <td> ↓ </td>
                </tr>
            <?php } ?>
        <?php } ?>
    <?php } ?>
	<tr>
        <td><?php echo __($timesInfo_0['Time']['arrive'] . ' 到着'); ?></td>
        <td><?php echo __($timesInfo_0['Arrive']['title']); ?></td>
	</tr>
	</table>
    <br />

	<h2><?php echo __($timesInfo_1['Depart']['title'] . ' <=> ' . $timesInfo_1['Arrive']['title']); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
        <td><?php echo __($timesInfo_1['Time']['depart'] . ' 出発'); ?></td>
        <td><?php echo __($timesInfo_1['Depart']['title']); ?></td>
	</tr>
    <tr>
        <td>↓</td><td>↓</td>
    </tr>

    <?php if(count($timesInfo_1['Connect'])!=0){ ?>
        <?php foreach($timesInfo_1['Connect'] as $info){ ?>
            <tr>
                <td><?php echo '到着 : ' . $info['arrive'] . ' | 出発 : ' . $info['depart']; ?></td>
                <td><?php echo $info['station_name']; ?></td>
            </tr>
            <?php if($info['depart'] == $info['arrive']){ ?>
                <tr>
                    <td> V </td>
                    <td> 徒歩 </td>
                </tr>
            <?php } else{ ?>
                <tr>
                    <td> ↓ </td>
                    <td> ↓ </td>
                </tr>
            <?php } ?>
        <?php } ?>
    <?php } ?>
	<tr>
        <td><?php echo __($timesInfo_1['Time']['arrive'] . ' 到着'); ?></td>
        <td><?php echo __($timesInfo_1['Arrive']['title']); ?></td>
	</tr>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Time'), array('action' => 'add')); ?></li>
	</ul>
</div>
