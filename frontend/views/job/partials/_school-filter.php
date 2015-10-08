<?php
use yii\helpers\Html;

?>


<div class="col-sm-12">

    <div class="row">
        <div class="col-md-5">

            <input type="radio" id="allProvinces" name="allProvinces" class="" value="all"/> 全部省份
            <input type="radio" id="" name="quality[]" class="filterProvince" value="北京"/> 北京
            <input type="radio" id="" name="quality[]" class="filterProvince" value="上海"/> 上海

            <input type="radio" id="" name="quality[]" class="filterProvince" value="广东"/> 广东

            <input type="radio" id="" name="quality[]" class="filterProvince" value="天津"/> 天津

            <input type="radio" id="" name="quality[]" class="filterProvince" value="重庆"/> 重庆
            <P></P>

            <input type="radio" id="" name="quality[]" class="filterProvince" value="江苏"/> 江苏


            <input type="radio" id="" name="quality[]" class="filterProvince" value="浙江"/> 浙江


            <input type="radio" id="" name="quality[]" class="filterProvince" value="安徽"/> 安徽
            <input type="radio" id="" name="quality[]" class="filterProvince" value="福建"/> 福建


            <input type="radio" id="" name="quality[]" class="filterProvince" value="江西"/> 江西

            <input type="radio" id="" name="quality[]" class="filterProvince" value="山东"/> 山东
            <P></P>
            <input type="radio" id="" name="quality[]" class="filterProvince" value="河南"/> 河南


            <input type="radio" id="" name="quality[]" class="filterProvince" value="湖北"/> 湖北


            <input type="radio" id="" name="quality[]" class="filterProvince" value="湖南"/> 湖南


            <input type="radio" id="" name="quality[]" class="filterProvince" value="广西"/> 广西


            <input type="radio" id="" name="quality[]" class="filterProvince" value="海南"/> 海南
            <p></p>
            <input type="radio" id="" name="quality[]" class="filterProvince" value="河北"/> 河北


            <input type="radio" id="" name="quality[]" class="filterProvince" value="山西"/> 山西


            <input type="radio" id="" name="quality[]" class="filterProvince" value="内蒙"/> 内蒙


            <input type="radio" id="" name="quality[]" class="filterProvince" value="辽宁"/> 辽宁


            <input type="radio" id="" name="quality[]" class="filterProvince" value="吉林"/> 吉林


            <input type="radio" id="" name="quality[]" class="filterProvince" value="黑龙江"/> 黑龙江
            <P></P>
            <input type="radio" id="" name="quality[]" class="filterProvince" value="四川"/> 四川


            <input type="radio" id="" name="quality[]" class="filterProvince" value="贵州"/> 贵州


            <input type="radio" id="" name="quality[]" class="filterProvince" value="云南"/> 云南


            <input type="radio" id="" name="quality[]" class="filterProvince" value="西藏"/> 西藏


            <input type="radio" id="" name="quality[]" class="filterProvince" value="甘肃"/> 甘肃


            <input type="radio" id="" name="quality[]" class="filterProvince" value="青海"/> 青海


            <input type="radio" id="" name="quality[]" class="filterProvince" value="宁夏"/> 宁夏


            <input type="radio" id="" name="quality[]" class="filterProvince" value="新疆"/> 新疆


        </div>
        <div class="col-md-3">

            <div class="checkbox">



                <label class="">
                    <input type="checkbox" id="" name="schoolLevels[]" class="ace input-lg filterSchoolLevel"
                           value="普通院校"/>
                    <span class="lbl bigger-120">  普通院校&nbsp</span>
                </label>
                <label class="">
                    <input type="checkbox" id="" name="schoolLevels[]" class="ace input-lg filterSchoolLevel"
                           value="高职高专"/>
                    <span class="lbl bigger-120"> 高职高专&nbsp</span>
                </label>
                <P></P>
                <label class="">
                    <input type="checkbox" id="" name="schoolLevels[]"  class="ace input-lg filterSchoolLevel" value="独立学院"/>
                    <span class="lbl bigger-120"> 独立学院&nbsp</span>
                </label>
                <label class="">
                    <input type="checkbox" id="" name="schoolLevels[]"
                           class="ace input-lg filterSchoolLevel" value="高校分校"/>
                    <span class="lbl bigger-120"> 高校分校 &nbsp</span>
                </label>
                <P></P>
                <label class="">

                    <input type="checkbox" id="" name="schoolLevels[]"
                           class="ace input-lg filterSchoolLevel" value="短期职大"/>
                    <span class="lbl bigger-120"> 短期职大&nbsp</span>
                </label>

                <label class="">
                    <input type="checkbox" id="" name="schoolLevels[]"
                           class="ace input-lg filterSchoolLevel" value="成人高校"/>
                    <span class="lbl bigger-120"> 成人高校&nbsp</span>
                </label>
                <P></P>
                <label class="">

                    <input type="checkbox" id="" name="schoolLevels[]"
                           class="ace input-lg filterSchoolLevel" value="干管学院"/>
                    <span class="lbl bigger-120"> 干管学院&nbsp</span>
                </label>
                <label class="">
                    <input name="is985"
                           id="isNineEightFive"
                           type="checkbox" class="ace input-lg">
                    <span class="lbl bigger-120"> 985</span>
                </label>

                <label class="">
                    <input name="is211" id="isTwoEleven" type="checkbox" class="ace input-lg">
                    <span class="lbl bigger-120"> 211</span>
                </label>




            </div>
        </div>
        <div class="col-md-4">
            <div class="checkbox">

                <label class="">
                    <input type="checkbox" id="" name="schoolType[]" class="ace input-lg filterSchoolType"
                           value="综合"/>
                    <span class="lbl bigger-120">综合&nbsp</span>
                </label>
                <label class="">
                    <input type="checkbox" id="" name="schoolType[]" class="ace input-lg filterSchoolType"
                           value="理工"/>
                    <span class="lbl bigger-120">理工&nbsp</span>
                </label>

                <label class="">
                    <input type="checkbox" id="" name="schoolType[]"
                           class="ace input-lg filterSchoolType" value="财经"/>
                    <span class="lbl bigger-120">财经&nbsp</span>
                </label>
                <P></P>
                <label class="">
                    <input type="checkbox" id="" name="schoolType[]" class="ace input-lg filterSchoolType"
                           value="医药"/>
                    <span class="lbl bigger-120">医药&nbsp</span>
                </label>
                <label class="">
                    <input type="checkbox" id="" name="schoolType[]"
                           class="ace input-lg filterSchoolType" value="农林"/>
                    <span class="lbl bigger-120">农林&nbsp</span>
                </label>
                <label class="">
                    <input type="checkbox" id="" name="schoolType[]"
                           class="ace input-lg filterSchoolType" value="师范 "/>
                    <span class="lbl bigger-120">师范&nbsp</span>
                </label>
                <P></P>
                <label class="">

                    <input type="checkbox" id="" name="schoolType[]"
                           class="ace input-lg filterSchoolType" value="语言"/>
                    <span class="lbl bigger-120">语言&nbsp</span>
                </label>

                <label class="">

                    <input type="checkbox" id="" name="schoolType[]"
                           class="ace input-lg filterSchoolType" value="政法"/>
                    <span class="lbl bigger-120">政法&nbsp</span>
                </label>


                <label class="">
                    <input type="checkbox" id="" name="schoolType[]"
                           class="ace input-lg filterSchoolType" value="体育"/>
                    <span class="lbl bigger-120">体育&nbsp</span>
                </label>
                <P></P>
                <label class="">

                    <input type="checkbox" id="" name="schoolType[]"
                           class="ace input-lg filterSchoolType" value="艺术"/>
                    <span class="lbl bigger-120">艺术&nbsp</span>
                </label>


                <label class="">
                    <input type="checkbox" id="" name="schoolType[]"
                           class="ace input-lg filterSchoolType"
                           value="民族"/>
                    <span class="lbl bigger-120">民族&nbsp</span>
                </label>

                <label class="">
                    <input type="checkbox" id="" name="schoolType[]"
                           class="ace input-lg filterSchoolType"
                           value="军事"/>
                    <span class="lbl bigger-120">军事&nbsp</span>
                </label>


            </div>
        </div>

    </div>

    <!--
    <div class="widget-box widget-color-blue2">
        <div class="widget-header">
            <h4 class="widget-title lighter smaller">School Filters 筛选学校</h4> &nbsp&nbsp&nbsp&nbsp
            <?= Html::a('Clear Filters 清空筛选', '#clearFilters', ['class' => 'btn btn-danger', 'id' => 'clearFilters']); ?>
        </div>
        <div class="widget-body">
            <div class="control-group">


            </div>
            <div class="widget-main padding-8">


                <div class="control-group">


                    <div class="checkbox">

                        <label class="">
                            <input name="is985"
                                   id="isNineEightFive"
                                   type="checkbox" class="ace input-lg">
                            <span class="lbl bigger-120"> 985</span>
                        </label>

                        <label class="">
                            <input name="is211" id="isTwoEleven" type="checkbox" class="ace input-lg">
                            <span class="lbl bigger-120"> 211</span>
                        </label>

                        <label class="">
                            <input type="checkbox" id="" name="schoolLevels[]" class="ace input-lg filterSchoolLevel"
                                   value="普通院校"/>
                            <span class="lbl bigger-120">  普通院校&nbsp</span>
                        </label>
                        <label class="">
                            <input type="checkbox" id="" name="schoolLevels[]" class="ace input-lg filterSchoolLevel"
                                   value="高职高专"/>
                            <span class="lbl bigger-120"> 高职高专&nbsp</span>
                        </label>
                        <label class="">                            <input type="checkbox" id="" name="schoolLevels[]"
                                   class="ace input-lg filterSchoolLevel" value="独立学院"/>
                            <span class="lbl bigger-120"> 独立学院  &nbsp</span>
                        </label>
                        <label class="">
                            <input type="checkbox" id="" name="schoolLevels[]"
                                   class="ace input-lg filterSchoolLevel" value="高校分校"/>
                            <span class="lbl bigger-120"> 高校分校 &nbsp</span>
                        </label>
                        <label class="">

                            <input type="checkbox" id="" name="schoolLevels[]"
                                   class="ace input-lg filterSchoolLevel" value="短期职大"/>
                            <span class="lbl bigger-120"> 短期职大&nbsp</span>
                        </label>

                        <label class="">
                            <input type="checkbox" id="" name="schoolLevels[]"
                                   class="ace input-lg filterSchoolLevel" value="成人高校"/>
                            <span class="lbl bigger-120"> 成人高校&nbsp</span>
                        </label>
                        <label class="">

                            <input type="checkbox" id="" name="schoolLevels[]"
                                   class="ace input-lg filterSchoolLevel" value="干管学院"/>
                            <span class="lbl bigger-120"> 干管学院&nbsp</span>
                        </label>



                    </div>


                    <div class="checkbox">

                        <label class="">
                            <input type="checkbox" id="" name="schoolType[]" class="ace input-lg filterSchoolType"
                                   value="综合"/>
                            <span class="lbl bigger-120">综合&nbsp</span>
                        </label>
                        <label class="">
                            <input type="checkbox" id="" name="schoolType[]" class="ace input-lg filterSchoolType"
                                   value="理工"/>
                            <span class="lbl bigger-120">理工&nbsp</span>
                        </label>

                        <label class="">
                            <input type="checkbox" id="" name="schoolType[]"
                                   class="ace input-lg filterSchoolType" value="财经"/>
                            <span class="lbl bigger-120">财经&nbsp</span>
                        </label>
                        <label class="">
                            <input type="checkbox" id="" name="schoolType[]" class="ace input-lg filterSchoolType"
                                   value="医药"/>
                            <span class="lbl bigger-120">医药&nbsp</span>
                        </label>
                        <label class="">
                            <input type="checkbox" id="" name="schoolType[]"
                                   class="ace input-lg filterSchoolType" value="农林"/>
                            <span class="lbl bigger-120">农林&nbsp</span>
                        </label>
                        <label class="">
                            <input type="checkbox" id="" name="schoolType[]"
                                   class="ace input-lg filterSchoolType" value="师范 "/>
                            <span class="lbl bigger-120">师范&nbsp</span>
                        </label>
                        <label class="">

                            <input type="checkbox" id="" name="schoolType[]"
                                   class="ace input-lg filterSchoolType" value="语言"/>
                            <span class="lbl bigger-120">语言&nbsp</span>
                        </label>

                        <label class="">

                            <input type="checkbox" id="" name="schoolType[]"
                                   class="ace input-lg filterSchoolType" value="政法"/>
                            <span class="lbl bigger-120">政法&nbsp</span>
                        </label>


                        <label class="">
                            <input type="checkbox" id="" name="schoolType[]"
                                   class="ace input-lg filterSchoolType" value="体育"/>
                            <span class="lbl bigger-120">体育&nbsp</span>
                        </label>
                        <label class="">

                            <input type="checkbox" id="" name="schoolType[]"
                                   class="ace input-lg filterSchoolType" value="艺术"/>
                            <span class="lbl bigger-120">艺术&nbsp</span>
                        </label>


                        <label class="">
                            <input type="checkbox" id="" name="schoolType[]"
                                   class="ace input-lg filterSchoolType"
                                   value="民族"/>
                            <span class="lbl bigger-120">民族&nbsp</span>
                        </label>

                        <label class="">
                            <input type="checkbox" id="" name="schoolType[]"
                                   class="ace input-lg filterSchoolType"
                                   value="军事"/>
                            <span class="lbl bigger-120">军事&nbsp</span>
                        </label>


                    </div>

                    <div class="checkbox">








                    </div>


                <div>
                    <input type="radio" id="allProvinces" name="allProvinces" class="" value="all"/> All Provinces 全部省份&nbsp&nbsp&nbsp&nbsp


                    <input type="radio" id="" name="quality[]" class="filterProvince" value="北京"/> 北京
                    <input type="radio" id="" name="quality[]" class="filterProvince" value="上海"/> 上海

                    <input type="radio" id="" name="quality[]" class="filterProvince" value="广东"/> 广东

                    <input type="radio" id="" name="quality[]" class="filterProvince" value="天津"/> 天津

                    <input type="radio" id="" name="quality[]" class="filterProvince" value="重庆"/> 重庆&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


                    <input type="radio" id="" name="quality[]" class="filterProvince" value="江苏"/> 江苏


                    <input type="radio" id="" name="quality[]" class="filterProvince" value="浙江"/> 浙江


                    <input type="radio" id="" name="quality[]" class="filterProvince" value="安徽"/> 安徽
                    <input type="radio" id="" name="quality[]" class="filterProvince" value="福建"/> 福建


                    <input type="radio" id="" name="quality[]" class="filterProvince" value="江西"/> 江西

                    <input type="radio" id="" name="quality[]" class="filterProvince" value="山东"/> 山东&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


                    <input type="radio" id="" name="quality[]" class="filterProvince" value="河南"/> 河南


                    <input type="radio" id="" name="quality[]" class="filterProvince" value="湖北"/> 湖北


                    <input type="radio" id="" name="quality[]" class="filterProvince" value="湖南"/> 湖南


                    <input type="radio" id="" name="quality[]" class="filterProvince" value="广西"/> 广西


                    <input type="radio" id="" name="quality[]" class="filterProvince" value="海南"/> 海南&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


                    <input type="radio" id="" name="quality[]" class="filterProvince" value="河北"/> 河北


                    <input type="radio" id="" name="quality[]" class="filterProvince" value="山西"/> 山西


                    <input type="radio" id="" name="quality[]" class="filterProvince" value="内蒙"/> 内蒙


                    <input type="radio" id="" name="quality[]" class="filterProvince" value="辽宁"/> 辽宁


                    <input type="radio" id="" name="quality[]" class="filterProvince" value="吉林"/> 吉林


                    <input type="radio" id="" name="quality[]" class="filterProvince" value="黑龙江"/> 黑龙江&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


                    <input type="radio" id="" name="quality[]" class="filterProvince" value="四川"/> 四川


                    <input type="radio" id="" name="quality[]" class="filterProvince" value="贵州"/> 贵州


                    <input type="radio" id="" name="quality[]" class="filterProvince" value="云南"/> 云南


                    <input type="radio" id="" name="quality[]" class="filterProvince" value="西藏"/> 西藏


                    <input type="radio" id="" name="quality[]" class="filterProvince" value="甘肃"/> 甘肃


                    <input type="radio" id="" name="quality[]" class="filterProvince" value="青海"/> 青海


                    <input type="radio" id="" name="quality[]" class="filterProvince" value="宁夏"/> 宁夏


                    <input type="radio" id="" name="quality[]" class="filterProvince" value="新疆"/> 新疆

                 </div>




                </div>


            </div>


        </div>
    </div>
    */
    -->
</div>
