webpackJsonp([60],{ihAq:function(e,t,s){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=s("Dd8w"),a=s.n(n),i=(s("vAZe"),s("NYxO")),r=s("vMJZ"),u=s("Au9i"),o={data:function(){return{username:"",params:{values:null,gender:null,nickname:null,avatar_url:null},oldpass:"",newpass:"",confirpass:"",type:this.$route.params.type,title:1==this.$route.params.type?"修改昵称":"修改密码"}},computed:a()({},Object(i.e)({user:function(e){return e.auth.user}})),watch:{username:function(e){e.length>25&&(this.username=e.substring(0,25))}},components:{},created:function(){this.setUserName()},methods:a()({},Object(i.d)({clearToken:"signout",saveUser:"saveUser",signout:"signout"}),{goBack:function(){this.$router.go(-1)},setUserName:function(){this.username=this.user.nickname?this.user.nickname:this.user.username},clearUsername:function(){this.username=""},saveBtn:function(){this.userProfileUpdate()},userProfileUpdate:function(){var e=this,t=this.params;return t.nickname=this.username,t.nickname.length<=0?(Object(u.Toast)("请输入1-25个文字作为昵称"),!1):t.nickname.length<1||t.nickname.length>25?(Object(u.Toast)("请输入1-25个文字作为昵称"),!1):void Object(r.d)(t.values,t.gender,t.nickname,t.avatar_url).then(function(t){t&&(Object(u.Toast)("修改昵称成功"),e.saveUser({user:t.user}),e.$router.go(-1))})},updatePass:function(){var e=this;return 0===this.oldpass.length?(Object(u.Toast)("当前密码不能为空"),!1):this.oldpass.length<6||this.oldpass.length>20?(Object(u.Toast)("请输入6-20个字符的密码"),!1):0===this.newpass.length?(Object(u.Toast)("新密码不能为空"),!1):this.newpass.length<6||this.newpass.length>20?(Object(u.Toast)("请输入6-20个字符的密码"),!1):0===this.confirpass.length?(Object(u.Toast)("请输入确认密码"),!1):this.newpass.length!==this.confirpass.length?(Object(u.Toast)("确认密码与输入密码不一致"),!1):void Object(r.a)(this.oldpass,this.newpass).then(function(t){t&&(e.signout(),e.$router.push({name:"signin",params:{isFromInfoEdit:!0}}))},function(e){Object(u.Toast)(e.errorMsg)})}})},c={render:function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{staticClass:"ui-popup-right"},[n("mt-header",{staticClass:"header",attrs:{title:e.title}},[n("header-item",{attrs:{slot:"left",isBack:!0},on:{onclick:function(t){e.goBack()}},slot:"left"})],1),e._v(" "),1==e.type?n("div",[n("div",{staticClass:"updeta-user-name ui-common-update"},[n("input",{directives:[{name:"model",rawName:"v-model",value:e.username,expression:"username"}],attrs:{type:"text",placeholder:"请输入昵称"},domProps:{value:e.username},on:{input:function(t){t.target.composing||(e.username=t.target.value)}}}),e._v(" "),e.username.length>0?n("img",{attrs:{src:s("y9By")},on:{click:function(t){e.clearUsername()}}}):e._e()]),e._v(" "),n("div",{staticClass:"ui-save-btn"},[n("span",{on:{click:function(t){e.saveBtn()}}},[e._v("保存")])])]):e._e()],1)},staticRenderFns:[]};var l=s("VU/8")(o,c,!1,function(e){s("jgcd")},"data-v-314c2559",null);t.default=l.exports},jgcd:function(e,t){}});
//# sourceMappingURL=60.b877da9616b339318815.js.map