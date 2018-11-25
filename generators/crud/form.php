<?php
/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $generator yii\gii\generators\crud\Generator */

echo $form->field($generator, 'modelClass');
echo $form->field($generator, 'searchModelClass');
echo $form->field($generator, 'controllerClass');
echo $form->field($generator, 'viewPath');
echo $form->field($generator, 'baseControllerClass');
echo $form->field($generator, 'indexWidgetType')->dropDownList([
    'grid_extended' => 'GridView extended',
    'datatable' => 'DataTable GridView',
    'grid' => 'GridView',
    'list' => 'ListView'
]);
echo $form->field($generator, 'enableI18N')->checkbox();
echo $form->field($generator, 'enablePjax')->checkbox();
echo $form->field($generator, 'enablePanel')->checkbox();
echo $form->field($generator, 'enablePageTitle')->checkbox();
echo $form->field($generator, 'messageCategory');
