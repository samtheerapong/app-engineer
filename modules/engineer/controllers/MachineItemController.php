<?php

namespace app\modules\engineer\controllers;

use Yii;
use app\modules\engineer\models\MachineItem;
use app\modules\engineer\models\MachineItemSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MachineItemController implements the CRUD actions for MachineItem model.
 */
class MachineItemController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all MachineItem models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MachineItemSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MachineItem model.
     * @param integer $machine_id
     * @param integer $item_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($machine_id, $item_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($machine_id, $item_id),
        ]);
    }

    /**
     * Creates a new MachineItem model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MachineItem();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'machine_id' => $model->machine_id, 'item_id' => $model->item_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MachineItem model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $machine_id
     * @param integer $item_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($machine_id, $item_id)
    {
        $model = $this->findModel($machine_id, $item_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'machine_id' => $model->machine_id, 'item_id' => $model->item_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MachineItem model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $machine_id
     * @param integer $item_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($machine_id, $item_id)
    {
        $this->findModel($machine_id, $item_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MachineItem model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $machine_id
     * @param integer $item_id
     * @return MachineItem the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($machine_id, $item_id)
    {
        if (($model = MachineItem::findOne(['machine_id' => $machine_id, 'item_id' => $item_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
