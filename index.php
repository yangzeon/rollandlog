<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>DND跑团ROLL点记录器</title>
    <!-- jQuery CDN-->
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
    <script src="jquery.scrollTo.js"></script>
    <!-- bootstrap CDN-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="coc.css">

    <meta name="viewport" content="width=device-width, initial-scale=1,  user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

</head>

<body>

<div id = "div_editor" class="container-fluid">
    <div id="div_indicator">
        <div class="dot active" id="dot_1"></div>
        <div class="dot" id="dot_2"></div>
        <div class="dot" id="dot_3"></div>
        <div class="dot" id="dot_4"></div>
        <div class="dot" id="dot_5"></div>
        <div class="dot" id="dot_6"></div>
    </div>
    <div class="div_page" id="div_main">


                <?php include("header.php") ?>

        <div id="div_dice_panel">
            <div id="div_menu">

            </div>

            <p><克苏鲁的召唤 TRPG建卡></p>


        </div>
    </div>
    <div class="div_page" id="page_2">
        <div id="div_roll_character">

            <button type="button" id="button_roll" class="btn btn-success">投点</button>
            <button type="button" id="button_clear" class="btn btn-warning">清空</button>
            <br><br>
            <input type="text" id= "input_roll" class="form-control" placeholder = "建卡属性投点 在这里定制次数 默认5次 最多10次" onchange="onlyNum(this);" style="ime-mode:Disabled" ></input>

            <div id="div_roll" >
            </div>


        </div>
    </div>

    <div class="div_page" id="page_3">
        <div id="div_info">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-1 col-md-offset-1">
                    <p class="label_name">姓名</p>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4">
                    <input type="text"  class="form-control input_info" placeholder = "姓名" id="info_0"></input>
                </div>



            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-1 col-md-offset-1">
                    <p class="label_name">玩家</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <input type="text"  class="form-control input_info" placeholder = "玩家" id="info_1"></input>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-2">
                    <a href="./card-gallery.php"  target="_black">查看其它调查员</a>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-2">
                    <button id="button_lock" class="btn btn-success">打开属性编辑</button>
                </div>

            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-1  col-md-offset-1">
                    <p class="label_name">性别</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <select  class="form-control input_info" placeholder = "性别" id="info_2">
                        <option>女</option>
                        <option>男</option>
                        <option>不明</option>
                    </select>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-1">
                    <p class="label_name">职业</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <input type="text"  class="form-control input_info" placeholder = "职业" id="info_6"></input>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-1">
                    <p class="label_name">年龄</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <input type="text"  class="form-control input_info" placeholder = "年龄" onchange="onlyNum(this);" style="ime-mode:Disabled" id="info_3"></input>
                </div>




            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-1 col-md-offset-1">
                    <p class="label_name">国籍</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <input type="text"  class="form-control input_info" placeholder = "国籍" id="info_4"></input>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-1">
                    <p class="label_name">母语</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <input type="text"  class="form-control input_info" placeholder = "母语" id="info_5"></input>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-1">
                    <p class="label_name">最小年龄</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <input type="text"  class="form-control input_info"  id="value_10" readonly="readonly"></input>
                </div>

            </div>
        </div>

        <div id="div_points">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-1 col-md-offset-1">
                    <p class="label_name">力量</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <input type="text"  class="form-control input_info" id="point_0" readonly="readonly" onchange="pointInput(this);"></input>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-1">
                    <p class="label_name">体质</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <input type="text"  class="form-control input_info" id="point_1" readonly="readonly" onchange="pointInput(this);"></input>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-1">
                    <p class="label_name">意志</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <input type="text"  class="form-control input_info" id="point_2" readonly="readonly" onchange="pointInput(this);"></input>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-1 col-md-offset-1">
                    <p class="label_name">敏捷</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <input type="text"  class="form-control input_info"  id="point_3" readonly="readonly" onchange="pointInput(this);"></input>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-1">
                    <p class="label_name">外表</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <input type="text"  class="form-control input_info" id="point_4" readonly="readonly" onchange="pointInput(this);"></input>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-1">
                    <p class="label_name">体型</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <input type="text"  class="form-control input_info" id="point_5" readonly="readonly" onchange="pointInput(this);"></input>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-1 col-md-offset-1">
                    <p class="label_name">智力</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <input type="text"  class="form-control input_info"  id="point_6" readonly="readonly" onchange="pointInput(this);"></input>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-1">
                    <p class="label_name">教育</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <input type="text"  class="form-control input_info" id="point_7" readonly="readonly" onchange="pointInput(this);"></input>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-1">
                    <p class="label_name">财产</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <input type="text"  class="form-control input_info" id="point_8" readonly="readonly" onchange="pointInput(this);"></input>
                </div>
            </div>



            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-1 col-md-offset-1">
                    <p class="label_name">灵感</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <input type="text"  class="form-control input_info"  id="value_3" readonly="readonly"></input>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-1">
                    <p class="label_name">幸运</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <input type="text"  class="form-control input_info" id="value_4" readonly="readonly"></input>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-1">
                    <p class="label_name">理智</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <input type="text"  class="form-control input_info" id="value_5" readonly="readonly"></input>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-1 col-md-offset-1">
                    <p class="label_name">知识</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <input type="text"  class="form-control input_info"  id="value_6" readonly="readonly"></input>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-1">
                    <p class="label_name">职业点</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <input type="text"  class="form-control input_info" id="value_7" readonly="readonly"></input>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-1">
                    <p class="label_name">兴趣点</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <input type="text"  class="form-control input_info" id="value_8" readonly="readonly"></input>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-1 col-md-offset-1">
                    <p class="label_name">生命值</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <input type="text"  class="form-control input_info"  id="value_0" readonly="readonly"></input>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-1">
                    <p class="label_name">魔法值</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <input type="text"  class="form-control input_info" id="value_1" readonly="readonly"></input>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-1">
                    <p class="label_name">心智值</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <input type="text"  class="form-control input_info" id="value_2" readonly="readonly"></input>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-1 col-md-offset-1">
                    <p class="label_name">伤害加值</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <input type="text"  class="form-control input_info"  id="value_9" readonly="readonly"></input>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-1">
                    <p class="label_name">克苏鲁神话</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <input type="text"  class="form-control input_info"  id="point_9" readonly="readonly" onchange="pointInput(this);"></input>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-2">
                    <div class="checkbox">
                        <p class="label_name">
                            <input type="checkbox" id="value_npc"> NPC卡
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="div_page" id="page_4">
        <div class="div_occupation">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-1"></div>
                <div class="col-xs-12 col-sm-12 col-md-1">
                    <p class="label_name">职业模板</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <select type="text" id="select_occupations" class="form-control" name = "occupation" onchange="changeOccupation(this);">
                    </select>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-2">
                    <p class="label_name label_occupation_info"></p>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-2">
                    <p class="label_name label_occupation_info_check"></p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <p class="label_name label_occupation_info_error"></p>
                </div>

            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-2"></div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <p class="label_name label_occupation_points"></p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <p class="label_name label_interest_points"></p>
                </div>
            </div>

        </div>
        <div id="div_skills">


            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-2">
                    <p class="label_name">会计学</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <div class = "div_skill_input">
                        <input type="text"  class="form-control input_skills" ></input>
                        <input type="text"  class="form-control input_skills" ></input>
                        <input type="text"  class="form-control input_skills" ></input>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="div_page" id="page_5">
        <div class="div_occupation">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3"></div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <p class="label_name label_occupation_info"></p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <p class="label_name label_occupation_info_check"></p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <p class="label_name label_occupation_info_error"></p>
                </div>

            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-1"></div>
                <div class="col-xs-12 col-sm-12 col-md-2"></div>
                <div class="col-xs-12 col-sm-12 col-md-2"></div>
                <div class="col-xs-12 col-sm-12 col-md-2"></div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <p class="label_name label_occupation_points"></p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <p class="label_name label_interest_points"></p>
                </div>
            </div>

        </div>
        <div id="div_skills_2">

        </div>
    </div>

    <div class="div_page" id="page_6">
        <div id="div_panel_6">
            <div id="div_background" class="div_center">
                <textarea id="input_background" class="input_info"  placeholder ="人物背景"></textarea>
            </div>
            <div id="div_item" class="div_center">
                <textarea id="input_item" class="input_info" placeholder ="携带物品"></textarea>
            </div>
            <div id="div_submit">
                <button type="button" id="button_submit" class="btn btn-success">建卡</button>
            </div>

            <div id="div_link">
            </div>
            <div id="div_card" class="div_center">
                <textarea id="input_card" class="input_no_border"></textarea>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div id="footer_index">
         <?php include("footer.php")?>
    </div>
</div>
<script src="coc.js"></script>
</body>
</html>
