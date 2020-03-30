<?php

// Replace bad words in a string
// https://hasin.me/2006/11/28/replace-bad-words-in-a-string/
$var = "somesomesome somesome some, some. someone .some ";
$badword = "some";
$var = preg_replace(array("/([\W]+){$badword}([\W]+)/","/([\W]+){$badword}([\W]+)/"),"$1".str_repeat("*",strlen($badword))."$2",$var);
echo $var;


/**
 * https://hasin.me/2014/03/06/themeforest-wordpress-checklist/
 * https://hasin.me/2014/05/13/git-workflow-in-bangla/
 * https://hasin.me/2014/05/13/factory-design-pattern/
 * https://hasin.me/2014/03/07/design-pattern-facade/
 * https://hasin.me/2014/05/14/singleton-design-pattern/
 */

 // ImportOptions
/**
 * https://www.sitepoint.com/programmatically-creating-wordpress-posts-from-csv-data/
 * https://code.tutsplus.com/articles/creating-a-simple-backuprestore-settings-feature--wp-25770
 * https://www.themevan.com/a-simple-guide-to-provide-one-click-demo-import-feature-in-wordpress/
 * https://wordpress.stackexchange.com/questions/158443/one-click-demo-content-installation-feature-in-wordpress-theme-options-panel
 */