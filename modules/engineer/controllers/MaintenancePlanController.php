<?php

namespace app\modules\engineer\controllers;

use Yii;
use app\modules\engineer\models\MaintenancePlan;
use app\modules\engineer\models\MaintenancePlanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MaintenancePlanController implements the CRUD actions for MaintenancePlan model.
 */
class MaintenancePlanController extends Controller
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
     * Lists all MaintenancePlan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MaintenancePlanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MaintenancePlan model.
     * @param integer $maintenance_id
     * @param integer $pm_plan_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($maintenance_id, $pm_plan_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($maintenance_id, $pm_plan_id),
        ]);
    }

    /**
     * Creates a new MaintenancePlan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MaintenancePlan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'maintenance_id' => $model->maintenance_id, 'pm_plan_id' => $model->pm_plan_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MaintenancePlan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $maintenance_id
     * @param integer $pm_plan_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($maintenance_id, $pm_plan_id)
    {
        $model = $this->findModel($maintenance_id, $pm_plan_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'maintenance_id' => $model->maintenance_id, 'pm_plan_id' => $model->pm_plan_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MaintenancePlan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $maintenance_id
     * @param integer $pm_plan_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($maintenance_id, $pm_plan_id)
    {
        $this->findModel($maintenance_id, $pm_plan_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MaintenancePlan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $maintenance_id
     * @param integer $pm_plan_id
     * @return MaintenancePlan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($maintenance_id, $pm_plan_id)
    {
        if (($model = MaintenancePlan::findOne(['maintenance_id' => $maintenance_id, 'pm_plan_id' => $pm_plan_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
