<?php
ob_start();
?>
<section class="container-fluid">

<div class="row justify-content-between">
    <div class="card card-dark col-lg-6 col-sm-12" style="padding: 0">
        <div class="card-header">
            <h3 class="card-title">Pie Chart</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 342px;" width="342" height="250" class="chartjs-render-monitor"></canvas>
        </div>
        <!-- /.card-body -->
    </div>


    <div class="card card-dark col-lg-6  col-sm-12" style="padding: 0">
        <div class="card-header">
            <h3 class="card-title">Pie Chart</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas id="pieChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 342px;" width="342" height="250" class="chartjs-render-monitor"></canvas>
        </div>
        <!-- /.card-body -->
    </div>
</div>

    <div class="row">

        <div class="card card-dark col-lg-12" style="padding: 0">
            <div class="card-header">
                <h3 class="card-title">Area Chart</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 342px;" width="342" height="250" class="chartjs-render-monitor"></canvas>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
?>