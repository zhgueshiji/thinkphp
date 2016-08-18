<?php
return array(
    'SHOW_ERROR_MSG'        =>  true,    // 显示错误信息
     // 防止表单的重复提交等安全防护
     'view_filter' => array('Behavior\TokenBuild'),
    // 如果是3.2.1以上版本 需要改成
    // 'view_filter' => array('Behavior\TokenBuildBehavior'),
);
	