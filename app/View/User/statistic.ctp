<h1 class="center">Estatísticas</h1>

<div class="col-lg-3 col-md-6">
    <div class="panel panel-red">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-support fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge"><?php echo $totalToday?></div>
                    <div>Hoje!</div>
                </div>
            </div>
        </div>
        <a href="../debts/list_today">
            <div class="panel-footer">
                <span class="pull-left">Detalhes</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>
<div class="col-lg-3 col-md-6">
    <div class="panel panel-yellow">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-shopping-cart fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge"><?php echo $totalOpen?></div>
                    <div>Abertas!</div>
                </div>
            </div>
        </div>
        <a href="../debts/list_open">
            <div class="panel-footer">
                <span class="pull-left">Detalhes</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>
<div class="col-lg-3 col-md-6">
    <div class="panel panel-green">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-tasks fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge"><?php echo $totalClose?></div>
                    <div>Encerradas!</div>
                </div>
            </div>
        </div>
        <a href="../debts/list_close">
            <div class="panel-footer">
                <span class="pull-left">Detalhes</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>

            

