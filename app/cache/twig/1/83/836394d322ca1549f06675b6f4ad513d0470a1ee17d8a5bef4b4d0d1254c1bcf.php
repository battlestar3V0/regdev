<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/my_space/index.tpl */
class __TwigTemplate_934954180088f0c40896123ea5ab8c013ffd73e1a7f9f894683b43cd764c87a6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"search-student\">
    ";
        // line 2
        echo ($context["form"] ?? null);
        echo "
</div>

<div class=\"page-header\">
    <h4>
        ";
        // line 7
        echo get_lang("Overview");
        echo "
    </h4>
</div>

<div class=\"view-global-followed\">
    <div class=\"row\">
        <div class=\"col-lg-3 col-sm-3\">
            <div class=\"card\">
                <div class=\"content\">
                    <div class=\"card-title\"><a href=\"";
        // line 16
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
        echo "mySpace/student.php\">";
        echo get_lang("FollowedStudents");
        echo "</a></div>
                    <div class=\"row\">
                        <div class=\"col-xs-5\">
                            <div class=\"icon-big icon-student text-center\">
                                <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>
                            </div>
                        </div>
                        <div class=\"col-xs-7\">
                            <div class=\"numbers\">

                                <h2>";
        // line 26
        echo ($context["students"] ?? null);
        echo "</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-sm-3\">
            <div class=\"card\">
                <div class=\"content\">
                    <div class=\"card-title\"><a href=\"";
        // line 36
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
        echo "mySpace/users.php?status=";
        echo ($context["studentboss"] ?? null);
        echo "\">";
        echo get_lang("FollowedStudentBosses");
        echo "</a></div>
                    <div class=\"row\">
                        <div class=\"col-xs-5\">
                            <div class=\"icon-big icon-studentboss text-center\">
                                <i class=\"fa fa-address-book\" aria-hidden=\"true\"></i>
                            </div>
                        </div>
                        <div class=\"col-xs-7\">
                            <div class=\"numbers\">

                                <h2>";
        // line 46
        echo ($context["studentbosses"] ?? null);
        echo "</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-sm-3\">
            <div class=\"card\">
                <div class=\"content\">
                    <div class=\"card-title\"><a href=\"";
        // line 56
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
        echo "mySpace/teachers.php\">";
        echo get_lang("FollowedTeachers");
        echo "</a></div>
                    <div class=\"row\">
                        <div class=\"col-xs-5\">
                            <div class=\"icon-big icon-teachers text-center\">
                                <i class=\"fa fa-book\" aria-hidden=\"true\"></i>
                            </div>
                        </div>
                        <div class=\"col-xs-7\">
                            <div class=\"numbers\">

                                <h2>";
        // line 66
        echo ($context["numberTeachers"] ?? null);
        echo "</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-sm-3\">
            <div class=\"card\">
                <div class=\"content\">
                    <div class=\"card-title\"><a href=\"";
        // line 76
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
        echo "mySpace/users.php?status=";
        echo ($context["drh"] ?? null);
        echo "\">";
        echo get_lang("FollowedHumanResources");
        echo "</a></div>
                    <div class=\"row\">
                        <div class=\"col-xs-5\">
                            <div class=\"icon-big icon-humanresources text-center\">
                                <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                            </div>
                        </div>
                        <div class=\"col-xs-7\">
                            <div class=\"numbers\">
                                <h2>";
        // line 85
        echo ($context["humanresources"] ?? null);
        echo "</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"view-global\">
    <div class=\"panel panel-default panel-view\">
        <div class=\"panel-body\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-sm-3\">
                    <div class=\"easy-donut\">
                        <div id=\"easypiechart-blue\" class=\"easypiechart\" data-percent=\"";
        // line 100
        echo ($context["total_user"] ?? null);
        echo "\">
                            <span class=\"percent\">";
        // line 101
        echo ($context["total_user"] ?? null);
        echo "</span>
                        </div>
                        <div class=\"easypiechart-link\">
                            <a class=\"btn btn-default\" href=\"";
        // line 104
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
        echo "mySpace/users.php\">
                                ";
        // line 105
        echo get_lang("FollowedUsers");
        echo "
                            </a>
                        </div>
                    </div>

                    ";
        // line 110
        if (($this->getAttribute(($context["_u"] ?? null), "status", []) == 1)) {
            // line 111
            echo "                        <a href=\"";
            echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
            echo "admin/dashboard_add_users_to_user.php?user=";
            echo $this->getAttribute(($context["_u"] ?? null), "id", []);
            echo "\" class=\"btn btn-default btn-sm\">
                            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 115
        echo "                </div>
                <div class=\"col-lg-3 col-sm-3\">
                    <div class=\"easy-donut\">
                        <div id=\"easypiechart-orange\" class=\"easypiechart\" data-percent=\"";
        // line 118
        echo $this->getAttribute(($context["stats"] ?? null), "courses", []);
        echo "\">
                            <span class=\"percent\">";
        // line 119
        echo $this->getAttribute(($context["stats"] ?? null), "courses", []);
        echo "</span>
                        </div>
                        <div class=\"easypiechart-link\">
                            <a class=\"btn btn-default\" href=\"";
        // line 122
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
        echo "mySpace/course.php\">
                                ";
        // line 123
        echo get_lang("AssignedCourses");
        echo "
                            </a>
                        </div>
                    </div>
                    ";
        // line 127
        if (($this->getAttribute(($context["_u"] ?? null), "status", []) == 1)) {
            // line 128
            echo "                        <a href=\"";
            echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
            echo "mySpace/course.php\" class=\"btn btn-default btn-sm\">
                            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 132
        echo "                </div>
                <div class=\"col-lg-3 col-sm-3\">
                    <div  class=\"easy-donut\">
                        <div id=\"easypiechart-teal\" class=\"easypiechart\" data-percent=\"";
        // line 135
        echo $this->getAttribute(($context["stats"] ?? null), "assigned_courses", []);
        echo "\">
                            <span class=\"percent\">";
        // line 136
        echo $this->getAttribute(($context["stats"] ?? null), "assigned_courses", []);
        echo "</span>
                        </div>
                        <div class=\"easypiechart-link\">
                            <a class=\"btn btn-default\" href=\"";
        // line 139
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
        echo "mySpace/course.php?follow\">";
        echo get_lang("FollowedCourses");
        echo "</a>
                        </div>
                    </div>
                    ";
        // line 142
        if (($this->getAttribute(($context["_u"] ?? null), "status", []) == 1)) {
            // line 143
            echo "                        <a href=\"";
            echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
            echo "mySpace/course.php?follow\" class=\"btn btn-default btn-sm\">
                            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 147
        echo "                </div>
                <div class=\"col-lg-3 col-sm-3\">
                    <div class=\"easy-donut\">
                        <div id=\"easypiechart-red\" class=\"easypiechart\" data-percent=\"";
        // line 150
        echo twig_length_filter($this->env, $this->getAttribute(($context["stats"] ?? null), "session_list", []));
        echo "\">
                            <span class=\"percent\">";
        // line 151
        echo twig_length_filter($this->env, $this->getAttribute(($context["stats"] ?? null), "session_list", []));
        echo "</span>
                        </div>
                        <div class=\"easypiechart-link\">
                            <a class=\"btn btn-default\" href=\"";
        // line 154
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
        echo "mySpace/session.php\">";
        echo get_lang("FollowedSessions");
        echo "</a>
                        </div>
                    </div>
                    ";
        // line 157
        if (($this->getAttribute(($context["_u"] ?? null), "status", []) == 1)) {
            // line 158
            echo "                        <a href=\"";
            echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
            echo "admin/dashboard_add_sessions_to_user.php?user=";
            echo $this->getAttribute(($context["_u"] ?? null), "id", []);
            echo "\" class=\"btn btn-default btn-sm\">
                            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 162
        echo "                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"page-header\">
    <h4>
        ";
        // line 169
        echo ($context["title"] ?? null);
        echo "
    </h4>
</div>
<div class=\"report-section\">
    <div class=\"row\">
        <div class=\"col-lg-3 col-sm-3\">
            <div class=\"item-report\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <div class=\"item-report-number\">
                            ";
        // line 179
        echo $this->getAttribute(($context["report"] ?? null), "AverageCoursePerStudent", []);
        echo "
                        </div>
                    </div>
                </div>
                <p>";
        // line 183
        echo get_lang("AverageCoursePerStudent");
        echo "</p>
            </div>
        </div>
        <div class=\"col-lg-3 col-sm-3\">
            <div class=\"item-report\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <div class=\"item-report-number\">
                            ";
        // line 191
        echo $this->getAttribute(($context["report"] ?? null), "InactivesStudents", []);
        echo "
                        </div>
                    </div>
                </div>
                <p>";
        // line 195
        echo get_lang("InactivesStudents");
        echo "</p>
            </div>
        </div>
        <div class=\"col-lg-3 col-sm-3\">
            <div class=\"item-report\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <div class=\"item-report-number\">
                            ";
        // line 203
        echo $this->getAttribute(($context["report"] ?? null), "AverageTimeSpentOnThePlatform", []);
        echo "
                        </div>
                    </div>
                </div>
                <p>";
        // line 207
        echo get_lang("AverageTimeSpentOnThePlatform");
        echo "</p>
            </div>
        </div>
        <div class=\"col-lg-3 col-sm-3\">
            <div class=\"item-report\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <div class=\"item-report-number\">
                            ";
        // line 215
        echo $this->getAttribute(($context["report"] ?? null), "AverageProgressInLearnpath", []);
        echo "
                        </div>
                    </div>
                </div>
                <p>";
        // line 219
        echo get_lang("AverageProgressInLearnpath");
        echo "</p>
            </div>
        </div>
        <div class=\"col-lg-3 col-sm-3\">
            <div class=\"item-report\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <div class=\"item-report-number\">
                            ";
        // line 227
        echo $this->getAttribute(($context["report"] ?? null), "AvgCourseScore", []);
        echo "
                        </div>

                    </div>
                </div>
                <p>";
        // line 232
        echo get_lang("AvgCourseScore");
        echo "</p>
            </div>
        </div>
        <div class=\"col-lg-3 col-sm-3\">
            <div class=\"item-report\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <div class=\"item-report-number\">
                            ";
        // line 240
        echo $this->getAttribute(($context["report"] ?? null), "AveragePostsInForum", []);
        echo "
                        </div>

                    </div>
                </div>
                <p> ";
        // line 245
        echo get_lang("AveragePostsInForum");
        echo "</p>
            </div>
        </div>
        <div class=\"col-lg-3 col-sm-3\">
            <div class=\"item-report\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <div class=\"item-report-number\">
                            ";
        // line 253
        echo $this->getAttribute(($context["report"] ?? null), "AverageAssignments", []);
        echo "
                        </div>

                    </div>
                </div>
                <p> ";
        // line 258
        echo get_lang("AverageAssignments");
        echo "</p>
            </div>
        </div>
    </div>
</div>

<script type=\"text/javascript\">
    \$(function() {
        \$('#easypiechart-teal').easyPieChart({
            scaleColor: false,
            barColor: '#1ebfae',
            lineWidth:8,
            trackColor: '#f2f2f2'
        });
    });

    \$(function() {
        \$('#easypiechart-orange').easyPieChart({
            scaleColor: false,
            barColor: '#ffb53e',
            lineWidth:8,
            trackColor: '#f2f2f2'
        });
    });

    \$(function() {
        \$('#easypiechart-red').easyPieChart({
            scaleColor: false,
            barColor: '#f9243f',
            lineWidth:8,
            trackColor: '#f2f2f2'
        });
    });

    \$(function() {
        \$('#easypiechart-blue').easyPieChart({
            scaleColor: false,
            barColor: '#30a5ff',
            lineWidth:8,
            trackColor: '#f2f2f2'
        });
    });

</script>
";
    }

    public function getTemplateName()
    {
        return "default/my_space/index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 258,  443 => 253,  432 => 245,  424 => 240,  413 => 232,  405 => 227,  394 => 219,  387 => 215,  376 => 207,  369 => 203,  358 => 195,  351 => 191,  340 => 183,  333 => 179,  320 => 169,  311 => 162,  301 => 158,  299 => 157,  291 => 154,  285 => 151,  281 => 150,  276 => 147,  268 => 143,  266 => 142,  258 => 139,  252 => 136,  248 => 135,  243 => 132,  235 => 128,  233 => 127,  226 => 123,  222 => 122,  216 => 119,  212 => 118,  207 => 115,  197 => 111,  195 => 110,  187 => 105,  183 => 104,  177 => 101,  173 => 100,  155 => 85,  139 => 76,  126 => 66,  111 => 56,  98 => 46,  81 => 36,  68 => 26,  53 => 16,  41 => 7,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/my_space/index.tpl", "C:\\xampp\\htdocs\\Chamilo\\main\\template\\default\\my_space\\index.tpl");
    }
}
