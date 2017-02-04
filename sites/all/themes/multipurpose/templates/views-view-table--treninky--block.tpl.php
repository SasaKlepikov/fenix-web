<?php
/**
 * Podoli - content
 */
?>
<?php
$dayhastr = false;
$days = array();
$times = ['16:00', '16:30', '17:00', '17:30', '18:00', '18:30', '19:00', '19:30', '20:00', '20:30', '21:00', '21:30'];
$total = sizeof($times);
$count = 0;
$col = 1;
$prevcount = 0;
?>
<?php foreach ($rows as $row_count => $row): ?>
  <?php
  $days[$row['field_den_v_tydnu']][$row['nid']]['time'] = trim(strip_tags($row['field_cas_treninku']));
  $days[$row['field_den_v_tydnu']][$row['nid']]['time_from'] = substr(trim(strip_tags($row['field_cas_treninku'])), 0, 5);
  $days[$row['field_den_v_tydnu']][$row['nid']]['time_to'] = substr(trim(strip_tags($row['field_cas_treninku'])), -5);
  $days[$row['field_den_v_tydnu']][$row['nid']]['urcen_pro'] = $row['field_urcen_pro_1'];
  $days[$row['field_den_v_tydnu']][$row['nid']]['urcen_pro_key'] = $row['field_urcen_pro_2'];
  $days[$row['field_den_v_tydnu']][$row['nid']]['place'] = $row['field_adresa_ref_2'];
  ?>
<?php endforeach; ?>
<tr class="hide-mobile">
  <?php foreach ($days as $day => $data): ?>
    <td colspan="2"><?= $day; ?></td>
    <?php foreach ($data as $nid => $training): ?>
      <?php foreach ($times as $time): ?>

        <?php $count++; ?>
        <?php if ($time >= $training['time_from'] && $time <= $training['time_to']): ?>

          <?php if ($time == $training['time_from']): ?>
            <?php $col++; ?>
            <?php if ($prevcount > 0): ?>
              <?php $count = $count - $prevcount; ?>
            <?php endif; ?>
          <?php elseif ($time == $training['time_to']): ?>
            <?php $prevcount = $count; ?>
            <?php $col++; ?>
            <?php $dayhastr = true; ?>

            <?php if ($dayhastr === true): ?>
              <td colspan="<?= $col; ?>" class="intended-for intended-for-<?= $training['urcen_pro_key']; ?>">
                <div class="info">
                  <div class="time"><?= $training['time']; ?><br><?= $training['place']; ?></div>
                  <div class="intended-for"><?= $training['urcen_pro']; ?></div>
                </div>
              </td>
              <?php $col = 1; ?>
              <?php break; ?>
            <?php else: ?>
              <?php $dayhastr = false; ?>
            <?php endif; ?>
          <?php endif; ?>
        <?php elseif ($dayhastr === false): ?>
          <td></td>
        <?php endif; ?>
      <?php endforeach; ?>
    <?php endforeach; ?>
    <?php if ($count <= $total): ?>
      <?php for ($i = $count; $i <= $total; $i++): ?>
        <td></td>
      <?php endfor; ?>
    <?php endif; ?>
  <?php endforeach; ?>
</tr>

<?php global $rowcount; ?>

<?php foreach ($days as $day => $data): ?>
  <?php foreach ($data as $nid => $training): ?>
    <tr class="hide-wide <?php
        if ($rowcount % 2 == 0) {
          print 'odd';
        }
        else {
          print 'even';
        }
        ?>">
      <td><?= $day; ?></td>
      <td>
        <?php print $training['time']; ?> - <?php print $training['urcen_pro']; ?>
      </td>
    </tr>
    <?php $rowcount++; ?>
  <?php endforeach; ?>
<?php endforeach; ?>