<?php
/** @var $racers Racer[] */

use app\Racer;

?>

<table class="table">
    <tbody>
    <tr class="table__head">
        <th rowspan="2" class="table__headName">ФИО</th>
        <th rowspan="2" class="table__headCity">Город</th>
        <th rowspan="2" class="table__headCar">Машина</th>
        <th colspan="4" class="table__headGroup">Результаты</th>
        <th rowspan="2" class="table__headSum <?php if (!array_key_exists('sort', $_GET)) {
            echo 'actionCell';
        } ?>">
            <a class="table__headSumLink
                    <?php if (!array_key_exists('sort', $_GET)) {
                echo 'disable';
            } ?> " href="/">
                <span class="table__headSumLinkText">Сумма</span>
                <?php
                if (!array_key_exists('sort', $_GET)) { ?>
                    <img class="table__headSumLinkIcon" src="img/icons/arrow1.svg" alt="arrow">
                <?php } else { ?>
                    <img class="table__headSumLinkIcon" src="img/icons/arrow2.svg" alt="arrow">
                <?php } ?>
            </a>
        </th>
        <th rowspan="2" class="table__headPlace">Место</th>
    </tr>
    <tr class="table__head">
        <?php
        foreach ($racers[1]->getAttempt() as $key => $item) { ?>
            <th class="table__headItem  <?php if (array_key_exists('sort', $_GET) && $_GET['item'] == $key) {
                echo 'actionCell';
            } ?>">
                <a class="table__headItemLink
                            <?php if (array_key_exists('sort', $_GET) && $_GET['item'] == $key) {
                    echo 'disable';
                } ?>
                                " href="
                                    <?php echo '/?sort=attempt&item=' . $key ?>
                                        ">
                            <span class="table__headItemLinkText">
                                <?php echo $key + 1 ?>
                            </span>
                    <?php if (array_key_exists('sort', $_GET) && $_GET['item'] == $key) { ?>
                        <img class="table__headItemLinkIcon" src="img/icons/arrow1.svg" alt="arrow">
                    <?php } else { ?>
                        <img class="table__headItemLinkIcon" src="img/icons/arrow2.svg" alt="arrow">
                    <?php } ?>
                </a>
            </th>
        <?php } ?>
    </tr>

    <?php
    $i = 1;
    foreach ($racers as $key => $item) {
        ?>
        <tr class="table__row">
            <td class="table__rowName"><?php echo $item->getName() ?></td>
            <td class="table__rowCity"><?php echo $item->getCity() ?></td>
            <td class="table__rowCar"><?php echo $item->getCar() ?></td>
            <?php foreach ($item->getAttempt() as $i => $value) { ?>
                <td class="table__rowItem <?php if (array_key_exists('sort', $_GET) && $_GET['item'] == $i) {
                    echo 'actionCell';
                } ?>"><?php echo $value ?></td>
            <?php } ?>
            <td class="table__rowSum <?php if (!array_key_exists('sort', $_GET)) {
                echo 'actionCell';
            } ?>"><?php echo $item->getSum() ?></td>
            <td class="table__rowPlace"><?php echo $i ?></td>
        </tr>
        <?php
        $i++;
    } ?>


    </tbody>
</table>
