<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/theme__100198/templates/page--node.html.twig */
class __TwigTemplate_183e40391d06faf182aa31577e4eb7e75e3fbf2abb6c061209590756523a6133 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["theme_path"] = ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1, $this->source) . $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath());
        // line 2
        $context["theme_path1"] = ($this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 2, $this->source) . "/content");
        // line 3
        echo "<div class=\"ttr_banner_menu\">
";
        // line 5
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn1", [], "any", false, false, true, 5) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn2", [], "any", false, false, true, 5)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn3", [], "any", false, false, true, 5)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn4", [], "any", false, false, true, 5))) {
            // line 7
            echo "<div class=\"ttr_banner_menu_inner_above_widget_container\">
<div class=\"ttr_banner_menu_inner_above0 container row\">
";
            // line 9
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn1", [], "any", false, false, true, 9);
            // line 10
            if (($context["showcolumn"] ?? null)) {
                // line 11
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menuabovecolumn1\">
";
                // line 13
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn1", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 17
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 21
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 22
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn2", [], "any", false, false, true, 22);
            // line 23
            if (($context["showcolumn"] ?? null)) {
                // line 24
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menuabovecolumn2\">
";
                // line 26
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn2", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 30
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 34
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 35
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn3", [], "any", false, false, true, 35);
            // line 36
            if (($context["showcolumn"] ?? null)) {
                // line 37
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menuabovecolumn3\">
";
                // line 39
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn3", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 43
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 47
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 48
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn4", [], "any", false, false, true, 48);
            // line 49
            if (($context["showcolumn"] ?? null)) {
                // line 50
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menuabovecolumn4\">
";
                // line 52
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn4", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 56
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 60
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 66
        echo "</div>
<div id=\"ttr_menu\"> 
<div class=\"margin_collapsetop\"></div>
<nav class=\"navbar-default navbar-expand-md navbar\">
<div id=\"ttr_menu_inner_in\"> 
<div class=\"ttr_menu_element_alignment container\">
<div class=\"ttr_images_container\">
</div>
<div id=\"navigationmenu\">
<div class=\"navbar-header\">
<button id=\"nav-expander\" data-target=\".navbar-collapse\" data-toggle=\"collapse\" class=\"navbar-toggle\" type=\"button\">
<span class=\"ttr_menu_toggle_button\">
<span class=\"sr-only\">
</span>
<span class=\"icon-bar\">
</span>
<span class=\"icon-bar\">
</span>
<span class=\"icon-bar\">
</span>
</span>
<span class=\"ttr_menu_button_text\">
Menu
</span>
</button>
</div>
<div class=\"menu-center collapse navbar-collapse\">
";
        // line 93
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
        echo "
</div>
<div class=\"ttr_images_container\">
<a href=\"\" class=\"menuforeground0 \" target=\"_self\">
</a>
</div>
</div>
</div>
</div>
</nav>
</div>
<div class=\"ttr_banner_menu\">
";
        // line 106
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn1", [], "any", false, false, true, 106) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn2", [], "any", false, false, true, 106)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn3", [], "any", false, false, true, 106)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn4", [], "any", false, false, true, 106))) {
            // line 108
            echo "<div class=\"ttr_banner_menu_inner_below_widget_container\">
<div class=\"ttr_banner_menu_inner_below0 container row\">
";
            // line 110
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn1", [], "any", false, false, true, 110);
            // line 111
            if (($context["showcolumn"] ?? null)) {
                // line 112
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menubelowcolumn1\">
";
                // line 114
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn1", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 118
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 122
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 123
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn2", [], "any", false, false, true, 123);
            // line 124
            if (($context["showcolumn"] ?? null)) {
                // line 125
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menubelowcolumn2\">
";
                // line 127
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn2", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 131
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 135
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 136
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn3", [], "any", false, false, true, 136);
            // line 137
            if (($context["showcolumn"] ?? null)) {
                // line 138
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menubelowcolumn3\">
";
                // line 140
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn3", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 144
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 148
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 149
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn4", [], "any", false, false, true, 149);
            // line 150
            if (($context["showcolumn"] ?? null)) {
                // line 151
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menubelowcolumn4\">
";
                // line 153
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn4", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 157
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 161
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 167
        echo "</div>
<div class=\"ttr_banner_slideshow\">
";
        // line 170
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn1", [], "any", false, false, true, 170) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn2", [], "any", false, false, true, 170)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn3", [], "any", false, false, true, 170)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn4", [], "any", false, false, true, 170))) {
            // line 172
            echo "<div class=\"ttr_banner_slideshow_inner_above_widget_container\">
<div class=\"ttr_banner_slideshow_inner_above0 container row\">
";
            // line 174
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn1", [], "any", false, false, true, 174);
            // line 175
            if (($context["showcolumn"] ?? null)) {
                // line 176
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowabovecolumn1\">
";
                // line 178
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn1", [], "any", false, false, true, 178), 178, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 182
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 186
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 187
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn2", [], "any", false, false, true, 187);
            // line 188
            if (($context["showcolumn"] ?? null)) {
                // line 189
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowabovecolumn2\">
";
                // line 191
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn2", [], "any", false, false, true, 191), 191, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 195
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 199
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 200
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn3", [], "any", false, false, true, 200);
            // line 201
            if (($context["showcolumn"] ?? null)) {
                // line 202
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowabovecolumn3\">
";
                // line 204
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn3", [], "any", false, false, true, 204), 204, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 208
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 212
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 213
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn4", [], "any", false, false, true, 213);
            // line 214
            if (($context["showcolumn"] ?? null)) {
                // line 215
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowabovecolumn4\">
";
                // line 217
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn4", [], "any", false, false, true, 217), 217, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 221
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 225
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 231
        echo "</div>
<div class=\"ttr_slideshow\">
<div class=\"margin_collapsetop\"></div>
<div id=\"ttr_slideshow_inner\">
<ul>
<li id=\"Slide0\" class=\"ttr_slide\" data-slideEffect=\"Fade\">
<div class=\"ttr_slideshow_last\">
<div class=\"ttr_slideshow_element_alignment container\" data-begintime=\"0\" data-effect=\"None\" data-easing=\"linear\" data-slide=\"None\" data-duration=\"0\">
</div>
";
        // line 241
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowshape000", [], "any", false, false, true, 241) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowshape001", [], "any", false, false, true, 241))) {
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowshape000", [], "any", false, false, true, 241);
            // line 242
            if (($context["showcolumn"] ?? null)) {
                // line 243
                echo "<div class=\"ttr_slideshowshape01\" data-effect=\"None\" data-begintime=\"0\" data-duration=\"1\" data-easing=\"linear\" data-slide=\"None\">
";
                // line 244
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowshape000", [], "any", false, false, true, 244), 244, $this->source), "html", null, true);
                echo "
</div>
";
            }
            // line 247
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowshape001", [], "any", false, false, true, 247);
            // line 248
            if (($context["showcolumn"] ?? null)) {
                // line 249
                echo "<div class=\"ttr_slideshowshape02\" data-effect=\"None\" data-begintime=\"0\" data-duration=\"1\" data-easing=\"linear\" data-slide=\"None\">
";
                // line 250
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowshape001", [], "any", false, false, true, 250), 250, $this->source), "html", null, true);
                echo "
</div>
";
            }
        }
        // line 254
        echo "</div>
</li>
</ul>
</div>
<div class=\"ttr_slideshow_in\">
<div class=\"ttr_slideshow_last\">
<div class=\"ttr_slideshow_element_alignment container\">
</div>
<div id=\"nav\"></div>
<div class=\"ttr_slideshow_logo\">
</div>
</div>
</div>
</div>
<div class=\"ttr_banner_slideshow\">
";
        // line 270
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn1", [], "any", false, false, true, 270) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn2", [], "any", false, false, true, 270)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn3", [], "any", false, false, true, 270)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn4", [], "any", false, false, true, 270))) {
            // line 272
            echo "<div class=\"ttr_banner_slideshow_inner_below_widget_container\">
<div class=\"ttr_banner_slideshow_inner_below0 container row\">
";
            // line 274
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn1", [], "any", false, false, true, 274);
            // line 275
            if (($context["showcolumn"] ?? null)) {
                // line 276
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowbelowcolumn1\">
";
                // line 278
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn1", [], "any", false, false, true, 278), 278, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 282
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 286
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 287
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn2", [], "any", false, false, true, 287);
            // line 288
            if (($context["showcolumn"] ?? null)) {
                // line 289
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowbelowcolumn2\">
";
                // line 291
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn2", [], "any", false, false, true, 291), 291, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 295
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 299
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 300
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn3", [], "any", false, false, true, 300);
            // line 301
            if (($context["showcolumn"] ?? null)) {
                // line 302
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowbelowcolumn3\">
";
                // line 304
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn3", [], "any", false, false, true, 304), 304, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 308
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 312
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 313
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn4", [], "any", false, false, true, 313);
            // line 314
            if (($context["showcolumn"] ?? null)) {
                // line 315
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowbelowcolumn4\">
";
                // line 317
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn4", [], "any", false, false, true, 317), 317, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 321
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 325
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 331
        echo "</div>
<div class=\"margin_collapsetop\"></div>
<div id=\"ttr_page\" class=\"container\">
<div id=\"ttr_content_and_sidebar_container\">
<div id=\"ttr_content\">
";
        // line 336
        $context["type"] = twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "getType", [], "any", false, false, true, 336);
        // line 337
        if ((($context["type"] ?? null) == "page")) {
            // line 338
            echo "<div id=\"ttr_html_content_margin\" class=\"container-fluid\">
";
        } else {
            // line 340
            echo "<div id=\"ttr_content_margin\" class=\"container-fluid\">
";
        }
        // line 342
        echo "<div class=\"margin_collapsetop\"></div>
";
        // line 343
        if (($context["breadcrumb"] ?? null)) {
            // line 344
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 344, $this->source), "html", null, true);
            echo "
";
        }
        // line 347
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn1", [], "any", false, false, true, 347) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn2", [], "any", false, false, true, 347)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn3", [], "any", false, false, true, 347)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn4", [], "any", false, false, true, 347))) {
            // line 349
            echo "<div class=\"ttr_topcolumn_widget_container\">
<div class=\"contenttopcolumn0 row\">
";
            // line 351
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn1", [], "any", false, false, true, 351);
            // line 352
            if (($context["showcolumn"] ?? null)) {
                // line 353
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"topcolumn1\">
";
                // line 355
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn1", [], "any", false, false, true, 355), 355, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 359
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 363
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 364
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn2", [], "any", false, false, true, 364);
            // line 365
            if (($context["showcolumn"] ?? null)) {
                // line 366
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"topcolumn2\">
";
                // line 368
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn2", [], "any", false, false, true, 368), 368, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 372
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 376
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 377
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn3", [], "any", false, false, true, 377);
            // line 378
            if (($context["showcolumn"] ?? null)) {
                // line 379
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"topcolumn3\">
";
                // line 381
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn3", [], "any", false, false, true, 381), 381, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 385
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 389
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 390
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn4", [], "any", false, false, true, 390);
            // line 391
            if (($context["showcolumn"] ?? null)) {
                // line 392
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"topcolumn4\">
";
                // line 394
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn4", [], "any", false, false, true, 394), 394, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 398
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 402
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 408
        echo "<div style=\"clear:both;\">
</div>
";
        // line 410
        if (($context["tabs"] ?? null)) {
            // line 411
            echo "<div style=\"clear:both;\" class=\"tabs\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null), 411, $this->source), "html", null, true);
            echo "</div>
";
        }
        // line 413
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 413), 413, $this->source), "html", null, true);
        echo "
";
        // line 414
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "messages", [], "any", false, false, true, 414), 414, $this->source), "html", null, true);
        echo "
";
        // line 415
        if (($context["action_links"] ?? null)) {
            // line 416
            echo "<ul class=\"action-links\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 416, $this->source), "html", null, true);
            echo "</ul>";
        }
        // line 417
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 417), 417, $this->source), "html", null, true);
        echo "
";
        // line 419
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn1", [], "any", false, false, true, 419) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn2", [], "any", false, false, true, 419)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn3", [], "any", false, false, true, 419)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn4", [], "any", false, false, true, 419))) {
            // line 421
            echo "<div class=\"ttr_bottomcolumn_widget_container\">
<div class=\"contentbottomcolumn0 row\">
";
            // line 423
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn1", [], "any", false, false, true, 423);
            // line 424
            if (($context["showcolumn"] ?? null)) {
                // line 425
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"bottomcolumn1\">
";
                // line 427
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn1", [], "any", false, false, true, 427), 427, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 431
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 435
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 436
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn2", [], "any", false, false, true, 436);
            // line 437
            if (($context["showcolumn"] ?? null)) {
                // line 438
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"bottomcolumn2\">
";
                // line 440
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn2", [], "any", false, false, true, 440), 440, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 444
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 448
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 449
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn3", [], "any", false, false, true, 449);
            // line 450
            if (($context["showcolumn"] ?? null)) {
                // line 451
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"bottomcolumn3\">
";
                // line 453
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn3", [], "any", false, false, true, 453), 453, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 457
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 461
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 462
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn4", [], "any", false, false, true, 462);
            // line 463
            if (($context["showcolumn"] ?? null)) {
                // line 464
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"bottomcolumn4\">
";
                // line 466
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn4", [], "any", false, false, true, 466), 466, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 470
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 474
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 480
        echo "<div class=\"margin_collapsetop\"></div>
</div> 
</div> 
<div style=\"clear:both;\">
</div>
</div>
</div>
<div class=\"footer-widget-area\">
<div class=\"footer-widget-area_left_border_image\">
<div class=\"footer-widget-area_right_border_image\">
<div class=\"footer-widget-area_inner\">
";
        // line 492
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn1", [], "any", false, false, true, 492) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn2", [], "any", false, false, true, 492)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn3", [], "any", false, false, true, 492)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn4", [], "any", false, false, true, 492))) {
            // line 494
            echo "<div class=\"ttr_footer-widget-area_inner_above_widget_container\">
<div class=\"ttr_footer-widget-area_inner_above0 container row\">
";
            // line 496
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn1", [], "any", false, false, true, 496);
            // line 497
            if (($context["showcolumn"] ?? null)) {
                // line 498
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerabovecolumn1\">
";
                // line 500
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn1", [], "any", false, false, true, 500), 500, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 504
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 508
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 509
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn2", [], "any", false, false, true, 509);
            // line 510
            if (($context["showcolumn"] ?? null)) {
                // line 511
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerabovecolumn2\">
";
                // line 513
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn2", [], "any", false, false, true, 513), 513, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 517
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 521
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 522
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn3", [], "any", false, false, true, 522);
            // line 523
            if (($context["showcolumn"] ?? null)) {
                // line 524
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerabovecolumn3\">
";
                // line 526
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn3", [], "any", false, false, true, 526), 526, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 530
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 534
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 535
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn4", [], "any", false, false, true, 535);
            // line 536
            if (($context["showcolumn"] ?? null)) {
                // line 537
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerabovecolumn4\">
";
                // line 539
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn4", [], "any", false, false, true, 539), 539, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 543
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 547
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 553
        echo "</div>
</div>
</div>
</div>
<div class=\"margin_collapsetop\"></div>
<footer id=\"ttr_footer\">
<div class=\"margin_collapsetop\"></div>
 <div id=\"ttr_footer_inner\">
";
        // line 562
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn1", [], "any", false, false, true, 562) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn2", [], "any", false, false, true, 562)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn3", [], "any", false, false, true, 562)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn4", [], "any", false, false, true, 562))) {
            // line 564
            echo "<div class=\"ttr_footer-widget-cell_inner_widget_container\">
<div class=\"ttr_footer-widget-cell_inner0 container row\">
";
            // line 566
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn1", [], "any", false, false, true, 566);
            // line 567
            if (($context["showcolumn"] ?? null)) {
                // line 568
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn1\">
";
                // line 570
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn1", [], "any", false, false, true, 570), 570, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 574
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 578
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 579
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn2", [], "any", false, false, true, 579);
            // line 580
            if (($context["showcolumn"] ?? null)) {
                // line 581
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn2\">
";
                // line 583
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn2", [], "any", false, false, true, 583), 583, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 587
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 591
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 592
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn3", [], "any", false, false, true, 592);
            // line 593
            if (($context["showcolumn"] ?? null)) {
                // line 594
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn3\">
";
                // line 596
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn3", [], "any", false, false, true, 596), 596, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 600
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 604
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 605
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn4", [], "any", false, false, true, 605);
            // line 606
            if (($context["showcolumn"] ?? null)) {
                // line 607
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn4\">
";
                // line 609
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn4", [], "any", false, false, true, 609), 609, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 613
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 617
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 623
        echo "<div id=\"ttr_footer_top_for_widgets\">
<div  class=\"ttr_footer_top_for_widgets_inner\">
";
        // line 625
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "leftfooterarea", [], "any", false, false, true, 625) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "centerfooterarea", [], "any", false, false, true, 625)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "rightfooterarea", [], "any", false, false, true, 625))) {
            // line 626
            echo "<div class=\"footer-widget-area_fixed row\">
<div style=\"margin:0 auto;\"></div>
";
            // line 628
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "leftfooterarea", [], "any", false, false, true, 628)) {
                // line 629
                echo "<div  id=\"first\" class=\"widget-area col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
";
                // line 630
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "leftfooterarea", [], "any", false, false, true, 630), 630, $this->source), "html", null, true);
                echo "
</div>
<div class=\" visible-xs d-block\" style=\"clear:both;\"></div>
";
            } else {
                // line 634
                echo "<div  id=\"first\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
 
</div>
<div class=\" visible-xs d-block\"></div>
";
            }
            // line 639
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "centerfooterarea", [], "any", false, false, true, 639)) {
                // line 640
                echo "<div  id=\"second\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
";
                // line 641
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "centerfooterarea", [], "any", false, false, true, 641), 641, $this->source), "html", null, true);
                echo "
</div>
<div class=\" visible-xs d-block\" style=\"clear:both;\"></div>
";
            } else {
                // line 645
                echo "<div  id=\"second\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
 
</div>
<div class=\" visible-xs d-block\" style=\"clear:both;\"></div>
";
            }
            // line 650
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "rightfooterarea", [], "any", false, false, true, 650)) {
                // line 651
                echo "<div  id=\"third\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
";
                // line 652
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "rightfooterarea", [], "any", false, false, true, 652), 652, $this->source), "html", null, true);
                echo "
</div>
<div class=\" visible-lg visible-md visible-sm visible-xs d-xl-block d-lg-block d-md-block d-sm-block d-block\" style=\"clear:both;\"></div>
";
            } else {
                // line 656
                echo "<div  id=\"third\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
 
</div>
<div class=\" visible-lg visible-md visible-sm visible-xs d-xl-block d-lg-block d-md-block d-sm-block d-block\" style=\"clear:both;\"></div>
";
            }
            // line 661
            echo "</div>
";
        }
        // line 663
        echo "</div>
</div>
<div class=\"ttr_footer_bottom_footer\">
<div class=\"ttr_footer_bottom_footer_inner\">
<div class=\"ttr_footer_element_alignment container\">
</div>
<div id=\"ttr_footer_designed_by_links\">
<a href=\"http://templatetoaster.com\" target=\"_self\"> Drupal Theme </a>
<span id=\"ttr_footer_designed_by\"> Designed With TemplateToaster </span>
</div>
";
        // line 673
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 673, $this->source), "html", null, true);
        echo "
<a href=\"http://www.facebook.com/TemplateToaster\" class=\"ttr_footer_facebook \" target=\"_self\" >
</a>
<a href=\"https://www.linkedin.com/company/templatetoaster/\" class=\"ttr_footer_linkedin \" target=\"_self\" >
</a>
<a href=\"http://twitter.com/templatetoaster\" class=\"ttr_footer_twitter \" target=\"_self\" >
</a>
<a href=\"https://plus.google.com/+TemplateToaster\" class=\"ttr_footer_instagram \" target=\"_self\" >
</a>
<a href=\"https://www.youtube.com/templatetoaster\" class=\"ttr_footer_youtube \" target=\"_self\" >
</a>
</div>
</div>
</div>
</footer>
<div class=\"margin_collapsetop\"></div>
<div class=\"footer-widget-area\">
";
        // line 691
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn1", [], "any", false, false, true, 691) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn2", [], "any", false, false, true, 691)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn3", [], "any", false, false, true, 691)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn4", [], "any", false, false, true, 691))) {
            // line 693
            echo "<div class=\"ttr_footer-widget-area_inner_below_widget_container\">
<div class=\"ttr_footer-widget-area_inner_below0 container row\">
";
            // line 695
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn1", [], "any", false, false, true, 695);
            // line 696
            if (($context["showcolumn"] ?? null)) {
                // line 697
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerbelowcolumn1\">
";
                // line 699
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn1", [], "any", false, false, true, 699), 699, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 703
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 707
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 708
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn2", [], "any", false, false, true, 708);
            // line 709
            if (($context["showcolumn"] ?? null)) {
                // line 710
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerbelowcolumn2\">
";
                // line 712
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn2", [], "any", false, false, true, 712), 712, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 716
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 720
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 721
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn3", [], "any", false, false, true, 721);
            // line 722
            if (($context["showcolumn"] ?? null)) {
                // line 723
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerbelowcolumn3\">
";
                // line 725
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn3", [], "any", false, false, true, 725), 725, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 729
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 733
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 734
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn4", [], "any", false, false, true, 734);
            // line 735
            if (($context["showcolumn"] ?? null)) {
                // line 736
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerbelowcolumn4\">
";
                // line 738
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn4", [], "any", false, false, true, 738), 738, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 742
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 746
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 752
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/theme__100198/templates/page--node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1299 => 752,  1291 => 746,  1285 => 742,  1278 => 738,  1274 => 736,  1272 => 735,  1270 => 734,  1267 => 733,  1261 => 729,  1254 => 725,  1250 => 723,  1248 => 722,  1246 => 721,  1243 => 720,  1237 => 716,  1230 => 712,  1226 => 710,  1224 => 709,  1222 => 708,  1219 => 707,  1213 => 703,  1206 => 699,  1202 => 697,  1200 => 696,  1198 => 695,  1194 => 693,  1192 => 691,  1172 => 673,  1160 => 663,  1156 => 661,  1149 => 656,  1142 => 652,  1139 => 651,  1137 => 650,  1130 => 645,  1123 => 641,  1120 => 640,  1118 => 639,  1111 => 634,  1104 => 630,  1101 => 629,  1099 => 628,  1095 => 626,  1093 => 625,  1089 => 623,  1081 => 617,  1075 => 613,  1068 => 609,  1064 => 607,  1062 => 606,  1060 => 605,  1057 => 604,  1051 => 600,  1044 => 596,  1040 => 594,  1038 => 593,  1036 => 592,  1033 => 591,  1027 => 587,  1020 => 583,  1016 => 581,  1014 => 580,  1012 => 579,  1009 => 578,  1003 => 574,  996 => 570,  992 => 568,  990 => 567,  988 => 566,  984 => 564,  982 => 562,  972 => 553,  964 => 547,  958 => 543,  951 => 539,  947 => 537,  945 => 536,  943 => 535,  940 => 534,  934 => 530,  927 => 526,  923 => 524,  921 => 523,  919 => 522,  916 => 521,  910 => 517,  903 => 513,  899 => 511,  897 => 510,  895 => 509,  892 => 508,  886 => 504,  879 => 500,  875 => 498,  873 => 497,  871 => 496,  867 => 494,  865 => 492,  852 => 480,  844 => 474,  838 => 470,  831 => 466,  827 => 464,  825 => 463,  823 => 462,  820 => 461,  814 => 457,  807 => 453,  803 => 451,  801 => 450,  799 => 449,  796 => 448,  790 => 444,  783 => 440,  779 => 438,  777 => 437,  775 => 436,  772 => 435,  766 => 431,  759 => 427,  755 => 425,  753 => 424,  751 => 423,  747 => 421,  745 => 419,  741 => 417,  736 => 416,  734 => 415,  730 => 414,  726 => 413,  720 => 411,  718 => 410,  714 => 408,  706 => 402,  700 => 398,  693 => 394,  689 => 392,  687 => 391,  685 => 390,  682 => 389,  676 => 385,  669 => 381,  665 => 379,  663 => 378,  661 => 377,  658 => 376,  652 => 372,  645 => 368,  641 => 366,  639 => 365,  637 => 364,  634 => 363,  628 => 359,  621 => 355,  617 => 353,  615 => 352,  613 => 351,  609 => 349,  607 => 347,  602 => 344,  600 => 343,  597 => 342,  593 => 340,  589 => 338,  587 => 337,  585 => 336,  578 => 331,  570 => 325,  564 => 321,  557 => 317,  553 => 315,  551 => 314,  549 => 313,  546 => 312,  540 => 308,  533 => 304,  529 => 302,  527 => 301,  525 => 300,  522 => 299,  516 => 295,  509 => 291,  505 => 289,  503 => 288,  501 => 287,  498 => 286,  492 => 282,  485 => 278,  481 => 276,  479 => 275,  477 => 274,  473 => 272,  471 => 270,  454 => 254,  447 => 250,  444 => 249,  442 => 248,  440 => 247,  434 => 244,  431 => 243,  429 => 242,  426 => 241,  415 => 231,  407 => 225,  401 => 221,  394 => 217,  390 => 215,  388 => 214,  386 => 213,  383 => 212,  377 => 208,  370 => 204,  366 => 202,  364 => 201,  362 => 200,  359 => 199,  353 => 195,  346 => 191,  342 => 189,  340 => 188,  338 => 187,  335 => 186,  329 => 182,  322 => 178,  318 => 176,  316 => 175,  314 => 174,  310 => 172,  308 => 170,  304 => 167,  296 => 161,  290 => 157,  283 => 153,  279 => 151,  277 => 150,  275 => 149,  272 => 148,  266 => 144,  259 => 140,  255 => 138,  253 => 137,  251 => 136,  248 => 135,  242 => 131,  235 => 127,  231 => 125,  229 => 124,  227 => 123,  224 => 122,  218 => 118,  211 => 114,  207 => 112,  205 => 111,  203 => 110,  199 => 108,  197 => 106,  182 => 93,  153 => 66,  145 => 60,  139 => 56,  132 => 52,  128 => 50,  126 => 49,  124 => 48,  121 => 47,  115 => 43,  108 => 39,  104 => 37,  102 => 36,  100 => 35,  97 => 34,  91 => 30,  84 => 26,  80 => 24,  78 => 23,  76 => 22,  73 => 21,  67 => 17,  60 => 13,  56 => 11,  54 => 10,  52 => 9,  48 => 7,  46 => 5,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/theme__100198/templates/page--node.html.twig", "C:\\xampp\\htdocs\\drupalfirst\\web\\themes\\theme__100198\\templates\\page--node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 5);
        static $filters = array("escape" => 13);
        static $functions = array("active_theme_path" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                ['active_theme_path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
