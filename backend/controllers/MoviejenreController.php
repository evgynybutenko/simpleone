<?php

namespace backend\controllers;

use Yii;
use backend\models\MovieJenre;
use backend\models\MovieJenreSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MovieJenreController implements the CRUD actions for MovieJenre model.
 */
class MoviejenreController extends Controller
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
     * Lists all MovieJenre models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MovieJenreSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MovieJenre model.
     * @param integer $movie_id
     * @param integer $jenre_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($movie_id, $jenre_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($movie_id, $jenre_id),
        ]);
    }

    /**
     * Creates a new MovieJenre model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MovieJenre();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'movie_id' => $model->movie_id, 'jenre_id' => $model->jenre_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MovieJenre model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $movie_id
     * @param integer $jenre_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($movie_id, $jenre_id)
    {
        $model = $this->findModel($movie_id, $jenre_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'movie_id' => $model->movie_id, 'jenre_id' => $model->jenre_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MovieJenre model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $movie_id
     * @param integer $jenre_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($movie_id, $jenre_id)
    {
        $this->findModel($movie_id, $jenre_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MovieJenre model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $movie_id
     * @param integer $jenre_id
     * @return MovieJenre the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($movie_id, $jenre_id)
    {
        if (($model = MovieJenre::findOne(['movie_id' => $movie_id, 'jenre_id' => $jenre_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
