<?php

require_once 'view_user_header.php';
require_once 'view_user_footer.php';
class view_user_list
{
    public function Show($list)
    {
        $header = new view_user_header();
        $footer = new view_user_footer();

        $tableList = '<table border=1>';
        $tableList .= '<tr>';
        $tableList .= '<td>ID</td>';
        $tableList .= '<td>Email</td>';
        $tableList .= '<td>FirstName</td>';
        $tableList .= '<td>LastName</td>';
        $tableList .= '<td>Edit User</td>';
        $tableList .= '<td>Delete User</td>';
        $tableList .= '</tr>';

        foreach ($list as $key => $value) {
            $tableList .= '<tr>';
            $tableList .= '<td>'.htmlentities($value['id']).'</td>';
            $tableList .= '<td>'.htmlentities($value['Email']).'</td>';
            $tableList .= '<td>'.htmlentities($value['FirstName']).'</td>';
            $tableList .= '<td>'.htmlentities($value['LastName']).'</td>';
            $tableList .= '<td><a href="index.php?operation=UpdateUser&id='.urlencode($value['id']).'">edit</a></td>';
            $tableList .= '<td><a href="index.php?operation=DeleteUser&id='.urlencode($value['id']).'">delete</a</td>';
            $tableList .= '</tr>';
        }

        $tableList .= '</table>';

        $header->Show();
        echo $tableList;
        $footer->Show();
    }
}
