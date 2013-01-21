<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * リンクリスト削除アクションクラス
 *
 * @package     NetCommons
 * @author      Noriko Arai,Ryuji Masukawa
 * @copyright   2006-2007 NetCommons Project
 * @license     http://www.netcommons.org/license.txt  NetCommons License
 * @project     NetCommons Project, supported by National Institute of Informatics
 * @access      public
 */
class Linklist_Action_Edit_Delete extends Action
{
    // 使用コンポーネントを受け取るため
    var $linklistAction = null;

    /**
     * リンクリスト削除アクション
     *
     * @access  public
     */
    function execute()
    {
        if (!$this->linklistAction->deleteLinklist()) {
        	return "error";
        }

		return "success";
    }
}
?>
