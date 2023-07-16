<?php

/* essence/template/common/header.twig */
class __TwigTemplate_d848abcb56ef3d356efa966d35d99a5e891b6b9389c3206b0f266758ec0e8b61 extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]>
<html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\">
   <![endif]-->
   <!--[if IE 9 ]>
   <html dir=\"";
        // line 7
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\">
      <![endif]-->
      <!--[if (gt IE 9)|!(IE)]><!-->
      <html dir=\"";
        // line 10
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
         <!--<![endif]-->
         <head>
            <meta charset=\"UTF-8\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <title>";
        // line 16
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
            <base href=\"";
        // line 17
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
            ";
        // line 18
        if ((isset($context["description"]) ? $context["description"] : null)) {
            echo " 
            <meta name=\"description\" content=\"";
            // line 19
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
            ";
        }
        // line 20
        echo " 
            ";
        // line 21
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            echo " 
            <meta name=\"keywords\" content=\"";
            // line 22
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
            ";
        }
        // line 23
        echo " 
            <script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
            <link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
            <script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
            <link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
\t\t\t<link href=\"catalog/view/theme/essence/slick/slick.css\" rel=\"stylesheet\">
\t\t\t<link href=\"catalog/view/theme/essence/slick/slick-theme.css\" rel=\"stylesheet\">
            <link href=\"catalog/view/theme/essence/main.css\" rel=\"stylesheet\">
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            echo " 
            <link href=\"";
            // line 32
            echo $this->getAttribute($context["style"], "href", array(), "array");
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array(), "array");
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array(), "array");
            echo "\" />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo " 
            <script src=\"catalog/view/theme/essence/slick/slick.min.js\" type=\"text/javascript\"></script>
            <script src=\"catalog/view/theme/essence/main.js\" type=\"text/javascript\"></script>
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            echo " 
            <link href=\"";
            // line 37
            echo $this->getAttribute($context["link"], "href", array(), "array");
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array(), "array");
            echo "\" />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo " 
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            echo " 
            <script src=\"";
            // line 40
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo " 
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            echo " 
            ";
            // line 43
            echo $context["analytic"];
            echo " 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo " 
         </head>
\t\t    ";
        // line 46
        if ((isset($context["admin_custom_css"]) ? $context["admin_custom_css"] : null)) {
            echo "\t
            <style type=\"text/css\">
               ";
            // line 48
            echo (isset($context["admin_custom_css"]) ? $context["admin_custom_css"] : null);
            echo "
            </style>
            ";
        }
        // line 51
        echo "         <body>
            <header>
               <nav class=\"top-header\">
\t\t\t     <div class=\"logo\">
                        ";
        // line 55
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            echo "<a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\" /></a>";
        } else {
            // line 56
            echo "                        <h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
                        ";
        }
        // line 58
        echo "                     </div>
                  <div class=\"top-header-left\">
                     <button type=\"button\" class=\"hidden-lg hidden-md hidden-sm\" id=\"mob-menu\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                           <line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"></line>
                           <line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"></line>
                           <line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"></line>
                        </svg>
                     </button>
                     <a href=\"";
        // line 67
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\" class=\"header-phone\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"hidden-lg hidden-md\">
                           <path d=\"M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z\"></path>
                        </svg>
                        <span class=\"hidden-xs hidden-sm\">";
        // line 71
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "</span>
                     </a>
                     <button type=\"button\" data-toggle=\"modal\" data-target=\"#searchmodal\" >
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" >
                           <circle cx=\"11\" cy=\"11\" r=\"8\"></circle>
                           <line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"></line>
                        </svg>
                     </button>
                  </div>
                  <div class=\"top-header-right\">
                     ";
        // line 81
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "
                     <button type=\"button\" data-toggle=\"modal\" data-target=\"#accountmodal\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                           <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path>
                           <circle cx=\"12\" cy=\"7\" r=\"4\"></circle>
                        </svg>
                     </button>
                     <div class=\"btn-group\">
                        <button type=\"button\"  class=\"more-btn dropdown-toggle\" data-toggle=\"dropdown\">
                           <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" >
                              <circle cx=\"12\" cy=\"12\" r=\"1\"></circle>
                              <circle cx=\"12\" cy=\"5\" r=\"1\"></circle>
                              <circle cx=\"12\" cy=\"19\" r=\"1\"></circle>
                           </svg>
                        </button>
                        <ul class=\"dropdown-menu pull-right\">
                           <li>
                              <a href=\"";
        // line 98
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "\" class=\"text-center\">
                                 <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"15\" height=\"15\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z\"></path>
                                 </svg>
                                 <span class=\"hidden-xs hidden-sm hidden-md\">";
        // line 102
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</span>
                              </a>
                           </li>
                           <li>
                              <a href=\"";
        // line 106
        echo (isset($context["compare"]) ? $context["compare"] : null);
        echo "\" id=\"compare-total\" class=\"text-center\">
                                 <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"15\" height=\"15\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <line x1=\"18\" y1=\"20\" x2=\"18\" y2=\"10\"></line>
                                    <line x1=\"12\" y1=\"20\" x2=\"12\" y2=\"4\"></line>
                                    <line x1=\"6\" y1=\"20\" x2=\"6\" y2=\"14\"></line>
                                 </svg>
                                 <span class=\"hidden-xs hidden-sm hidden-md\">";
        // line 112
        echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
        echo "</span>
                              </a>
                           </li>
                           <li>";
        // line 115
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "</li>
                           <li>";
        // line 116
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "</li>
                        </ul>
                     </div>
                  </div>
               </nav>
               ";
        // line 121
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
               </div>
            </header>
            ";
        // line 124
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "
            <div class=\"modal fade\" id=\"accountmodal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"accountmodalLabel\">
               <div class=\"modal-dialog\" role=\"document\">
                  <div class=\"modal-content\">
                     <div class=\"modal-header\">
                        <button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"modal-title\" id=\"accountmodalLabel\">";
        // line 130
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</h4>
                     </div>
                     <div class=\"modal-body topbar-modal\">
                        ";
        // line 133
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 134
            echo "                        <div class=\"row text-center\">
                           <a href=\"";
            // line 135
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a>
                        </div>
                        ";
        } else {
            // line 138
            echo "                        <div class=\"row\">
                           <div class=\"col-sm-6\">
                              <div class=\"well\">
                                 <h2>";
            // line 141
            echo (isset($context["text_new_customer"]) ? $context["text_new_customer"] : null);
            echo "</h2>
                                 <p><strong>";
            // line 142
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</strong></p>
                                 <p>";
            // line 143
            echo (isset($context["text_register_account"]) ? $context["text_register_account"] : null);
            echo "</p>
                                 <a href=\"";
            // line 144
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a>
                              </div>
                           </div>
                           <div class=\"col-sm-6\">
                              <div class=\"well\">
                                 <h2>";
            // line 149
            echo (isset($context["text_returning_customer"]) ? $context["text_returning_customer"] : null);
            echo "</h2>
                                 <p><strong>";
            // line 150
            echo (isset($context["text_i_am_returning_customer"]) ? $context["text_i_am_returning_customer"] : null);
            echo "</strong></p>
                                 <form action=\"";
            // line 151
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\">
                                    <div class=\"form-group\">
                                       <label class=\"control-label\" for=\"input-email\">";
            // line 153
            echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
            echo "</label>
                                       <input type=\"text\" name=\"email\" value=\"";
            // line 154
            echo (isset($context["email"]) ? $context["email"] : null);
            echo "\" placeholder=\"";
            echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
            echo "\" id=\"input-email\" class=\"form-control\" />
                                    </div>
                                    <div class=\"form-group\">
                                       <label class=\"control-label\" for=\"input-password\">";
            // line 157
            echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
            echo "</label>
                                       <input type=\"password\" name=\"password\" value=\"";
            // line 158
            echo (isset($context["password"]) ? $context["password"] : null);
            echo "\" placeholder=\"";
            echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
            echo "\" id=\"input-password\" class=\"form-control\" />
                                       <a href=\"";
            // line 159
            echo (isset($context["forgotten"]) ? $context["forgotten"] : null);
            echo "\">";
            echo (isset($context["text_forgotten"]) ? $context["text_forgotten"] : null);
            echo "</a>
                                    </div>
                                    <input type=\"submit\" value=\"";
            // line 161
            echo (isset($context["button_login"]) ? $context["button_login"] : null);
            echo "\" class=\"btn btn-primary\" />
                                    ";
            // line 162
            if ((isset($context["redirect"]) ? $context["redirect"] : null)) {
                // line 163
                echo "                                    <input type=\"hidden\" name=\"redirect\" value=\"";
                echo (isset($context["redirect"]) ? $context["redirect"] : null);
                echo "\" />
                                    ";
            }
            // line 165
            echo "                                 </form>
                              </div>
                           </div>
                        </div>
                        ";
        }
        // line 170
        echo "                     </div>
                  </div>
               </div>
            </div>";
    }

    public function getTemplateName()
    {
        return "essence/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 170,  413 => 165,  407 => 163,  405 => 162,  401 => 161,  394 => 159,  388 => 158,  384 => 157,  376 => 154,  372 => 153,  367 => 151,  363 => 150,  359 => 149,  349 => 144,  345 => 143,  341 => 142,  337 => 141,  332 => 138,  324 => 135,  321 => 134,  319 => 133,  313 => 130,  304 => 124,  298 => 121,  290 => 116,  286 => 115,  280 => 112,  271 => 106,  264 => 102,  255 => 98,  235 => 81,  222 => 71,  215 => 67,  204 => 58,  196 => 56,  184 => 55,  178 => 51,  172 => 48,  167 => 46,  163 => 44,  155 => 43,  149 => 42,  146 => 41,  138 => 40,  132 => 39,  129 => 38,  119 => 37,  113 => 36,  108 => 33,  96 => 32,  90 => 31,  80 => 23,  75 => 22,  71 => 21,  68 => 20,  63 => 19,  59 => 18,  55 => 17,  51 => 16,  40 => 10,  32 => 7,  24 => 4,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]>*/
/* <html dir="{{ direction }}" lang="{{ lang }}" class="ie8">*/
/*    <![endif]-->*/
/*    <!--[if IE 9 ]>*/
/*    <html dir="{{ direction }}" lang="{{ lang }}" class="ie9">*/
/*       <![endif]-->*/
/*       <!--[if (gt IE 9)|!(IE)]><!-->*/
/*       <html dir="{{ direction }}" lang="{{ lang }}">*/
/*          <!--<![endif]-->*/
/*          <head>*/
/*             <meta charset="UTF-8" />*/
/*             <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*             <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*             <title>{{ title }}</title>*/
/*             <base href="{{ base }}" />*/
/*             {% if (description) %} */
/*             <meta name="description" content="{{ description }}" />*/
/*             {% endif %} */
/*             {% if (keywords) %} */
/*             <meta name="keywords" content="{{ keywords }}" />*/
/*             {% endif %} */
/*             <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>*/
/*             <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />*/
/*             <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>*/
/*             <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/* 			<link href="catalog/view/theme/essence/slick/slick.css" rel="stylesheet">*/
/* 			<link href="catalog/view/theme/essence/slick/slick-theme.css" rel="stylesheet">*/
/*             <link href="catalog/view/theme/essence/main.css" rel="stylesheet">*/
/*             {% for style in styles %} */
/*             <link href="{{ style['href'] }}" type="text/css" rel="{{ style['rel'] }}" media="{{ style['media'] }}" />*/
/*             {% endfor %} */
/*             <script src="catalog/view/theme/essence/slick/slick.min.js" type="text/javascript"></script>*/
/*             <script src="catalog/view/theme/essence/main.js" type="text/javascript"></script>*/
/*             {% for link in links %} */
/*             <link href="{{ link['href'] }}" rel="{{ link['rel'] }}" />*/
/*             {% endfor %} */
/*             {% for script in scripts %} */
/*             <script src="{{ script }}" type="text/javascript"></script>*/
/*             {% endfor %} */
/*             {% for analytic in analytics %} */
/*             {{ analytic }} */
/*             {% endfor %} */
/*          </head>*/
/* 		    {% if admin_custom_css %}	*/
/*             <style type="text/css">*/
/*                {{ admin_custom_css }}*/
/*             </style>*/
/*             {% endif %}*/
/*          <body>*/
/*             <header>*/
/*                <nav class="top-header">*/
/* 			     <div class="logo">*/
/*                         {% if logo %}<a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>{% else %}*/
/*                         <h1><a href="{{ home }}">{{ name }}</a></h1>*/
/*                         {% endif %}*/
/*                      </div>*/
/*                   <div class="top-header-left">*/
/*                      <button type="button" class="hidden-lg hidden-md hidden-sm" id="mob-menu">*/
/*                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">*/
/*                            <line x1="3" y1="12" x2="21" y2="12"></line>*/
/*                            <line x1="3" y1="6" x2="21" y2="6"></line>*/
/*                            <line x1="3" y1="18" x2="21" y2="18"></line>*/
/*                         </svg>*/
/*                      </button>*/
/*                      <a href="{{ contact }}" class="header-phone">*/
/*                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hidden-lg hidden-md">*/
/*                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>*/
/*                         </svg>*/
/*                         <span class="hidden-xs hidden-sm">{{ telephone }}</span>*/
/*                      </a>*/
/*                      <button type="button" data-toggle="modal" data-target="#searchmodal" >*/
/*                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" >*/
/*                            <circle cx="11" cy="11" r="8"></circle>*/
/*                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>*/
/*                         </svg>*/
/*                      </button>*/
/*                   </div>*/
/*                   <div class="top-header-right">*/
/*                      {{ cart }}*/
/*                      <button type="button" data-toggle="modal" data-target="#accountmodal">*/
/*                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">*/
/*                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>*/
/*                            <circle cx="12" cy="7" r="4"></circle>*/
/*                         </svg>*/
/*                      </button>*/
/*                      <div class="btn-group">*/
/*                         <button type="button"  class="more-btn dropdown-toggle" data-toggle="dropdown">*/
/*                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" >*/
/*                               <circle cx="12" cy="12" r="1"></circle>*/
/*                               <circle cx="12" cy="5" r="1"></circle>*/
/*                               <circle cx="12" cy="19" r="1"></circle>*/
/*                            </svg>*/
/*                         </button>*/
/*                         <ul class="dropdown-menu pull-right">*/
/*                            <li>*/
/*                               <a href="{{ wishlist }}" id="wishlist-total" title="{{ text_wishlist }}" class="text-center">*/
/*                                  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">*/
/*                                     <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>*/
/*                                  </svg>*/
/*                                  <span class="hidden-xs hidden-sm hidden-md">{{ text_wishlist }}</span>*/
/*                               </a>*/
/*                            </li>*/
/*                            <li>*/
/*                               <a href="{{ compare }}" id="compare-total" class="text-center">*/
/*                                  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">*/
/*                                     <line x1="18" y1="20" x2="18" y2="10"></line>*/
/*                                     <line x1="12" y1="20" x2="12" y2="4"></line>*/
/*                                     <line x1="6" y1="20" x2="6" y2="14"></line>*/
/*                                  </svg>*/
/*                                  <span class="hidden-xs hidden-sm hidden-md">{{ text_compare }}</span>*/
/*                               </a>*/
/*                            </li>*/
/*                            <li>{{ currency }}</li>*/
/*                            <li>{{ language }}</li>*/
/*                         </ul>*/
/*                      </div>*/
/*                   </div>*/
/*                </nav>*/
/*                {{ menu }}*/
/*                </div>*/
/*             </header>*/
/*             {{ search }}*/
/*             <div class="modal fade" id="accountmodal" tabindex="-1" role="dialog" aria-labelledby="accountmodalLabel">*/
/*                <div class="modal-dialog" role="document">*/
/*                   <div class="modal-content">*/
/*                      <div class="modal-header">*/
/*                         <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                         <h4 class="modal-title" id="accountmodalLabel">{{ text_account }}</h4>*/
/*                      </div>*/
/*                      <div class="modal-body topbar-modal">*/
/*                         {% if logged %}*/
/*                         <div class="row text-center">*/
/*                            <a href="{{ account }}" class="btn btn-primary">{{ button_continue }}</a>*/
/*                         </div>*/
/*                         {% else %}*/
/*                         <div class="row">*/
/*                            <div class="col-sm-6">*/
/*                               <div class="well">*/
/*                                  <h2>{{ text_new_customer }}</h2>*/
/*                                  <p><strong>{{ text_register }}</strong></p>*/
/*                                  <p>{{ text_register_account }}</p>*/
/*                                  <a href="{{ register }}" class="btn btn-primary">{{ button_continue }}</a>*/
/*                               </div>*/
/*                            </div>*/
/*                            <div class="col-sm-6">*/
/*                               <div class="well">*/
/*                                  <h2>{{ text_returning_customer }}</h2>*/
/*                                  <p><strong>{{ text_i_am_returning_customer }}</strong></p>*/
/*                                  <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*                                     <div class="form-group">*/
/*                                        <label class="control-label" for="input-email">{{ entry_email }}</label>*/
/*                                        <input type="text" name="email" value="{{ email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                        <label class="control-label" for="input-password">{{ entry_password }}</label>*/
/*                                        <input type="password" name="password" value="{{ password }}" placeholder="{{ entry_password }}" id="input-password" class="form-control" />*/
/*                                        <a href="{{ forgotten }}">{{ text_forgotten }}</a>*/
/*                                     </div>*/
/*                                     <input type="submit" value="{{ button_login }}" class="btn btn-primary" />*/
/*                                     {% if redirect %}*/
/*                                     <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/*                                     {% endif %}*/
/*                                  </form>*/
/*                               </div>*/
/*                            </div>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                      </div>*/
/*                   </div>*/
/*                </div>*/
/*             </div>*/
