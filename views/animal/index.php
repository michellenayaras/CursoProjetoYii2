<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AnimalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Animal';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <br></br>
    <h4> Conheça nossos amiguinhos disponíveis para adoção:</h4>
    <br></br>
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <?php echo Html::img('@web/assets/images/1.jpg',['alt'=>'cachorro', 'class'=>'card-img-top']); ?>
            <div class="card-body">
                <h5 class="card-title">Filhote, fêmea, 3 meses</h5>
                <a href="#" class="btn btn-info" >Mais detalhes</a>
            </div>
            </div>
        </div>
        <br>
        <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <?php echo Html::img('@web/assets/images/2.jpg',['alt'=>'cachorro', 'class'=>'card-img-top']); ?>
            <div class="card-body">
            <h5 class="card-title">Filhote, macho, 5 meses</h5>
            <a href="#" class="btn btn-info">Mais detalhes</a>
            </div>
        </div>
        </div>
         <br>
        <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <?php echo Html::img('@web/assets/images/3.jpg',['alt'=>'cachorro', 'class'=>'card-img-top']); ?>
            <div class="card-body">
            <h5 class="card-title">Filhote, macho, 7 meses</h5>
            <a href="#" class="btn btn-info">Mais detalhes</a>
            </div>
        </div>
        </div>
          <br>
</div> 

    <br></br>
    
    <p>
        <?= Html::a('Cadastrar novo Animal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',

            [
                'attribute'=>'nome',
                'filterInputOptions' => [
                    'class'       => 'form-control',
                    'placeholder' => 'Digite um nome'
                ], 
            ],

            

            'sexo',
            'cor',
            'raca',
            'porte',
            'idade',
            //'foto',
            //'usuario_id',
            //'endereco_id',

            ['class' => 'yii\grid\ActionColumn',
                'template'=> '{view}{update}{delete}',
                'buttons'=>[ 
                    'delete' => function($url, $model){
                        return Html::a('<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                      </svg>',['delete', 'id'=>$model->id],[
                            'class'=>'',
                            'data' =>[
                                'confirm' => 'Deseja realmente excluir este item?',
                            'method'=>'post',
                            ],
                        ]);
                    }
                ]
        
        ],
        ],
    ]); ?>




</div>
