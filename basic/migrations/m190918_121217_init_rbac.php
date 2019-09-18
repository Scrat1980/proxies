<?php

use yii\db\Migration;

/**
 * Class m190918_121217_init_rbac
 */
class m190918_121217_init_rbac extends Migration
{
    public function up()
    {
        $auth = Yii::$app->authManager;

        $viewUsers = $auth->createPermission('viewUsers');
        $viewUsers->description = 'View users';
        $auth->add($viewUsers);

        $viewProxies = $auth->createPermission('viewProxies');
        $viewProxies->description = 'View proxies';
        $auth->add($viewProxies);

        $updateProxies = $auth->createPermission('updateProxies');
        $updateProxies->description = 'Update proxies';
        $auth->add($updateProxies);


        $editor = $auth->createRole('editor');
        $auth->add($editor);
        $auth->addChild($editor, $viewProxies);

        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $updateProxies);
        $auth->addChild($admin, $viewUsers);
        $auth->addChild($admin, $editor);

        $auth->assign($editor, 101);
        $auth->assign($admin, 100);
    }

    public function down()
    {
        $auth = Yii::$app->authManager;

        $auth->removeAll();
    }}
