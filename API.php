<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 2017-11-26
 * Time: 22:24
 */

class API
{
    /**
     * 打印参数
     * @param $param
     */
    public function some_method($param)
    {
        $filename = "./data/requestinfo.txt";
        !is_dir(dir($filename))&&mkdir(dir($filename));
        $content = "【" . microtime(ture)."】";
        $content .= var_export($param, true);
        if (!$res = file_put_contents($filename, $content, FILE_APPEND)) {
            return ;
        } else {
            return true;
        }
    }

    public function methon_can_not_see()
    {
        //func
    }
}

$server = new Yar_Server(new API());
$server->handle();
