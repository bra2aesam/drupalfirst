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

/* themes/portfolio_theme_explore/templates/page--node.html.twig */
class __TwigTemplate_9fe1ddc5ef0506a994bf265c32ea5020a2d2f9a92422c02992075bda7266aaf2 extends \Twig\Template
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
        echo "<div class=\"margin_collapsetop\"></div>
<div id=\"ttr_page\" class=\"container\">
<div class=\"ttr_banner_menu\">
";
        // line 7
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn1", [], "any", false, false, true, 7) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn2", [], "any", false, false, true, 7)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn3", [], "any", false, false, true, 7)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn4", [], "any", false, false, true, 7))) {
            // line 9
            echo "<div class=\"ttr_banner_menu_inner_above_widget_container\">
<div class=\"ttr_banner_menu_inner_above0 container row\">
";
            // line 11
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn1", [], "any", false, false, true, 11);
            // line 12
            if (($context["showcolumn"] ?? null)) {
                // line 13
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menuabovecolumn1\">
";
                // line 15
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn1", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 19
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 23
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 24
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn2", [], "any", false, false, true, 24);
            // line 25
            if (($context["showcolumn"] ?? null)) {
                // line 26
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menuabovecolumn2\">
";
                // line 28
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn2", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 32
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 36
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 37
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn3", [], "any", false, false, true, 37);
            // line 38
            if (($context["showcolumn"] ?? null)) {
                // line 39
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menuabovecolumn3\">
";
                // line 41
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn3", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 45
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 49
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 50
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn4", [], "any", false, false, true, 50);
            // line 51
            if (($context["showcolumn"] ?? null)) {
                // line 52
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menuabovecolumn4\">
";
                // line 54
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn4", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 58
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 62
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 68
        echo "</div>
<div id=\"ttr_menu\"> 
<div class=\"margin_collapsetop\"></div>
<nav class=\"navbar-default navbar-expand-md navbar\">
<div id=\"ttr_menu_inner_in\"> 
<div class=\"ttr_menu_element_alignment container\">
<div class=\"ttr_images_container\">
</div>
</div>
<div class=\"ttr_images_container\">
<a href=\"\" class=\"menuforeground0 \" target=\"_self\">
</a>
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
        // line 100
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
        echo "
</div>
</div>
</div>
</nav>
</div>
<div class=\"ttr_banner_menu\">
";
        // line 108
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn1", [], "any", false, false, true, 108) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn2", [], "any", false, false, true, 108)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn3", [], "any", false, false, true, 108)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn4", [], "any", false, false, true, 108))) {
            // line 110
            echo "<div class=\"ttr_banner_menu_inner_below_widget_container\">
<div class=\"ttr_banner_menu_inner_below0 container row\">
";
            // line 112
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn1", [], "any", false, false, true, 112);
            // line 113
            if (($context["showcolumn"] ?? null)) {
                // line 114
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menubelowcolumn1\">
";
                // line 116
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn1", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 120
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 124
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 125
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn2", [], "any", false, false, true, 125);
            // line 126
            if (($context["showcolumn"] ?? null)) {
                // line 127
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menubelowcolumn2\">
";
                // line 129
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn2", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 133
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 137
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 138
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn3", [], "any", false, false, true, 138);
            // line 139
            if (($context["showcolumn"] ?? null)) {
                // line 140
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menubelowcolumn3\">
";
                // line 142
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn3", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 146
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 150
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 151
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn4", [], "any", false, false, true, 151);
            // line 152
            if (($context["showcolumn"] ?? null)) {
                // line 153
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menubelowcolumn4\">
";
                // line 155
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn4", [], "any", false, false, true, 155), 155, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 159
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 163
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 169
        echo "</div>
<div class=\"ttr_banner_header\">
";
        // line 172
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerabovecolumn1", [], "any", false, false, true, 172) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerabovecolumn2", [], "any", false, false, true, 172)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerabovecolumn3", [], "any", false, false, true, 172)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerabovecolumn4", [], "any", false, false, true, 172))) {
            // line 174
            echo "<div class=\"ttr_banner_header_inner_above_widget_container\">
<div class=\"ttr_banner_header_inner_above0 container row\">
";
            // line 176
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerabovecolumn1", [], "any", false, false, true, 176);
            // line 177
            if (($context["showcolumn"] ?? null)) {
                // line 178
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"headerabovecolumn1\">
";
                // line 180
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerabovecolumn1", [], "any", false, false, true, 180), 180, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 184
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 188
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 189
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerabovecolumn2", [], "any", false, false, true, 189);
            // line 190
            if (($context["showcolumn"] ?? null)) {
                // line 191
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"headerabovecolumn2\">
";
                // line 193
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerabovecolumn2", [], "any", false, false, true, 193), 193, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 197
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 201
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 202
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerabovecolumn3", [], "any", false, false, true, 202);
            // line 203
            if (($context["showcolumn"] ?? null)) {
                // line 204
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"headerabovecolumn3\">
";
                // line 206
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerabovecolumn3", [], "any", false, false, true, 206), 206, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 210
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 214
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 215
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerabovecolumn4", [], "any", false, false, true, 215);
            // line 216
            if (($context["showcolumn"] ?? null)) {
                // line 217
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"headerabovecolumn4\">
";
                // line 219
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerabovecolumn4", [], "any", false, false, true, 219), 219, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 223
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 227
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 233
        echo "</div>
<header id=\"ttr_header\">
<div class=\"margin_collapsetop\"></div>
<div id=\"ttr_header_inner\">
<div class=\"ttr_header_element_alignment container\">
<div class=\"ttr_images_container\">
</div>
</div>
";
        // line 241
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 241), 241, $this->source), "html", null, true);
        echo " 
<div class=\"ttr_images_container\">
<a href=\"\" class=\"headerforeground01 \" target=\"_self\">
</a>
";
        // line 246
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headershape00", [], "any", false, false, true, 246)) {
            // line 248
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headershape00", [], "any", false, false, true, 248);
            // line 249
            if (($context["showcolumn"] ?? null)) {
                // line 250
                echo "<div class=\"ttr_headershape01\">
";
                // line 251
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headershape00", [], "any", false, false, true, 251), 251, $this->source), "html", null, true);
                echo "
</div>
";
            }
        }
        // line 255
        echo "<a href=\"http://www.facebook.com/\" class=\"ttr_header_facebook \" target=\"_self\">
</a>
<a href=\"https://www.linkedin.com/company//\" class=\"ttr_header_linkedin \" target=\"_self\">
</a>
<a href=\"http://twitter.com/\" class=\"ttr_header_twitter \" target=\"_self\">
</a>
<a href=\"https://plus.google.com/+\" class=\"ttr_header_instagram \" target=\"https://plus.google.com/+\">
</a>
<a href=\"https://www.youtube.com/\" class=\"ttr_header_youtube \" target=\"https://www.youtube.com/\">
</a>
</div>
</div>
</header>
<div class=\"ttr_banner_header\">
";
        // line 270
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerbelowcolumn1", [], "any", false, false, true, 270) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerbelowcolumn2", [], "any", false, false, true, 270)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerbelowcolumn3", [], "any", false, false, true, 270)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerbelowcolumn4", [], "any", false, false, true, 270))) {
            // line 272
            echo "<div class=\"ttr_banner_header_inner_below_widget_container\">
<div class=\"ttr_banner_header_inner_below0 container row\">
";
            // line 274
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerbelowcolumn1", [], "any", false, false, true, 274);
            // line 275
            if (($context["showcolumn"] ?? null)) {
                // line 276
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"headerbelowcolumn1\">
";
                // line 278
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerbelowcolumn1", [], "any", false, false, true, 278), 278, $this->source), "html", null, true);
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
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerbelowcolumn2", [], "any", false, false, true, 287);
            // line 288
            if (($context["showcolumn"] ?? null)) {
                // line 289
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"headerbelowcolumn2\">
";
                // line 291
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerbelowcolumn2", [], "any", false, false, true, 291), 291, $this->source), "html", null, true);
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
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerbelowcolumn3", [], "any", false, false, true, 300);
            // line 301
            if (($context["showcolumn"] ?? null)) {
                // line 302
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"headerbelowcolumn3\">
";
                // line 304
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerbelowcolumn3", [], "any", false, false, true, 304), 304, $this->source), "html", null, true);
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
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerbelowcolumn4", [], "any", false, false, true, 313);
            // line 314
            if (($context["showcolumn"] ?? null)) {
                // line 315
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"headerbelowcolumn4\">
";
                // line 317
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headerbelowcolumn4", [], "any", false, false, true, 317), 317, $this->source), "html", null, true);
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
<div id=\"ttr_content_and_sidebar_container\">
<div id=\"ttr_content\">
";
        // line 334
        $context["type"] = twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "getType", [], "any", false, false, true, 334);
        // line 335
        if ((($context["type"] ?? null) == "page")) {
            // line 336
            echo "<div id=\"ttr_html_content_margin\" class=\"container-fluid\">
";
        } else {
            // line 338
            echo "<div id=\"ttr_content_margin\" class=\"container-fluid\">
";
        }
        // line 340
        echo "<div class=\"margin_collapsetop\"></div>
";
        // line 341
        if (($context["breadcrumb"] ?? null)) {
            // line 342
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 342, $this->source), "html", null, true);
            echo "
";
        }
        // line 345
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn1", [], "any", false, false, true, 345) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn2", [], "any", false, false, true, 345)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn3", [], "any", false, false, true, 345)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn4", [], "any", false, false, true, 345))) {
            // line 347
            echo "<div class=\"ttr_topcolumn_widget_container\">
<div class=\"contenttopcolumn0 row\">
";
            // line 349
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn1", [], "any", false, false, true, 349);
            // line 350
            if (($context["showcolumn"] ?? null)) {
                // line 351
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"topcolumn1\">
";
                // line 353
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn1", [], "any", false, false, true, 353), 353, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 357
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 361
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 362
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn2", [], "any", false, false, true, 362);
            // line 363
            if (($context["showcolumn"] ?? null)) {
                // line 364
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"topcolumn2\">
";
                // line 366
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn2", [], "any", false, false, true, 366), 366, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 370
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 374
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 375
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn3", [], "any", false, false, true, 375);
            // line 376
            if (($context["showcolumn"] ?? null)) {
                // line 377
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"topcolumn3\">
";
                // line 379
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn3", [], "any", false, false, true, 379), 379, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 383
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 387
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 388
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn4", [], "any", false, false, true, 388);
            // line 389
            if (($context["showcolumn"] ?? null)) {
                // line 390
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"topcolumn4\">
";
                // line 392
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn4", [], "any", false, false, true, 392), 392, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 396
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 400
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 406
        echo "<div style=\"clear:both;\">
</div>
";
        // line 408
        if (($context["tabs"] ?? null)) {
            // line 409
            echo "<div style=\"clear:both;\" class=\"tabs\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null), 409, $this->source), "html", null, true);
            echo "</div>
";
        }
        // line 411
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 411), 411, $this->source), "html", null, true);
        echo "
";
        // line 412
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "messages", [], "any", false, false, true, 412), 412, $this->source), "html", null, true);
        echo "
";
        // line 413
        if (($context["action_links"] ?? null)) {
            // line 414
            echo "<ul class=\"action-links\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 414, $this->source), "html", null, true);
            echo "</ul>";
        }
        // line 415
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 415), 415, $this->source), "html", null, true);
        echo "
";
        // line 417
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn1", [], "any", false, false, true, 417) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn2", [], "any", false, false, true, 417)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn3", [], "any", false, false, true, 417)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn4", [], "any", false, false, true, 417))) {
            // line 419
            echo "<div class=\"ttr_bottomcolumn_widget_container\">
<div class=\"contentbottomcolumn0 row\">
";
            // line 421
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn1", [], "any", false, false, true, 421);
            // line 422
            if (($context["showcolumn"] ?? null)) {
                // line 423
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"bottomcolumn1\">
";
                // line 425
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn1", [], "any", false, false, true, 425), 425, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 429
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 433
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 434
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn2", [], "any", false, false, true, 434);
            // line 435
            if (($context["showcolumn"] ?? null)) {
                // line 436
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"bottomcolumn2\">
";
                // line 438
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn2", [], "any", false, false, true, 438), 438, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 442
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 446
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 447
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn3", [], "any", false, false, true, 447);
            // line 448
            if (($context["showcolumn"] ?? null)) {
                // line 449
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"bottomcolumn3\">
";
                // line 451
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn3", [], "any", false, false, true, 451), 451, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 455
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 459
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 460
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn4", [], "any", false, false, true, 460);
            // line 461
            if (($context["showcolumn"] ?? null)) {
                // line 462
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"bottomcolumn4\">
";
                // line 464
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn4", [], "any", false, false, true, 464), 464, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 468
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 472
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 478
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
        // line 490
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn1", [], "any", false, false, true, 490) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn2", [], "any", false, false, true, 490)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn3", [], "any", false, false, true, 490)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn4", [], "any", false, false, true, 490))) {
            // line 492
            echo "<div class=\"ttr_footer-widget-area_inner_above_widget_container\">
<div class=\"ttr_footer-widget-area_inner_above0 container row\">
";
            // line 494
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn1", [], "any", false, false, true, 494);
            // line 495
            if (($context["showcolumn"] ?? null)) {
                // line 496
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerabovecolumn1\">
";
                // line 498
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn1", [], "any", false, false, true, 498), 498, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 502
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 506
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 507
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn2", [], "any", false, false, true, 507);
            // line 508
            if (($context["showcolumn"] ?? null)) {
                // line 509
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerabovecolumn2\">
";
                // line 511
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn2", [], "any", false, false, true, 511), 511, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 515
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 519
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 520
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn3", [], "any", false, false, true, 520);
            // line 521
            if (($context["showcolumn"] ?? null)) {
                // line 522
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerabovecolumn3\">
";
                // line 524
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn3", [], "any", false, false, true, 524), 524, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 528
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 532
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 533
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn4", [], "any", false, false, true, 533);
            // line 534
            if (($context["showcolumn"] ?? null)) {
                // line 535
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerabovecolumn4\">
";
                // line 537
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn4", [], "any", false, false, true, 537), 537, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 541
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 545
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 551
        echo "</div>
</div>
</div>
</div>
<div class=\"margin_collapsetop\"></div>
<footer id=\"ttr_footer\">
<div class=\"margin_collapsetop\"></div>
 <div id=\"ttr_footer_inner\">
";
        // line 560
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn1", [], "any", false, false, true, 560) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn2", [], "any", false, false, true, 560)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn3", [], "any", false, false, true, 560)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn4", [], "any", false, false, true, 560))) {
            // line 562
            echo "<div class=\"ttr_footer-widget-cell_inner_widget_container\">
<div class=\"ttr_footer-widget-cell_inner0 container row\">
";
            // line 564
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn1", [], "any", false, false, true, 564);
            // line 565
            if (($context["showcolumn"] ?? null)) {
                // line 566
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn1\">
";
                // line 568
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn1", [], "any", false, false, true, 568), 568, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 572
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 576
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 577
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn2", [], "any", false, false, true, 577);
            // line 578
            if (($context["showcolumn"] ?? null)) {
                // line 579
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn2\">
";
                // line 581
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn2", [], "any", false, false, true, 581), 581, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 585
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 589
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 590
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn3", [], "any", false, false, true, 590);
            // line 591
            if (($context["showcolumn"] ?? null)) {
                // line 592
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn3\">
";
                // line 594
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn3", [], "any", false, false, true, 594), 594, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 598
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 602
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 603
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn4", [], "any", false, false, true, 603);
            // line 604
            if (($context["showcolumn"] ?? null)) {
                // line 605
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn4\">
";
                // line 607
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn4", [], "any", false, false, true, 607), 607, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 611
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 615
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 621
        echo "<div id=\"ttr_footer_top_for_widgets\">
<div  class=\"ttr_footer_top_for_widgets_inner\">
";
        // line 623
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "leftfooterarea", [], "any", false, false, true, 623) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "centerfooterarea", [], "any", false, false, true, 623)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "rightfooterarea", [], "any", false, false, true, 623))) {
            // line 624
            echo "<div class=\"footer-widget-area_fixed row\">
<div style=\"margin:0 auto;\"></div>
";
            // line 626
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "leftfooterarea", [], "any", false, false, true, 626)) {
                // line 627
                echo "<div  id=\"first\" class=\"widget-area col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
";
                // line 628
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "leftfooterarea", [], "any", false, false, true, 628), 628, $this->source), "html", null, true);
                echo "
</div>
<div class=\" visible-xs d-block\" style=\"clear:both;\"></div>
";
            } else {
                // line 632
                echo "<div  id=\"first\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
 
</div>
<div class=\" visible-xs d-block\"></div>
";
            }
            // line 637
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "centerfooterarea", [], "any", false, false, true, 637)) {
                // line 638
                echo "<div  id=\"second\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
";
                // line 639
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "centerfooterarea", [], "any", false, false, true, 639), 639, $this->source), "html", null, true);
                echo "
</div>
<div class=\" visible-xs d-block\" style=\"clear:both;\"></div>
";
            } else {
                // line 643
                echo "<div  id=\"second\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
 
</div>
<div class=\" visible-xs d-block\" style=\"clear:both;\"></div>
";
            }
            // line 648
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "rightfooterarea", [], "any", false, false, true, 648)) {
                // line 649
                echo "<div  id=\"third\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
";
                // line 650
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "rightfooterarea", [], "any", false, false, true, 650), 650, $this->source), "html", null, true);
                echo "
</div>
<div class=\" visible-lg visible-md visible-sm visible-xs d-xl-block d-lg-block d-md-block d-sm-block d-block\" style=\"clear:both;\"></div>
";
            } else {
                // line 654
                echo "<div  id=\"third\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
 
</div>
<div class=\" visible-lg visible-md visible-sm visible-xs d-xl-block d-lg-block d-md-block d-sm-block d-block\" style=\"clear:both;\"></div>
";
            }
            // line 659
            echo "</div>
";
        }
        // line 661
        echo "</div>
</div>
<div class=\"ttr_footer_bottom_footer\">
<div class=\"ttr_footer_bottom_footer_inner\">
<div class=\"ttr_footer_element_alignment container\">
</div>
<div id=\"ttr_footer_designed_by_links\">
</div>
";
        // line 669
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 669, $this->source), "html", null, true);
        echo "
<a href=\"http://www.facebook.com/\" class=\"ttr_footer_facebook \" target=\"_self\" >
</a>
<a href=\"https://www.linkedin.com/company/\" class=\"ttr_footer_linkedin \" target=\"_self\" >
</a>
<a href=\"http://twitter.com/\" class=\"ttr_footer_twitter \" target=\"_self\" >
</a>
<a href=\"https://plus.google.com/+\" class=\"ttr_footer_instagram \" target=\"_self\" >
</a>
<a href=\"https://www.youtube.com/\" class=\"ttr_footer_youtube \" target=\"_self\" >
</a>
</div>
</div>
</div>
</footer>
<div class=\"margin_collapsetop\"></div>
<div class=\"footer-widget-area\">
";
        // line 687
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn1", [], "any", false, false, true, 687) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn2", [], "any", false, false, true, 687)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn3", [], "any", false, false, true, 687)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn4", [], "any", false, false, true, 687))) {
            // line 689
            echo "<div class=\"ttr_footer-widget-area_inner_below_widget_container\">
<div class=\"ttr_footer-widget-area_inner_below0 container row\">
";
            // line 691
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn1", [], "any", false, false, true, 691);
            // line 692
            if (($context["showcolumn"] ?? null)) {
                // line 693
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerbelowcolumn1\">
";
                // line 695
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn1", [], "any", false, false, true, 695), 695, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 699
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 703
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 704
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn2", [], "any", false, false, true, 704);
            // line 705
            if (($context["showcolumn"] ?? null)) {
                // line 706
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerbelowcolumn2\">
";
                // line 708
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn2", [], "any", false, false, true, 708), 708, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 712
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 716
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 717
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn3", [], "any", false, false, true, 717);
            // line 718
            if (($context["showcolumn"] ?? null)) {
                // line 719
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerbelowcolumn3\">
";
                // line 721
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn3", [], "any", false, false, true, 721), 721, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 725
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 729
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 730
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn4", [], "any", false, false, true, 730);
            // line 731
            if (($context["showcolumn"] ?? null)) {
                // line 732
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerbelowcolumn4\">
";
                // line 734
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn4", [], "any", false, false, true, 734), 734, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 738
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 742
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 748
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/portfolio_theme_explore/templates/page--node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1290 => 748,  1282 => 742,  1276 => 738,  1269 => 734,  1265 => 732,  1263 => 731,  1261 => 730,  1258 => 729,  1252 => 725,  1245 => 721,  1241 => 719,  1239 => 718,  1237 => 717,  1234 => 716,  1228 => 712,  1221 => 708,  1217 => 706,  1215 => 705,  1213 => 704,  1210 => 703,  1204 => 699,  1197 => 695,  1193 => 693,  1191 => 692,  1189 => 691,  1185 => 689,  1183 => 687,  1163 => 669,  1153 => 661,  1149 => 659,  1142 => 654,  1135 => 650,  1132 => 649,  1130 => 648,  1123 => 643,  1116 => 639,  1113 => 638,  1111 => 637,  1104 => 632,  1097 => 628,  1094 => 627,  1092 => 626,  1088 => 624,  1086 => 623,  1082 => 621,  1074 => 615,  1068 => 611,  1061 => 607,  1057 => 605,  1055 => 604,  1053 => 603,  1050 => 602,  1044 => 598,  1037 => 594,  1033 => 592,  1031 => 591,  1029 => 590,  1026 => 589,  1020 => 585,  1013 => 581,  1009 => 579,  1007 => 578,  1005 => 577,  1002 => 576,  996 => 572,  989 => 568,  985 => 566,  983 => 565,  981 => 564,  977 => 562,  975 => 560,  965 => 551,  957 => 545,  951 => 541,  944 => 537,  940 => 535,  938 => 534,  936 => 533,  933 => 532,  927 => 528,  920 => 524,  916 => 522,  914 => 521,  912 => 520,  909 => 519,  903 => 515,  896 => 511,  892 => 509,  890 => 508,  888 => 507,  885 => 506,  879 => 502,  872 => 498,  868 => 496,  866 => 495,  864 => 494,  860 => 492,  858 => 490,  845 => 478,  837 => 472,  831 => 468,  824 => 464,  820 => 462,  818 => 461,  816 => 460,  813 => 459,  807 => 455,  800 => 451,  796 => 449,  794 => 448,  792 => 447,  789 => 446,  783 => 442,  776 => 438,  772 => 436,  770 => 435,  768 => 434,  765 => 433,  759 => 429,  752 => 425,  748 => 423,  746 => 422,  744 => 421,  740 => 419,  738 => 417,  734 => 415,  729 => 414,  727 => 413,  723 => 412,  719 => 411,  713 => 409,  711 => 408,  707 => 406,  699 => 400,  693 => 396,  686 => 392,  682 => 390,  680 => 389,  678 => 388,  675 => 387,  669 => 383,  662 => 379,  658 => 377,  656 => 376,  654 => 375,  651 => 374,  645 => 370,  638 => 366,  634 => 364,  632 => 363,  630 => 362,  627 => 361,  621 => 357,  614 => 353,  610 => 351,  608 => 350,  606 => 349,  602 => 347,  600 => 345,  595 => 342,  593 => 341,  590 => 340,  586 => 338,  582 => 336,  580 => 335,  578 => 334,  573 => 331,  565 => 325,  559 => 321,  552 => 317,  548 => 315,  546 => 314,  544 => 313,  541 => 312,  535 => 308,  528 => 304,  524 => 302,  522 => 301,  520 => 300,  517 => 299,  511 => 295,  504 => 291,  500 => 289,  498 => 288,  496 => 287,  493 => 286,  487 => 282,  480 => 278,  476 => 276,  474 => 275,  472 => 274,  468 => 272,  466 => 270,  450 => 255,  443 => 251,  440 => 250,  438 => 249,  436 => 248,  434 => 246,  427 => 241,  417 => 233,  409 => 227,  403 => 223,  396 => 219,  392 => 217,  390 => 216,  388 => 215,  385 => 214,  379 => 210,  372 => 206,  368 => 204,  366 => 203,  364 => 202,  361 => 201,  355 => 197,  348 => 193,  344 => 191,  342 => 190,  340 => 189,  337 => 188,  331 => 184,  324 => 180,  320 => 178,  318 => 177,  316 => 176,  312 => 174,  310 => 172,  306 => 169,  298 => 163,  292 => 159,  285 => 155,  281 => 153,  279 => 152,  277 => 151,  274 => 150,  268 => 146,  261 => 142,  257 => 140,  255 => 139,  253 => 138,  250 => 137,  244 => 133,  237 => 129,  233 => 127,  231 => 126,  229 => 125,  226 => 124,  220 => 120,  213 => 116,  209 => 114,  207 => 113,  205 => 112,  201 => 110,  199 => 108,  189 => 100,  155 => 68,  147 => 62,  141 => 58,  134 => 54,  130 => 52,  128 => 51,  126 => 50,  123 => 49,  117 => 45,  110 => 41,  106 => 39,  104 => 38,  102 => 37,  99 => 36,  93 => 32,  86 => 28,  82 => 26,  80 => 25,  78 => 24,  75 => 23,  69 => 19,  62 => 15,  58 => 13,  56 => 12,  54 => 11,  50 => 9,  48 => 7,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/portfolio_theme_explore/templates/page--node.html.twig", "C:\\xampp\\htdocs\\drupalfirst\\web\\themes\\portfolio_theme_explore\\templates\\page--node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 7);
        static $filters = array("escape" => 15);
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
