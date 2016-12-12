<?php
    
    // ========================== Main page controller ==============================

    // put full path to Smarty.class.php
    include_once 'configs/config.php';

    // *** Show main page with Blog statistic ***
    function indexAction()
        {
        //include_once '../models/class.mainpage.php';
        global $smarty;
        $smarty->assign('repnum',$repnum);
        $smarty->assign('comnum',$comnum);
        $smarty->assign('body_id','mainpage');
        $smarty->display("templates/header.tpl");
        $smarty->display("templates/ajaxrepnumcomnum.tpl");
        $smarty->display("templates/main.tpl");
        
        $smarty->display("templates/footer.tpl");
        
        //include_once '../configs/models/getRepnumComnum2.php';
        //$smarty->display("../templates/ajax.tpl");
        
        };

    // *** Show all reports function ***
    function showallreportsAction()
        {    
        include_once 'models/class.Get.All.Reports.php';
        global $smarty;
        $smarty->assign('result1', $result1);
        $smarty->assign('result2', $result2);
        $smarty->assign('body_id','allreportspage');
        $smarty->display("templates/header.tpl");
        $smarty->display("templates/outputallreports.tpl");
        //$smarty->display("templates/main.tpl");
        $smarty->display("templates/footer.tpl");
        };

    // *** Show form for adding new report ***
    function newreportformAction()
        {
        global $smarty;
        $smarty->assign('body_id','addreportpage');
        $smarty->display("templates/header.tpl");
        $smarty->display("templates/addreportform.tpl");
        $smarty->display("templates/footer.tpl");
        };

    // *** show selected by id report with all comments ***
    function showselectedreportAction()
        {
            $id=(int) $_GET[id];

            include_once 'models/class.Get.One.Report.With.Comments.php';
        
            global $smarty;
            $smarty->assign('result', $result);
            $smarty->assign('result_comments', $result_comments);
            $smarty->assign('id', $id);

            $smarty->display("templates/header.tpl");
            $smarty->display("templates/outputonereport.tpl");
            $smarty->display("templates/ajaxnewcomment.tpl");
            $smarty->display("templates/footer.tpl");
        };

    // *** Show window to write new comments on report with $id ***
    function addcommentformAction()
        {
            $id=(int) $_GET['id'];
           
            global $smarty;
            //include_once 'configs/models/addcomment.php';
            $smarty->assign('id',$id);
            $smarty->display("templates/header.tpl");
            $smarty->display("templates/addcommentform.tpl");
            $smarty->display("templates/footer.tpl");  
        }

    // ***** Add new report to database *****
    function addreportAction()
        {
            include_once 'models/class.Add.Report.php';
            
            global $smarty;
            $smarty->assign('report_text',$report_text);
            $smarty->assign('repnum',$repnum);
            $smarty->display("templates/header.tpl");
            $smarty->display("templates/addreport.tpl");
            $smarty->display("templates/footer.tpl");  
        }

    // *** Add comment on report with id to database *******
    function addcommentAction()
        {
            $id=(int) $_GET[id];
            
            global $smarty;

            $smarty->assign('id',$id);
            $smarty->assign('textreport',$textreport);
            $smarty->assign('repnum',$repnum);

            include_once 'models/class.Add.Comment.php';

            $smarty->display("templates/header.tpl");
            $smarty->display("templates/addcomment.tpl");
            $smarty->display("templates/footer.tpl");  
        }
