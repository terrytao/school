<?
/**
 * @var $schoolMajor frontend\models\School
 * @var $request yii\web\Request
 */

//this is to test treeview school list
use yii\helpers\Html; ?>



        <thead>
        <tr>
            <th>School Name</th>
            <th>Province</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?


        foreach ($schoolMajor as $v) {
            ?>

            <? foreach ($v->schools as $school) {
                $schoolIds[] = $school->school_id;
                ?>

                <tr>

                    <td>
                        <?= $school->school_name; ?>
                    </td>
                    <td>
                        <?= $school->school_province; ?>
                    </td>

                </tr>
            <?
            } ?>

        <?
        }
        ?>
        </tbody>
    </table>

