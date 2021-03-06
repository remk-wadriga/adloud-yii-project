<?php
/**
 * Created by JetBrains PhpStorm.
 * User: JanGolle
 * Date: 22.09.14
 * Time: 14:21
 * To change this template use File | Settings | File Templates.
 */
?>
<h1>Статистика по категориям</h1>

<div class="row">
    <div class="col-sm-4 pull-right">
        <div class="col-sm-10">
            <div class="row">
                <div class="input-group input-large datepicker-container" data-date="<?=$period['startDate']?>" data-date-format="yyyy-mm-dd">
                    <input type="text" class="form-control dpd1 text-center" name="from" value="<?=$period['startDate']?>">
                    <span class="input-group-addon"> - </span>
                    <input type="text" class="form-control dpd2 text-center" name="to" value="<?=$period['endDate']?>">
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="row">
                <button type="button" class="btn btn-success btn-shadow btn-block datepicker-submit"><i class="fa fa-refresh"></i></button>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Данные по категориям
     <span class="tools pull-right">
        <a href="javascript:;" class="fa fa-chevron-down"></a>
        <a href="javascript:;" class="fa fa-times"></a>
     </span>
            </header>
            <div class="panel-body">
                <div class="adv-table">
                    <table class="display table table-bordered" id="hidden-table-info">
                        <thead>
                        <tr>
                            <th>Категория</th>
                            <th>Кол-во площадок</th>
                            <th>Показы</th>
                            <th>Клики</th>
                            <th>CTR</th>
                            <th>CPM</th>
                            <th>Средняя цена клика</th>
                            <th>Доход категории</th>
                            <th>Расход рекламодателя</th>
                            <th>Доход системы</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($tableData as $id => $stat):?>
                            <tr class="gradeA">
                                <td><a href="<?=Yii::app()->createUrl('admin/statscategory/category', ['id' => $id]).'?startDate='.$period['startDate'].'&endDate='.$period['endDate']?>"><?=$stat['name']?></a></td>
                                <td><?=$stat['sites'];?></td>
                                <td><?=$stat['shows']?></td>
                                <td><?=$stat['clicks']?></td>
                                <td><?=$stat['ctr']?></td>
                                <td><?=$stat['cpm']?></td>
                                <td><?=$stat['averageCost']?></td>
                                <td><?=$stat['income']?></td>
                                <td><?=$stat['advertisersPaid']?></td>
                                <td><?=$stat['systemIncome']?></td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>

                </div>
            </div>
        </section>
    </div>

    <section class="col-lg-12">
        <h3>Доход категорий</h3>
        <div class="panel">
            <div class="panel-body">
                <div class="chart">
                    <canvas id="stat-categories" height="400" width="940"></canvas>
                </div>
            </div>
        </div>
    </section>
</div>

<?php Yii::app()->clientScript->registerScript('statsCategories', '
    StatsCategories.init({
        categoriesData: ['.implode(',',$chartsData).']
    });
'); ?>