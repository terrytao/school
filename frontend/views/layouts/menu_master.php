<?php
/**
 * Created by PhpStorm.
 * User: terrytao
 * Date: 6/17/15
 * Time: 6:49 AM
 */
use  host33\multilevelhorizontalmenu\MultilevelHorizontalMenu;

echo MultilevelHorizontalMenu::widget
(
    array(
        "menu" => array(
            array(
                "url" => array(),
                "label" => "专科专业",
            ),
            array(
                "url" => array(),
                "label" => "农林牧渔",
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "农业技术",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "作物生产技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "种子生产与经营"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "设施农业技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "观光农业"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "园艺技术"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "茶叶生产加工技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "中草药栽培技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "烟草栽培技术"
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
                        "label" => "植物检疫"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "农产品质量检测"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "林业技术",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "林业技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "园林技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "森林资源保护"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "野生植物资源开发与利用"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "野生动物保护"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "自然保护区建设与管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "森林生态旅游"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "林产化工技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "木材加工技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "森林采运工程"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "畜牧兽医类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "畜牧兽医"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "畜牧"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "饲料与动物营养"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "特种动物养殖"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "兽医"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "兽医医药"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "动物防疫与检疫"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "兽药生产与营销"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "水产养殖类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "水产养殖技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "水生动植物保护"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "海洋捕捞技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "渔业综合技术"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "农林管理类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "农业经济管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "农村行政管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "乡镇企业管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "林业经济信息管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "渔业资源与渔政管理"
                    ),
                ),
            ),
            array(
                "url" => array(),
                "label" => "交通运输",
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "公路运输类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "公路运输与管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "高等级公路维护与管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "路政管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "汽车运用技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "交通安全与智能控制"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "城市交通运输"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "公路监理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "道路桥梁工程技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "工程机械控制技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "工程机械运用与维护"
                    ),

                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "铁道运输类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "高速铁道技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "电气化铁道技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "铁道车辆"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "铁道机车车辆"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "铁道通信信号"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "铁道交通运营管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "铁道运输经济"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "铁道工程技术"
                    ),

                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "城市轨道运输类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "城市轨道交通车辆"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "城市轨道交通控制"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "城市轨道交通工程技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "城市轨道交通运营管理"
                    ),

                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "水上运输类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "航海技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "水运管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "国际航运业务管理"
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
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "轮机工程技术"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "船舶工程技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "船舶检验"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "航道工程技术"
                    ),

                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "民航运输类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "民航运输"
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
                        "label" => "空中乘务"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "航空服务"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "民航商务"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "航空机电设备维修"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "航空电子设备维修"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "民航特种车辆维修"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "航空通信技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "空中交通管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "民航安全技术管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "航空油料管理和应用"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "飞机制造技术"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "港口运输类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "港口业务管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "港口物流设备与自动控制"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "集装箱运输管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "港口工程技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "报关与国际货运"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "管道运输类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "管道工程技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "管道工程施工"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "管道运输管理"
                    ),
                ),


            ),
            array(
                "url" => array(),
                "label" => "生化与药品",
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "生物技术类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "生物技术及应用"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "生物实验技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "生物化工工艺"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "微生物技术及应用"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "化工技术类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "应用化工技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "有机化工生产技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "高聚物生产技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "化纤生产技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "精细化学品生产技术"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "石油化工生产技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "炼油技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "工业分析与检验"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "化工设备维修技术"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "制药技术类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "生化制药技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "生物制药技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "化学制药技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "中药制药技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "药物制剂技术"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "药物分析技术"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "食品药品管理类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "食品药品监督管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "药品质量检测技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "药品经营与管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "保健品开发与管理"
                    ),
                ),
            ),
            array(
                "url" => array(),
                "label" => "资源开发与测绘",
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "资源勘查类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "国土资源调查"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "区域地质调查及矿产普查"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "煤田地质与勘查技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "油气地质与勘查技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "水文地质与勘查技术"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "金属矿产地质与勘查技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "铀矿地质与勘查技术 "
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "非金属矿产地质与勘查技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "岩矿分析与鉴定技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "宝玉石鉴定与加工技术"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "地质工程与技术类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "矿山地质"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "工程地质勘查"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "水文与工程地质"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "钻探技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "地球物理勘查技术"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "地球物理测井技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "地球化学勘查技术 "
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "矿业工程类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "煤矿开采技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "金属矿开采技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "非金属矿开采技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "固体矿床露天开采技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "沙矿床开采技术"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "矿井建设"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "矿山机电"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "矿井通风与安全"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "矿井运输与提升"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "石油与天然气类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "钻井技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "油气开采技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "油气储运技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "油气藏分析技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "油田化学应用技术"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "石油与天然气地质勘探技术"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "矿物加工类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "矿物加工技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "选矿技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "选煤技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "煤炭深加工与利用"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "煤质分析技术"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "选矿机电技术"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "测绘类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "工程测量技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "工程测量与监理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "摄影测量与遥感技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "大地测量与卫星定位技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "地理信息系统与地图制图技术"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "地籍测绘与土地管理信息技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "矿山测量"
                    ),
                ),

            ),
            //*****************************
            array(
                "url" => array(),
                "label" => "材料与能源",
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "材料类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "金属材料与热处理技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "冶金技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "高分子材料应用技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "复合材料加工与应用技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "材料工程技术"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "建筑装饰材料及检测"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "能源类",
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "热能动力设备与应用"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "城市热能应用技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "农村能源与环境技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "制冷与冷藏技术"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "电力技术类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "发电厂及电力系统"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "电厂设备运行与维护"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "电厂热能动力装置"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "火电厂集控运行"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "小型水电站及电力网"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "供用电技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "电网监控技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "电力系统继电保护与自动化"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "高压输配电线路施工运行与维护"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "农村电气化技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "农产品质量检测"
                    ),
                ),


            ),
            //*****************************

            array(
                "url" => array(),
                "label" => "土建",
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "建筑设计类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "建筑设计技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "建筑装饰工程技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "中国古建筑工程技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "室内设计技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "环境艺术设计"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "园林工程技术"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "城镇规划与管理类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "城镇规划"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "城市管理与监察"
                    ),

                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "土建施工类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "建筑工程技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "地下工程与隧道工程技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "基础工程技术"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "建筑设备类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "建筑设备工程技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "供热通风与空调工程技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "建筑电气工程技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "楼宇智能化工程技术"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "工程管理类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "建筑工程管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "工程造价"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "建筑经济管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "工程监理"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "市政工程类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "市政工程技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "城市燃气工程技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "给排水工程技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "水工业技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "消防工程技术"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "房地产类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "房地产经营与估价"
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
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "物业设施管理"
                    ),
                ),

            ),
            //********


            array(
                "url" => array(),
                "label" => "水利",
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "水文与水资源类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "水文与水资源"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "水文自动化测报技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "水信息技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "水政水资源管理"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "水利工程与管理类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "水利工程"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "水利工程施工技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "水利水电建筑工程"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "灌溉与排水技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "港口航道与治河工程"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "河务工程与管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "城市水利"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "水利水电工程管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "水务管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "水利工程监理"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "水利水电设备类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "水电站动力设备与管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "机电设备运行与维护"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "机电排灌设备与管理"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "水土保持与水环境类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "水土保持"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "水环境监测与分析 "
                    ),
                ),
            ),
            //*****************************


            array(
                "url" => array(),
                "label" => "制造",
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "机械设计制造类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "机械设计与制造"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "机械制造与自动化"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "数控技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "电机与电器"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "玩具设计与制造"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "模具设计与制造"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "材料成型与控制技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "焊接技术及自动化"
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
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "计算机辅助设计与制造"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "精密机械技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "医疗器械制造与维护"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "自动化类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "机电一体化技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "电气自动化技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "生产过程自动化技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "电力系统自动化技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "计算机控制技术"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "工业网络技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "检测技术及应用"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "理化测试及质检技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "液压与气动技术"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "机电设备类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "机电设备维修与管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "数控设备应用与维护"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "自动化生产设备应用"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "医用电子仪器与维护"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "医学影像设备管理与维护"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "汽车类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "汽车制造与装配技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "汽车检测与维修技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "汽车电子技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "汽车改装技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "汽车技术服务与营销"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "汽车整形技术"
                    ),

                ),

            ),
            //**********************************


            array(
                "url" => array(),
                "label" => "旅游",
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
                        "label" => "涉外旅游"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "导游"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "旅行社经营管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "景区开发与管理"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "酒店管理"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "餐饮管理与服务类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "餐饮管理与服务"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "烹饪工艺与营养"
                    ),

                ),
            ),
            //********************

            array(
                "url" => array(),
                "label" => "电子信息",
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "计算机类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "计算机应用技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "计算机网络技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "计算机多媒体技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "计算机系统维护"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "计算机硬件与外设"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "计算机信息管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "网络系统管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "软件技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "图形图像制作"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "动漫设计与制作"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "电子信息类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "电子信息工程技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "应用电子技术 "
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "电子测量技术与仪器"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "电子仪器仪表与维修"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "电子设备与运行管理"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "电子声像技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "电子工艺与管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "信息安全技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "图文信息技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "微电子技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "无线电技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "广播电视网络技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "有线电视工程技术"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "通信类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "通信技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "移动通信技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "计算机通信"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "程控交换技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "通信网络与设备"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "通信系统运行管理"
                    ),
                ),

            ),
            //********************


            array(
                "url" => array(),
                "label" => "环保气象与安全",
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "环保类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "环境监测与治理技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "环境监测与评价"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "资源环境与城市管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "城市检测与工程技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "水环境监测与保护"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "城市水净化技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "室内检测与控制技术"
                    ),

                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "气象类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "大气科学技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "大气探测技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "应用气象技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "防雷技术"
                    ),

                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "安全类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "工业环保与安全技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "救援技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "安全技术管理"
                    ),
                ),
            ),
//******


            array(
                "url" => array(),
                "label" => "轻纺食品",
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "轻化工类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "染整技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "高分子材料加工技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "制浆造纸技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "香料香精工艺"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "表面精饰工艺"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "纺织服装类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "现代纺织技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "针织技术与针织服装"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "丝绸技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "服装设计"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "染织艺术设计"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "纺织品装饰艺术设计"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "新型纺织机电技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "纺织品检验与贸易"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "食品类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "食品加工技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "食品营养与检测"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "食品贮运与营销"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "食品机械与管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "食品生物技术"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "农畜特产品加工"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "粮食工程"
                    ),

                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "包装印刷类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "包装技术与设计"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "食品营养与检测"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "食品贮运与营销"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "食品机械与管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "食品生物技术"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "农畜特产品加工"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "粮食工程"
                    ),

                ),


            ),
            //***************


            array(
                "url" => array(),
                "label" => "财经",
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "财政金融类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "财政"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "税务"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "金融管理与实务"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "国际金融"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "金融与证券"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "金融保险"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "保险实务"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "医疗保险实务"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "资产评估与管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "证券投资与管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "投资与理财"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "证券与期货"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "财务会计类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "财务管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "财务信息管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "会计"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "会计电算化"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "会计与统计核算"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "会计与审计"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "审计实务"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "统计实务"
                    ),

                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "经济贸易类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "经济管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "经济信息管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "国际经济与贸易"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "国际贸易实务"
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
                        "label" => "商务经纪与代理"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "市场营销类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "市场营销"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "市场开发与营销"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "营销与策划"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "医药营销"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "电子商务"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "工商管理类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "工商企业管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "工商行政管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "商务管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "连锁经营管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "物流管理"
                    ),
                ),
            ),
            //*********

            array(
                "url" => array(),
                "label" => "医药卫生",
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "临床医学类",
                    array(
                        "url" => array("route" => "/schools/find-schools-by-major", "params" => array("majorId" => 1104),),
                        "label" => "临床医学"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "口腔医学"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "中医学"
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
                        "label" => "藏医学"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "维医学"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "中西医结合"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "针灸推拿"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "中医骨伤"
                    ),

                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "护理类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "护理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "助产"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "药学类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "药学"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "中药"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "医学技术类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "医学检验技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "医学生物技术"
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
                        "label" => "眼视光技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "康复治疗技术"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "口腔医学技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "医学营养"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "医疗美容技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "呼吸治疗技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "卫生检验与检疫技术"
                    ),

                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "卫生管理类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "卫生监督"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "卫生信息管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "公共卫生管理 "
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "医学文秘"
                    ),
                ),

            ),
            //********


            array(
                "url" => array(),
                "label" => "公共事业",
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "公共事业类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "社会工作"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "社区管理与服务"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "青少年工作与管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "社会福利事业管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "公共关系"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "商检技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "人民武装"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "涉外事务管理"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "公共管理类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "公共事务管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "民政管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "行政管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "人力资源管理"
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
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "国土资源管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "海关管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "环境规划与管理"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "公共服务类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "家政服务"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "老年服务与管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "社区康复"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "心理咨询"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "科技成果中介服务"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "职业中介服务"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "现代殡仪技术与管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "戒毒康复"
                    ),
                ),
            ),
            //******


            array(
                "url" => array(),
                "label" => "文化教育",
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "语言文化类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "汉语"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "应用英语"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "应用日语"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "应用俄语"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "应用德语"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "应用法语"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "应用韩语"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "商务英语"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "旅游英语"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "商务日语"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "旅游日语"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "文秘"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "文物鉴定与修复"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "文化事业管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "文化市场经营与管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "图书档案管理"
                    ),

                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "教育类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "语文教育"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "数学教育"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "英语教育"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "物理教育"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "化学教育"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "生物教育"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "历史教育"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "地理教育"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "音乐教育"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "美术教育"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "体育教育"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "思想政治教育"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "初等教育"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "学前教育"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "现代教育技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "特殊教育"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "儿童康复"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "人群康复"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "体育类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "竞技体育"
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
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "社会体育"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "体育保健"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "体育服务与管理"
                    ),
                ),
            ),
            //*****


            array(
                "url" => array(),
                "label" => "艺术设计传媒",
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "艺术设计类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "艺术设计"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "产品造型设计"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "视觉传达艺术设计"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "电脑艺术设计"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "人物形象设计"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "装潢艺术设计"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "装饰艺术设计"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "雕塑艺术设计"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "珠宝首饰工艺及鉴定"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "雕刻艺术与家具设计"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "旅游工艺品设计与制作"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "广告设计与制作"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "多媒体设计与制作"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "表演艺术类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "表演艺术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "音乐表演"
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
                        "label" => "服装表演"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "影视表演"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "戏曲表演"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "编导"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "广播影视类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "广播电视技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "摄影摄像技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "音像技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "影视多媒体技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "影视动画"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "影视广告"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "主持与播音"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "新闻采编与制作"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "电视节目制作"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "电视制片管理"
                    ),
                ),

            ),
//*****
            array(
                "url" => array(),
                "label" => "公安",
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "公安管理类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "侦查"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "经济犯罪侦查"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "安全保卫 "
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "警卫"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "治安管理"
                    ),
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "交通管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "警察管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "公共安全管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "信息网络安全监察"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "防火管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "森林消防"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "边防检查"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "边境管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "禁毒"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "公安指挥类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "警察指挥与战术"
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
                        "label" => "边防船艇指挥"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "边防通信指挥"
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
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "参谋业务"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "抢险救援"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "公安技术类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "刑事技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "警犬技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "船艇动力管理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "船艇技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "边防机要"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "部队基础工作类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "部队政治工作"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "部队财务会计"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "部队后勤管理"
                    ),
                ),
            ),
            //****
            array(
                "url" => array(),
                "label" => "法律",
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "法律实务类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "司法助理"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "法律文秘"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "司法警务"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "法律事务"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "书记官"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "法律执行类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "刑事执行"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "民事执行"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "行政执行"
                    ),
                ),
                array(
                    "url" => array("route" => "/site/index"),
                    "label" => "司法技术类",
                    array(
                        "url" => array("route" => "/school/searchschool", "params" => array("school_id" => 3),),
                        "label" => "刑事侦查技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title")
                        ),
                        "label" => "司法鉴定技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "安全防范技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "司法信息技术"
                    ),
                    array(
                        "url" => array(
                            "route" => "/product/show",
                            "params" => array("id" => 3),
                            "htmlOptions" => array("title" => "title"),
                        ),
                        "label" => "司法信息安全"
                    ),
                ),

            ),

            //****

        ),
    )
);
