
// 获取全选按钮
var get_btn = document.getElementById('selectAll');
var checkboxes = document.getElementsByClassName('cbox');
get_btn.onclick = function () {
        for (var i=0; i<checkboxes.length; i++){
            if (checkboxes[i].checked == false){
                checkboxes[i].checked = true;
            } else {
                checkboxes[i].checked = false;
            }
        }
    }

