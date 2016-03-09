<?php
if(!defined('SYSPATH'))die ('Request not found!');
    function load_header(){
        require ('widget/header.php');
    }
    function load_sidebar(){
        require ('widget/sidebar.php');
    }
    function load_toper($widget){
        require ('widget/'.$widget.'.php');
    }
    function load_widget($widget){
        require ('widget/'.$widget.'.php');
    }
    function load_footer(){
        require ('widget/footer.php');
    }
    function page($total_record,$limit,$current_page,$link){
        $page = array(
            'total_record' => intval($total_record),
            'current_page' => intval($current_page),
            'limit' => intval($limit),
            'total_page' => 0,
            'start' => 0,
            'html' => '',
        );
        $page['total_page'] = ceil($page['total_record']/$page['limit']);
        if($page['current_page'] < 1){
            $page['current_page'] = 1;
        }elseif($page['current_page'] > $page['total_page']){
            $page['current_page'] = $page['total_page'];
        }
        $page['start'] = ($page['current_page'] - 1)* $page['limit'];
        
        
        
        
        if($page['total_page'] > 1){
            $page['html'] .= '<div class="col-sm-6 text-left"><ul class="pagination">';
            
            
            if($page['current_page'] == 1){
                $page['html'] .= '<li class="disaple"><span>Prev</span></li>';
            }else{
                $page['html'] .= '<li><a href="'.str_replace('{page}', ($page['current_page'] - 1), $link).'">Prev</a></li>';
            }
            for($i = 1; $i <= $page['total_page']; $i++){
                if($page['current_page'] == $i){
                    $page['html'] .= '<li class="active"><span>'.$i.'</span></li>';
                }else{
                    $page['html'] .= '<li><a href="'.  str_replace('{page}', $i, $link).'">'.$i.'</a></li>';
                }
                
            }
            if($page['current_page'] == $page['total_page']){
                $page['html'] .= '<li class="disaple"><span>Next</span></li>';
            }else{
                $page['html'] .= '<li><a href="'.str_replace('{page}', ($page['current_page'] + 1), $link).'">Next</a></li>';
            }
            
            $page['html'] .= '</ul></div><div class="col-sm-6 text-right">Showing 1 to 20 of 38 (2 Pages)</div>';
        }
        
        
        
        
//        <div class="col-sm-6 text-left">
//            <ul class="pagination">
//                <li class="active"><span>1</span></li>
//                <li><a href="#">2</a></li>
//                <li><a href="#">&gt;</a></li>
//                <li><a href="#">&gt;|</a></li>
//            </ul>
//            </div>
//        <div class="col-sm-6 text-right">Showing 1 to 20 of 38 (2 Pages)</div>
        
        return $page;
    }
?>