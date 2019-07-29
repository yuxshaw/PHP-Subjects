<?php


    class Test
    {
        public $game_name = 'DNF';
        public $game_time = 2;

        public function playGames(){
            return '今天想打游戏,今天玩'.$this->game_name;
        }


        function playTime(){
            // 内部调用
            return $this->games();
        }

        private function games(){
            return '今天玩2个小时';
        }

    }

    // 实例化对象
    $g1 = new Test;
    // 访问对象属性
    $g1->game_name;
    // 访问对象方法
    echo $g1->playGames();
    echo $g1->playTime();

    class T1 extends Test{
        public function playGames()
        {
            return $this::play_game();
        }

        private function play_game(){
            return '今天玩LOL';
        }
    }

    $t1 = new T1;
    echo $t1->playGames();

