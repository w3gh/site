<?php

namespace app\controllers;

use app\models\ContactForm;
use app\models\LoginForm;
use yii\helpers\Markdown;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use Yii;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'only' => ['logout'],
//                'rules' => [
//                    [
//                        'actions' => ['logout'],
//                        'allow' => true,
//                        'roles' => ['@'],
//                    ],
//                ],
//            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionDownload()
    {
        return $this->render('download');
    }

    public function actionGuide($id = 'index')
    {
        $cache = Yii::$app->cache;

        //if (!($content = $cache->get("guide:$id"))) {
            $content = Markdown::process($this->getGuide($id), 'gfm');
            $cache->set("guide:$id", $content, 21600);
        //}

        return $this->render('guide', compact('content'));
    }

    protected function getGuide($name)
    {
        $file = $this->getGuideFile($name);

        return file_get_contents($file);
    }

    protected function getGuideFile($value)
    {
        $name = filter_var($value, FILTER_SANITIZE_ENCODED);
        $file = Yii::getAlias('@webroot/docs') . DIRECTORY_SEPARATOR . $name . '.md';

        if (is_file($file)) {
            return $file;
        }

        throw new \yii\web\HttpException(404, 'Not found');
    }

//    public function actionLogin()
//    {
//        if (!\Yii::$app->user->isGuest) {
//            return $this->goHome();
//        }
//
//        $model = new LoginForm();
//        if ($model->load(Yii::$app->request->post()) && $model->login()) {
//            return $this->goBack();
//        } else {
//            return $this->render('login', [
//                'model' => $model,
//            ]);
//        }
//    }
//
//    public function actionLogout()
//    {
//        Yii::$app->user->logout();
//        return $this->goHome();
//    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

}
