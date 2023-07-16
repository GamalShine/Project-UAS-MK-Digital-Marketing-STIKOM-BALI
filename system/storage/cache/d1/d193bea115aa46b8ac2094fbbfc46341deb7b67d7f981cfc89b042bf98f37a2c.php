<?php

/* extension/theme/materialize.twig */
class __TwigTemplate_b819a2b54071d4584fba365dc0bc6e9895536fa22a1a9a393ce0be7666ad93e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<button type=\"button\" form=\"form-theme-materialize\" id=\"apply-btn\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_apply"]) ? $context["button_apply"] : null);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-repeat\"></i></button>
\t\t\t</div>
\t\t\t<h1>";
        // line 8
        echo (isset($context["materialize_title"]) ? $context["materialize_title"] : null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "\t\t\t\t<li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t<form action=\"";
        // line 17
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" data-action=\"";
        echo (isset($context["apply"]) ? $context["apply"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-theme-materialize\" class=\"form-horizontal\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12 col-md-8\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\"><h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 21
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3></div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<ul id=\"apply-tab\" class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-colors\" data-toggle=\"tab\">";
        // line 24
        echo (isset($context["text_colors"]) ? $context["text_colors"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 25
        echo (isset($context["text_image"]) ? $context["text_image"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-product\" data-toggle=\"tab\">";
        // line 26
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-footer\" data-toggle=\"tab\">";
        // line 27
        echo (isset($context["text_footer"]) ? $context["text_footer"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-common\" data-toggle=\"tab\">";
        // line 28
        echo (isset($context["text_common"]) ? $context["text_common"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t";
        // line 29
        if ((isset($context["materializeapi"]) ? $context["materializeapi"] : null)) {
            echo "<li><a href=\"#tab-materializeapi\" data-toggle=\"tab\">";
            echo (isset($context["text_about_template"]) ? $context["text_about_template"] : null);
            echo "</a></li>";
        }
        // line 30
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-colors\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 34
        echo (isset($context["entry_colors"]) ? $context["entry_colors"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>&nbsp;";
        // line 35
        echo (isset($context["help_colors"]) ? $context["help_colors"] : null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" id=\"tab-colors-pills\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-color-common\" data-toggle=\"tab\">";
        // line 39
        echo (isset($context["text_common"]) ? $context["text_common"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-color-header\" data-toggle=\"tab\">";
        // line 40
        echo (isset($context["text_header"]) ? $context["text_header"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-color-footer\" data-toggle=\"tab\">";
        // line 41
        echo (isset($context["text_footer"]) ? $context["text_footer"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-color-common\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-color-common__buttons\" data-toggle=\"tab\">";
        // line 48
        echo (isset($context["text_buttons"]) ? $context["text_buttons"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-color-common__mobile\" data-toggle=\"tab\">";
        // line 49
        echo (isset($context["text_mobile"]) ? $context["text_mobile"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-color-common__buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 54
        echo (isset($context["entry_background"]) ? $context["entry_background"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_background\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 58
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_background"]) ? $context["theme_materialize_color_background"] : null))) {
                // line 59
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 61
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 63
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 68
        echo (isset($context["entry_cart_btn"]) ? $context["entry_cart_btn"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_cart_btn\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 72
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_cart_btn"]) ? $context["theme_materialize_color_cart_btn"] : null))) {
                // line 73
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 75
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 77
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_cart_btn_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors_text"]) ? $context["theme_materialize_colors_text"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 81
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_cart_btn_text"]) ? $context["theme_materialize_color_cart_btn_text"] : null))) {
                // line 82
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 84
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 86
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 91
        echo (isset($context["entry_total_btn"]) ? $context["entry_total_btn"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_total_btn\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 95
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_total_btn"]) ? $context["theme_materialize_color_total_btn"] : null))) {
                // line 96
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 98
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 100
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_total_btn_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors_text"]) ? $context["theme_materialize_colors_text"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 104
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_total_btn_text"]) ? $context["theme_materialize_color_total_btn_text"] : null))) {
                // line 105
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 107
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 109
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 114
        echo (isset($context["entry_compare_btn"]) ? $context["entry_compare_btn"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_compare_btn\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 118
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_compare_btn"]) ? $context["theme_materialize_color_compare_btn"] : null))) {
                // line 119
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 121
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 123
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_compare_btn_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors_text"]) ? $context["theme_materialize_colors_text"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 127
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_compare_btn_text"]) ? $context["theme_materialize_color_compare_btn_text"] : null))) {
                // line 128
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 130
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 132
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 137
        echo (isset($context["entry_tot_cmp_btn"]) ? $context["entry_tot_cmp_btn"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_compare_total_btn\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 141
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_compare_total_btn"]) ? $context["theme_materialize_color_compare_total_btn"] : null))) {
                // line 142
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 144
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 146
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_compare_total_btn_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors_text"]) ? $context["theme_materialize_colors_text"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 150
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_compare_total_btn_text"]) ? $context["theme_materialize_color_compare_total_btn_text"] : null))) {
                // line 151
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 153
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 155
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 160
        echo (isset($context["entry_btt_btn"]) ? $context["entry_btt_btn"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_btt_btn\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 164
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_btt_btn"]) ? $context["theme_materialize_color_btt_btn"] : null))) {
                // line 165
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 167
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 169
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_btt_btn_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors_text"]) ? $context["theme_materialize_colors_text"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 173
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_btt_btn_text"]) ? $context["theme_materialize_color_btt_btn_text"] : null))) {
                // line 174
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 176
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 178
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-color-common__mobile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 185
        echo (isset($context["entry_bar"]) ? $context["entry_bar"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_browser_bar\" id=\"select-color-browser-bar\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 189
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_browser_bar"]) ? $context["theme_materialize_color_browser_bar"] : null))) {
                // line 190
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" data-hex=\"#";
                echo $this->getAttribute($context["color"], "hex", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 192
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" data-hex=\"#";
                echo $this->getAttribute($context["color"], "hex", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 194
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_materialize_color_browser_bar_hex\" value=\"";
        // line 196
        echo (((isset($context["theme_materialize_color_browser_bar_hex"]) ? $context["theme_materialize_color_browser_bar_hex"] : null)) ? ((isset($context["theme_materialize_color_browser_bar_hex"]) ? $context["theme_materialize_color_browser_bar_hex"] : null)) : (""));
        echo "\" id=\"input-color-browser-bar-hex\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 200
        echo (isset($context["entry_nav_btn"]) ? $context["entry_nav_btn"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_nav_btn\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 204
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_nav_btn"]) ? $context["theme_materialize_color_nav_btn"] : null))) {
                // line 205
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 207
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 209
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_nav_btn_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors_text"]) ? $context["theme_materialize_colors_text"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 213
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_nav_btn_text"]) ? $context["theme_materialize_color_nav_btn_text"] : null))) {
                // line 214
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 216
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 218
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-color-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-color-header__desktop\" data-toggle=\"tab\">";
        // line 227
        echo (isset($context["text_desktop"]) ? $context["text_desktop"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-color-header__mobile\" data-toggle=\"tab\">";
        // line 228
        echo (isset($context["text_mobile"]) ? $context["text_mobile"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-color-header__desktop\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 233
        echo (isset($context["entry_top_menu"]) ? $context["entry_top_menu"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_top_menu\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 237
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_top_menu"]) ? $context["theme_materialize_color_top_menu"] : null))) {
                // line 238
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 240
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 242
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_top_menu_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors_text"]) ? $context["theme_materialize_colors_text"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 246
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_top_menu_text"]) ? $context["theme_materialize_color_top_menu_text"] : null))) {
                // line 247
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 249
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 251
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 252
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 256
        echo (isset($context["entry_header"]) ? $context["entry_header"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_header\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 259
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 260
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_header"]) ? $context["theme_materialize_color_header"] : null))) {
                // line 261
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 263
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 265
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_header_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 268
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors_text"]) ? $context["theme_materialize_colors_text"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 269
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_header_text"]) ? $context["theme_materialize_color_header_text"] : null))) {
                // line 270
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 272
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 274
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 275
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 279
        echo (isset($context["entry_navigation"]) ? $context["entry_navigation"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_navigation\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 282
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 283
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_navigation"]) ? $context["theme_materialize_color_navigation"] : null))) {
                // line 284
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 286
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 288
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_navigation_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 291
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors_text"]) ? $context["theme_materialize_colors_text"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 292
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_navigation_text"]) ? $context["theme_materialize_color_navigation_text"] : null))) {
                // line 293
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 295
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 297
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 298
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 302
        echo (isset($context["entry_search"]) ? $context["entry_search"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_search\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 305
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 306
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_search"]) ? $context["theme_materialize_color_search"] : null))) {
                // line 307
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 309
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 311
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 312
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-color-header__mobile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 318
        echo (isset($context["entry_sidebar"]) ? $context["entry_sidebar"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_sidebar\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 321
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 322
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_sidebar"]) ? $context["theme_materialize_color_sidebar"] : null))) {
                // line 323
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 325
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 327
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 328
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_sidebar_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 330
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors_text"]) ? $context["theme_materialize_colors_text"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 331
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_sidebar_text"]) ? $context["theme_materialize_color_sidebar_text"] : null))) {
                // line 332
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 334
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 336
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 341
        echo (isset($context["entry_mob_search"]) ? $context["entry_mob_search"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_mobile_search\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 344
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 345
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_mobile_search"]) ? $context["theme_materialize_color_mobile_search"] : null))) {
                // line 346
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 348
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 350
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 351
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-color-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-color-footer__common\" data-toggle=\"tab\">";
        // line 359
        echo (isset($context["text_common"]) ? $context["text_common"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-color-footer__common\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 364
        echo (isset($context["entry_footer"]) ? $context["entry_footer"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_footer\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 367
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors"]) ? $context["theme_materialize_colors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 368
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_footer"]) ? $context["theme_materialize_color_footer"] : null))) {
                // line 369
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 371
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 373
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 374
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_footer_text\" id=\"input-color-footer-text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 376
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_materialize_colors_text"]) ? $context["theme_materialize_colors_text"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 377
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["color"], "name", array()) == (isset($context["theme_materialize_color_footer_text"]) ? $context["theme_materialize_color_footer_text"] : null))) {
                // line 378
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" data-hex=\"#";
                echo $this->getAttribute($context["color"], "hex", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\" selected=\"selected\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 380
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" data-hex=\"#";
                echo $this->getAttribute($context["color"], "hex", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["color"], "name", array());
                echo "\" style=\"background: #";
                echo $this->getAttribute($context["color"], "hex", array());
                echo ";\">";
                echo $this->getAttribute($context["color"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 382
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 383
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-image\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 396
        echo (isset($context["text_image"]) ? $context["text_image"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-zoom\">";
        // line 398
        echo (isset($context["text_imagezoom"]) ? $context["text_imagezoom"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_image_zoom\" id=\"input-image-zoom\" class=\"selectpicker show-tick\" data-width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 401
        if ((isset($context["theme_materialize_image_zoom"]) ? $context["theme_materialize_image_zoom"] : null)) {
            // line 402
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 403
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 405
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 406
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 408
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-category-width\">";
        // line 412
        echo (isset($context["entry_image_category"]) ? $context["entry_image_category"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_category_width\" value=\"";
        // line 416
        echo (isset($context["theme_materialize_image_category_width"]) ? $context["theme_materialize_image_category_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-category-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_category_height\" value=\"";
        // line 419
        echo (isset($context["theme_materialize_image_category_height"]) ? $context["theme_materialize_image_category_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 422
        if ((isset($context["error_image_category"]) ? $context["error_image_category"] : null)) {
            // line 423
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_image_category"]) ? $context["error_image_category"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 425
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-thumb-width\">";
        // line 428
        echo (isset($context["entry_image_thumb"]) ? $context["entry_image_thumb"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_thumb_width\" value=\"";
        // line 432
        echo (isset($context["theme_materialize_image_thumb_width"]) ? $context["theme_materialize_image_thumb_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-thumb-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_thumb_height\" value=\"";
        // line 435
        echo (isset($context["theme_materialize_image_thumb_height"]) ? $context["theme_materialize_image_thumb_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 438
        if ((isset($context["error_image_thumb"]) ? $context["error_image_thumb"] : null)) {
            // line 439
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_image_thumb"]) ? $context["error_image_thumb"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 441
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-popup-width\">";
        // line 444
        echo (isset($context["entry_image_popup"]) ? $context["entry_image_popup"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_popup_width\" value=\"";
        // line 448
        echo (isset($context["theme_materialize_image_popup_width"]) ? $context["theme_materialize_image_popup_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-popup-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_popup_height\" value=\"";
        // line 451
        echo (isset($context["theme_materialize_image_popup_height"]) ? $context["theme_materialize_image_popup_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 454
        if ((isset($context["error_image_popup"]) ? $context["error_image_popup"] : null)) {
            // line 455
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_image_popup"]) ? $context["error_image_popup"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 457
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-product-width\">";
        // line 460
        echo (isset($context["entry_image_product"]) ? $context["entry_image_product"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_product_width\" value=\"";
        // line 464
        echo (isset($context["theme_materialize_image_product_width"]) ? $context["theme_materialize_image_product_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-product-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_product_height\" value=\"";
        // line 467
        echo (isset($context["theme_materialize_image_product_height"]) ? $context["theme_materialize_image_product_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 470
        if ((isset($context["error_image_product"]) ? $context["error_image_product"] : null)) {
            // line 471
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_image_product"]) ? $context["error_image_product"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 473
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-additional-width\">";
        // line 476
        echo (isset($context["entry_image_additional"]) ? $context["entry_image_additional"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_additional_width\" value=\"";
        // line 480
        echo (isset($context["theme_materialize_image_additional_width"]) ? $context["theme_materialize_image_additional_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-additional-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_additional_height\" value=\"";
        // line 483
        echo (isset($context["theme_materialize_image_additional_height"]) ? $context["theme_materialize_image_additional_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 486
        if ((isset($context["error_image_additional"]) ? $context["error_image_additional"] : null)) {
            // line 487
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_image_additional"]) ? $context["error_image_additional"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 489
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-related\">";
        // line 492
        echo (isset($context["entry_image_related"]) ? $context["entry_image_related"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_related_width\" value=\"";
        // line 496
        echo (isset($context["theme_materialize_image_related_width"]) ? $context["theme_materialize_image_related_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-related\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_related_height\" value=\"";
        // line 499
        echo (isset($context["theme_materialize_image_related_height"]) ? $context["theme_materialize_image_related_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 502
        if ((isset($context["error_image_related"]) ? $context["error_image_related"] : null)) {
            // line 503
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_image_related"]) ? $context["error_image_related"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 505
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-compare\">";
        // line 508
        echo (isset($context["entry_image_compare"]) ? $context["entry_image_compare"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_compare_width\" value=\"";
        // line 512
        echo (isset($context["theme_materialize_image_compare_width"]) ? $context["theme_materialize_image_compare_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-compare\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_compare_height\" value=\"";
        // line 515
        echo (isset($context["theme_materialize_image_compare_height"]) ? $context["theme_materialize_image_compare_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 518
        if ((isset($context["error_image_compare"]) ? $context["error_image_compare"] : null)) {
            // line 519
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_image_compare"]) ? $context["error_image_compare"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 521
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-wishlist\">";
        // line 524
        echo (isset($context["entry_image_wishlist"]) ? $context["entry_image_wishlist"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_wishlist_width\" value=\"";
        // line 528
        echo (isset($context["theme_materialize_image_wishlist_width"]) ? $context["theme_materialize_image_wishlist_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-wishlist\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_wishlist_height\" value=\"";
        // line 531
        echo (isset($context["theme_materialize_image_wishlist_height"]) ? $context["theme_materialize_image_wishlist_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 534
        if ((isset($context["error_image_wishlist"]) ? $context["error_image_wishlist"] : null)) {
            // line 535
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_image_wishlist"]) ? $context["error_image_wishlist"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 537
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-cart\">";
        // line 540
        echo (isset($context["entry_image_cart"]) ? $context["entry_image_cart"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_cart_width\" value=\"";
        // line 544
        echo (isset($context["theme_materialize_image_cart_width"]) ? $context["theme_materialize_image_cart_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-cart\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_cart_height\" value=\"";
        // line 547
        echo (isset($context["theme_materialize_image_cart_height"]) ? $context["theme_materialize_image_cart_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 550
        if ((isset($context["error_image_cart"]) ? $context["error_image_cart"] : null)) {
            // line 551
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_image_cart"]) ? $context["error_image_cart"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 553
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-location\">";
        // line 556
        echo (isset($context["entry_image_location"]) ? $context["entry_image_location"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_location_width\" value=\"";
        // line 560
        echo (isset($context["theme_materialize_image_location_width"]) ? $context["theme_materialize_image_location_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-location\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_location_height\" value=\"";
        // line 563
        echo (isset($context["theme_materialize_image_location_height"]) ? $context["theme_materialize_image_location_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 566
        if ((isset($context["error_image_location"]) ? $context["error_image_location"] : null)) {
            // line 567
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_image_location"]) ? $context["error_image_location"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 569
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-product\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 575
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-catalog-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 577
        echo (isset($context["help_product_limit"]) ? $context["help_product_limit"] : null);
        echo "\">";
        echo (isset($context["entry_product_limit"]) ? $context["entry_product_limit"] : null);
        echo ":</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_product_limit\" value=\"";
        // line 579
        echo (isset($context["theme_materialize_product_limit"]) ? $context["theme_materialize_product_limit"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_product_limit"]) ? $context["entry_product_limit"] : null);
        echo "\" id=\"input-catalog-limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 580
        if ((isset($context["error_product_limit"]) ? $context["error_product_limit"] : null)) {
            // line 581
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_product_limit"]) ? $context["error_product_limit"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 583
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-description-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 586
        echo (isset($context["help_product_description_length"]) ? $context["help_product_description_length"] : null);
        echo "\">";
        echo (isset($context["entry_product_description_length"]) ? $context["entry_product_description_length"] : null);
        echo ":</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_product_description_length\" value=\"";
        // line 588
        echo (isset($context["theme_materialize_product_description_length"]) ? $context["theme_materialize_product_description_length"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_product_description_length"]) ? $context["entry_product_description_length"] : null);
        echo "\" id=\"input-description-limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 589
        if ((isset($context["error_product_description_length"]) ? $context["error_product_description_length"] : null)) {
            // line 590
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_product_description_length"]) ? $context["error_product_description_length"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 592
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 597
        echo (isset($context["entry_show_fields"]) ? $context["entry_show_fields"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10 col-sm-push-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 603
        if ((isset($context["theme_materialize_show_model"]) ? $context["theme_materialize_show_model"] : null)) {
            // line 604
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_model\" value=\"1\" id=\"show-model\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 606
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_model\" value=\"1\" id=\"show-model\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 608
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-model\">";
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 611
        if ((isset($context["theme_materialize_show_sku"]) ? $context["theme_materialize_show_sku"] : null)) {
            // line 612
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_sku\" value=\"1\" id=\"show-sku\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 614
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_sku\" value=\"1\" id=\"show-sku\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 616
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-sku\">";
        echo (isset($context["entry_sku"]) ? $context["entry_sku"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 619
        if ((isset($context["theme_materialize_show_upc"]) ? $context["theme_materialize_show_upc"] : null)) {
            // line 620
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_upc\" value=\"1\" id=\"show-upc\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 622
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_upc\" value=\"1\" id=\"show-upc\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 624
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-upc\">";
        echo (isset($context["entry_upc"]) ? $context["entry_upc"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 627
        if ((isset($context["theme_materialize_show_ean"]) ? $context["theme_materialize_show_ean"] : null)) {
            // line 628
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_ean\" value=\"1\" id=\"show-ean\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 630
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_ean\" value=\"1\" id=\"show-ean\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 632
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-ean\">";
        echo (isset($context["entry_ean"]) ? $context["entry_ean"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 635
        if ((isset($context["theme_materialize_show_jan"]) ? $context["theme_materialize_show_jan"] : null)) {
            // line 636
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_jan\" value=\"1\" id=\"show-jan\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 638
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_jan\" value=\"1\" id=\"show-jan\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 640
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-jan\">";
        echo (isset($context["entry_jan"]) ? $context["entry_jan"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 645
        if ((isset($context["theme_materialize_show_isbn"]) ? $context["theme_materialize_show_isbn"] : null)) {
            // line 646
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_isbn\" value=\"1\" id=\"show-isbn\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 648
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_isbn\" value=\"1\" id=\"show-isbn\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 650
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-isbn\">";
        echo (isset($context["entry_isbn"]) ? $context["entry_isbn"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 653
        if ((isset($context["theme_materialize_show_mpn"]) ? $context["theme_materialize_show_mpn"] : null)) {
            // line 654
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_mpn\" value=\"1\" id=\"show-mpn\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 656
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_mpn\" value=\"1\" id=\"show-mpn\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 658
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-mpn\">";
        echo (isset($context["entry_mpn"]) ? $context["entry_mpn"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 661
        if ((isset($context["theme_materialize_show_location"]) ? $context["theme_materialize_show_location"] : null)) {
            // line 662
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_location\" value=\"1\" id=\"show-location\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 664
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_location\" value=\"1\" id=\"show-location\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 666
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-location\">";
        echo (isset($context["entry_location"]) ? $context["entry_location"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 669
        if ((isset($context["theme_materialize_show_dimensions"]) ? $context["theme_materialize_show_dimensions"] : null)) {
            // line 670
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_dimensions\" value=\"1\" id=\"show-dimensions\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 672
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_dimensions\" value=\"1\" id=\"show-dimensions\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 674
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-dimensions\">";
        echo (isset($context["entry_dimension"]) ? $context["entry_dimension"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 677
        if ((isset($context["theme_materialize_show_weight"]) ? $context["theme_materialize_show_weight"] : null)) {
            // line 678
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_weight\" value=\"1\" id=\"show-weight\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 680
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_weight\" value=\"1\" id=\"show-weight\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 682
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-weight\">";
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 691
        echo (isset($context["entry_show_remainder"]) ? $context["entry_show_remainder"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-type-remainder\">";
        // line 693
        echo (isset($context["entry_type"]) ? $context["entry_type"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_remainder\" id=\"input-type-remainder\" class=\"selectpicker show-tick\" data-width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 696
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 697
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["remainders"]) ? $context["remainders"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["remainder"]) {
            // line 698
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["remainder"], "value", array()) == (isset($context["theme_materialize_remainder"]) ? $context["theme_materialize_remainder"] : null))) {
                // line 699
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["remainder"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["remainder"], "text", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 701
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["remainder"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["remainder"], "text", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 703
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['remainder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 704
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required progressbar-settings\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 708
        echo (isset($context["entry_calculation"]) ? $context["entry_calculation"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_percent_remainder\" value=\"";
        // line 710
        echo (isset($context["theme_materialize_percent_remainder"]) ? $context["theme_materialize_percent_remainder"] : null);
        echo "\" placeholder=\"\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 711
        if ((isset($context["error_percent_remainder"]) ? $context["error_percent_remainder"] : null)) {
            // line 712
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_percent_remainder"]) ? $context["error_percent_remainder"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 714
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 719
        echo (isset($context["entry_payment"]) ? $context["entry_payment"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>&nbsp;";
        // line 720
        echo (isset($context["help_payment"]) ? $context["help_payment"] : null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 722
        echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 724
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 725
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 726
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\"/></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize[";
            // line 727
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][payment_text]\" value=\"";
            echo (($this->getAttribute((isset($context["theme_materialize"]) ? $context["theme_materialize"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["theme_materialize"]) ? $context["theme_materialize"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "payment_text", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 730
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 733
        echo (isset($context["entry_payment_image"]) ? $context["entry_payment_image"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-payment-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 735
        echo (isset($context["theme_materialize_payment_thumb"]) ? $context["theme_materialize_payment_thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_materialize_payment_image\" value=\"";
        // line 736
        echo (isset($context["theme_materialize_payment_image"]) ? $context["theme_materialize_payment_image"] : null);
        echo "\" id=\"input-payment-image\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 740
        echo (isset($context["help_image_size"]) ? $context["help_image_size"] : null);
        echo "\">";
        echo (isset($context["entry_payment_image"]) ? $context["entry_payment_image"] : null);
        echo ":</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_payment_image_width\" value=\"";
        // line 744
        echo (isset($context["theme_materialize_payment_image_width"]) ? $context["theme_materialize_payment_image_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_payment_width"]) ? $context["entry_payment_width"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_payment_image_height\" value=\"";
        // line 747
        echo (isset($context["theme_materialize_payment_image_height"]) ? $context["theme_materialize_payment_image_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_payment_height"]) ? $context["entry_payment_height"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-footer\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 756
        echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"foter-descriptions-language\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 758
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 759
            echo "\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#foter-descriptions";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /> ";
            echo $this->getAttribute($context["language"], "name", array());
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 761
        echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 763
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 764
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"foter-descriptions";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
            // line 766
            echo (isset($context["entry_footer_title"]) ? $context["entry_footer_title"] : null);
            echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize[";
            // line 768
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][footer_title]\" value=\"";
            echo (($this->getAttribute((isset($context["theme_materialize"]) ? $context["theme_materialize"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["theme_materialize"]) ? $context["theme_materialize"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "footer_title", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
            // line 772
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"theme_materialize[";
            // line 774
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][footer_description]\" placeholder=\"";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\" class=\"form-control textarea-resize-vertical\">";
            echo (($this->getAttribute((isset($context["theme_materialize"]) ? $context["theme_materialize"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["theme_materialize"]) ? $context["theme_materialize"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "footer_description", array())) : (""));
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 779
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10 col-sm-push-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 783
        if ((isset($context["theme_materialize_footer_contact"]) ? $context["theme_materialize_footer_contact"] : null)) {
            // line 784
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_footer_contact\" value=\"1\" id=\"show-footer-contact\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 786
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_footer_contact\" value=\"1\" id=\"show-footer-contact\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 788
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-footer-contact\">";
        echo (isset($context["entry_contact"]) ? $context["entry_contact"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 795
        echo (isset($context["entry_socials"]) ? $context["entry_socials"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 797
        echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 799
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 800
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 801
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\"/></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize[";
            // line 802
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][sn_text]\" value=\"";
            echo (($this->getAttribute((isset($context["theme_materialize"]) ? $context["theme_materialize"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["theme_materialize"]) ? $context["theme_materialize"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "sn_text", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 805
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10 col-sm-push-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 810
        if ((isset($context["theme_materialize_sn_index"]) ? $context["theme_materialize_sn_index"] : null)) {
            // line 811
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_sn_index\" value=\"1\" id=\"dont-index-sn-links\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 813
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_sn_index\" value=\"1\" id=\"dont-index-sn-links\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 815
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dont-index-sn-links\">";
        echo (isset($context["entry_not_index"]) ? $context["entry_not_index"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"social-icon-language\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 821
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 822
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#social-icon-language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /> ";
            echo $this->getAttribute($context["language"], "name", array());
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 824
        echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 826
        $context["icon_row"] = 0;
        // line 827
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 828
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"social-icon-language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<table id=\"social-icons";
            // line 829
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 832
            echo (isset($context["entry_icon"]) ? $context["entry_icon"] : null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 833
            echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width: 50%\">";
            // line 834
            echo (isset($context["entry_link"]) ? $context["entry_link"] : null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" style=\"width: 10%\">";
            // line 835
            echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 840
            if ($this->getAttribute((isset($context["theme_materialize_social_icons"]) ? $context["theme_materialize_social_icons"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 841
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["theme_materialize_social_icons"]) ? $context["theme_materialize_social_icons"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["theme_materialize_social_icon"]) {
                    // line 842
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"icon-row";
                    echo (isset($context["icon_row"]) ? $context["icon_row"] : null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image";
                    // line 844
                    echo (isset($context["icon_row"]) ? $context["icon_row"] : null);
                    echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
                    echo $this->getAttribute($context["theme_materialize_social_icon"], "thumb", array());
                    echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                    echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
                    echo "\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_materialize_social_icon[";
                    // line 845
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "][";
                    echo (isset($context["icon_row"]) ? $context["icon_row"] : null);
                    echo "][icon]\" value=\"";
                    echo $this->getAttribute($context["theme_materialize_social_icon"], "icon", array());
                    echo "\" id=\"input-icon";
                    echo (isset($context["icon_row"]) ? $context["icon_row"] : null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_social_icon[";
                    // line 848
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "][";
                    echo (isset($context["icon_row"]) ? $context["icon_row"] : null);
                    echo "][title]\" value=\"";
                    echo $this->getAttribute($context["theme_materialize_social_icon"], "title", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_social_icon[";
                    // line 851
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "][";
                    echo (isset($context["icon_row"]) ? $context["icon_row"] : null);
                    echo "][link]\" value=\"";
                    echo $this->getAttribute($context["theme_materialize_social_icon"], "link", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_link"]) ? $context["entry_link"] : null);
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_social_icon[";
                    // line 854
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "][";
                    echo (isset($context["icon_row"]) ? $context["icon_row"] : null);
                    echo "][sort_order]\" value=\"";
                    echo $this->getAttribute($context["theme_materialize_social_icon"], "sort_order", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#icon-row";
                    // line 857
                    echo (isset($context["icon_row"]) ? $context["icon_row"] : null);
                    echo ", .tooltip').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 860
                    $context["icon_row"] = ((isset($context["icon_row"]) ? $context["icon_row"] : null) + 1);
                    // line 861
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme_materialize_social_icon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 862
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 863
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><button type=\"button\" onclick=\"addIcon('";
            // line 867
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "');\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_icon_add"]) ? $context["button_icon_add"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 873
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-common\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 878
        echo (isset($context["text_caching"]) ? $context["text_caching"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10 col-sm-push-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 882
        if ((isset($context["theme_materialize_cache_css"]) ? $context["theme_materialize_cache_css"] : null)) {
            // line 883
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_cache_css\" value=\"1\" id=\"cache-css\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 885
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_cache_css\" value=\"1\" id=\"cache-css\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 887
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"cache-css\">";
        echo (isset($context["text_caching_css"]) ? $context["text_caching_css"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10 col-sm-push-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"clear-css\" class=\"btn btn-danger\" href=\"";
        // line 893
        echo (isset($context["clear_css"]) ? $context["clear_css"] : null);
        echo "\"><i class=\"fa fa-eraser fa-lg\"></i> ";
        echo (isset($context["text_clear_cache"]) ? $context["text_clear_cache"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 898
        echo (isset($context["materializeapi"]) ? $context["materializeapi"] : null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"footer-appeal-users\" class=\"panel-footer text-center\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-12 col-md-4\">
\t\t\t\t\t<div class=\"panel panel-default\" id=\"panel-data\">
\t\t\t\t\t\t<div class=\"panel-heading\"><h3 class=\"panel-title\"><i class=\"fa fa-power-off\"></i> ";
        // line 906
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</h3></div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<select name=\"theme_materialize_status\" id=\"input-status\" class=\"selectpicker show-tick\" data-width=\"100%\">
\t\t\t\t\t\t\t\t";
        // line 909
        if ((isset($context["theme_materialize_status"]) ? $context["theme_materialize_status"] : null)) {
            // line 910
            echo "\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\" data-icon=\"fa-toggle-on\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" data-icon=\"fa-toggle-off\">";
            // line 911
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        } else {
            // line 913
            echo "\t\t\t\t\t\t\t\t<option value=\"1\" data-icon=\"fa-toggle-on\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\" data-icon=\"fa-toggle-off\">";
            // line 914
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        // line 916
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 921
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i> ";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 text-right\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" form=\"form-theme-materialize\" data-toggle=\"tooltip\" title=\"";
        // line 924
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i> ";
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<input type=\"hidden\" name=\"theme_materialize_installed_appeal\" value=\"0\">
\t\t</form>
\t</div>
</div>
<script type=\"text/javascript\">
\t\$('#language a:first').tab('show');
\t\$('#tab-colors-pills a:first').tab('show');
\t\$('#foter-descriptions-language a:first').tab('show');
\t\$('#social-icon-language a:first').tab('show');
\t\$('#maps-descriptions-language a:first').tab('show');

\tvar selectBrowserBar = \$(\"#select-color-browser-bar\"),
\t\tinputBrowserBar = \$(\"#input-color-browser-bar-hex\"),
\t\tinputFooterColorText = \$(\"#input-color-footer-text\"),
\t\tinputTypeRemainder = \$(\"#input-type-remainder\");

\tselectBrowserBar.change(function(){
\t\tselectBrowserBarOption = \$(\"#select-color-browser-bar option:selected\");
\t\tvalueHex = selectBrowserBarOption.data('hex');
\t\tinputBrowserBar.attr('value',valueHex);
\t});

\tif (inputTypeRemainder.val() != 'progressbar') {\$('.progressbar-settings').hide();}

\tinputTypeRemainder.change(function(){
\t\tif (inputTypeRemainder.val() != 'progressbar') {\$('.progressbar-settings').hide();}
\t\tif (inputTypeRemainder.val() == 'progressbar') {\$('.progressbar-settings').show();}
\t});

\t// Socials
\tvar icon_row = ";
        // line 961
        echo (isset($context["icon_row"]) ? $context["icon_row"] : null);
        echo ";

\tfunction addIcon(language_id) {
\t\thtml  = '<tr id=\"icon-row' + icon_row + '\">';
\t\thtml += '\t<td class=\"text-center\">';
\t\thtml += '\t\t<a href=\"\" id=\"thumb-image' + icon_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 966
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\"></a>';
\t\thtml += '\t\t<input type=\"hidden\" name=\"theme_materialize_social_icon[' + language_id + '][' + icon_row + '][icon]\" value=\"\" id=\"input-icon' + icon_row + '\">';
\t\thtml += '\t</td>';
\t\thtml += '\t<td class=\"text-left\">';
\t\thtml += '\t\t<input type=\"text\" name=\"theme_materialize_social_icon[' + language_id + '][' + icon_row + '][title]\" value=\"\" placeholder=\"";
        // line 970
        echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
        echo "\" class=\"form-control\">';
\t\thtml += '\t</td>';
\t\thtml += '\t<td class=\"text-left\">';
\t\thtml += '\t\t<input type=\"text\" name=\"theme_materialize_social_icon[' + language_id + '][' + icon_row + '][link]\" value=\"\" placeholder=\"";
        // line 973
        echo (isset($context["entry_link"]) ? $context["entry_link"] : null);
        echo "\" class=\"form-control\">';
\t\thtml += '\t</td>';
\t\thtml += '\t<td class=\"text-right\">';
\t\thtml += '\t\t<input type=\"text\" name=\"theme_materialize_social_icon[' + language_id + '][' + icon_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 976
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" class=\"form-control\">';
\t\thtml += '\t</td>';
\t\thtml += '\t<td class=\"text-center\">';
\t\thtml += '\t\t<button type=\"button\" onclick=\"\$(\\'#icon-row' + icon_row + ', .tooltip\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 979
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>';
\t\thtml += '\t</td>';
\t\thtml += '</tr>';

\t\t\$('#social-icons' + language_id + ' tbody').append(html);

\t\ticon_row++;
\t}

\t// Selectpicker
\t\$('.selectpicker.selectpicker-live-search').selectpicker({
\t\tsize: 10,
\t\tliveSearch: true,
\t\ticonBase: 'fa',
\t\ttickIcon: 'fa-check'
\t});

\t// Apply button
\tvar applyBtn = \$('#apply-btn'),
\t\tformMaterialize = \$('#form-theme-materialize'),
\t\tdataAction = formMaterialize.attr('data-action');

\tif (sessionStorage['index_p']) {
\t\tvar index_p = sessionStorage['index_p'];
\t} else {
\t\tvar index_p = 0;
\t}

\t\$('#apply-tab li:eq(' + index_p + ') a').tab('show');

\tsessionStorage['index_p'] = 0;

\tapplyBtn.click(function() {
\t\tsessionStorage['index_p'] = \$(\".nav-tabs .active\").index();

\t\tformMaterialize.attr({'action':dataAction});
\t\tformMaterialize.submit();

\t\te.preventDefault();
\t});

\tdocument.addEventListener(\"keydown\", function(event) {
\t\tif (event.keyCode == 83 && (navigator.platform.match(\"Mac\") ? event.metaKey : event.ctrlKey)) {
\t\t\tevent.preventDefault();
\t\t\tapplyBtn.trigger('click');
\t\t}
\t}, false);

\t// Notify
\t";
        // line 1028
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 1029
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1031
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "'
\t},{
\t\ttype: \"success\"
\t});
\t";
        }
        // line 1036
        echo "\t";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 1037
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1039
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1044
        echo "\t";
        if ((isset($context["error_product_limit"]) ? $context["error_product_limit"] : null)) {
            // line 1045
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1047
            echo (isset($context["error_product_limit"]) ? $context["error_product_limit"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1052
        echo "\t";
        if ((isset($context["error_product_description_length"]) ? $context["error_product_description_length"] : null)) {
            // line 1053
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1055
            echo (isset($context["error_product_description_length"]) ? $context["error_product_description_length"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1060
        echo "\t";
        if ((isset($context["error_image_category"]) ? $context["error_image_category"] : null)) {
            // line 1061
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1063
            echo (isset($context["error_image_category"]) ? $context["error_image_category"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1068
        echo "\t";
        if ((isset($context["error_image_thumb"]) ? $context["error_image_thumb"] : null)) {
            // line 1069
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1071
            echo (isset($context["error_image_thumb"]) ? $context["error_image_thumb"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1076
        echo "\t";
        if ((isset($context["error_image_popup"]) ? $context["error_image_popup"] : null)) {
            // line 1077
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1079
            echo (isset($context["error_image_popup"]) ? $context["error_image_popup"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1084
        echo "\t";
        if ((isset($context["error_image_product"]) ? $context["error_image_product"] : null)) {
            // line 1085
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1087
            echo (isset($context["error_image_product"]) ? $context["error_image_product"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1092
        echo "\t";
        if ((isset($context["error_image_additional"]) ? $context["error_image_additional"] : null)) {
            // line 1093
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1095
            echo (isset($context["error_image_additional"]) ? $context["error_image_additional"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1100
        echo "\t";
        if ((isset($context["error_image_related"]) ? $context["error_image_related"] : null)) {
            // line 1101
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1103
            echo (isset($context["error_image_related"]) ? $context["error_image_related"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1108
        echo "\t";
        if ((isset($context["error_image_compare"]) ? $context["error_image_compare"] : null)) {
            // line 1109
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1111
            echo (isset($context["error_image_compare"]) ? $context["error_image_compare"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1116
        echo "\t";
        if ((isset($context["error_image_wishlist"]) ? $context["error_image_wishlist"] : null)) {
            // line 1117
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1119
            echo (isset($context["error_image_wishlist"]) ? $context["error_image_wishlist"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1124
        echo "\t";
        if ((isset($context["error_image_cart"]) ? $context["error_image_cart"] : null)) {
            // line 1125
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1127
            echo (isset($context["error_image_cart"]) ? $context["error_image_cart"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1132
        echo "\t";
        if ((isset($context["error_image_location"]) ? $context["error_image_location"] : null)) {
            // line 1133
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1135
            echo (isset($context["error_image_location"]) ? $context["error_image_location"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1140
        echo "\t";
        if ((isset($context["error_percent_remainder"]) ? $context["error_percent_remainder"] : null)) {
            // line 1141
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1143
            echo (isset($context["error_percent_remainder"]) ? $context["error_percent_remainder"] : null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1148
        echo "
\t\$('#footer-appeal-users').load('index.php?route=extension/materialize/appeal/installed/footer&user_token=";
        // line 1149
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');

\t";
        // line 1151
        if ((isset($context["theme_materialize_installed_appeal"]) ? $context["theme_materialize_installed_appeal"] : null)) {
            // line 1152
            echo "\t\$.ajax({
\t\turl: 'index.php?route=extension/materialize/appeal/installed&modal_title=";
            // line 1153
            echo (isset($context["materialize_title"]) ? $context["materialize_title"] : null);
            echo "&user_token=";
            echo (isset($context["user_token"]) ? $context["user_token"] : null);
            echo "',
\t\tdataType: 'html',
\t\tsuccess: function(html) {
\t\t\t\$('#modal-materialize-installed').remove();

\t\t\t\$('body').prepend(html);

\t\t\t\$('#modal-materialize-installed').modal('show');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
\t";
        }
        // line 1167
        echo "</script>
";
        // line 1168
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/theme/materialize.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3031 => 1168,  3028 => 1167,  3009 => 1153,  3006 => 1152,  3004 => 1151,  2999 => 1149,  2996 => 1148,  2988 => 1143,  2984 => 1141,  2981 => 1140,  2973 => 1135,  2969 => 1133,  2966 => 1132,  2958 => 1127,  2954 => 1125,  2951 => 1124,  2943 => 1119,  2939 => 1117,  2936 => 1116,  2928 => 1111,  2924 => 1109,  2921 => 1108,  2913 => 1103,  2909 => 1101,  2906 => 1100,  2898 => 1095,  2894 => 1093,  2891 => 1092,  2883 => 1087,  2879 => 1085,  2876 => 1084,  2868 => 1079,  2864 => 1077,  2861 => 1076,  2853 => 1071,  2849 => 1069,  2846 => 1068,  2838 => 1063,  2834 => 1061,  2831 => 1060,  2823 => 1055,  2819 => 1053,  2816 => 1052,  2808 => 1047,  2804 => 1045,  2801 => 1044,  2793 => 1039,  2789 => 1037,  2786 => 1036,  2778 => 1031,  2774 => 1029,  2772 => 1028,  2720 => 979,  2714 => 976,  2708 => 973,  2702 => 970,  2693 => 966,  2685 => 961,  2643 => 924,  2633 => 921,  2626 => 916,  2621 => 914,  2616 => 913,  2611 => 911,  2606 => 910,  2604 => 909,  2598 => 906,  2587 => 898,  2577 => 893,  2567 => 887,  2563 => 885,  2559 => 883,  2557 => 882,  2550 => 878,  2543 => 873,  2529 => 867,  2523 => 863,  2520 => 862,  2514 => 861,  2512 => 860,  2504 => 857,  2492 => 854,  2480 => 851,  2468 => 848,  2456 => 845,  2448 => 844,  2442 => 842,  2437 => 841,  2435 => 840,  2427 => 835,  2423 => 834,  2419 => 833,  2415 => 832,  2409 => 829,  2404 => 828,  2399 => 827,  2397 => 826,  2393 => 824,  2376 => 822,  2372 => 821,  2362 => 815,  2358 => 813,  2354 => 811,  2352 => 810,  2345 => 805,  2332 => 802,  2324 => 801,  2321 => 800,  2317 => 799,  2312 => 797,  2307 => 795,  2296 => 788,  2292 => 786,  2288 => 784,  2286 => 783,  2280 => 779,  2265 => 774,  2260 => 772,  2249 => 768,  2244 => 766,  2238 => 764,  2234 => 763,  2230 => 761,  2213 => 759,  2209 => 758,  2204 => 756,  2190 => 747,  2182 => 744,  2173 => 740,  2166 => 736,  2160 => 735,  2155 => 733,  2150 => 730,  2137 => 727,  2129 => 726,  2126 => 725,  2122 => 724,  2117 => 722,  2112 => 720,  2108 => 719,  2101 => 714,  2095 => 712,  2093 => 711,  2089 => 710,  2084 => 708,  2078 => 704,  2072 => 703,  2064 => 701,  2056 => 699,  2053 => 698,  2049 => 697,  2045 => 696,  2039 => 693,  2034 => 691,  2021 => 682,  2017 => 680,  2013 => 678,  2011 => 677,  2004 => 674,  2000 => 672,  1996 => 670,  1994 => 669,  1987 => 666,  1983 => 664,  1979 => 662,  1977 => 661,  1970 => 658,  1966 => 656,  1962 => 654,  1960 => 653,  1953 => 650,  1949 => 648,  1945 => 646,  1943 => 645,  1934 => 640,  1930 => 638,  1926 => 636,  1924 => 635,  1917 => 632,  1913 => 630,  1909 => 628,  1907 => 627,  1900 => 624,  1896 => 622,  1892 => 620,  1890 => 619,  1883 => 616,  1879 => 614,  1875 => 612,  1873 => 611,  1866 => 608,  1862 => 606,  1858 => 604,  1856 => 603,  1847 => 597,  1840 => 592,  1834 => 590,  1832 => 589,  1826 => 588,  1819 => 586,  1814 => 583,  1808 => 581,  1806 => 580,  1800 => 579,  1793 => 577,  1788 => 575,  1780 => 569,  1774 => 567,  1772 => 566,  1764 => 563,  1756 => 560,  1749 => 556,  1744 => 553,  1738 => 551,  1736 => 550,  1728 => 547,  1720 => 544,  1713 => 540,  1708 => 537,  1702 => 535,  1700 => 534,  1692 => 531,  1684 => 528,  1677 => 524,  1672 => 521,  1666 => 519,  1664 => 518,  1656 => 515,  1648 => 512,  1641 => 508,  1636 => 505,  1630 => 503,  1628 => 502,  1620 => 499,  1612 => 496,  1605 => 492,  1600 => 489,  1594 => 487,  1592 => 486,  1584 => 483,  1576 => 480,  1569 => 476,  1564 => 473,  1558 => 471,  1556 => 470,  1548 => 467,  1540 => 464,  1533 => 460,  1528 => 457,  1522 => 455,  1520 => 454,  1512 => 451,  1504 => 448,  1497 => 444,  1492 => 441,  1486 => 439,  1484 => 438,  1476 => 435,  1468 => 432,  1461 => 428,  1456 => 425,  1450 => 423,  1448 => 422,  1440 => 419,  1432 => 416,  1425 => 412,  1419 => 408,  1414 => 406,  1409 => 405,  1404 => 403,  1399 => 402,  1397 => 401,  1391 => 398,  1386 => 396,  1371 => 383,  1365 => 382,  1351 => 380,  1337 => 378,  1334 => 377,  1330 => 376,  1326 => 374,  1320 => 373,  1308 => 371,  1296 => 369,  1293 => 368,  1289 => 367,  1283 => 364,  1275 => 359,  1265 => 351,  1259 => 350,  1247 => 348,  1235 => 346,  1232 => 345,  1228 => 344,  1222 => 341,  1216 => 337,  1210 => 336,  1198 => 334,  1186 => 332,  1183 => 331,  1179 => 330,  1175 => 328,  1169 => 327,  1157 => 325,  1145 => 323,  1142 => 322,  1138 => 321,  1132 => 318,  1124 => 312,  1118 => 311,  1106 => 309,  1094 => 307,  1091 => 306,  1087 => 305,  1081 => 302,  1075 => 298,  1069 => 297,  1057 => 295,  1045 => 293,  1042 => 292,  1038 => 291,  1034 => 289,  1028 => 288,  1016 => 286,  1004 => 284,  1001 => 283,  997 => 282,  991 => 279,  985 => 275,  979 => 274,  967 => 272,  955 => 270,  952 => 269,  948 => 268,  944 => 266,  938 => 265,  926 => 263,  914 => 261,  911 => 260,  907 => 259,  901 => 256,  895 => 252,  889 => 251,  877 => 249,  865 => 247,  862 => 246,  858 => 245,  854 => 243,  848 => 242,  836 => 240,  824 => 238,  821 => 237,  817 => 236,  811 => 233,  803 => 228,  799 => 227,  789 => 219,  783 => 218,  771 => 216,  759 => 214,  756 => 213,  752 => 212,  748 => 210,  742 => 209,  730 => 207,  718 => 205,  715 => 204,  711 => 203,  705 => 200,  698 => 196,  695 => 195,  689 => 194,  675 => 192,  661 => 190,  658 => 189,  654 => 188,  648 => 185,  640 => 179,  634 => 178,  622 => 176,  610 => 174,  607 => 173,  603 => 172,  599 => 170,  593 => 169,  581 => 167,  569 => 165,  566 => 164,  562 => 163,  556 => 160,  550 => 156,  544 => 155,  532 => 153,  520 => 151,  517 => 150,  513 => 149,  509 => 147,  503 => 146,  491 => 144,  479 => 142,  476 => 141,  472 => 140,  466 => 137,  460 => 133,  454 => 132,  442 => 130,  430 => 128,  427 => 127,  423 => 126,  419 => 124,  413 => 123,  401 => 121,  389 => 119,  386 => 118,  382 => 117,  376 => 114,  370 => 110,  364 => 109,  352 => 107,  340 => 105,  337 => 104,  333 => 103,  329 => 101,  323 => 100,  311 => 98,  299 => 96,  296 => 95,  292 => 94,  286 => 91,  280 => 87,  274 => 86,  262 => 84,  250 => 82,  247 => 81,  243 => 80,  239 => 78,  233 => 77,  221 => 75,  209 => 73,  206 => 72,  202 => 71,  196 => 68,  190 => 64,  184 => 63,  172 => 61,  160 => 59,  157 => 58,  153 => 57,  147 => 54,  139 => 49,  135 => 48,  125 => 41,  121 => 40,  117 => 39,  110 => 35,  106 => 34,  100 => 30,  94 => 29,  90 => 28,  86 => 27,  82 => 26,  78 => 25,  74 => 24,  68 => 21,  59 => 17,  53 => 13,  42 => 11,  38 => 10,  33 => 8,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/* 	<div class="page-header">*/
/* 		<div class="container-fluid">*/
/* 			<div class="pull-right">*/
/* 				<button type="button" form="form-theme-materialize" id="apply-btn" data-toggle="tooltip" title="{{ button_apply }}" class="btn btn-success"><i class="fa fa-repeat"></i></button>*/
/* 			</div>*/
/* 			<h1>{{ materialize_title }}</h1>*/
/* 			<ul class="breadcrumb">*/
/* 				{% for breadcrumb in breadcrumbs %}*/
/* 				<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="container-fluid">*/
/* 		<form action="{{ action }}" data-action="{{ apply|raw }}" method="post" enctype="multipart/form-data" id="form-theme-materialize" class="form-horizontal">*/
/* 			<div class="row">*/
/* 				<div class="col-sm-12 col-md-8">*/
/* 					<div class="panel panel-default">*/
/* 						<div class="panel-heading"><h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3></div>*/
/* 						<div class="panel-body">*/
/* 							<ul id="apply-tab" class="nav nav-tabs">*/
/* 								<li class="active"><a href="#tab-colors" data-toggle="tab">{{ text_colors }}</a></li>*/
/* 								<li><a href="#tab-image" data-toggle="tab">{{ text_image }}</a></li>*/
/* 								<li><a href="#tab-product" data-toggle="tab">{{ text_product }}</a></li>*/
/* 								<li><a href="#tab-footer" data-toggle="tab">{{ text_footer }}</a></li>*/
/* 								<li><a href="#tab-common" data-toggle="tab">{{ text_common }}</a></li>*/
/* 								{% if materializeapi %}<li><a href="#tab-materializeapi" data-toggle="tab">{{ text_about_template }}</a></li>{% endif %}*/
/* 							</ul>*/
/* 							<div class="tab-content">*/
/* 								<div class="tab-pane active" id="tab-colors">*/
/* 									<fieldset>*/
/* 										<legend>{{ entry_colors }}</legend>*/
/* 										<div class="alert alert-info"><i class="fa fa-exclamation-circle"></i>&nbsp;{{ help_colors }}</div>*/
/* 										<div class="row">*/
/* 											<div class="col-sm-2">*/
/* 												<ul class="nav nav-pills nav-stacked" id="tab-colors-pills">*/
/* 													<li><a href="#tab-color-common" data-toggle="tab">{{ text_common }}</a></li>*/
/* 													<li><a href="#tab-color-header" data-toggle="tab">{{ text_header }}</a></li>*/
/* 													<li><a href="#tab-color-footer" data-toggle="tab">{{ text_footer }}</a></li>*/
/* 												</ul>*/
/* 											</div>*/
/* 											<div class="col-sm-10">*/
/* 												<div class="tab-content">*/
/* 													<div class="tab-pane" id="tab-color-common">*/
/* 														<ul class="nav nav-tabs">*/
/* 															<li class="active"><a href="#tab-color-common__buttons" data-toggle="tab">{{ text_buttons }}</a></li>*/
/* 															<li><a href="#tab-color-common__mobile" data-toggle="tab">{{ text_mobile }}</a></li>*/
/* 														</ul>*/
/* 														<div class="tab-content">*/
/* 															<div class="tab-pane active" id="tab-color-common__buttons">*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_background }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_background" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_background %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																	</div>*/
/* 																</div>*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_cart_btn }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_cart_btn" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_cart_btn %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																		<select name="theme_materialize_color_cart_btn_text" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors_text %}*/
/* 																			{% if color.name == theme_materialize_color_cart_btn_text %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																	</div>*/
/* 																</div>*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_total_btn }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_total_btn" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_total_btn %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																		<select name="theme_materialize_color_total_btn_text" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors_text %}*/
/* 																			{% if color.name == theme_materialize_color_total_btn_text %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																	</div>*/
/* 																</div>*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_compare_btn }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_compare_btn" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_compare_btn %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																		<select name="theme_materialize_color_compare_btn_text" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors_text %}*/
/* 																			{% if color.name == theme_materialize_color_compare_btn_text %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																	</div>*/
/* 																</div>*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_tot_cmp_btn }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_compare_total_btn" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_compare_total_btn %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																		<select name="theme_materialize_color_compare_total_btn_text" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors_text %}*/
/* 																			{% if color.name == theme_materialize_color_compare_total_btn_text %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																	</div>*/
/* 																</div>*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_btt_btn }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_btt_btn" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_btt_btn %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																		<select name="theme_materialize_color_btt_btn_text" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors_text %}*/
/* 																			{% if color.name == theme_materialize_color_btt_btn_text %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																	</div>*/
/* 																</div>*/
/* 															</div>*/
/* 															<div class="tab-pane" id="tab-color-common__mobile">*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_bar }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_browser_bar" id="select-color-browser-bar" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_browser_bar %}*/
/* 																			<option value="{{ color.name }}" data-hex="#{{ color.hex }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" data-hex="#{{ color.hex }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																		<input type="hidden" name="theme_materialize_color_browser_bar_hex" value="{{ theme_materialize_color_browser_bar_hex ? theme_materialize_color_browser_bar_hex }}" id="input-color-browser-bar-hex" />*/
/* 																	</div>*/
/* 																</div>*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_nav_btn }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_nav_btn" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_nav_btn %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																		<select name="theme_materialize_color_nav_btn_text" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors_text %}*/
/* 																			{% if color.name == theme_materialize_color_nav_btn_text %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																	</div>*/
/* 																</div>*/
/* 															</div>*/
/* 														</div>*/
/* 													</div>*/
/* 													<div class="tab-pane" id="tab-color-header">*/
/* 														<ul class="nav nav-tabs">*/
/* 															<li class="active"><a href="#tab-color-header__desktop" data-toggle="tab">{{ text_desktop }}</a></li>*/
/* 															<li><a href="#tab-color-header__mobile" data-toggle="tab">{{ text_mobile }}</a></li>*/
/* 														</ul>*/
/* 														<div class="tab-content">*/
/* 															<div class="tab-pane active" id="tab-color-header__desktop">*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_top_menu }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_top_menu" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_top_menu %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																		<select name="theme_materialize_color_top_menu_text" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors_text %}*/
/* 																			{% if color.name == theme_materialize_color_top_menu_text %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																	</div>*/
/* 																</div>*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_header }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_header" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_header %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																		<select name="theme_materialize_color_header_text" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors_text %}*/
/* 																			{% if color.name == theme_materialize_color_header_text %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																	</div>*/
/* 																</div>*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_navigation }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_navigation" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_navigation %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																		<select name="theme_materialize_color_navigation_text" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors_text %}*/
/* 																			{% if color.name == theme_materialize_color_navigation_text %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																	</div>*/
/* 																</div>*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_search }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_search" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_search %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																	</div>*/
/* 																</div>*/
/* 															</div>*/
/* 															<div class="tab-pane" id="tab-color-header__mobile">*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_sidebar }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_sidebar" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_sidebar %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																		<select name="theme_materialize_color_sidebar_text" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors_text %}*/
/* 																			{% if color.name == theme_materialize_color_sidebar_text %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																	</div>*/
/* 																</div>*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_mob_search }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_mobile_search" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_mobile_search %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																	</div>*/
/* 																</div>*/
/* 															</div>*/
/* 														</div>*/
/* 													</div>*/
/* 													<div class="tab-pane" id="tab-color-footer">*/
/* 														<ul class="nav nav-tabs">*/
/* 															<li class="active"><a href="#tab-color-footer__common" data-toggle="tab">{{ text_common }}</a></li>*/
/* 														</ul>*/
/* 														<div class="tab-content">*/
/* 															<div class="tab-pane active" id="tab-color-footer__common">*/
/* 																<div class="form-group">*/
/* 																	<label class="col-sm-2 control-label">{{ entry_footer }}:</label>*/
/* 																	<div class="col-sm-4">*/
/* 																		<select name="theme_materialize_color_footer" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors %}*/
/* 																			{% if color.name == theme_materialize_color_footer %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																		<select name="theme_materialize_color_footer_text" id="input-color-footer-text" class="selectpicker selectpicker-live-search show-tick">*/
/* 																			{% for color in theme_materialize_colors_text %}*/
/* 																			{% if color.name == theme_materialize_color_footer_text %}*/
/* 																			<option value="{{ color.name }}" data-hex="#{{ color.hex }}" class="{{ color.name }}" style="background: #{{ color.hex }};" selected="selected">{{ color.name }}</option>*/
/* 																			{% else %}*/
/* 																			<option value="{{ color.name }}" data-hex="#{{ color.hex }}" class="{{ color.name }}" style="background: #{{ color.hex }};">{{ color.name }}</option>*/
/* 																			{% endif %}*/
/* 																			{% endfor %}*/
/* 																		</select>*/
/* 																	</div>*/
/* 																</div>*/
/* 															</div>*/
/* 														</div>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</fieldset>*/
/* 								</div>*/
/* 								<div class="tab-pane" id="tab-image">*/
/* 									<fieldset>*/
/* 										<legend>{{ text_image }}</legend>*/
/* 										<div class="form-group required">*/
/* 											<label class="col-sm-2 control-label" for="input-image-zoom">{{ text_imagezoom }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												<select name="theme_materialize_image_zoom" id="input-image-zoom" class="selectpicker show-tick" data-width="100%">*/
/* 													{% if theme_materialize_image_zoom %}*/
/* 													<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 													<option value="0">{{ text_disabled }}</option>*/
/* 													{% else %}*/
/* 													<option value="1">{{ text_enabled }}</option>*/
/* 													<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group required">*/
/* 											<label class="col-sm-2 control-label" for="input-image-category-width">{{ entry_image_category }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												<div class="row">*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_category_width" value="{{ theme_materialize_image_category_width }}" placeholder="{{ entry_width }}" id="input-image-category-width" class="form-control" />*/
/* 													</div>*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_category_height" value="{{ theme_materialize_image_category_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 												{% if error_image_category %}*/
/* 												<div class="text-danger">{{ error_image_category }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group required">*/
/* 											<label class="col-sm-2 control-label" for="input-image-thumb-width">{{ entry_image_thumb }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												<div class="row">*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_thumb_width" value="{{ theme_materialize_image_thumb_width }}" placeholder="{{ entry_width }}" id="input-image-thumb-width" class="form-control" />*/
/* 													</div>*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_thumb_height" value="{{ theme_materialize_image_thumb_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 												{% if error_image_thumb %}*/
/* 												<div class="text-danger">{{ error_image_thumb }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group required">*/
/* 											<label class="col-sm-2 control-label" for="input-image-popup-width">{{ entry_image_popup }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												<div class="row">*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_popup_width" value="{{ theme_materialize_image_popup_width }}" placeholder="{{ entry_width }}" id="input-image-popup-width" class="form-control" />*/
/* 													</div>*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_popup_height" value="{{ theme_materialize_image_popup_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 												{% if error_image_popup %}*/
/* 												<div class="text-danger">{{ error_image_popup }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group required">*/
/* 											<label class="col-sm-2 control-label" for="input-image-product-width">{{ entry_image_product }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												<div class="row">*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_product_width" value="{{ theme_materialize_image_product_width }}" placeholder="{{ entry_width }}" id="input-image-product-width" class="form-control" />*/
/* 													</div>*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_product_height" value="{{ theme_materialize_image_product_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 												{% if error_image_product %}*/
/* 												<div class="text-danger">{{ error_image_product }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group required">*/
/* 											<label class="col-sm-2 control-label" for="input-image-additional-width">{{ entry_image_additional }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												<div class="row">*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_additional_width" value="{{ theme_materialize_image_additional_width }}" placeholder="{{ entry_width }}" id="input-image-additional-width" class="form-control" />*/
/* 													</div>*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_additional_height" value="{{ theme_materialize_image_additional_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 												{% if error_image_additional %}*/
/* 												<div class="text-danger">{{ error_image_additional }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group required">*/
/* 											<label class="col-sm-2 control-label" for="input-image-related">{{ entry_image_related }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												<div class="row">*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_related_width" value="{{ theme_materialize_image_related_width }}" placeholder="{{ entry_width }}" id="input-image-related" class="form-control" />*/
/* 													</div>*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_related_height" value="{{ theme_materialize_image_related_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 												{% if error_image_related %}*/
/* 												<div class="text-danger">{{ error_image_related }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group required">*/
/* 											<label class="col-sm-2 control-label" for="input-image-compare">{{ entry_image_compare }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												<div class="row">*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_compare_width" value="{{ theme_materialize_image_compare_width }}" placeholder="{{ entry_width }}" id="input-image-compare" class="form-control" />*/
/* 													</div>*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_compare_height" value="{{ theme_materialize_image_compare_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 												{% if error_image_compare %}*/
/* 												<div class="text-danger">{{ error_image_compare }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group required">*/
/* 											<label class="col-sm-2 control-label" for="input-image-wishlist">{{ entry_image_wishlist }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												<div class="row">*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_wishlist_width" value="{{ theme_materialize_image_wishlist_width }}" placeholder="{{ entry_width }}" id="input-image-wishlist" class="form-control" />*/
/* 													</div>*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_wishlist_height" value="{{ theme_materialize_image_wishlist_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 												{% if error_image_wishlist %}*/
/* 												<div class="text-danger">{{ error_image_wishlist }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group required">*/
/* 											<label class="col-sm-2 control-label" for="input-image-cart">{{ entry_image_cart }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												<div class="row">*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_cart_width" value="{{ theme_materialize_image_cart_width }}" placeholder="{{ entry_width }}" id="input-image-cart" class="form-control" />*/
/* 													</div>*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_cart_height" value="{{ theme_materialize_image_cart_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 												{% if error_image_cart %}*/
/* 												<div class="text-danger">{{ error_image_cart }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group required">*/
/* 											<label class="col-sm-2 control-label" for="input-image-location">{{ entry_image_location }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												<div class="row">*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_location_width" value="{{ theme_materialize_image_location_width }}" placeholder="{{ entry_width }}" id="input-image-location" class="form-control" />*/
/* 													</div>*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_image_location_height" value="{{ theme_materialize_image_location_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 												{% if error_image_location %}*/
/* 												<div class="text-danger">{{ error_image_location }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 									</fieldset>*/
/* 								</div>*/
/* 								<div class="tab-pane" id="tab-product">*/
/* 									<fieldset>*/
/* 										<legend>{{ text_product }}</legend>*/
/* 										<div class="form-group required">*/
/* 											<label class="col-sm-2 control-label" for="input-catalog-limit"><span data-toggle="tooltip" title="{{ help_product_limit }}">{{ entry_product_limit }}:</span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" name="theme_materialize_product_limit" value="{{ theme_materialize_product_limit }}" placeholder="{{ entry_product_limit }}" id="input-catalog-limit" class="form-control" />*/
/* 												{% if error_product_limit %}*/
/* 												<div class="text-danger">{{ error_product_limit }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group required">*/
/* 											<label class="col-sm-2 control-label" for="input-description-limit"><span data-toggle="tooltip" title="{{ help_product_description_length }}">{{ entry_product_description_length }}:</span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" name="theme_materialize_product_description_length" value="{{ theme_materialize_product_description_length }}" placeholder="{{ entry_product_description_length }}" id="input-description-limit" class="form-control" />*/
/* 												{% if error_product_description_length %}*/
/* 												<div class="text-danger">{{ error_product_description_length }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 									</fieldset>*/
/* 									<br>*/
/* 									<fieldset>*/
/* 										<legend>{{ entry_show_fields }}</legend>*/
/* 										<div class="form-group">*/
/* 											<div class="col-sm-10 col-sm-push-2">*/
/* 												<div class="row">*/
/* 													<div class="col-sm-6">*/
/* 														<div class="checkbox checkbox-primary">*/
/* 															{% if theme_materialize_show_model %}*/
/* 															<input type="checkbox" name="theme_materialize_show_model" value="1" id="show-model" class="styled" checked="checked" />*/
/* 															{% else %}*/
/* 															<input type="checkbox" name="theme_materialize_show_model" value="1" id="show-model" class="styled" />*/
/* 															{% endif %}*/
/* 															<label for="show-model">{{ entry_model }}</label>*/
/* 														</div>*/
/* 														<div class="checkbox checkbox-primary">*/
/* 															{% if theme_materialize_show_sku %}*/
/* 															<input type="checkbox" name="theme_materialize_show_sku" value="1" id="show-sku" class="styled" checked="checked" />*/
/* 															{% else %}*/
/* 															<input type="checkbox" name="theme_materialize_show_sku" value="1" id="show-sku" class="styled" />*/
/* 															{% endif %}*/
/* 															<label for="show-sku">{{ entry_sku }}</label>*/
/* 														</div>*/
/* 														<div class="checkbox checkbox-primary">*/
/* 															{% if theme_materialize_show_upc %}*/
/* 															<input type="checkbox" name="theme_materialize_show_upc" value="1" id="show-upc" class="styled" checked="checked" />*/
/* 															{% else %}*/
/* 															<input type="checkbox" name="theme_materialize_show_upc" value="1" id="show-upc" class="styled" />*/
/* 															{% endif %}*/
/* 															<label for="show-upc">{{ entry_upc }}</label>*/
/* 														</div>*/
/* 														<div class="checkbox checkbox-primary">*/
/* 															{% if theme_materialize_show_ean %}*/
/* 															<input type="checkbox" name="theme_materialize_show_ean" value="1" id="show-ean" class="styled" checked="checked" />*/
/* 															{% else %}*/
/* 															<input type="checkbox" name="theme_materialize_show_ean" value="1" id="show-ean" class="styled" />*/
/* 															{% endif %}*/
/* 															<label for="show-ean">{{ entry_ean }}</label>*/
/* 														</div>*/
/* 														<div class="checkbox checkbox-primary">*/
/* 															{% if theme_materialize_show_jan %}*/
/* 															<input type="checkbox" name="theme_materialize_show_jan" value="1" id="show-jan" class="styled" checked="checked" />*/
/* 															{% else %}*/
/* 															<input type="checkbox" name="theme_materialize_show_jan" value="1" id="show-jan" class="styled" />*/
/* 															{% endif %}*/
/* 															<label for="show-jan">{{ entry_jan }}</label>*/
/* 														</div>*/
/* 													</div>*/
/* 													<div class="col-sm-6">*/
/* 														<div class="checkbox checkbox-primary">*/
/* 															{% if theme_materialize_show_isbn %}*/
/* 															<input type="checkbox" name="theme_materialize_show_isbn" value="1" id="show-isbn" class="styled" checked="checked" />*/
/* 															{% else %}*/
/* 															<input type="checkbox" name="theme_materialize_show_isbn" value="1" id="show-isbn" class="styled" />*/
/* 															{% endif %}*/
/* 															<label for="show-isbn">{{ entry_isbn }}</label>*/
/* 														</div>*/
/* 														<div class="checkbox checkbox-primary">*/
/* 															{% if theme_materialize_show_mpn %}*/
/* 															<input type="checkbox" name="theme_materialize_show_mpn" value="1" id="show-mpn" class="styled" checked="checked" />*/
/* 															{% else %}*/
/* 															<input type="checkbox" name="theme_materialize_show_mpn" value="1" id="show-mpn" class="styled" />*/
/* 															{% endif %}*/
/* 															<label for="show-mpn">{{ entry_mpn }}</label>*/
/* 														</div>*/
/* 														<div class="checkbox checkbox-primary">*/
/* 															{% if theme_materialize_show_location %}*/
/* 															<input type="checkbox" name="theme_materialize_show_location" value="1" id="show-location" class="styled" checked="checked" />*/
/* 															{% else %}*/
/* 															<input type="checkbox" name="theme_materialize_show_location" value="1" id="show-location" class="styled" />*/
/* 															{% endif %}*/
/* 															<label for="show-location">{{ entry_location }}</label>*/
/* 														</div>*/
/* 														<div class="checkbox checkbox-primary">*/
/* 															{% if theme_materialize_show_dimensions %}*/
/* 															<input type="checkbox" name="theme_materialize_show_dimensions" value="1" id="show-dimensions" class="styled" checked="checked" />*/
/* 															{% else %}*/
/* 															<input type="checkbox" name="theme_materialize_show_dimensions" value="1" id="show-dimensions" class="styled" />*/
/* 															{% endif %}*/
/* 															<label for="show-dimensions">{{ entry_dimension }}</label>*/
/* 														</div>*/
/* 														<div class="checkbox checkbox-primary">*/
/* 															{% if theme_materialize_show_weight %}*/
/* 															<input type="checkbox" name="theme_materialize_show_weight" value="1" id="show-weight" class="styled" checked="checked" />*/
/* 															{% else %}*/
/* 															<input type="checkbox" name="theme_materialize_show_weight" value="1" id="show-weight" class="styled" />*/
/* 															{% endif %}*/
/* 															<label for="show-weight">{{ entry_weight }}</label>*/
/* 														</div>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</fieldset>*/
/* 									<br>*/
/* 									<fieldset>*/
/* 										<legend>{{ entry_show_remainder }}</legend>*/
/* 										<div class="form-group">*/
/* 											<label class="col-sm-2 control-label" for="input-type-remainder">{{ entry_type }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												<select name="theme_materialize_remainder" id="input-type-remainder" class="selectpicker show-tick" data-width="100%">*/
/* 													<option value="">{{ text_none }}</option>*/
/* 													{% for remainder in remainders %}*/
/* 													{% if remainder.value == theme_materialize_remainder %}*/
/* 													<option value="{{ remainder.value }}" selected="selected">{{ remainder.text }}</option>*/
/* 													{% else %}*/
/* 													<option value="{{ remainder.value }}">{{ remainder.text }}</option>*/
/* 													{% endif %}*/
/* 													{% endfor %}*/
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group required progressbar-settings">*/
/* 											<label class="col-sm-2 control-label">{{ entry_calculation }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" name="theme_materialize_percent_remainder" value="{{ theme_materialize_percent_remainder }}" placeholder="" class="form-control" />*/
/* 												{% if error_percent_remainder %}*/
/* 												<div class="text-danger">{{ error_percent_remainder }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 									</fieldset>*/
/* 									<br>*/
/* 									<fieldset>*/
/* 										<legend>{{ entry_payment }}</legend>*/
/* 										<div class="alert alert-info"><i class="fa fa-exclamation-circle"></i>&nbsp;{{ help_payment }}</div>*/
/* 										<div class="form-group">*/
/* 											<label class="col-sm-2 control-label">{{ entry_text }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												{% for language in languages %}*/
/* 												<div class="input-group">*/
/* 													<span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}"/></span>*/
/* 													<input type="text" name="theme_materialize[{{ language.language_id }}][payment_text]" value="{{ theme_materialize[language.language_id] ? theme_materialize[language.language_id].payment_text }}" placeholder="{{ entry_text }}" class="form-control" />*/
/* 												</div>*/
/* 												{% endfor %}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label class="col-sm-2 control-label">{{ entry_payment_image }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												<a href="" id="thumb-payment-image" data-toggle="image" class="img-thumbnail"><img src="{{ theme_materialize_payment_thumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/* 												<input type="hidden" name="theme_materialize_payment_image" value="{{ theme_materialize_payment_image }}" id="input-payment-image" />*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_image_size }}">{{ entry_payment_image }}:</span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<div class="row">*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_payment_image_width" value="{{ theme_materialize_payment_image_width }}" placeholder="{{ entry_payment_width }}" class="form-control" />*/
/* 													</div>*/
/* 													<div class="col-sm-6">*/
/* 														<input type="text" name="theme_materialize_payment_image_height" value="{{ theme_materialize_payment_image_height }}" placeholder="{{ entry_payment_height }}" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</fieldset>*/
/* 								</div>*/
/* 								<div class="tab-pane" id="tab-footer">*/
/* 									<fieldset>*/
/* 										<legend>{{ entry_description }}</legend>*/
/* 										<ul class="nav nav-tabs" id="foter-descriptions-language">*/
/* 											{% for language in languages %}*/
/* 											<li><a href="#foter-descriptions{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/* 											{% endfor %}*/
/* 										</ul>*/
/* 										<div class="tab-content">*/
/* 											{% for language in languages %}*/
/* 											<div class="tab-pane fade" id="foter-descriptions{{ language.language_id }}">*/
/* 												<div class="form-group">*/
/* 													<label class="col-sm-2 control-label">{{ entry_footer_title }}:</label>*/
/* 													<div class="col-sm-10">*/
/* 														<input type="text" name="theme_materialize[{{ language.language_id }}][footer_title]" value="{{ theme_materialize[language.language_id] ? theme_materialize[language.language_id].footer_title }}" placeholder="{{ entry_title }}" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 												<div class="form-group">*/
/* 													<label class="col-sm-2 control-label">{{ entry_description }}:</label>*/
/* 													<div class="col-sm-10">*/
/* 														<textarea name="theme_materialize[{{ language.language_id }}][footer_description]" placeholder="{{ entry_description }}" class="form-control textarea-resize-vertical">{{ theme_materialize[language.language_id] ? theme_materialize[language.language_id].footer_description }}</textarea>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											{% endfor %}*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<div class="col-sm-10 col-sm-push-2">*/
/* 												<div class="checkbox checkbox-primary">*/
/* 													{% if theme_materialize_footer_contact %}*/
/* 													<input type="checkbox" name="theme_materialize_footer_contact" value="1" id="show-footer-contact" class="styled" checked="checked" />*/
/* 													{% else %}*/
/* 													<input type="checkbox" name="theme_materialize_footer_contact" value="1" id="show-footer-contact" class="styled" />*/
/* 													{% endif %}*/
/* 													<label for="show-footer-contact">{{ entry_contact }}</label>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</fieldset>*/
/* 									<br>*/
/* 									<fieldset>*/
/* 										<legend>{{ entry_socials }}</legend>*/
/* 										<div class="form-group">*/
/* 											<label class="col-sm-2 control-label">{{ entry_text }}:</label>*/
/* 											<div class="col-sm-10">*/
/* 												{% for language in languages %}*/
/* 												<div class="input-group">*/
/* 													<span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}"/></span>*/
/* 													<input type="text" name="theme_materialize[{{ language.language_id }}][sn_text]" value="{{ theme_materialize[language.language_id] ? theme_materialize[language.language_id].sn_text }}" placeholder="{{ entry_text }}" class="form-control" />*/
/* 												</div>*/
/* 												{% endfor %}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<div class="col-sm-10 col-sm-push-2">*/
/* 												<div class="checkbox checkbox-primary">*/
/* 													{% if theme_materialize_sn_index %}*/
/* 													<input type="checkbox" name="theme_materialize_sn_index" value="1" id="dont-index-sn-links" class="styled" checked="checked" />*/
/* 													{% else %}*/
/* 													<input type="checkbox" name="theme_materialize_sn_index" value="1" id="dont-index-sn-links" class="styled" />*/
/* 													{% endif %}*/
/* 													<label for="dont-index-sn-links">{{ entry_not_index }}</label>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<br>*/
/* 										<ul class="nav nav-tabs" id="social-icon-language">*/
/* 											{% for language in languages %}*/
/* 												<li><a href="#social-icon-language{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/* 											{% endfor %}*/
/* 										</ul>*/
/* 										<div class="tab-content">*/
/* 											{% set icon_row = 0 %}*/
/* 											{% for language in languages %}*/
/* 											<div class="tab-pane" id="social-icon-language{{ language.language_id }}">*/
/* 												<table id="social-icons{{ language.language_id }}" class="table table-striped table-bordered table-hover">*/
/* 													<thead>*/
/* 														<tr>*/
/* 															<td class="text-center">{{ entry_icon }}</td>*/
/* 															<td class="text-left">{{ entry_title }}</td>*/
/* 															<td class="text-left" style="width: 50%">{{ entry_link }}</td>*/
/* 															<td class="text-center" style="width: 10%">{{ entry_sort_order }}</td>*/
/* 															<td></td>*/
/* 														</tr>*/
/* 													</thead>*/
/* 													<tbody>*/
/* 														{% if theme_materialize_social_icons[language.language_id] %}*/
/* 														{% for theme_materialize_social_icon in theme_materialize_social_icons[language.language_id] %}*/
/* 														<tr id="icon-row{{ icon_row }}">*/
/* 															<td class="text-center">*/
/* 																<a href="" id="thumb-image{{ icon_row }}" data-toggle="image" class="img-thumbnail"><img src="{{ theme_materialize_social_icon.thumb }}" alt="" title="" data-placeholder="{{ placeholder }}"></a>*/
/* 																<input type="hidden" name="theme_materialize_social_icon[{{ language.language_id }}][{{ icon_row }}][icon]" value="{{ theme_materialize_social_icon.icon }}" id="input-icon{{ icon_row }}">*/
/* 															</td>*/
/* 															<td class="text-left">*/
/* 																<input type="text" name="theme_materialize_social_icon[{{ language.language_id }}][{{ icon_row }}][title]" value="{{ theme_materialize_social_icon.title }}" placeholder="{{ entry_title }}" class="form-control">*/
/* 															</td>*/
/* 															<td class="text-left">*/
/* 																<input type="text" name="theme_materialize_social_icon[{{ language.language_id }}][{{ icon_row }}][link]" value="{{ theme_materialize_social_icon.link }}" placeholder="{{ entry_link }}" class="form-control">*/
/* 															</td>*/
/* 															<td class="text-right">*/
/* 																<input type="text" name="theme_materialize_social_icon[{{ language.language_id }}][{{ icon_row }}][sort_order]" value="{{ theme_materialize_social_icon.sort_order }}" placeholder="{{ entry_sort_order }}" class="form-control">*/
/* 															</td>*/
/* 															<td class="text-center">*/
/* 																<button type="button" onclick="$('#icon-row{{ icon_row }}, .tooltip').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button>*/
/* 															</td>*/
/* 														</tr>*/
/* 														{% set icon_row = icon_row + 1 %}*/
/* 														{% endfor %}*/
/* 														{% endif %}*/
/* 													</tbody>*/
/* 													<tfoot>*/
/* 														<tr>*/
/* 															<td colspan="4"></td>*/
/* 															<td class="text-center"><button type="button" onclick="addIcon('{{ language.language_id }}');" data-toggle="tooltip" title="{{ button_icon_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/* 														</tr>*/
/* 													</tfoot>*/
/* 												</table>*/
/* 											</div>*/
/* 											{% endfor %}*/
/* 										</div>*/
/* 									</fieldset>*/
/* 								</div>*/
/* 								<div class="tab-pane" id="tab-common">*/
/* 									<fieldset>*/
/* 										<legend>{{ text_caching }}</legend>*/
/* 										<div class="form-group">*/
/* 											<div class="col-sm-10 col-sm-push-2">*/
/* 												<div class="checkbox checkbox-primary">*/
/* 													{% if theme_materialize_cache_css %}*/
/* 													<input type="checkbox" name="theme_materialize_cache_css" value="1" id="cache-css" class="styled" checked="checked" />*/
/* 													{% else %}*/
/* 													<input type="checkbox" name="theme_materialize_cache_css" value="1" id="cache-css" class="styled" />*/
/* 													{% endif %}*/
/* 													<label for="cache-css">{{ text_caching_css }}</label>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<div class="col-sm-10 col-sm-push-2">*/
/* 												<a id="clear-css" class="btn btn-danger" href="{{ clear_css }}"><i class="fa fa-eraser fa-lg"></i> {{ text_clear_cache }}</a>*/
/* 											</div>*/
/* 										</div>*/
/* 									</fieldset>*/
/* 								</div>*/
/* 								{{ materializeapi }}*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="footer-appeal-users" class="panel-footer text-center"></div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-sm-12 col-md-4">*/
/* 					<div class="panel panel-default" id="panel-data">*/
/* 						<div class="panel-heading"><h3 class="panel-title"><i class="fa fa-power-off"></i> {{ entry_status }}</h3></div>*/
/* 						<div class="panel-body">*/
/* 							<select name="theme_materialize_status" id="input-status" class="selectpicker show-tick" data-width="100%">*/
/* 								{% if theme_materialize_status %}*/
/* 								<option value="1" selected="selected" data-icon="fa-toggle-on">{{ text_enabled }}</option>*/
/* 								<option value="0" data-icon="fa-toggle-off">{{ text_disabled }}</option>*/
/* 								{% else %}*/
/* 								<option value="1" data-icon="fa-toggle-on">{{ text_enabled }}</option>*/
/* 								<option value="0" selected="selected" data-icon="fa-toggle-off">{{ text_disabled }}</option>*/
/* 								{% endif %}*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="panel-footer">*/
/* 							<div class="row">*/
/* 								<div class="col-sm-6">*/
/* 									<a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i> {{ button_cancel }}</a>*/
/* 								</div>*/
/* 								<div class="col-sm-6 text-right">*/
/* 									<button type="submit" form="form-theme-materialize" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i> {{ button_save }}</button>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<input type="hidden" name="theme_materialize_installed_appeal" value="0">*/
/* 		</form>*/
/* 	</div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* 	$('#language a:first').tab('show');*/
/* 	$('#tab-colors-pills a:first').tab('show');*/
/* 	$('#foter-descriptions-language a:first').tab('show');*/
/* 	$('#social-icon-language a:first').tab('show');*/
/* 	$('#maps-descriptions-language a:first').tab('show');*/
/* */
/* 	var selectBrowserBar = $("#select-color-browser-bar"),*/
/* 		inputBrowserBar = $("#input-color-browser-bar-hex"),*/
/* 		inputFooterColorText = $("#input-color-footer-text"),*/
/* 		inputTypeRemainder = $("#input-type-remainder");*/
/* */
/* 	selectBrowserBar.change(function(){*/
/* 		selectBrowserBarOption = $("#select-color-browser-bar option:selected");*/
/* 		valueHex = selectBrowserBarOption.data('hex');*/
/* 		inputBrowserBar.attr('value',valueHex);*/
/* 	});*/
/* */
/* 	if (inputTypeRemainder.val() != 'progressbar') {$('.progressbar-settings').hide();}*/
/* */
/* 	inputTypeRemainder.change(function(){*/
/* 		if (inputTypeRemainder.val() != 'progressbar') {$('.progressbar-settings').hide();}*/
/* 		if (inputTypeRemainder.val() == 'progressbar') {$('.progressbar-settings').show();}*/
/* 	});*/
/* */
/* 	// Socials*/
/* 	var icon_row = {{ icon_row }};*/
/* */
/* 	function addIcon(language_id) {*/
/* 		html  = '<tr id="icon-row' + icon_row + '">';*/
/* 		html += '	<td class="text-center">';*/
/* 		html += '		<a href="" id="thumb-image' + icon_row + '" data-toggle="image" class="img-thumbnail"><img src="{{ placeholder }}" alt="" title="" data-placeholder="{{ placeholder }}"></a>';*/
/* 		html += '		<input type="hidden" name="theme_materialize_social_icon[' + language_id + '][' + icon_row + '][icon]" value="" id="input-icon' + icon_row + '">';*/
/* 		html += '	</td>';*/
/* 		html += '	<td class="text-left">';*/
/* 		html += '		<input type="text" name="theme_materialize_social_icon[' + language_id + '][' + icon_row + '][title]" value="" placeholder="{{ entry_title }}" class="form-control">';*/
/* 		html += '	</td>';*/
/* 		html += '	<td class="text-left">';*/
/* 		html += '		<input type="text" name="theme_materialize_social_icon[' + language_id + '][' + icon_row + '][link]" value="" placeholder="{{ entry_link }}" class="form-control">';*/
/* 		html += '	</td>';*/
/* 		html += '	<td class="text-right">';*/
/* 		html += '		<input type="text" name="theme_materialize_social_icon[' + language_id + '][' + icon_row + '][sort_order]" value="" placeholder="{{ entry_sort_order }}" class="form-control">';*/
/* 		html += '	</td>';*/
/* 		html += '	<td class="text-center">';*/
/* 		html += '		<button type="button" onclick="$(\'#icon-row' + icon_row + ', .tooltip\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button>';*/
/* 		html += '	</td>';*/
/* 		html += '</tr>';*/
/* */
/* 		$('#social-icons' + language_id + ' tbody').append(html);*/
/* */
/* 		icon_row++;*/
/* 	}*/
/* */
/* 	// Selectpicker*/
/* 	$('.selectpicker.selectpicker-live-search').selectpicker({*/
/* 		size: 10,*/
/* 		liveSearch: true,*/
/* 		iconBase: 'fa',*/
/* 		tickIcon: 'fa-check'*/
/* 	});*/
/* */
/* 	// Apply button*/
/* 	var applyBtn = $('#apply-btn'),*/
/* 		formMaterialize = $('#form-theme-materialize'),*/
/* 		dataAction = formMaterialize.attr('data-action');*/
/* */
/* 	if (sessionStorage['index_p']) {*/
/* 		var index_p = sessionStorage['index_p'];*/
/* 	} else {*/
/* 		var index_p = 0;*/
/* 	}*/
/* */
/* 	$('#apply-tab li:eq(' + index_p + ') a').tab('show');*/
/* */
/* 	sessionStorage['index_p'] = 0;*/
/* */
/* 	applyBtn.click(function() {*/
/* 		sessionStorage['index_p'] = $(".nav-tabs .active").index();*/
/* */
/* 		formMaterialize.attr({'action':dataAction});*/
/* 		formMaterialize.submit();*/
/* */
/* 		e.preventDefault();*/
/* 	});*/
/* */
/* 	document.addEventListener("keydown", function(event) {*/
/* 		if (event.keyCode == 83 && (navigator.platform.match("Mac") ? event.metaKey : event.ctrlKey)) {*/
/* 			event.preventDefault();*/
/* 			applyBtn.trigger('click');*/
/* 		}*/
/* 	}, false);*/
/* */
/* 	// Notify*/
/* 	{% if success %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ success }}'*/
/* 	},{*/
/* 		type: "success"*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if error_warning %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_warning }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if error_product_limit %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_product_limit }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if error_product_description_length %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_product_description_length }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if error_image_category %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_image_category }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if error_image_thumb %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_image_thumb }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if error_image_popup %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_image_popup }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if error_image_product %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_image_product }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if error_image_additional %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_image_additional }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if error_image_related %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_image_related }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if error_image_compare %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_image_compare }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if error_image_wishlist %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_image_wishlist }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if error_image_cart %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_image_cart }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if error_image_location %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_image_location }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if error_percent_remainder %}*/
/* 	$.notify({*/
/* 		icon: 'fa fa-exclamation-circle',*/
/* 		message: '{{ error_percent_remainder }}'*/
/* 	},{*/
/* 		type: "danger"*/
/* 	});*/
/* 	{% endif %}*/
/* */
/* 	$('#footer-appeal-users').load('index.php?route=extension/materialize/appeal/installed/footer&user_token={{ user_token }}');*/
/* */
/* 	{% if theme_materialize_installed_appeal %}*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/materialize/appeal/installed&modal_title={{ materialize_title }}&user_token={{ user_token }}',*/
/* 		dataType: 'html',*/
/* 		success: function(html) {*/
/* 			$('#modal-materialize-installed').remove();*/
/* */
/* 			$('body').prepend(html);*/
/* */
/* 			$('#modal-materialize-installed').modal('show');*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* 	{% endif %}*/
/* </script>*/
/* {{ footer }}*/
