# 代码示例 #

## 实例化的方法 ##

`require_once (dirname(__FILE__) . "/../include/common.inc.php");
$smarty = SmartyFactory::createInstance();`


## 中文utf8字符串的截断  ##
|msubstr()

`function smarty_modifier_msubstr($str, $start , $length, $charset = "utf-8", $suffix = '') {...}`
