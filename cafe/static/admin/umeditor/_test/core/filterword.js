module( "core.filterword" );


test( "office2010 word", function () {
    stop();
    ua.readTxt('test1_1.txt',function(str){
        var txt = '<p>    <p>        欢迎使用<span>umeditor!</span>                    </p>    <p>        <span style="font-family:黑体">欢迎使用<span>umeditor!</span>                        </span>    </p>    <p>        <span style="font-family:楷体_gb2312">欢迎使用<span>umeditor!</span>                        </span>    </p>    <p>        <span style="font-size:19px">欢迎使用</span><span style="font-size:19px">umeditor!</span>                    </p>    <h1>        欢迎使用<span>umeditor!</span>                    </h1>    <p>        <b><i><u>欢迎<sup>使用</sup><sub><span>umeditor!</span></sub></u></i></b>    </p>    <p>            </p>    <p>        <span style="color:red;background-color:yellow">欢迎使用</span><span style="color:red;background:yellow;background:yellow">umeditor!</span>    </p>    <p>            </p>    <p style="text-align:center">        欢迎使用<span>umeditor!</span>                    </p>    <p>            </p>    <p class=\"MsoListParagraph\" style=";margin-left:28px">        <span>1.</span>欢迎使用<span>umeditor!</span>                    </p>    <p class=\"MsoListParagraph\" style=";margin-left:28px">        <span>2.</span>欢迎使用<span>umeditor!</span>                    </p>    <p>            </p>    <p class=\"MsoListParagraph\" style=";margin-left:28px">        <span style="font-family:wingdings">l</span>欢迎使用<span>umeditor!</span>                    </p>    <p class=\"MsoListParagraph\" style=";margin-left:28px">        <span style="font-family:wingdings">l</span>欢迎使用<span>umeditor!</span>                    </p></p>';
        equal(UM.filterWord(str),txt,'字体、字号、颜色、基本样式、列表');
        ua.readTxt('test1_2.txt',function(str){
            txt ='<p>    <p>            </p>    <p style=";margin-left:1.0gd">        欢迎使用<span>umeditor!</span>                    </p>    <p>            </p>    <p style="line-height:250%">        欢迎使用<span>umeditor!</span>                    </p>    <p style="line-height:250%">        欢迎使用<span>umeditor!</span>                    </p>    <p style="line-height:250%">        欢迎使用<span>umeditor!</span>                    </p>    <p style="text-align:justify;text-justify:distribute-all-lines">        欢迎使用<span>umeditor!</span>                    </p>    <p>        <span>欢迎使用<span>umeditor!                                </span></span>    </p></p>';
            equal(UM.filterWord(str),txt,'段落样式、word样式、缩进');
            ua.readTxt('test1_3.txt',function(str){
                txt = '<table border="1" cellspacing="0" cellpadding="0" style="border-top-style: none;border-right-style: none;border-bottom-style: none;border-left-style: none;border-width: initial;border-color: initial;border-image: initial"> <tbody><tr>  <td width="189" valign="top" style="width:189pt;border:solid windowtext 1pt;padding:0 7pt 0 7pt">  <p>欢迎使用<span>umeditor!</span></p>  </td>  <td width="189" valign="top" style="width:189pt;border:solid windowtext 1pt;border-left:none;padding:0 7pt 0 7pt">  <p><span>&nbsp;</span></p>  </td>  <td width="189" valign="top" style="width:189pt;border:solid windowtext 1pt;border-left:none;padding:0 7pt 0 7pt">  <p><span>&nbsp;</span></p>  </td> </tr> <tr>  <td width="189" valign="top" style="width:189pt;border:solid windowtext 1pt;border-top:none;padding:0 7pt 0 7pt">  <p><span>&nbsp;</span></p>  </td>  <td width="189" valign="top" style="width:189pt;border-top:none;border-left:  none;border-bottom:solid windowtext 1pt;border-right:solid windowtext 1pt;padding:0 7pt 0 7pt">  <p><span>&nbsp;</span></p>  </td>  <td width="189" valign="top" style="width:189pt;border-top:none;border-left:  none;border-bottom:solid windowtext 1pt;border-right:solid windowtext 1pt;padding:0 7pt 0 7pt">  <p>欢迎使用<span>umeditor!</span></p>  </td> </tr></tbody></table><p><span><img width="367" height="146" src="file:///C:/DOCUME~1/lisisi01/LOCALS~1/Temp/msohtmlclip1/01/clip_image001.png" ></span></p><p><span><a href="file:///C:/Documents%20and%20Settings/lisisi01/%E6%A1%8C%E9%9D%A2/www.baidu.com">www.baidu.com</a></span></p>';
                equal(UM.filterWord(str).replace(/px/g,'pt'),txt,'表格、图片、超链接');
                start();
            });
        });
    });
} );

test( "wps word", function () {
    stop();
    ua.readTxt('test2_1.txt',function(str){
        var txt='<p>    <p>        <span style="font-size:16px">欢迎使用umeditor!</span>    </p>    <p>        <span style="font-size:16px;font-family:黑体">欢迎使用umeditor!</span>    </p>    <p>        <span style="font-size:16px;font-family:calibri">欢迎使用<font face="Calibri">umeditor!</font></span>    </p>    <h1>        <span style="font-size:29px;font-family:calibri">欢迎使用<font face="Calibri">umeditor! </font></span>    </h1>    <p>        <span style="font-weight:bold;font-style:italic;font-size:16px;vertical-align:super">欢迎</span><span style="font-weight:bold;font-style:italic;font-size:16px;vertical-align:sub">使用</span><span style="font-weight:bold;font-style:italic;font-size:16px">umeditor!</span>    </p>    <p>        <span style="color:#0000ff;font-size:16px;background-color:#ffff00">欢迎使用umeditor!</span>    </p>    <p style="text-align:center">        <span style="font-size:16px">欢迎使用umeditor!</span>    </p>    <p style="text-indent:28px">        <span style="font-size:16px">一、</span><span style="font-size:16px">欢迎使用umeditor!</span>    </p>    <p style="text-indent:28px">        <span style="font-size:16px">二、</span><span style="font-size:16px">欢迎使用umeditor!</span>    </p>    <p style=";margin-left:28px">        <span style="font-size:16px;font-family:wingdings">l </span><span style="font-size:16px">欢迎使用umeditor!</span>    </p>    <p style=";margin-left:28px">        <span style="font-size:16px;font-family:wingdings">l </span><span style="font-size:16px">欢迎使用umeditor!</span>    </p></p>';
        equal(UM.filterWord(str),txt,'字体、字号、颜色、基本样式、列表');
        ua.readTxt('test2_2.txt',function(str){
            txt= '<p>    <p style="margin-left:14px">        <span style="font-size:16px">欢迎使用umeditor!</span>    </p>    <p style="line-height:250%">        <span style="font-size:16px">欢迎使用umeditor!</span>    </p>    <p style="line-height:250%">        <span style="font-size:16px">欢迎使用umeditor!</span>    </p>    <p style="line-height:250%">        <span style="font-size:16px">欢迎使用umeditor!</span>    </p>    <p style="text-align:justify;text-justify:distribute-all-lines">        <span style="font-size:16px">欢迎使用umeditor!</span>    </p>    <p>        <span style=";color:#0000ff;font-size:13px;font-family:\'times new roman\'">欢迎使用<span style="font-family:\'times new roman\'">umeditor! </span></span>    </p></p>';
            equal(UM.filterWord(str),txt,'缩进、段落样式、word样式');
            ua.readTxt('test2_3.txt',function(str){
                txt='<p>    <p style=";margin-left:1.0gd">        <p>                    </p>        <table border="1" cellspacing="0" cellpadding="0" style="border-top-style:none;border-right-style:none;border-bottom-style:none;border-left-style:none">            <tr>                <td>                    <table>                        <tbody>                            <tr>                                <td>                                </td>                                <td width="189" valign="top" style="width:189px;border:solid #000 1px;padding:0 7px 0 7px">                                    <p>                                        欢迎使用<span>umeditor!                                                                                        </span>                                    </p>                                </td>                            </tr>                        </tbody>                    </table>                </td>                <td width="189" valign="top" style="width:189px;border:solid #000 1px;border-left:none;padding:0 7px 0 7px">                    <p>                                            </p>                </td>            </tr>        </table>        <table>            <tbody>                <tr>                    <td width="189" valign="top" style="width:189px;border:solid #000 1px;border-left:none;padding:0 7px 0 7px">                        <p>                                                    </p>                    </td>                </tr>            </tbody>        </table>        <table>            <tbody>                <tr>                    <td>                    </td>                </tr>            </tbody>        </table>        <table>            <tbody>                <tr>                    <td>                    </td>                    <td width="189" valign="top" style="width:189px;border:solid #000 1px;border-top:none;padding:0 7px 0 7px">                        <p>                                                    </p>                    </td>                </tr>            </tbody>        </table>        <table>            <tbody>                <tr>                    <td width="189" valign="top" style="width:189px;border-top:none;border-left:none;border-bottom:solid #000 1px;border-right:solid #000 1px;padding:0 7px 0 7px">                        <p>                                                    </p>                    </td>                </tr>            </tbody>        </table>        <table>            <tbody>                <tr>                    <td width="189" valign="top" style="width:189px;border-top:none;border-left:none;border-bottom:solid #000 1px;border-right:solid #000 1px;padding:0 7px 0 7px">                        <p>                            欢迎使用<span>umeditor!                                                                </span>                        </p>                    </td>                </tr>            </tbody>        </table>        <table>            <tbody>                <tr>                    <td>                    </td>                </tr>            </tbody>        </table>        <p>            <span><img width="367" height="146" src="file:///C:/DOCUME~1/lisisi01/LOCALS~1/Temp/msohtmlclip1/01/clip_image001.png"  />                                </span>        </p><span style="font-size:14px;font-family:\'calibri\',\'sans-serif\'"><a href="file:///C:/Documents%20and%20Settings/lisisi01/%E6%A1%8C%E9%9D%A2/www.baidu.com">www.baidu.com</a></span><br />    </p></p>';
                equal(UM.filterWord(str),txt,'表格、图片、超链接');
                start();
            });
        });
    });
} );
test( "word 补充 ", function () {
    var str = '<p style="horiz-align:center;vert-align:center;mso-foreground:red;mso-default-height:5.0pt;mso-default-width:3.0pt;text-line-through:single;mso-zero-height:yes;margin:3pt;mso-width:2pt;mso-padding-between-alt:1pt"></p>';
    var txt = '<p style="text-align:center;vertical-align:center;color:red;min-height:7px;min-width:4px;text-decoration:line-through;display:none;margin:4px;width:3px;border-collapse:separate;border-spacing:1px"></p>';
    ua.checkSameHtml(UM.filterWord(str),txt,'word 补充');
});
