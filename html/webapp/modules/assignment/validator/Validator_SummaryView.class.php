<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * 集計データ取得バリデータクラス
 *
 * @package     NetCommons.validator
 * @author      Noriko Arai,Ryuji Masukawa
 * @copyright   2006-2007 NetCommons Project
 * @license     http://www.netcommons.org/license.txt  NetCommons License
 * @project     NetCommons Project, supported by National Institute of Informatics
 * @access      public
 */
class Assignment_Validator_SummaryView extends Validator
{
    /**
     * validate処理
     *
     * @param   mixed   $attributes チェックする値
     * @param   string  $errStr     エラー文字列
     * @param   array   $params     オプション引数
     * @return  string  エラー文字列(エラーの場合)
     * @access  public
     */
    function validate($attributes, $errStr, $params)
    {
		if (empty($attributes["assignment"])) {
			return $errStr;
		}
		if (!$attributes["hasSummaryAuthority"]) {
			return $errStr;
		}

		$container =& DIContainerFactory::getContainer();

		$assignmentView =& $container->getComponent("assignmentView");

		$summary = $assignmentView->getSummary();
		if (empty($summary)) {
        	return $errStr;
        }

		$request =& $container->getComponent("Request");
		$request->setParameter("summary", $summary);

        return;
    }
}
?>
