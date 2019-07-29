<?php


    class Pages
    {
        private $current;
        private $count;
        private $limit;
        private $size;
        private $class;

        public function __construct($current, $count, $limit, $size,$class='digg')
        {
            $this->current = $current;
            $this->count = $count;
            $this->limit = $limit;
            $this->size = $size;
            $this->class = $class;
        }

        /**
         * @return string   分页地址
         */
        public function get_url()
        {
            $url = $_SERVER['PHP_SELF'] . '?';
            if ($_GET) {
                foreach ($_GET as $k => $v) {
                    if ($k != 'page') {
                        $url .= "$k=$v&";
                    }
                }
            }
            return $url;
        }

        /*
            []表示当前页
            如果一共有10页,每次只显示5页
            [1]  2  3  4  5
             1  [2] 3  4  5
             1   2 [3] 4  5
             2   3 [4] 5  6
             3   4 [5] 6  7
             4   5 [6] 7  8
             5   6 [7] 8  9
             6   7 [8] 9  10
             6   7  8 [9] 10
             6   7  8  9 [10]
        */

        /**
         * @param $current          当前页
         * @param $count            数据总数
         * @param $limit            每页显示条数
         * @param $size             分页按钮的最大个数
         * @param string $class 分页css样式
         * @return string           拼接好的分页html代码
         */
        function pg()
        {
            $str = '';
            if($this->count > $this->limit){ //如果总数大于每页显示条数，则分页

                $url = $this->get_url(); //获取地址

                $pages = ceil($this->count/$this->limit);//向上取整算出页码总数
                //echo $pages;

                $str .= "<div class='".$this->class."'>";
                //首页
                if($this->current==1){
                    $str .= "<span class='disabled'>首页</span>";
                }else{
                    $str .= "<a href='".$url."page=1'>首页</a>";
                    $str .= "<a href='".$url."page=".($this->current-1)."'>上一页</a>";
                }
                //当前页小于 ($size/2) 向下取整（页码在size一半之前）
                if($this->current <= floor($this->size/2)){
                    $start = 1;
                    $end = $pages > $this->size ? $this->size : $pages;
                }else if ($this->current > $pages - floor($this->size/2)){
                    $start = $pages - $this->size + 1 <= 0 ? 1 : $pages - $this->size + 1; //避免负数出现
                    $end = $pages;
                }else{
                    $start = $this->current - floor($this->size/2);
                    $end = $this->current + floor($this->size/2);
                }

                for($i=$start;$i<=$end;$i++){
                    if($this->current == $i){
                        $str .= "<span class='current'>{$i}</span>";
                    }else{
                        $str .= "<a href='".$url."page=".$i."'>{$i}</a>";
                    }
                }

                //尾页
                if($this->current == $pages){ //当前页是最后一页
                    $str .= "<span class='disabled'>尾页</span>";
                }else{
                    $str .= "<a href='".$url."page=".($this->current+1)."'>下一页</a>";
                    $str .= "<a href='".$url."page=".$pages."'>尾页</a>";
                }
                $str .= '</div>';
            }
            return $str;
        }

    }