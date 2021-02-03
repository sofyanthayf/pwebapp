<div class="container">
  <h3><?= $judul ?></h3>
  <hr>

  <div class="row">
    <div class="col s4">
      <ul>

        <?php
          for($l = 1 ; $l <= 15 ; $l++ ){
        ?>

              <li>
                <a href="<?=base_url()?>/rooms/<?= $l?>">lantai <?= $l ?></a>
              </li>

        <?php
          }
         ?>

      </ul>
    </div>
    <div class="col s8">
      <table>
        <thead>
          <tr>
            <th>Room</th>
            <th>Type</th>
            <th>View</th>
            <th>Rate</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($rooms as $room): ?>
            <tr>
              <td><?= $room['room'] ?></td>
              <td><?= $room['rtype'] ?></td>
              <td><?= $room['dview'] ?></td>
              <td><?= $room['frate'] ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
