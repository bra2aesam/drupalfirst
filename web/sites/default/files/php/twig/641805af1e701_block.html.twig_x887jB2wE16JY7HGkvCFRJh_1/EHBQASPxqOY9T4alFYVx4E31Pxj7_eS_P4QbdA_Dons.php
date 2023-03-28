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

/* themes/theme__100198/templates/block.html.twig */
class __TwigTemplate_e01e169e7d8d541926992fe931b3337093a633d061dc4fb97dd1b2903d199cf0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 4
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 4), 4, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 5
($context["plugin_id"] ?? null), 5, $this->source)))];
        // line 8
        $context["theme_path"] = ($this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["node"] ?? null), 8, $this->source)) . $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath());
        echo " 
 ";
        // line 9
        if (((((((((((((((((((((((((((((((((((((((((((($context["region"] ?? null) == "leftfooterarea") && (($context["style_leftfooterarea"] ?? null) == 0)) || ((($context["region"] ?? null) == "centerfooterarea") && (($context["style_centerfooterarea"] ?? null) == 0))) || ((($context["region"] ?? null) == "rightfooterarea") && (($context["style_rightfooterarea"] ?? null) == 0))) || ((        // line 10
($context["region"] ?? null) == "slideshowshape000") && (($context["style_slideshowshape000"] ?? null) == 0))) || ((        // line 11
($context["region"] ?? null) == "slideshowshape001") && (($context["style_slideshowshape001"] ?? null) == 0))) || ((        // line 12
($context["region"] ?? null) == "slideshowabovecolumn1") && (($context["style_slideshowabovecolumn1"] ?? null) == 0))) || ((        // line 13
($context["region"] ?? null) == "slideshowabovecolumn2") && (($context["style_slideshowabovecolumn2"] ?? null) == 0))) || ((        // line 14
($context["region"] ?? null) == "slideshowabovecolumn3") && (($context["style_slideshowabovecolumn3"] ?? null) == 0))) || ((        // line 15
($context["region"] ?? null) == "slideshowabovecolumn4") && (($context["style_slideshowabovecolumn4"] ?? null) == 0))) || ((        // line 16
($context["region"] ?? null) == "slideshowbelowcolumn1") && (($context["style_slideshowbelowcolumn1"] ?? null) == 0))) || ((        // line 17
($context["region"] ?? null) == "slideshowbelowcolumn2") && (($context["style_slideshowbelowcolumn2"] ?? null) == 0))) || ((        // line 18
($context["region"] ?? null) == "slideshowbelowcolumn3") && (($context["style_slideshowbelowcolumn3"] ?? null) == 0))) || ((        // line 19
($context["region"] ?? null) == "slideshowbelowcolumn4") && (($context["style_slideshowbelowcolumn4"] ?? null) == 0))) || ((        // line 20
($context["region"] ?? null) == "menuabovecolumn1") && (($context["style_menuabovecolumn1"] ?? null) == 0))) || ((        // line 21
($context["region"] ?? null) == "menuabovecolumn2") && (($context["style_menuabovecolumn2"] ?? null) == 0))) || ((        // line 22
($context["region"] ?? null) == "menuabovecolumn3") && (($context["style_menuabovecolumn3"] ?? null) == 0))) || ((        // line 23
($context["region"] ?? null) == "menuabovecolumn4") && (($context["style_menuabovecolumn4"] ?? null) == 0))) || ((        // line 24
($context["region"] ?? null) == "menubelowcolumn1") && (($context["style_menubelowcolumn1"] ?? null) == 0))) || ((        // line 25
($context["region"] ?? null) == "menubelowcolumn2") && (($context["style_menubelowcolumn2"] ?? null) == 0))) || ((        // line 26
($context["region"] ?? null) == "menubelowcolumn3") && (($context["style_menubelowcolumn3"] ?? null) == 0))) || ((        // line 27
($context["region"] ?? null) == "menubelowcolumn4") && (($context["style_menubelowcolumn4"] ?? null) == 0))) || ((        // line 28
($context["region"] ?? null) == "contenttopcolumn1") && (($context["style_contenttopcolumn1"] ?? null) == 0))) || ((        // line 29
($context["region"] ?? null) == "contenttopcolumn2") && (($context["style_contenttopcolumn2"] ?? null) == 0))) || ((        // line 30
($context["region"] ?? null) == "contenttopcolumn3") && (($context["style_contenttopcolumn3"] ?? null) == 0))) || ((        // line 31
($context["region"] ?? null) == "contenttopcolumn4") && (($context["style_contenttopcolumn4"] ?? null) == 0))) || ((        // line 32
($context["region"] ?? null) == "contentbottomcolumn1") && (($context["style_contentbottomcolumn1"] ?? null) == 0))) || ((        // line 33
($context["region"] ?? null) == "contentbottomcolumn2") && (($context["style_contentbottomcolumn2"] ?? null) == 0))) || ((        // line 34
($context["region"] ?? null) == "contentbottomcolumn3") && (($context["style_contentbottomcolumn3"] ?? null) == 0))) || ((        // line 35
($context["region"] ?? null) == "contentbottomcolumn4") && (($context["style_contentbottomcolumn4"] ?? null) == 0))) || ((        // line 36
($context["region"] ?? null) == "footerabovecolumn1") && (($context["style_footerabovecolumn1"] ?? null) == 0))) || ((        // line 37
($context["region"] ?? null) == "footerabovecolumn2") && (($context["style_footerabovecolumn2"] ?? null) == 0))) || ((        // line 38
($context["region"] ?? null) == "footerabovecolumn3") && (($context["style_footerabovecolumn3"] ?? null) == 0))) || ((        // line 39
($context["region"] ?? null) == "footerabovecolumn4") && (($context["style_footerabovecolumn4"] ?? null) == 0))) || ((        // line 40
($context["region"] ?? null) == "footercellcolumn1") && (($context["style_footercellcolumn1"] ?? null) == 0))) || ((        // line 41
($context["region"] ?? null) == "footercellcolumn2") && (($context["style_footercellcolumn2"] ?? null) == 0))) || ((        // line 42
($context["region"] ?? null) == "footercellcolumn3") && (($context["style_footercellcolumn3"] ?? null) == 0))) || ((        // line 43
($context["region"] ?? null) == "footercellcolumn4") && (($context["style_footercellcolumn4"] ?? null) == 0))) || ((        // line 44
($context["region"] ?? null) == "footerbelowcolumn1") && (($context["style_footerbelowcolumn1"] ?? null) == 0))) || ((        // line 45
($context["region"] ?? null) == "footerbelowcolumn2") && (($context["style_footerbelowcolumn2"] ?? null) == 0))) || ((        // line 46
($context["region"] ?? null) == "footerbelowcolumn3") && (($context["style_footerbelowcolumn3"] ?? null) == 0))) || ((        // line 47
($context["region"] ?? null) == "footerbelowcolumn4") && (($context["style_footerbelowcolumn4"] ?? null) == 0)))) {
            // line 48
            echo " 
\t";
            // line 49
            if ((($context["region"] ?? null) == "sidebar_first")) {
                echo " 
<div class= \"ttr_sidebar_left_padding\" >
";
            } else {
                // line 51
                echo " 
";
                // line 52
                if ((($context["region"] ?? null) == "sidebar_second")) {
                    echo " 
<div class= \"ttr_sidebar_right_padding\" >
";
                }
                // line 54
                echo " 
";
            }
            // line 55
            echo " 
";
            // line 56
            if (twig_in_filter("shape", ($context["region"] ?? null))) {
                // line 57
                echo "<div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "ttr_shapes"], "method", false, false, true, 57), 57, $this->source), "html", null, true);
                echo "> 
";
            } else {
                // line 58
                echo " 
";
                // line 59
                if (twig_in_filter("footercellcolumn", ($context["region"] ?? null))) {
                    // line 60
                    echo "<div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "ttr_footer_block"], "method", false, false, true, 60), 60, $this->source), "html", null, true);
                    echo "> 
";
                } else {
                    // line 61
                    echo " 
<div";
                    // line 62
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "ttr_block"], "method", false, false, true, 62), 62, $this->source), "html", null, true);
                    echo "> 
";
                }
                // line 63
                echo " 
";
            }
            // line 64
            echo " 
<div class=\"margin_collapsetop\"></div> 
";
            // line 66
            if (($context["label"] ?? null)) {
                echo " 
<div class=\"ttr_block_header\"> 
";
                // line 68
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 68, $this->source), "html", null, true);
                echo " 
<h3 ";
                // line 69
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "ttr_block_heading"], "method", false, false, true, 69), 69, $this->source), "html", null, true);
                echo "> 
";
                // line 70
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 70, $this->source), "html", null, true);
                echo " </h3> 
";
                // line 71
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 71, $this->source), "html", null, true);
                echo " 
";
            } else {
                // line 72
                echo " 
<div class=\"ttr_block_without_header\"> 
";
            }
            // line 74
            echo " 
</div> 
";
            // line 76
            if (twig_in_filter("shape", ($context["region"] ?? null))) {
                echo " 
";
                // line 77
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 77, $this->source), "html", null, true);
                echo " 
";
            } else {
                // line 78
                echo " 
";
                // line 79
                if (twig_in_filter("footercellcolumn", ($context["region"] ?? null))) {
                    // line 80
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 80, $this->source), "html", null, true);
                    echo "
";
                } else {
                    // line 82
                    echo "<div class = \"ttr_block_content\"> 
";
                    // line 83
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 83, $this->source), "html", null, true);
                    echo "
</div> 
";
                }
            }
            // line 87
            echo "<div class=\"margin_collapsetop\"></div>
</div>
";
        } else {
            // line 89
            echo " 
<div";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 90), 90, $this->source), "html", null, true);
            echo "> 
";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 91, $this->source), "html", null, true);
            echo " 
";
            // line 92
            if (($context["label"] ?? null)) {
                echo " 
<h2";
                // line 93
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 93, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 93, $this->source), "html", null, true);
                echo "</h2> 
";
            }
            // line 94
            echo " 
";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 95, $this->source), "html", null, true);
            echo " 
";
            // line 96
            $this->displayBlock('content', $context, $blocks);
            // line 100
            echo " 
</div> 
";
        }
        // line 102
        echo " 
";
    }

    // line 96
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
<div";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "content"], "method", false, false, true, 97), 97, $this->source), "html", null, true);
        echo "> 
";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 98, $this->source), "html", null, true);
        echo " 
</div> 
";
    }

    public function getTemplateName()
    {
        return "themes/theme__100198/templates/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 98,  260 => 97,  254 => 96,  249 => 102,  244 => 100,  242 => 96,  238 => 95,  235 => 94,  228 => 93,  224 => 92,  220 => 91,  216 => 90,  213 => 89,  208 => 87,  201 => 83,  198 => 82,  193 => 80,  191 => 79,  188 => 78,  183 => 77,  179 => 76,  175 => 74,  170 => 72,  165 => 71,  161 => 70,  157 => 69,  153 => 68,  148 => 66,  144 => 64,  140 => 63,  135 => 62,  132 => 61,  126 => 60,  124 => 59,  121 => 58,  115 => 57,  113 => 56,  110 => 55,  106 => 54,  100 => 52,  97 => 51,  91 => 49,  88 => 48,  86 => 47,  85 => 46,  84 => 45,  83 => 44,  82 => 43,  81 => 42,  80 => 41,  79 => 40,  78 => 39,  77 => 38,  76 => 37,  75 => 36,  74 => 35,  73 => 34,  72 => 33,  71 => 32,  70 => 31,  69 => 30,  68 => 29,  67 => 28,  66 => 27,  65 => 26,  64 => 25,  63 => 24,  62 => 23,  61 => 22,  60 => 21,  59 => 20,  58 => 19,  57 => 18,  56 => 17,  55 => 16,  54 => 15,  53 => 14,  52 => 13,  51 => 12,  50 => 11,  49 => 10,  48 => 9,  44 => 8,  42 => 5,  41 => 4,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/theme__100198/templates/block.html.twig", "C:\\xampp\\htdocs\\drupalfirst\\web\\themes\\theme__100198\\templates\\block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 9, "block" => 96);
        static $filters = array("clean_class" => 4, "escape" => 57);
        static $functions = array("file_url" => 8, "active_theme_path" => 8);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape'],
                ['file_url', 'active_theme_path']
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
