<?php

require "vendor/autoload.php";

// 设定内存大小
@ini_set('memory_limit', '2048M');

// 设定运行时间
set_time_limit(0);

// 标题行
$head = [
    [
        ["title" => "姓名", "field" => "userName", "rowspan" => 3],
        ["title" => "工资待遇", "field" => "salary", "colspan" => 3],
        ["title" => "出生日期", "field" => "birthday", "colspan" => 3],
        ["title" => "居住地址", "field" => "address", "rowspan" => 3]
    ],
    [
        ["title" => "薪水", "field" => "wage", "rowspan" => 2],
        ["title" => "福利", "field" => "welfare", "colspan" => 2],
        ["title" => "年", "field" => "year", "rowspan" => 2],
        ["title" => "月", "field" => "month", "rowspan" => 2],
        ["title" => "日", "field" => "day", "rowspan" => 2]
    ],
    [
        ["title" => "住宿补贴", "field" => "accommodation"],
        ["title" => "交通补贴", "field" => "traffic"]
    ]
];

// 内容区
$body = [
    [
        "userName" => "张三",
        "wage" => "6500",
        "accommodation" => "1000",
        "traffic" => "500",
        "year" => "1970",
        "month" => "1",
        "day" => "1",
        "address" => "上海理工大学"
    ],
    [
        "userName" => "李四",
        "wage" => "8500",
        "accommodation" => "1000",
        "traffic" => "500",
        "year" => "2007",
        "month" => "10",
        "day" => "26",
        "address" => "华东师范大学"
    ]
];

$writer = new \snippet\excel\ExcelWriter();
$writer->write("info", $head, $body)->output("test");
exit;