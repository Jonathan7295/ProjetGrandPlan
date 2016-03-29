<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_2f0a809987bfd9ed19d909c08185b9685cf32bde3f6f1eee8fd7dfaceaf8f2cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a93e36a2b02c7baf5112d92f2e670876482442bf4deb1b3ed32b1546cb151d7 = $this->env->getExtension("native_profiler");
        $__internal_7a93e36a2b02c7baf5112d92f2e670876482442bf4deb1b3ed32b1546cb151d7->enter($__internal_7a93e36a2b02c7baf5112d92f2e670876482442bf4deb1b3ed32b1546cb151d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a93e36a2b02c7baf5112d92f2e670876482442bf4deb1b3ed32b1546cb151d7->leave($__internal_7a93e36a2b02c7baf5112d92f2e670876482442bf4deb1b3ed32b1546cb151d7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dbb789b42da53b07c4324c7a2f0bb2d995f4e2269babfa9f21c7f8590be72f17 = $this->env->getExtension("native_profiler");
        $__internal_dbb789b42da53b07c4324c7a2f0bb2d995f4e2269babfa9f21c7f8590be72f17->enter($__internal_dbb789b42da53b07c4324c7a2f0bb2d995f4e2269babfa9f21c7f8590be72f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "\t";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "\t\t<div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "    ";
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 12
        echo "\t<div class=\"login\">
\t\t<header class=\"login-header\"><span class=\"text\">LOGIN</span><span class=\"loader\"></span></header>
\t\t<form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

\t\t    <input type=\"text\" id=\"username\" placeholder=\"Username\" class=\"login-input\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

\t\t    <input type=\"password\" placeholder=\"Password\" id=\"password\" class=\"login-input\" name=\"_password\" required=\"required\" />
\t\t    
\t\t    <input type=\"submit\" id=\"_submit\" class=\"login-btn\" name=\"_submit\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t</form>
\t</div>

\t";
        // line 25
        $this->displayBlock('javascript', $context, $blocks);
        // line 34
        echo "
      ";
        // line 35
        echo "<script type=\"text/javascript\">loading();</script>";
        echo "
    
";
        
        $__internal_dbb789b42da53b07c4324c7a2f0bb2d995f4e2269babfa9f21c7f8590be72f17->leave($__internal_dbb789b42da53b07c4324c7a2f0bb2d995f4e2269babfa9f21c7f8590be72f17_prof);

    }

    // line 9
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_ff727d33bd1a5b6e4e0c64fa01bcfa0a215cddb09f6e2f8f6f92c0ba9b275072 = $this->env->getExtension("native_profiler");
        $__internal_ff727d33bd1a5b6e4e0c64fa01bcfa0a215cddb09f6e2f8f6f92c0ba9b275072->enter($__internal_ff727d33bd1a5b6e4e0c64fa01bcfa0a215cddb09f6e2f8f6f92c0ba9b275072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 10
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t";
        
        $__internal_ff727d33bd1a5b6e4e0c64fa01bcfa0a215cddb09f6e2f8f6f92c0ba9b275072->leave($__internal_ff727d33bd1a5b6e4e0c64fa01bcfa0a215cddb09f6e2f8f6f92c0ba9b275072_prof);

    }

    // line 25
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_14621d48dc3f2a9c460fbeb30797bb0a644bba625602ee62e03bafb75df5c5da = $this->env->getExtension("native_profiler");
        $__internal_14621d48dc3f2a9c460fbeb30797bb0a644bba625602ee62e03bafb75df5c5da->enter($__internal_14621d48dc3f2a9c460fbeb30797bb0a644bba625602ee62e03bafb75df5c5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 26
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bsa.js"), "html", null, true);
        echo "\"></script> 
\t\t<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script> 
\t    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\" type=\"text/javascript\"></script>
\t    <script type=\"text/javascript\">

\t\t</script>

\t";
        
        $__internal_14621d48dc3f2a9c460fbeb30797bb0a644bba625602ee62e03bafb75df5c5da->leave($__internal_14621d48dc3f2a9c460fbeb30797bb0a644bba625602ee62e03bafb75df5c5da_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 27,  118 => 26,  112 => 25,  102 => 10,  96 => 9,  86 => 35,  83 => 34,  81 => 25,  74 => 21,  67 => 17,  62 => 15,  58 => 14,  54 => 12,  51 => 9,  45 => 7,  42 => 6,  36 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content  %}*/
/* 	{% if error %}*/
/* 		<div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/*     {% block stylesheet %}*/
/* 		<link rel="stylesheet" href="{{  asset ( 'css/style.css' )  }}" type="text/css" />*/
/* 	{% endblock %}*/
/* 	<div class="login">*/
/* 		<header class="login-header"><span class="text">LOGIN</span><span class="loader"></span></header>*/
/* 		<form action="{{ path("fos_user_security_check") }}" method="post">*/
/* 		    <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/* 		    <input type="text" id="username" placeholder="Username" class="login-input" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/* 		    <input type="password" placeholder="Password" id="password" class="login-input" name="_password" required="required" />*/
/* 		    */
/* 		    <input type="submit" id="_submit" class="login-btn" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/* 		</form>*/
/* 	</div>*/
/* */
/* 	{% block javascript %}*/
/* 		<script src="{{ asset('js/bsa.js') }}"></script> */
/* 		<script src="{{ asset('js/script.js') }}"></script> */
/* 	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>*/
/* 	    <script type="text/javascript">*/
/* */
/* 		</script>*/
/* */
/* 	{% endblock %}*/
/* */
/*       {{ '<script type="text/javascript">loading();</script>' }}*/
/*     */
/* {% endblock fos_user_content %}*/
