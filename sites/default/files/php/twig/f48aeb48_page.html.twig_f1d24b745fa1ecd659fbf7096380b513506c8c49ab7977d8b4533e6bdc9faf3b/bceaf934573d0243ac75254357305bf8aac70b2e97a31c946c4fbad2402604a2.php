<?php

/* themes/meutema/templates/page.html.twig */
class __TwigTemplate_c6c4ba5221ddd4887249eb2b1379b156d67aa6668140b82bfbb619c0dbb2b514 extends Twig_Template
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
        $tags = array("if" => 63);
        $filters = array("t" => 229);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 61
        echo "<!----Header start --->

";
        // line 63
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 64
            echo "  <div class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
\t";
            // line 72
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 77
        echo "<!---Header End --->

<!--- Banner start ---->

";
        // line 81
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner", array())) {
            // line 82
            echo "  <div id=\"headerwrap\">
    <div class=\"container\">
      <div class=\"banner-text-block\">
        ";
            // line 85
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner", array()), "html", null, true));
            echo "
      </div>
    </div>
  </div> <!-- /headerwrap -->
";
        }
        // line 90
        echo "
<!--- End Banner --->
<!-- Yellow Wrap -->
";
        // line 93
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom_third", array()))) {
            // line 94
            echo "  <div id=\"db\">
    <div class=\"container\">
      <div class=\"row centered\">
        ";
            // line 97
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom_first", array())) {
                // line 98
                echo "          <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["banner_bottom_class"]) ? $context["banner_bottom_class"] : null), "html", null, true));
                echo "\">
            ";
                // line 99
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom_first", array()), "html", null, true));
                echo "
          </div><!-- /col-lg-4 -->
        ";
            }
            // line 102
            echo "
        ";
            // line 103
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom_second", array())) {
                // line 104
                echo "          <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["banner_bottom_class"]) ? $context["banner_bottom_class"] : null), "html", null, true));
                echo "\">
            ";
                // line 105
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom_second", array()), "html", null, true));
                echo "

          </div><!-- /col-lg-4 -->
        ";
            }
            // line 109
            echo "
        ";
            // line 110
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom_third", array())) {
                // line 111
                echo "          <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["banner_bottom_class"]) ? $context["banner_bottom_class"] : null), "html", null, true));
                echo "\">
            ";
                // line 112
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom_third", array()), "html", null, true));
                echo "
          </div><!-- /col-lg-4 -->
        ";
            }
            // line 115
            echo "      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /yellow wrap -->
";
        }
        // line 119
        echo "

<!-- Dark Blue Wrap / Highlighted -->

";
        // line 123
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 124
            echo "  <div id=\"y\">
    <div class=\"container centered\">
      ";
            // line 126
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
    </div><!-- /container -->
  </div><!-- /Dark Blue wrap -->

";
        }
        // line 131
        echo "
<div class=\"content\">
  <div class=\"container\">
    ";
        // line 134
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 135
            echo "      <div class=";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarfirst"]) ? $context["sidebarfirst"] : null), "html", null, true));
            echo " >
\t<!-- Sidebar 2 -->
\t<div class=\"sidebar\">
\t  ";
            // line 138
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
\t</div>
      </div>
    ";
        }
        // line 142
        echo "    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 143
            echo "      <div class=";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["contentlayout"]) ? $context["contentlayout"] : null), "html", null, true));
            echo ">
\t";
            // line 144
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
            echo "
        ";
            // line 146
            echo "\t";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "

      </div>
    ";
        }
        // line 150
        echo "    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 151
            echo "      <div class=";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarsecond"]) ? $context["sidebarsecond"] : null), "html", null, true));
            echo ">
\t<!-- Sidebar 1 -->
\t<div class=\"sidebar\">
\t  ";
            // line 154
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
\t</div>
      </div>
    ";
        }
        // line 158
        echo "  </div>
</div>

<div class=\"clearfix\"></div>

";
        // line 163
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_highlighted", array())) {
            // line 164
            echo "  <div id=\"db\">
    <div class=\"container centered\">
      ";
            // line 166
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_highlighted", array()), "html", null, true));
            echo "
    </div><!-- /container -->
  </div><!-- /Dark Blue wrap -->

";
        }
        // line 171
        echo "
  <!--Page Bottom highlight Yellow Wrap / Intro Text -->

";
        // line 174
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_bottom_highlighted", array())) {
            // line 175
            echo "  <div id=\"y\">
    <div class=\"container\">
      <div class=\"col-lg-12 centered\">
        ";
            // line 178
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_bottom_highlighted", array()), "html", null, true));
            echo "
      </div>
    </div><!-- /container -->
  </div><!-- /yellow wrap -->
";
        }
        // line 183
        echo "
<!--End Page Bottom Highlight ---->


<!-- White Wrap Version 2 - footer top region-->
";
        // line 188
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top", array())) {
            // line 189
            echo "  <div id=\"w2\">
    <div class=\"container\">
      <div class=\"row centered\">
        ";
            // line 192
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top", array()), "html", null, true));
            echo "
      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /White Wrap Ver.2 - Social Icons -->

";
        }
        // line 198
        echo "
<!-- Footer Wrap -->
";
        // line 200
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()))) {
            // line 201
            echo "  <div id=\"f\">
    <div class=\"container\">
      <div class=\"row\">
        ";
            // line 204
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 205
                echo "          <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
                echo "\">
            ";
                // line 206
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 209
            echo "        ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
                // line 210
                echo "          <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
                echo "\">
            ";
                // line 211
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 214
            echo "        ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
                // line 215
                echo "          <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
                echo "\">
            ";
                // line 216
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 219
            echo "      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /Footer wrap -->
";
        }
        // line 223
        echo "

<div id=\"c\">
  <div class=\"container\">
    <div class=\"col-md-8\">
      <div class=\"pull-left powered-by-block\">
\t<p>";
        // line 229
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Construção de Sites by Drupal")));
        echo "</p>
      </div>
    </div>
    <div class=\"col-md-4\">
      ";
        // line 233
        if ((isset($context["show_social_icons"]) ? $context["show_social_icons"] : null)) {
            // line 234
            echo "\t<div class=\"pull-right social-icons\">
\t  <a href=\"";
            // line 235
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["facebook"]) ? $context["facebook"] : null), "html", null, true));
            echo "\"><i class=\"icon-facebook\"></i></a>
\t  <a href=\"";
            // line 236
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["google"]) ? $context["google"] : null), "html", null, true));
            echo "\"><i class=\"icon-google-plus\"></i></a>
\t</div>
      ";
        }
        // line 239
        echo "    </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/meutema/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 239,  376 => 236,  372 => 235,  369 => 234,  367 => 233,  360 => 229,  352 => 223,  346 => 219,  340 => 216,  335 => 215,  332 => 214,  326 => 211,  321 => 210,  318 => 209,  312 => 206,  307 => 205,  305 => 204,  300 => 201,  298 => 200,  294 => 198,  285 => 192,  280 => 189,  278 => 188,  271 => 183,  263 => 178,  258 => 175,  256 => 174,  251 => 171,  243 => 166,  239 => 164,  237 => 163,  230 => 158,  223 => 154,  216 => 151,  213 => 150,  205 => 146,  201 => 144,  196 => 143,  193 => 142,  186 => 138,  179 => 135,  177 => 134,  172 => 131,  164 => 126,  160 => 124,  158 => 123,  152 => 119,  146 => 115,  140 => 112,  135 => 111,  133 => 110,  130 => 109,  123 => 105,  118 => 104,  116 => 103,  113 => 102,  107 => 99,  102 => 98,  100 => 97,  95 => 94,  93 => 93,  88 => 90,  80 => 85,  75 => 82,  73 => 81,  67 => 77,  59 => 72,  49 => 64,  47 => 63,  43 => 61,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  * - logo: The url of the logo image, as defined in theme settings.*/
/*  * - site_name: The name of the site. This is empty when displaying the site*/
/*  *   name has been disabled in the theme settings.*/
/*  * - site_slogan: The slogan of the site. This is empty when displaying the site*/
/*  *   slogan has been disabled in theme settings.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.navigation: Items for the Navigation region.*/
/*  * - page.banner: Items for the banner region.*/
/*  * - page.page_title: Used by Current page Title.*/
/*  * - page.banner_bottom_first: Items For Banner bottom First Region.*/
/*  * - page.banner_bottom_second: Items For Banner bottom Second Region.*/
/*  * - page.banner_bottom_first: Items For Banner bottom Third Region.*/
/*  * - page.highlighted: Items for the highlighted top  region.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.content_highlighted: Items for the highlighted in content region.*/
/*  * - page.page_bottom_highlighted: Items for the highlighted in bottom region.*/
/*  * - page.footer_top: Items for the footer top region.*/
/*  * - page.footer_first: Items for the footer first region.*/
/*  * - page.footer_second: Items for the footer Second region.*/
/*  * - page.footer_third: Items for the footer third region.*/
/*  * - page.footer_bottom: Items for the footer bottom region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <!----Header start --->*/
/* */
/* {% if page.header %}*/
/*   <div class="navbar navbar-default navbar-fixed-top">*/
/*     <div class="container">*/
/*       <div class="navbar-header">*/
/*         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*           <span class="icon-bar"></span>*/
/*           <span class="icon-bar"></span>*/
/*           <span class="icon-bar"></span>*/
/*         </button>*/
/* 	{{ page.header }}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* <!---Header End --->*/
/* */
/* <!--- Banner start ---->*/
/* */
/* {%  if page.banner %}*/
/*   <div id="headerwrap">*/
/*     <div class="container">*/
/*       <div class="banner-text-block">*/
/*         {{ page.banner }}*/
/*       </div>*/
/*     </div>*/
/*   </div> <!-- /headerwrap -->*/
/* {% endif %}*/
/* */
/* <!--- End Banner --->*/
/* <!-- Yellow Wrap -->*/
/* {% if page.banner_bottom_first or page.banner_bottom_second or page.banner_bottom_third %}*/
/*   <div id="db">*/
/*     <div class="container">*/
/*       <div class="row centered">*/
/*         {% if page.banner_bottom_first %}*/
/*           <div class="{{ banner_bottom_class }}">*/
/*             {{ page.banner_bottom_first }}*/
/*           </div><!-- /col-lg-4 -->*/
/*         {% endif %}*/
/* */
/*         {% if page.banner_bottom_second %}*/
/*           <div class="{{ banner_bottom_class }}">*/
/*             {{ page.banner_bottom_second }}*/
/* */
/*           </div><!-- /col-lg-4 -->*/
/*         {% endif %}*/
/* */
/*         {% if page.banner_bottom_third %}*/
/*           <div class="{{ banner_bottom_class }}">*/
/*             {{ page.banner_bottom_third }}*/
/*           </div><!-- /col-lg-4 -->*/
/*         {% endif %}*/
/*       </div><!-- /row -->*/
/*     </div><!-- /container -->*/
/*   </div><!-- /yellow wrap -->*/
/* {% endif  %}*/
/* */
/* */
/* <!-- Dark Blue Wrap / Highlighted -->*/
/* */
/* {% if page.highlighted %}*/
/*   <div id="y">*/
/*     <div class="container centered">*/
/*       {{ page.highlighted }}*/
/*     </div><!-- /container -->*/
/*   </div><!-- /Dark Blue wrap -->*/
/* */
/* {% endif  %}*/
/* */
/* <div class="content">*/
/*   <div class="container">*/
/*     {% if page.sidebar_first %}*/
/*       <div class={{ sidebarfirst }} >*/
/* 	<!-- Sidebar 2 -->*/
/* 	<div class="sidebar">*/
/* 	  {{ page.sidebar_first }}*/
/* 	</div>*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if page.content %}*/
/*       <div class={{ contentlayout }}>*/
/* 	{{ page.breadcrumb }}*/
/*         {#<div class="modelo">Modelos</div>#}*/
/* 	{{ page.content }}*/
/* */
/*       </div>*/
/*     {% endif %}*/
/*     {% if page.sidebar_second %}*/
/*       <div class={{ sidebarsecond }}>*/
/* 	<!-- Sidebar 1 -->*/
/* 	<div class="sidebar">*/
/* 	  {{ page.sidebar_second }}*/
/* 	</div>*/
/*       </div>*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="clearfix"></div>*/
/* */
/* {% if page.content_highlighted %}*/
/*   <div id="db">*/
/*     <div class="container centered">*/
/*       {{ page.content_highlighted }}*/
/*     </div><!-- /container -->*/
/*   </div><!-- /Dark Blue wrap -->*/
/* */
/* {% endif  %}*/
/* */
/*   <!--Page Bottom highlight Yellow Wrap / Intro Text -->*/
/* */
/* {% if page.page_bottom_highlighted %}*/
/*   <div id="y">*/
/*     <div class="container">*/
/*       <div class="col-lg-12 centered">*/
/*         {{ page.page_bottom_highlighted }}*/
/*       </div>*/
/*     </div><!-- /container -->*/
/*   </div><!-- /yellow wrap -->*/
/* {% endif %}*/
/* */
/* <!--End Page Bottom Highlight ---->*/
/* */
/* */
/* <!-- White Wrap Version 2 - footer top region-->*/
/* {% if page.footer_top %}*/
/*   <div id="w2">*/
/*     <div class="container">*/
/*       <div class="row centered">*/
/*         {{ page.footer_top }}*/
/*       </div><!-- /row -->*/
/*     </div><!-- /container -->*/
/*   </div><!-- /White Wrap Ver.2 - Social Icons -->*/
/* */
/* {% endif %}*/
/* */
/* <!-- Footer Wrap -->*/
/* {% if page.footer_first or page.footer_second or page.footer_third %}*/
/*   <div id="f">*/
/*     <div class="container">*/
/*       <div class="row">*/
/*         {% if page.footer_first %}*/
/*           <div class="{{ footer_class }}">*/
/*             {{  page.footer_first }}*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if page.footer_second %}*/
/*           <div class="{{ footer_class }}">*/
/*             {{  page.footer_second }}*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if page.footer_third %}*/
/*           <div class="{{ footer_class }}">*/
/*             {{ page.footer_third }}*/
/*           </div>*/
/*         {% endif %}*/
/*       </div><!-- /row -->*/
/*     </div><!-- /container -->*/
/*   </div><!-- /Footer wrap -->*/
/* {% endif %}*/
/* */
/* */
/* <div id="c">*/
/*   <div class="container">*/
/*     <div class="col-md-8">*/
/*       <div class="pull-left powered-by-block">*/
/* 	<p>{{ 'Construção de Sites by Drupal'|t }}</p>*/
/*       </div>*/
/*     </div>*/
/*     <div class="col-md-4">*/
/*       {% if show_social_icons %}*/
/* 	<div class="pull-right social-icons">*/
/* 	  <a href="{{ facebook }}"><i class="icon-facebook"></i></a>*/
/* 	  <a href="{{ google }}"><i class="icon-google-plus"></i></a>*/
/* 	</div>*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* */
