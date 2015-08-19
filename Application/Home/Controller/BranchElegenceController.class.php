<?php
/**
 * Created by PhpStorm.
 * User: zhangguixu
 * Date: 15/8/9
 * Time: 上午8:45
 */

namespace Home\Controller;

use Think\Controller;

class BranchElegenceController extends Controller{

    function showlist(){

        $apperance=M('branchapperance');
        $academy = M ( 'academy' );
//        $branch=M('branch');
//        //支部分页
//        $countBranch=$branch->count();
//        $pageBranch = new \Think\Page ( $countBranch, 9, 'p1' );
//        $pageBranch->setP('p1');
//        $listBranch = $branch->order ( 'branchacademy,branchid desc' )->limit ( $pageBranch->firstRow . ',' . $pageBranch->listRows )->select ();
//
//        //获取支部对应的学院
//        $listAcademy=$academy->select();
//        for($i = 0; $i < count ( $listBranch ); $i ++) {
//            for($j = 0; $j < count ( $listAcademy ); $j ++) {
//                if ($listBranch [$i] ['branchacademy'] == $listAcademy [$j] ['academyid']) {
//                    $listBranch [$i] ['branchacademy'] = $listAcademy [$j] ['academyname'];
//                    break;
//                }
//            }
//        }
        //支部分页
        $countAcademy=$academy->count()-1;
        $pageAcademy = new \Think\Page ( $countAcademy, 8, 'p1' );
        $pageAcademy->setP('p1');
        $listAcademy = $academy->where('academyName<>"' . $_GET['branchapperanceacademy'].'"')->order ( 'academyid asc' )->limit ( $pageAcademy->firstRow . ',' . $pageAcademy->listRows)->select ();
        if(strcmp ( $_GET ['p1'], "2" ) != 0){
            $currentAcademy=$academy->where('academyName="' . $_GET['branchapperanceacademy'].'"')->select();
            $this->assign('currentAcademy',$currentAcademy); //选中的学院
        }

        $this->assign ( 'listAcademy', $listAcademy ); // 赋值数据集
        $this->assign ( 'pageAcademy', $pageAcademy->show () ); // 赋值分页输出


        //支部风采分页
        $countApperance=$apperance->where('branchApperanceAcademy="' . $_GET['branchapperanceacademy'].'" and branchapperanceacademyauditstatus=1')->count();
        $pageApperance= new \Think\Page ( $countApperance, 10, 'p2' );
        $pageApperance->setP('p2');
        $listApperance = $apperance->where('branchApperanceAcademy="' . $_GET['branchapperanceacademy'].'" and branchapperanceacademyauditstatus=1')->order ( 'branchApperanceid desc' )->limit ( $pageApperance->firstRow . ',' . $pageApperance->listRows )->select ();

        $this->assign('listApperance',$listApperance);  //赋值数据集
        $this->assign('pageApperance',$pageApperance->show()); //赋值分页输出
        $this->assign('title',$_GET['branchapperanceacademy']); //标题

        $this->display();
    }

    function showContent(){
        $apperance=M('branchapperance');
        $record=$apperance->where('branchapperanceid='.$_GET['branchapperanceid'])->find();

        $fileName = $record['branchapperancecontenturl'];
        $myFile = fopen($fileName, "r") or die ("Unable to open file!");
        $content = fread($myFile, filesize($fileName));
        fclose($myFile);

        $name=$record['branchapperanceacademy']." ".$record['branchapperancebranch'];

        //统计
        $data['branchApperanceId'] = $record['branchapperanceid'];
        $data['branchApperancePageView'] = $record['branchpageview'] + 1;
        $apperance->save($data);

        $this->assign("content",$content);
        $this->assign("date", $record['branchapperancereleasedate']);
        $this->assign("name", $name);
        $this->assign("title", $record['branchapperancetitle']);
        $this->assign("branchapperanceacademy",$record['branchapperanceacademy']);
        $this->display();

    }
}
