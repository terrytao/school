<?


use frontend\components\job\JobDropDownSelector;
use host33\multilevelhorizontalmenu\MultilevelHorizontalMenu;

echo MultilevelHorizontalMenu::widget
(

    array(
        "menu" => array(
            array(
                "url" => array(),
                "label" => "本科专业",
            ),
            array(
                "url" => array(),
                "label" => "Science", //理学
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "Math", //数学类
                    array(
                        "url" => array(
                            "route" => "job/publish-now",
                            "params" => array("majorId" => JobDropDownSelector::addParam(@$_GET['majorIds'], 2116))),

                    ),
                    "label" => "数学与应用数学" //applied math
                ),
                array(
                    "url" => array(
                        "route" => "job/publish-now",
                        "params" => array("majorId" => JobDropDownSelector::addParam(@$_GET['majorIds'], 2117))),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "信息与计算科学" //computer science
            ),
            array(
                "url" => array(
                    "route" => "schools/find-schools-by-major",
                    "params" => array("majorId" => 820),
                    "htmlOptions" => array("title" => "数学"),
                ),
                "label" => "数理基础科学"
            ),


        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "物理学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "物理学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "应用物理学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "核物理"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "声学"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "化学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "化学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "应用化学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "化学生物学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "分子科学与工程"
            ),

        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "天文学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "天文学"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "地理科学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "地理科学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "自然地理与资源环境"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "人文地理与城乡规划"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "地理信息科学"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "大气科学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "大气科学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "应用气象学"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "海洋科学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "海洋科学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "海洋技术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "海洋资源与环境"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "军事海洋学"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "地质学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "地质学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "地球化学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "地球信息科学与技术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "古生物学"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "生物科学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "生物科学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "生物技术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "生物信息学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "生态学"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "心理学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "心理学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "应用心理学"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "统计学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "统计学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "应用统计学"
            ),

        ),


    ),
    array(
        "url" => array(),
        "label" => "工学",
        array(
            "url" => array("route" => "/site/index"),
            "label" => "力学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "理论与应用力学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "工程力学"
            ),

        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "机械类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "机械工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "机械设计制造及其自动化"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "材料成型及控制工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "机械电子工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "工业设计"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "过程装备与控制工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "车辆工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "汽车服务工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "机械工艺技术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "微机电系统工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "机电技术教育"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "汽车维修工程教育"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "仪器类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "测控技术与仪器"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "材料类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "材料科学与工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "材料物理"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "材料化学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "冶金工程"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "金属材料工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "无机非金属材料工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "高分子材料与工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "复合材料与工程"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "粉体材料科学与工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "宝石及材料工艺学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "焊接技术与工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "功能材料"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "纳米材料与技术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "新能源材料与器件"
            ),

        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "能源动力类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "能源与动力工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "能源与环境系统工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "新能源科学与工程"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "电气类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "电气工程及其自动化"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "智能电网信息工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "光源与照明"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "电气工程与智能控制"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "电子信息类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "电子信息工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "电子科学与技术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "通信工程"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "微电子科学与工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "光电信息科学与工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "信息工程"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "广播电视工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "水声工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "电子封装技术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "集成电路设计与集成系统"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "医学信息工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "电磁场与无线技术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "电波传播与天线"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "电子信息科学与技术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "电信工程及管理"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "应用电子技术教育"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "自动化类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "自动化"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "轨道交通信号与控制"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "计算机类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "计算机科学与技术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "软件工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "网络工程"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "信息安全"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "物联网工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "数字媒体技术"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "智能科学与技术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "空间信息与数字技术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "电子与计算机工程"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "土木类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "土木工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "建筑环境与能源应用工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "给排水科学与工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "建筑电气与智能化"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "道路桥梁与渡河工程"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "水利类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "水利水电工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "水文与水资源工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "港口航道与海岸工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "水务工程"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "测绘类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "测绘工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "遥感科学与技术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "导航工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "地理国情监测"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "化工与制药类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "化学工程与工艺"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "制药工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "资源循环科学与工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "能源化学工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "化学工程与工业生物工程"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "地质类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "地质工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "勘查技术与工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "资源勘查工程"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "地下水科学与工程"
            ),

        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "矿业类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "采矿工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "石油工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "矿物加工工程"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "油气储运工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "矿物资源工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "海洋油气工程"
            ),

        ),


    ),
    array(
        "url" => array(),
        "label" => "工学2",
        array(
            "url" => array("route" => "/site/index"),
            "label" => "纺织类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "纺织工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "服装设计与工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "非织造材料与工程"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "服装设计与工艺教育"
            ),

        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "轻工类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "轻化工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "包装工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "印刷工程"
            ),

        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "交通运输类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "交通运输"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "交通工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "航海技术"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "轮机工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "飞行技术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "交通设备与控制工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "救助与打捞工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "船舶电子电气工程"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "海洋工程类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "船舶与海洋工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "海洋工程与技术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "海洋资源开发技术"
            ),

        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "航空航天类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "航空航天工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "飞行器设计与工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "飞行器制造工程"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "飞行器动力工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "飞行器环境与生命保障工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "飞行器质量与可靠性"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "飞行器适航技术"
            ),

        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "兵器类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "武器系统与工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "武器发射工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "探测制导与控制技术"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "弹药工程与爆炸技术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "特种能源技术与工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "装甲车辆工程"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "信息对抗技术"
            ),

        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "核工程类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "核工程与核技术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "辐射防护与核安全"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "工程物理"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "核化工与核燃料工程"
            ),

        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "农业工程类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "农业工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "农业机械化及其自动化"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "农业电气化"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "农业建筑环境与能源工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "农业水利工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "森林工程"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "木材科学与工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "林产化工"
            ),

        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "环境科学与工程类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "环境科学与工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "环境工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "环境科学"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "环境生态工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "环保设备工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "资源环境科学"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "水质科学与技术"
            ),

        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "生物医学工程类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "生物医学工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "假肢矫形工程"
            ),

        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "食品科学与工程类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "食品科学与工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "食品质量与安全"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "粮食工程"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "乳品工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "酿酒工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "葡萄与葡萄酒工程"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "食品营养与检验教育"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "烹饪与营养教育"
            ),

        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "建筑类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "建筑学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "风景园林"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "新能源科学与工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "历史建筑保护工程"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "安全科学与工程类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "安全工程"
            ),

        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "生物工程类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "生物工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "生物制药"
            ),

        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "公安技术类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "刑事科学技术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "消防工程"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "交通管理工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "安全防范工程"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "公安视听技术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "抢险救援指挥与技术"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "火灾勘查"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "网络安全与执法"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "核生化消防"
            ),

        ),

    ),
    array(
        "url" => array(),
        "label" => "农学",
        array(
            "url" => array("route" => "/site/index"),
            "label" => "植物生产类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "农学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "园艺"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "植物保护"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "植物科学与技术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "种子科学与工程"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "设施农业科学与工程"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "茶学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "烟草"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "应用生物科学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "农艺教育"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "园艺教育"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "自然保护与环境生态类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "农业资源与环境"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "野生动物与自然保护区管理"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "水土保持与荒漠化防治"
            ),

        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "动物生产类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "动物科学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "蚕学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "蜂学"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "动物医学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "动物医学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "动物药学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "动植物检疫"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "林学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "林学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "园林"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "森林保护"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "水产类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "水产养殖学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "海洋渔业科学与技术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "水族科学与技术"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "草学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "草业科学"
            ),
        ),

    ),
    /**************/

    array(
        "url" => array(),
        "label" => "医学",
        array(
            "url" => array("route" => "/site/index"),
            "label" => "基础医学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "基础医学"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "临床医学类",
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "临床医学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "麻醉学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "医学影像学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "眼视光医学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "精神医学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "放射医学"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "口腔医学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "口腔医学"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "公共卫生与预防医学类",
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "预防医学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "食品卫生与营养学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "妇幼保健医学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "卫生监督"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "全球健康学"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "中医学类",
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "中医学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "针灸推拿学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "藏医学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "蒙医学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "维医学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "壮医学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "哈医学"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "中西医结合类",
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "中西医临床医学"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "药学类",
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "药学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "药物制剂"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "临床药学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "药事管理"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "药物分析"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "药物化学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "海洋药学"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "中药学类",
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "中药学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "中药资源与开发"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "藏药学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "蒙药学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "中药制药"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "中草药栽培与鉴定"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "法医学类",
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "法医学"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "医学技术类",
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "医学检验技术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "医学实验技术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "医学影像技术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "眼视光学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "康复治疗学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "口腔医学技术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "卫生检验与检疫"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "听力与言语康复学"
            ),
        ),


    ),
    /************/

    array(
        "url" => array(),
        "label" => "经济学",
        array(
            "url" => array("route" => "/site/index"),
            "label" => "经济学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "经济学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "经济统计学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "国民经济管理"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "资源与环境经济学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "商务经济学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "能源经济"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "财政学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "财政学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "税收学"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "金融学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "金融学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "金融工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "保险学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "投资学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "金融数学"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "信用管理"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "经济与金融"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "经济与贸易类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "国际经济与贸易"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "贸易经济"
            ),
        ),
    ),
    array(
        "url" => array(),
        "label" => "管理学",
        array(
            "url" => array("route" => "/site/index"),
            "label" => "管理科学与工程类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "管理科学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "信息管理与信息系统"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "工程管理"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "房地产开发与管理"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "工程造价"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "保密管理"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "工商管理类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "工商管理"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "市场营销"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "会计学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "财务管理"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "国际商务"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "人力资源管理"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "审计学 "
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "资产评估"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "物业管理"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "文化产业管理"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "劳动关系"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "体育经济与管理"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "财务会计教育"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "市场营销教育"
            ),

        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "农业经济管理类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "农林经济管理"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "农村区域发展"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "公共管理类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "公共事业管理"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "行政管理"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "劳动与社会保障"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "土地资源管理"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "城市管理"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "海关管理"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "交通管理"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "海事管理"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "公共关系学"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "图书情报与档案管理类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "图书馆学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "档案学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "信息资源管理"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "物流管理与工程类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "物流管理"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "采购管理"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "工业工程类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "工业工程"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "采购管理"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "电子商务类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "电子商务"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "电子商务及法律"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "旅游管理类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "旅游管理"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "酒店管理"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "会展经济与管理"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "旅游管理与服务教育"
            ),
        ),

    ),
//*****************************

//*****************************


//********


    array(
        "url" => array(),
        "label" => "文学",
        array(
            "url" => array("route" => "/site/index"),
            "label" => "中国语言文学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "汉语言文学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "汉语言"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "汉语国际教育"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "中国少数民族语言文学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "古典文献学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "应用语言学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "秘书学"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "外国语言文学类1",
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "翻译"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "商务英语"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "英语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "俄语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "德语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "法语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "西班牙语"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "阿拉伯语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "日语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "波斯语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "朝鲜语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "菲律宾语"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "梵语巴利语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "印度尼西亚语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "印地语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "柬埔寨语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "老挝语"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "缅甸语"
            ),

        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "外国语言文学类2",
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "马来语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "蒙古语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "僧伽罗语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "泰语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "乌尔都语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "希伯来语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "越南语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "豪萨语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "斯瓦希里语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "阿尔巴尼亚语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "保加利亚语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "波兰语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "捷克语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "斯洛伐克语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "罗马尼亚语"
            ),

        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "外国语言文学类3",
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "葡萄牙语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "瑞典语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "塞尔维亚语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "土耳其语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "希腊语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "匈牙利语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "意大利语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "泰米尔语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "普什图语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "世界语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "孟加拉语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "尼泊尔语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "克罗地亚语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "荷兰语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "芬兰语"
            ),

        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "外国语言文学类4",
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "乌克兰语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "挪威语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "丹麦语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "冰岛语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "爱尔兰语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "拉脱维亚语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "立陶宛语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "斯洛文尼亚语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "爱沙尼亚语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "马耳他语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "哈萨克语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "乌兹别克语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "祖鲁语"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "拉丁语"
            ),


        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "新闻传播学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "新闻学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "广播电视学 "
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "广告学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "传播学 "
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "编辑出版学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "网络与新媒体 "
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "数字出版 "
            ),
        ),
    ),
//*****************************


    array(
        "url" => array(),
        "label" => "艺术学",
        array(
            "url" => array("route" => "/site/index"),
            "label" => "艺术学理论类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "艺术史论"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "音乐与舞蹈学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "音乐表演"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "音乐学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "作曲与作曲技术理论"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "舞蹈表演"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "舞蹈学"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "舞蹈编导"
            ),

        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "戏剧与影视学类",
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "表演"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "戏剧学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "电影学"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "戏剧影视文学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "广播电视编导"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "戏剧影视导演"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "戏剧影视美术设计"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "录音艺术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "播音与主持艺术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "动画"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "影视摄影与制作"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "美术学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "美术学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "绘画"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "雕塑"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "摄影"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "书法学"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "中国画"
            ),

        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "设计学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "艺术设计学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "视觉传达设计"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "环境设计"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "产品设计"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "服装与服饰设计"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "公共艺术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "工艺美术"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "数字媒体艺术"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "艺术与科技"
            ),

        ),

    ),
//**********************************


    array(
        "url" => array(),
        "label" => "教育学",
        array(
            "url" => array("route" => "/site/index"),
            "label" => "教育学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "教育学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "科学教育"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "人文教育"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "教育技术学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "艺术教育"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "学前教育"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "小学教育"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "艺特殊教育"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "华文教育"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "体育学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "体育教育"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "运动训练"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "社会体育指导与管理"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "武术与民族传统体育"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "运动人体科学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "运动康复"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "休闲体育"
            ),

        ),
    ),
//********************

    array(
        "url" => array(),
        "label" => "法学",
        array(
            "url" => array("route" => "/site/index"),
            "label" => "法学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "法学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "知识产权"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "监狱学"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "政治学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "政治学与行政学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "国际政治 "
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "外交学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "国际事务与国际关系"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "政治学、经济学与哲学"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "社会学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "社会学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "社会工作"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "人类学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "女性学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "家政学"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "民族学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "民族学"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "马克思主义理论类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "科学社会主义"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "中国共产党历史"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "思想政治教育"
            ),
        ),
        array(
            "url" => array("route" => "/site/index"),
            "label" => "公安学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "治安学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "侦查学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "边防管理"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "禁毒学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "警犬技术"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "经济犯罪侦查"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "边防指挥"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "消防指挥"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "警卫学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "公安情报学"
            ),
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "犯罪学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "公安管理学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "涉外警务"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "国内安全保卫"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "警务指挥与战术"
            ),
        ),

    ),
//********************


    array(
        "url" => array(),
        "label" => "哲学",
        array(
            "url" => array("route" => "/site/index"),
            "label" => "哲学类",
            array(
                "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                "label" => "哲学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title")
                ),
                "label" => "逻辑学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "宗教学"
            ),
            array(
                "url" => array(
                    "route" => "/product/show",
                    "params" => array("id" => 3),
                    "htmlOptions" => array("title" => "title"),
                ),
                "label" => "伦理学"
            ),

        ),
    )

);
?>