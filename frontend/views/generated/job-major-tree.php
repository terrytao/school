
<?


?>
<div id="demo_menu">
    <ul>

        <?
        foreach ($majorCategories as $majorCategory) {


            ?>

            <li><? echo $majorCategory->major_category; ?>
                <?
                $majorSubCategories = Major::find()->where(['major_category' =>
                    $majorCategory->major_category])->groupBy('major_sub_category')->all();
                print_r($majorSubCategories);die;
                ?>


                <ul>
                    <? foreach ($majorSubCategories as $majorSubCategory) {
                        ?>
                        <li>

                            

                            <?
                            $majorSubSubCategories = Major::find()->where(['major_sub_category' => $majorSubCategory->major_sub_category])->all();
                            ?>


                            <ul>
                                <?

                                foreach ($majorSubSubCategories as $majorSubSubCategory) { ?>
                                    <li><? echo $majorSubSubCategory->major_name; ?></li>
                                    <?
                                }
                                ?>
                            </ul>
                        </li>

                        <?
                    } ?>

                </ul>
            </li>


        <? }

        ?>

    </ul>
</div>


<script>
    $('#demo_menu').easytree();
</script>
