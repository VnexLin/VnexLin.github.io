<?php
// 获取 type 参数（同时支持 GET 和 POST）
$type = $_REQUEST['type'] ?? '';

// 根据 type 返回指定内容
if ($type === 'ssnet') {
    echo 'yes';
    exit;
}

// 其他情况可按需扩展，此处默认不输出或返回空
